<style>
body {
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-color: #8B7D7B;
    margin:100;
    padding:100;
}
</style>
<a href="https://ingame.risenrp.de/">zum Start</a>
<font color='DAA520'><form method="post" >
<label for='name' >Menge: </label>
<input type='text' name='menge' id='menge' maxlength="50" placeholder="menge" required />
<label for='name' >Automaten: </label>
<select name="id" required>
  <option value="1">PD</option>
  <option value="2">ACLS</option>
  <option value="3">24/7 Tattoo</option>
  <option value="4">Krankhaus</option>
  <option value="5">Bean Machine</option>
  <option value="6">PDM</option>
  <option value="7">Grove</option>
  <option value="8">24/7 Benny</option>
  <option value="9">24/7 Stadtlager</option>
  <option value="10">24/7 Grand Senora Wüste</option>
  <option value="11">24/7 Sandy Shore</option>
  <option value="12">Tankstelle Paleto</option>
  <option value="13">Tankstelle Öl-Ankäufer</option>
  <option value="14">Unicorn</option>
  <option value="15">Golden Palace</option>
  <option value="16">JVA</option>
  <option value="17">Eagle Rider</option>
  <option value="18">Stadtpark</option>
  <option value="19">Tankstelle Mirror Park</option>
  <option value="20">24/7 Richtung Paleto </option>
</select>
<span class="validity"></span>
<input type="submit" value="Submit"/>
</form></font>
<?php
$time = time() ;
$menge = $_POST["menge"] ;
include "sql.php" ;
$ein = $_POST['id'] ;
$s_auto = ("SELECT * FROM automaten WHERE id = ".$ein."") ;
$r_auto = $db->query($s_auto) ->fetch();
var_dump($r_auto);
$statement = $db->prepare("INSERT INTO ".$r_auto["db"]."(voll,time,menge) VALUES(?,?,?)");
$statement->execute(array("1",date('d/m H:i', $time),$menge));
 ?>
