<?phpheader("Content-Type: text/html; charset=utf-8");include("../db.php");$q = strtolower($_GET["q"]);if (!$q) return;$sql = "select DISTINCT `company_name`  as `company_name` from `clients` where company_name LIKE '%$q%'";$rsd = mysql_query($sql);while($rs = mysql_fetch_array($rsd)) {	$company = $rs['company_name'];	echo "$company\n";}?>