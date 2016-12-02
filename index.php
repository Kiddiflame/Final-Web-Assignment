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
  
    <form action="#" method="POST">
  



			<input type="submit" name="Search">
		</form>
	</ul>
</div>




<div class="row2">
 <table border="1">  
  <tr>
    <th>Spell Name</th>
    <th>Spell Level</th>
    <th>Casting time</th>
    <th>Spell School</th>
  </tr>
  <tr>
    <td>Value</td>
    <td>Value</td>
    <td>Value</td>
    <td>Value</td>
  </tr>
  <tr>
</table>

 <?php

$json = file_get_contents('test.json');
  $spell_list = json_decode($json, true);
  
 
   foreach ($spell_list['Spells'] as $Spells) 
   {
      if($_POST['selected_class'] == $spell_list['classes']['class'] && $_POST['selected_spell'] == $spell_list['level'] && $_POST['selected_school'] == $spell_list['school'])


file_get_contents('test.json');
  $spell_list = json_decode('test.json', true);
  
 
   /*foreach ($spell_list['Spells'] as $Spells) {
      if($_POST['selected_class'] == $spell_list['classes']['class'] && $_POST[selected_spell] == $spell_list['level'] && $_POST['selected_school'] == $spell_list['school'])

     {
      echo '<tr><td>'.$Spells['name'].'</td><td>';
       echo '<tr><td>'.$Spells['level'].'</td></tr>';
        echo '<tr><td>'.$Spells['casting_time'].'</td></tr>'; 
         echo '<tr><td>'.$Spells['school'].'</td></tr>';
    }


    else
    {
      echo "<p>Ekkert sem passaði við leit</p>";
    }

  }*/

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
 

<div class="info"><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p></div>


<footer>
 <div class="Contact_Information">
                    <p>
                        &copy;<?php echo date('Y'); ?> Tskola verkefni<br>
                        Kristinn Logi<br>
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

