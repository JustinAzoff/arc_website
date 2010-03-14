<?
require_once("images.inc");
?>

<? foreach($header_images as $img => $tags){ ?>

<h2><?=$img?></h2>
tags: <?= implode(", ", array_values($tags)) ?> <br/>

<img src="/header_images/<?=$img?>" />


<? } ?>
