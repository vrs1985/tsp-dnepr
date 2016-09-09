<?php
session_start();
include_once '../register/dbconnect.php';

 include_once '../register/logout.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$sql = "SELECT article, name, description, repository, price, url FROM `grocery`";
$result = mysqli_query($con, $sql);

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"article":"'  . $rs["article"] . '",';
    $outp .= '"url": "'   . $rs["url"]        . '",';
    $outp .= '"name":"'   . $rs["name"]        . '",';
    $outp .= '"description":"'   . $rs["description"]        . '",';
    $outp .= '"repository":' . $rs["repository"] . ',';
    $outp .= '"price":"'. $rs["price"]     . ' "}'; 
}
$outp ='{"records":['.$outp.']}';
$con->close();

echo($outp); 
?>