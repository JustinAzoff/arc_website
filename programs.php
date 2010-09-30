<? 
$title = "Programs";
include("header.inc");
?>
<div id="main">
<h1> Programs and Camps </h1>
        
<h2>Adults</h2>
<p> We offer competitive, intermediate, and recreational programs for
adults of all ages.</p>
<ul>
  <li><a href="adult_competitive.php">Morning Competitive</a> </li>
  <li><a href="adult_evening_program.php">Evening Coached / Intermediate / Recreational</a> </li>
  <li><a href="adult_novice.php">Novice Program</a> </li>
  <li><a href="visiting.php">Visiting Rowers</a> </li>
  <!-- <li><a href="collegiate.php">Collegiate Rowers</a> </li> -->
</ul>

<h2> Juniors </h2>
<p> Young athletes row the Hudson, are instructed in the sport and
develop competitively.</p>
<ul>

    <li><a href="junior_programs.php">Junior Program Overview</a></li>
    <li><a href="junior_programs.php#hs">High School Rowing</a></li>
    <!--<li><a href="modified_rowing.php">Modified Rowing</a></li>-->
    <li><a href="summer_programs.php">Summer Programs</a></li>
</ul>

<h2> Learn to Row </h2>
<p> We offer learn to row programs and camps for both youth and
adults.</p>

<ul>
    <li><a href="adult_learn_to_row.php">Adults</a></li>
    <li><a href="/summer_programs.php">Juniors</a></li>
</ul>

</div>
<div id="sidebar">
<?php insert_slideshow($programs_slideshow); ?>
</div>
<? include("footer.inc"); ?>
