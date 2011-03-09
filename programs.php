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
  <li><a href="adult_programs.php">Adult Rowing Programs</a> </li>
  <li><a href="adult_learn_to_row.php">Adult Beginners - Learn to Row</a></li>
  <li><a href="adult_programs.php#visiting">Visiting Rowers</a> </li>
  <li><a href="winter_training.php">Winter Training</a></li>
  <!-- <li><a href="collegiate.php">Collegiate Rowers</a> </li> -->
</ul>

<h2> Juniors </h2>
<p> Young athletes row the Hudson, are instructed in the sport and
develop competitively.</p>
<ul>

    <li><a href="winter_training.php">Winter Training</a></li>
    <li><a href="junior_programs.php">Junior Competitive Rowing Programs</a></li>
    <li><a href="junior_programs.php#hs">High School Rowing</a></li>
    <!--<li><a href="modified_rowing.php">Modified Rowing</a></li>-->
    <li><a href="summer_programs.php">Junior Rowing Summer Camp - Learn to Row</a></li>
</ul>

</div>
<div id="sidebar">
<?php insert_slideshow($programs_slideshow); ?>
</div>
<? include("footer.inc"); ?>
