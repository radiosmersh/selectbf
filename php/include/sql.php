<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
        require("sql_setting.php");
        $conn = new mysqli($SQL_host, $SQL_user, $SQL_password, $SQL_datenbank, 3306);
} 
catch(\mysqli_sql_exception $e) {
        throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
        die(SQL_error("",""));
} 
finally {
        unset($host, $username, $password, $charset, $db);
}

function SQL_query($sql, $params = NULL, $types = "")
{
        global $conn;
        try {
                $stmt = $conn->prepare($sql);
                if ($params)
                {
                        $types = $types ?: str_repeat("s", count($params));
                        $stmt->bind_param($types, ...$params);
                }
                $stmt->execute();
                $res = $stmt->get_result();
                return $res;
        } catch (\mysqli_sql_exception $e) {
                SQL_error($e->getMessage(), $sql);
                return null;
        }
}

function SQL_oneRowQuery($sql, $params = NULL, $types = "")
{
        global $conn;
        try {
                $stmt = $conn->prepare($sql);
                if ($params)
                {
                        $types = $types ?: str_repeat("s", count($params));
                        $stmt->bind_param($types, ...$params);
                }
                $stmt->execute();
                $result = $stmt->get_result();
                return $result->fetch_assoc();
        } catch (\mysqli_sql_exception $e) {
                SQL_error($e->getMessage(), $sql);
                return null;
        }
}


function SQL_error($msg,$sql)
{
	?>
   <html>
   <head>
   <title>select(bf) Error</title>
   <link rel="stylesheet" href="templates/default/include/style.css" type="text/css">
   </head>
   <body>
   <center>
   <table class=navbar width=450>
   <tr class=axis>
    <th><img src="templates/default/images/icon_error.gif" align=absmiddle hspace=2> Database Error</th>
   </tr>
   <tr>
    <td class=admin>
     <b>There was an database-error.</b><br>
     Please report this error in the forums at <a href="http://www.selectbf.org">www.selectbf.org</a> or send mail to <a href="mailto:selectbf@s-h-i-n-y.com">selectbf@s-h-i-n-y.com</a>! <b>Also</b> provide the following information and the <b>page of the stats</b> you were trying to access.<p>
     <u><b>MySQL-Error-Message:</b></u>
     <i><?echo $msg;?></i><br>
     <p>
     <u><b>SQL-Command:</b></u>
     <i><?echo $sql;?></i>
     <p>
    </td>
   </tr>
  </table>
  </center>
  </html>
	<?
}

function SQL_resetResult($ResultSet)
{
	@mysqli_data_seek($ResultSet,0); 
}

?>
