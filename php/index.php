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

//read the base parameters
$start = "";

if (isset($_REQUEST["start"])){
    @$start = $_REQUEST["start"];
}

$orderby = "";
if (isset($_REQUEST["orderby"])){
    @$orderby = $_REQUEST["orderby"];
}

$direction = "";

if (isset($_REQUEST["direction"])){
    @$direction = $_REQUEST["direction"];
}

$startgames = "";

if (isset($_REQUEST["startgames"])){
    @$startgames = $_REQUEST["startgames"];
}

if($start == "")
{
	$start = "0";
}

if($orderby == "")
{
	$orderby = getRankingOrderByColumn();
}
if($direction == "")
{
	$direction = "desc";
}
if($startgames == "")
{
	$startgames = 0;
}

//now start setting the variables for the Template
if(!checkTemplateConsistency($TEMPLATE_DIR,"index.html"))
{
		die(Template_error("This page is not templated yet, plz create a 'index.html' for the '$TEMPLATE_DIR'-Template!"));
}
$tmpl = new vlibTemplate("templates/$TEMPLATE_DIR/index.html");

//set basic Template-Variables
$tmpl->setVar("TITLE",getActiveTitlePrefix()." - Player Ranking");
$tmpl->setVar("CSS","templates/$TEMPLATE_DIR/include/$TMPL_CFG_CSS");
$tmpl->setVar("IMAGES_DIR","templates/$TEMPLATE_DIR/images/");
$tmpl->setVar("ADMINMODE_LINK","admin/index.php");
$tmpl->setLoop("NAVBAR",getNavBar());

$contextbar = array();
$contextbar = addContextItem($contextbar,getActiveTitlePrefix());
$contextbar = addLinkedContextItem($contextbar,"index.php","Players");
$tmpl->setLoop("CONTEXTBAR",$contextbar);


//now set Index-specific Variables

//first the linking-information for the different collumns
$tmpl->setVar("score_link",getLinkForIndexColumn("score",$orderby,$direction));
$tmpl->setVar("points_link",getLinkForIndexColumn("points",$orderby,$direction));
$tmpl->setVar("avgscore_link",getLinkForIndexColumn("avgscore",$orderby,$direction));
$tmpl->setVar("kills_link",getLinkForIndexColumn("kills",$orderby,$direction));
$tmpl->setVar("deaths_link",getLinkForIndexColumn("deaths",$orderby,$direction));
$tmpl->setVar("kdrate_link",getLinkForIndexColumn("kdrate",$orderby,$direction));
$tmpl->setVar("first_link",getLinkForIndexColumn("first",$orderby,$direction));
$tmpl->setVar("second_link",getLinkForIndexColumn("second",$orderby,$direction));
$tmpl->setVar("third_link",getLinkForIndexColumn("third",$orderby,$direction));
$tmpl->setVar("tks_link",getLinkForIndexColumn("tks",$orderby,$direction));
$tmpl->setVar("attacks_link",getLinkForIndexColumn("attacks",$orderby,$direction));
$tmpl->setVar("captures_link",getLinkForIndexColumn("captures",$orderby,$direction));
$tmpl->setVar("objectives_link",getLinkForIndexColumn("objectives",$orderby,$direction));
$tmpl->setVar("rounds_link",getLinkForIndexColumn("rounds",$orderby,$direction));
$tmpl->setVar("heals_link",getLinkForIndexColumn("heals",$orderby,$direction));
$tmpl->setVar("repairs_link",getLinkForIndexColumn("otherrepairs",$orderby,$direction));

if($direction=="desc") $direction_bool = true; else $direction_bool = false;
if($orderby=="points") $points_bool = true; else $points_bool = false;
if($orderby=="avgscore") $avgscore_bool = true; else $avgscore_bool = false;
if($orderby=="score") $score_bool = true; else $score_bool = false;
if($orderby=="kills") $kills_bool = true; else $kills_bool = false;
if($orderby=="deaths") $deaths_bool = true; else $deaths_bool = false;
if($orderby=="kdrate") $kdrate_bool = true; else $kdrate_bool = false;
if($orderby=="first") $first_bool = true; else $first_bool = false;
if($orderby=="second") $second_bool = true; else $second_bool = false;
if($orderby=="third") $third_bool = true; else $third_bool = false;
if($orderby=="tks") $tks_bool = true; else $tks_bool = false;
if($orderby=="attacks") $attacks_bool = true; else $attacks_bool = false;
if($orderby=="captures") $captures_bool = true; else $captures_bool = false;
if($orderby=="objectives") $objectives_bool = true; else $objectives_bool = false;
if($orderby=="rounds") $rounds_bool = true; else $rounds_bool = false;
if($orderby=="heals") $heals_bool = true; else $heals_bool = false;
if($orderby=="otherrepairs") $repairs_bool = true; else $repairs_bool = false;

$tmpl->setVar("desc", $direction_bool);
$tmpl->setVar("points_order", $points_bool);
$tmpl->setVar("avgscore_order", $avgscore_bool);
$tmpl->setVar("score_order", $score_bool);
$tmpl->setVar("kills_order", $kills_bool);
$tmpl->setVar("deaths_order", $deaths_bool);
$tmpl->setVar("kdrate_order", $kdrate_bool);
$tmpl->setVar("first_order", $first_bool);
$tmpl->setVar("second_order", $second_bool);
$tmpl->setVar("third_order", $third_bool);
$tmpl->setVar("tks_order", $tks_bool);
$tmpl->setVar("attacks_order", $attacks_bool);
$tmpl->setVar("captures_order", $captures_bool);
$tmpl->setVar("objectives_order", $objectives_bool);
$tmpl->setVar("rounds_order", $rounds_bool);
$tmpl->setVar("heals_order", $heals_bool);
$tmpl->setVar("repairs_order", $repairs_bool);

//the ranking information
$res = getRanking($orderby,$direction,$start);
$tmpl->setLoop("ranking",$res);

//the Ranking-navbar information
$minrounds = getActiveMinRoundsValue();
$res = SQL_query("select player_id, count(*) rounds from selectbf_playerstats group by player_id having rounds >= ? order by rounds desc", [$minrounds]);
$totalplayercount = mysqli_num_rows($res);

$res = getRankingNavBar($totalplayercount,$start,$orderby,$direction);
$tmpl->setLoop("navbarinforank",$res);
$numranking = $_SESSION["LIST-RANKING-PLAYER"];	

if($start==0) 
{
	$tmpl->setVar("RankPreviousButtonLink","");	
} 
else 
{
	$buf = $start-$numranking;
	$tmpl->setVar("RankPreviousButtonLink","index.php?orderby=$orderby&start=$buf&direction=$direction");	
}

if($start+$numranking<$totalplayercount) 
{
	$buf = $start+$numranking;	
	$tmpl->setVar("RankNextButtonLink","index.php?orderby=$orderby&start=$buf&direction=$direction");	
} 

//"Last-games" tab
$tmpl->setLoop("games",getLastGames($startgames));
	
$Ergebnisse = SQL_oneRowQuery("select count(distinct(r.id)) count from selectbf_games g, selectbf_rounds r, selectbf_playerstats p where g.id = r.game_id and r.id = p.round_id");
$totalgamecount = $Ergebnisse["count"];

$res = getLastGamesNavBar($totalgamecount,$startgames);
$tmpl->setLoop("navbarinfogames",$res);
$numgames = $_SESSION["LIST-RANKING-GAMES"];
if($startgames==0) 
{
   	$tmpl->setVar("GamePreviousButtonLink","");	
} 
else 
{
   	$buf = $startgames-$numgames;
	$tmpl->setVar("GamePreviousButtonLink","index.php?startgames=$buf");	
}
   
if($startgames+$numgames<$totalgamecount) 
{
   	$buf = $startgames+$numgames;	
	$tmpl->setVar("GameNextButtonLink","index.php?startgames=$buf");	
} 
else 
{
	$tmpl->setVar("GameNextButtonLink","");	
}	 	


$tmpl->setVar("search_action","search.php");
  
$tmpl->setVar("search_type_players","players");
   
$tmpl->setVar("search_param_searchtype","search");
$tmpl->setVar("search_param_playername","playername");

//now finish the processtime timer
$totaltime = timer()- $starttime;
$tmpl->setVar("PROCESSTIME",sprintf ("%01.2f seconds",$totaltime));

@$tmpl->pparse();
?>



