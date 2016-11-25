<!DOCTYPE html>
<html>
<head>
	<title>Final Assignment</title>
	<link rel="stylesheet" type="text/css" href="stilsida.css">
</head>
<body>
<div class="title">Final Assignment</div>
<div class="main_text"><h3>The Spells in D&D 5E fall into several categories and functions, and all the spells have varying effects and uses, the ways the spells are distinct from each other go as follows:</h3>
<ul>
	<li>A large number of spells fall are unique to certain spell casting "classes"</li>
	<li>All the spells go on a range of level 0-9, becoming more powerful as the levels rise</li>
	<li>All the spells fall under 8 different schools with different abilities and uses</li>
</ul>
</div>
<div class="search_options">
	<ul>
<li>

<!--Spell caster classes-->

<select name="Classes" id="Classes">
<option value="Bard
<?php
if (!$_POST || $_POST['Classes'] == 'Bard') {
  
  echo 'selected';
}
?>
">Bard</option>
<option value ="Cleric
<?php
if (!$_POST || $_POST['Classes'] == 'Cleric') {
 
  echo 'selected';
}
?>
">Cleric
</option>

<option value="Druid
<?php
if (!$_POST || $_POST['Classes'] == 'Druid') {
 
  echo 'selected';
}
?>
">Druid
</option>
<option value ="Paladin
<?php
if (!$_POST || $_POST['Classes'] == 'Paladin') {
  
  echo 'selected';
}
?>
">Paladin
</option>

<option value ="Ranger
<?php
if (!$_POST || $_POST['Classes'] == 'Ranger') {
  
  echo 'selected';
}
?>
">Ranger
</option>

<option value="Sorcerer
<?php
if (!$_POST || $_POST['Classes'] == 'Sorcerer') {
  
  echo 'selected';
}
?>
">Sorcerer
</option>

<option value ="Warlock
<?php
if (!$_POST || $_POST['Classes'] == 'Warlock') {
 
  echo 'selected';
}

?>
">Warlock
</option>

<option value="Wizard
<?php
if (!$_POST || $_POST['Classes'] == 'Wizard') {
  echo 'selected';
}
?>
">Wizard
</option>


</select>
</li>
<!--Spell Selection options-->
<li>

<select name="Spells" id="Spells">
<option value="0
<?php
if (!$_POST || $_POST['Spells'] == '0') {
  
  echo 'selected';
}
?>
">Level 0</option>
<option value="1
<?php
if (!$_POST || $_POST['Spells'] == '1') {
  
  echo 'selected';
}
?>
">Level 1</option>

<option value="2
<?php
if (!$_POST || $_POST['Spells'] == '2') {
  
  echo 'selected';
}
?>
">Level 2</option>
<option value="3
<?php
if (!$_POST || $_POST['Spells'] == '3') {
  
  echo 'selected';
}
?>
">Level 3</option>

<option value="4
<?php
if (!$_POST || $_POST['Spells'] == '4') {
  
  echo 'selected';
}
?>
">Level 4</option>

<option value="5
<?php
if (!$_POST || $_POST['Spells'] == '5') {
  
  echo 'selected';
}
?>
">Level 5</option>

<option value="6
<?php
if (!$_POST || $_POST['Spells'] == '6') {
  
  echo 'selected';
}
?>
">Level 6</option>

<option value="7
<?php
if (!$_POST || $_POST['Spells'] == '7') {
  
  echo 'selected';
}
?>
">Level 7</option>

<option value="8
<?php
if (!$_POST || $_POST['Spells'] == '8') {
  
  echo 'selected';
}
?>
">Level 8</option>

<option value="9
<?php
if (!$_POST || $_POST['Spells'] == '9') {
  
  echo 'selected';
}
?>
">Level 9</option>

</select>

</li>

<li>

<select name="Schools" id="Schools">
<option value="Abjuration
<?php
if (!$_POST || $_POST['Schools'] == 'Abjuration') {
  
  echo 'selected';
}
?>
">Abjuration</option>
<option value="Illusion
<?php
if (!$_POST || $_POST['Schools'] == 'Illusion') {
  
  echo 'selected';
}
?>
">Illusion</option>

<option value="Conjuration
<?php
if (!$_POST || $_POST['Schools'] == 'Conjuration') {
  
  echo 'selected';
}
?>
">Conjuration</option>
<option value="Enchantment
<?php
if (!$_POST || $_POST['Schools'] == 'Enchantment') {
  
  echo 'selected';
}
?>
">Enchantment</option>

<option value="Evocation
<?php
if (!$_POST || $_POST['Schools'] == 'Evocation') {
  
  echo 'selected';
}
?>
">Evocation</option>

<option value="Divination
<?php
if (!$_POST || $_POST['Schools'] == 'Divination') {
  
  echo 'selected';
}
?>
">Divination</option>

<option value="Necromancy
<?php
if (!$_POST || $_POST['Schools'] == 'Necromancy') {
  
  echo 'selected';
}
?>
">Necromancy</option>

<option value="Transmutation
<?php
if (!$_POST || $_POST['Schools'] == 'Transmutation') {
  
  echo 'selected';
}
?>
">Transmutation</option>



</select>

</li>

		<li>search button</li>
	</ul>
</div>
<div class="search_text">
<section class="row">
  <div class="block"><p>Sed ut persp</p></div>
  <div class="block"><p>blabla</p></div>
   <div class="block"><p>blabla</p></div>
    <div class="block"><p>blabla</p></div>
</section>
	

</div>
<footer>
 <div class="Contact_Information">
                    <p>
                        &copy;<?php echo date('Y'); ?> Tskola verkefni<br>
                        Kristinn Logi<br>
                        kiddiflame@gmail.com<br>
                        555-5555<br>
                    </p>
                </div>
</footer>
</body>
</html>