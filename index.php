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


  <div class="border"></div>
    <div class="title">
      <div class = "img1"><img src="img/header1.jpg"></div>
      <p>D&D Spellbook Appendix</p>
      <div class = "img2"><img src="img/header2.jpg"></div>
  </div>


  <div class="main_text"><h4>The Spells in D&D 5E fall into several categories and functions, and all the spells have varying effects and uses, the ways the spells are distinct from each other go as follows:</h4>

    <div class="title">Final Assignment</div>
    <div class="main_text"><h3>The Spells in D&D 5E fall into several categories and functions, and all the spells have varying effects and uses, the ways the spells are distinct from each other go as follows:</h3>

    <ul>
	   <li>A large number of spells fall are unique to certain spell casting "classes"</li>
	   <li>All the spells go on a range of level 0-9, becoming more powerful as the levels rise</li>
	   <li>All the spells fall under 8 different schools with different abilities and uses</li>
    </ul>
  </div>

  <div class="search_options">
	 <ol>
    <li>

      <!--Spell caster classes-->
      <form action="" method="POST">
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
<!--School select options-->
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
</ol>

			<input class="search_button" type="submit" name="Search">
		</form>
	
</div>

 <?php
  $json = file_get_contents('test.json');
  $spell_list = json_decode($json, true);
  $Spells = $spell_list['Spells'];

  // $key = 0
  /*foreach ($Spells as $key) {
 
  		$Class_list = $key["Classes"][]['class'];

  /*foreach ($Spells as $key) {
  	if ($key == 'Classes') {
  		$Class_list = $Spells[$key];
  	}
  }*/
  echo "<pre>"; 
  print_r($Spells);
  echo "</pre>";
  if (isset($search_Class) && isset($search_Level) && isset($search_School))
  {
    echo '<div class="row2">
 <table border="1">  
  <tr>
    <th>Spell Name</th>
    <th>Spell Level</th>
    <th>Casting time</th>
    <th>Spell School</th>
  </tr>';
       foreach ($Spells as $entry) {
      /*if($search_Class == $classes && $search_Level == $Spells['level'] && $search_School == $spell_list['school'])
     {*/
     	/*foreach ($Class_list as $key => $value) {
     		
     		if ($value['class'] == $search_Class) {
     			$class_validation = true;
     		}
     	}*/
     	 if($search_Level == $entry['level'] && $search_School == $entry['school'] /*&& isset($class_validation)*/)
     {
      echo '<tr>';
      echo '<td>'.$entry['name'].'</td>';
       echo '<td>'.$entry['level'].'</td>';
        echo '<td>'.$entry['casting_time'].'</td>'; 
         echo '<td>'.$entry['school'].'</td>';
         echo '</tr>';
    }
  }
  }
  else
  {
    echo 'vinsamlegast submittaðu search form';

  }
    ?>
</table>

<div class="info"><p>The spell casting classes in D&D are often referred to in tiers of "full casters", "half casters" and "quarter casters". The strength and diversity of said spell casters depends on what tier they fall into.</p><p>The "full casters" include: Wizards, Sorcerers, Warlocks, Druids and Clerics</p><p>The "half casters" include: Bard, Paladin and Ranger(the quarter casters are only subtypes of non spell casting classes, and thus are not featured)</p></div>


<footer>
 <div class="Contact_Information">
                    <p>
                        &copy;<?php echo date('Y'); ?> Tskola verkefni<br>
                        Kristinn Logi, Thomas Ari Plank<br>
                        kiddiflame@gmail.com<br>
                        555-5555<br>
                    </p>

                        
<div id="share-buttons">
 
    
    <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>
    
  
    <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
    </a>
    
    
    <a href="http://reddit.com/submit?url=https://simplesharebuttons.com&amp;title=Simple Share Buttons" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
    </a>
     
    
    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
    </a>

    </div>
</footer>
</div>
</body>
</html>