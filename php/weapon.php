<?
require_once("include/vLib/vlibTemplate.php");
require_once("include/sql.php");
require_once("include/func.php");

use clausvb\vlib\vlibTemplate as vlibTemplate;

//start the processtime-timer
$starttime=timer();


//add the specified template's config
$TEMPLATE_DIR = getActiveTemplate();
if(checkTemplateConsistency($TEMPLATE_DIR,"config.php"))
{
	require_once("templates/$TEMPLATE_DIR/config.php");
}
else
{
	die(Template_error("The config.php is missing!"));
}

//now start setting the variables for the Template
if(!checkTemplateConsistency($TEMPLATE_DIR,"weapon.html"))
{
		die(Template_error("This page is not templated yet, plz create a 'weapon.html' for the '$TEMPLATE_DIR'-Template!"));
}
$tmpl = new vlibTemplate("templates/$TEMPLATE_DIR/weapon.html");

//set basic Template-Variables
$tmpl->setVar("TITLE",getActiveTitlePrefix()." - Weapons");
$tmpl->setVar("CSS","templates/$TEMPLATE_DIR/include/$TMPL_CFG_CSS");
$tmpl->setVar("IMAGES_DIR","templates/$TEMPLATE_DIR/images/");
$tmpl->setVar("ADMINMODE_LINK","admin/index.php");
$tmpl->setLoop("NAVBAR",getNavBar());

$contextbar = array();
$contextbar = addContextItem($contextbar,getActiveTitlePrefix());
$contextbar = addContextItem($contextbar,"Weapons");
$tmpl->setLoop("CONTEXTBAR",$contextbar);


//now prepare all datasources
$res = SQL_query("select name,datasource_name,id from selectbf_category where type='WEAPON' and collect_data=1");

$datasources = array();
while($cols = $res->fetch_assoc())
{
	$name = $cols["name"];
	$id = $cols["id"];
	$dsname = $cols["datasource_name"]; 
	$data = getDataForWeaponCategory($id);
	
	$tmpl->setVar($dsname."_head",$name);
	$tmpl->setLoop($dsname,$data);
	
	array_push($datasources, array("head"=>$name,"data"=>$data)); 
}

$tmpl->setLoop("datasources",$datasources);

//now finish the processtime timer
$totaltime = timer()- $starttime;
$tmpl->setVar("PROCESSTIME",sprintf ("%01.2f seconds",$totaltime));

@$tmpl->pparse();
?>



