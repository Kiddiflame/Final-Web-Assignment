<?php
if (isset($_POST['Search'])) 
{
  $search_Class = $_POST['Classes'];
  $search_Level = $_POST['Spells'];
  $search_School = $_POST['Schools'];
}
?>

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
<form action="#" method="POST">
<select name="Classes" id="Classes">
<option value="Bard">Bard</option>
<option value ="Cleric">Cleric</option>
<option value="Druid">Druid</option>
<option value ="Paladin">Paladin</option>
<option value ="Ranger">Ranger</option>
<option value="Sorcerer">Sorcerer</option>
<option value ="Warlock">Warlock</option>
<option value="Wizard">Wizard</option>
</select>
</li>
<!--Spell Selection options-->
  <li>
<select name="Spells" id="Level">
<option value="0">Level 0</option>
<option value="1">Level 1</option>
<option value="2">Level 2</option>
<option value="3">Level 3</option>
<option value="4">Level 4</option>
<option value="5">Level 5</option>
<option value="6">Level 6</option>
<option value="7">Level 7</option>
<option value="8">Level 8</option>
<option value="9">Level 9</option>
</select>

  </li>

  <li>
<select name="Schools" id="Schools">
<option value="Abjuration">Abjuration</option>
<option value="Illusion">Illusion</option>
<option value="Conjuration">Conjuration</option>
<option value="Enchantment">Enchantment</option>
<option value="Evocation">Evocation</option>
<option value="Divination">Divination</option>
<option value="Necromancy">Necromancy</option>
<option value="Transmutation">Transmutation</option>
</select>

  </li>



			<input type="submit" name="Search">
		</form>
	</ul>
</div>
<div class="search_text">
<section class="row">
  <?php
$json = file_get_contents('test.json');
$spells = json_decode($json, true);

?>

	
      <input type="submit" name="Search">
    </form>

  </ul>
</div>

<!--<div class="search_text">
<section class="rows">

<div class="row1">
   <div class="block">
  <p>Name</p>
  </div>

  <div class="block">
  <p>Casting time</p>
  </div>

   <div class="block">
   <p>Level</p>
   </div>

    <div class="block">
    <p>Spell School</p>
    </div>
</div>-->
<div class="row2">
 
 <table border="1">  
<tr>
  <th>Spell Name</th>
  <th>Spell Level</th>
  <th>Casting time</th>
  <th>Spell School</th>
  </tr>
 <?php
  $json = file_get_contents('test.json');
  $spell_list = json_decode($json, true);
  if (isset($search_Class) && isset($search_Level) && isset($search_School))
  {
       foreach ($spell_list['Spells'] as $spells) {
      /*if($search_Class == $spell_list['Classes']['class'] && $search_Level == $spell_list['level'] && $search_School == $spell_list['school'])
     {*/
      echo '<tr><td>'.$spells['name'].'</td><td>';
       echo '<tr><td>'.$spells['level'].'</td></tr>';
        echo '<tr><td>'.$spells['casting_time'].'</td></tr>'; 
         echo '<tr><td>'.$spells['school'].'</td></tr>';
    //}
  }
  }
  else
  {
    echo 'vinsamlegast submittaðu search form';
  }

  
 

    ?>
    </table>
</div>
 

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

