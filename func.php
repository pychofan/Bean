<?php
$time = time() ;
$menge = $_POST["menge"] ;
include "sql.php" ;
$ein = $_POST['id'] ;
$s_auto = ("SELECT menge FROM pd") ;
$r_auto = $db->query($s_auto) ->fetch();
var_dump($r_auto);
?>
