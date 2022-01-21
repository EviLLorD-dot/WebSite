<?php
$mysqli = false;
function connectDB() {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    global $mysqli;
    $mysqli = new mysqli("localhost", "root", "", "comphistorybase");
    $mysqli->set_charset("utf8");
}
function closeDB() {
    global $mysqli;
    $mysqli->close();
}
function getInfo($limit) {
    global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM `history`");
    closeDB();
    return resultToArray($result);
}
function getline($id){
    global $mysqli;
    connectDB();
    $resultstr = $mysqli->query("SELECT * FROM `history` WHERE `id`=$id");
    closeDB();
    return resulttostring($resultstr);
}
function resultToArray($result) {
    if ($result !== false){
        $array = array ();
    while ($row = $result->fetch_assoc())
        $array[] = $row;
    return $array;
    }
    return $result === true ? true : null;
}
function resulttostring($resultstr) {
    $string='';
    if ($resultstr !== false){
        $string = $resultstr->fetch_assoc();
    return $string;
    }
    return $resultstr === true ? true : null;
}
?>
