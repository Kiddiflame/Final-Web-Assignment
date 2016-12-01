
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

<p>Final Assignment</p>

<div class = "img2"><img src="img/header2.jpg"></div>

</div>


<div class="main_text"><h4>The Spells in D&D 5E fall into several categories and functions, and all the spells have varying effects and uses, the ways the spells are distinct from each other go as follows:</h4>
<ul>
  <li>A large number of spells fall are unique to certain spell casting "classes"</li>
  <li>All the spells go on a range of level 0-9, becoming more powerful as the levels rise</li>
  <li>All the spells fall under 8 different schools with different abilities and uses</li>
</ul>

<div class="video">

<iframe width="560" height="315" src="https://www.youtube.com/embed/LkFGOaa6tQA" frameborder="0" allowfullscreen></iframe>



</div>

</div>



<div class="search_options">
  <ul>
<li>

<!--Spell caster classes-->

<select name="Classes" id="Classes">
<option value="Bard
selected_class">Bard</option>
<option value ="Cleric
selected_class">Cleric
</option>

<option value="Druid
selected_class">Druid
</option>
<option value ="Paladin
selected_class">Paladin
</option>

<option value ="Ranger
selected_class">Ranger
</option>

<option value="Sorcerer
selected_class">Sorcerer
</option>

<option value ="Warlock
selected_class">Warlock
</option>

<option value="Wizard
selected_class">Wizard
</option>


</select>
</li>
<!--Spell Selection options-->
<li>

<select name="Spells" id="Spells">
<option value="0
selected_spell">Level 0</option>
<option value="1
selected_spell">Level 1</option>

<option value="2
selected_spell">Level 2</option>
<option value="3
selected_spell">Level 3</option>

<option value="4
selected_spell">Level 4</option>

<option value="5
selected_spell">Level 5</option>

<option value="6
selected_spell">Level 6</option>

<option value="7
selected_spell">Level 7</option>

<option value="8
selected_spell">Level 8</option>

<option value="9
selected_spell">Level 9</option>

</select>

</li>

<li>

<select name="Schools" id="Schools">
<option value="Abjuration
selected_school">Abjuration</option>
<option value="Illusion
selected_school">Illusion</option>

<option value="Conjuration
selected_school">Conjuration</option>
<option value="Enchantment
selected_school">Enchantment</option>

<option value="Evocation
selected_school">Evocation</option>

<option value="Divination
selected_school">Divination</option>

<option value="Necromancy
selected_school">Necromancy</option>

<option value="Transmutation
selected_school">Transmutation</option>



</select>

</li>


    <form action="#" method="POST">
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
  
 
   foreach ($spell_list['Spells'] as $Spells) 
   {
      if($_POST['selected_class'] == $spell_list['classes']['class'] && $_POST['selected_spell'] == $spell_list['level'] && $_POST['selected_school'] == $spell_list['school'])
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
  }
  
 

    ?>
    </table>
</div>
 

</section>

</div>
<footer>
 <div class="Contact_Information">
                    <p>
                        &copy;2016 Tskola verkefni<br>
                        Kristinn Logi<br>
                        kiddiflame@gmail.com<br>
                        555-5555<br>
                    </p>
                </div>
</footer>

</body>
</html>

