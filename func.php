<?php
$time = time() ;
include "sql.php" ;
$s_auto = ALL ("SELECT * FROM pd") ;
$r_auto = $db->query($s_auto) ->fetch();
var_dump($r_auto);
?>
