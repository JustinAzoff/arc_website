<?php

$header_images = array(
    "01.jpg" => array("global", "juniors", "sweeping", "eight"),
    "02.jpg" => array(          "adults",  "sweeing", "pair"),
    "03.jpg" => array("global"),
    "04.jpg" => array("global", "adults", "sculling", "quad"),
    "05.jpg" => array("global", "adults", "sweeping"),
    "06.jpg" => array("global", "juniors", "sculling", "single"),
    "07.jpg" => array(          "adults", "erging", "winter"),
    "08.jpg" => array("global", "adults", "sweeping", "eight"),
    "09.jpg" => array("global", "adults"),
    "10.jpg" => array(          "erging", "winter"),
    "11.jpg" => array("global", "juniors", "sweeping", "four"),
    "12.jpg" => array("global", "juniors", "sculling", "double"),
    "13.jpg" => array("global", "juniors", "sweeping", "four"),
);

/* This is kind of a slow way to implement this, instead of storing a mapping
 * of tag -> image, but it keeps the list above simple... My tiny netbook can
 * call this over 20,000 times/sec, so I think it is plenty fast enough.
 */
function images_for_tag($tag="global")
{
    global $header_images;
    $ret=array();
    foreach($header_images as $img => $tags){
        if(in_array($tag, $tags))
            $ret[] = $img;
    }
    return $ret;
}

function random_image_for_tag($tag="global")
{
    $images = images_for_tag($tag);
    return $images[array_rand($images)];
}

?>
