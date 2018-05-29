<?php
include 'sql.php' ;
// Erzeuge ein 100*30 Bild
$im = imagecreate(335, 85);
$ein = $_GET['id'] ;
$s_auto = ("SELECT * FROM automaten WHERE id = ".$ein."") ;
$r_auto = $db->query($s_auto) ->fetch();
// Weißer Hintergrund und blauer Text
$bg = imagecolorallocate($im, 60, 44, 70);
$textcolor = imagecolorallocate($im, 218, 165, 32);
$time = time() ;
$id = $r_auto ['id'] ;
$name = $r_auto ['name'] ;
$preis = '2$' ;

$lastid = ("SELECT MAX(id) FROM ".$r_auto['db']."");
$lastid_r = $db->query($lastid) ->fetch();
$s_rest = ("SELECT * FROM ".$r_auto['db']." WHERE id = ".$lastid_r["0"]." ") ;
$r_rest = $db->query($s_rest) ->fetch();

$füllung = $r_rest["time"] ;
$vorher = $r_rest["durchstd"] ;
// Schreibe die Zeichenkette oben links
imagestring($im, 5, 5, 5,'ID: '.$id, $textcolor);
imagestring($im, 5, 5, 20,'Name: '.$name, $textcolor);
imagestring($im, 5, 5, 35, 'Gewartet am: '.$füllung, $textcolor);
imagestring($im, 5, 5, 50, 'Preis: '.$preis, $textcolor);
#imagestring($im, 5, 5, 65, 'Vorhersage: '.$vorher, $textcolor);


// Gib das Bild aus
header('Content-type: image/png');

imagepng($im);
imagedestroy($im);
?>
