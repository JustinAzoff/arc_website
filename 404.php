<? 
$title = "404 Not Found";
include("header.inc");
?>
<div id="main">
<h1> <?= $title ?> </h1>

<p>
Sorry, the page you have tried to access does not exist.  You can use the menu
at the top to find the page you are looking for.  If you still can't find what
you are looking for, <a href="contact.php">Contact Us</a> and we will be glad
to answer any questions you may have.</p>
</div>
<div id="sidebar">
<img src="/images/404.jpg" alt="404 not found"/>
</div>
<? include("footer.inc"); ?>
