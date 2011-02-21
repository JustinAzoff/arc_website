<?php

$all_slideshow = explode(",", "DSC_0322.JPG,DS051007200050.jpg,DSC_5637LO.jpg,IMG_7604.JPG,DS051007200327.jpg,DSC_0598_2.JPG,DSC_5652LO.jpg,IMG_7800.JPG,DS051012204327.jpg,DSC_0704_2.JPG,DSC_5723LO.jpg,States Spring 2009 5.JPG,DS051012204654.jpg,DSC_5629LOblur.jpg,IMG_1260.JPG");

$hoh_slideshow = explode(",", "DS051012204327.jpg,DSC_5652LO.jpg,DS051007200050.jpg,DSC_0322.JPG,DS051007200327.jpg,DSC_5723LO.jpg,DS051012204654.jpg");

$programs_slideshow = explode(",", "DSC_0322.JPG,DSC_0704_2.JPG,IMG_1260.JPG,IMG_7800.JPG");

$winter_slideshow = explode(",", "wt_IMG_9322.JPG,wt_IMG_9274.JPG,wt_IMG_9408.JPG");

$ltr_slideshow = explode(",", "DSC00282.JPG,flag with oars.jpg,Hugh and Dave catch.jpg,LTR8.jpg,Silverskiff 2009.jpg");

function insert_slideshow($show)
{
    $path="/images/slideshow_images/";
    $first_image = $show[0];
    $i = $path . $first_image;

    $images=array();
    /* php 5.1 doesn't have json_encode
    foreach($show as $img){
        $images[]=array('src' => $path . $img);
    }
    $image_js = json_encode($images);
    $image_js = str_replace("\/","/", $image_js); //wtf?
    */
    $image_js="";
    foreach($show as $img){
        $images[] = "{'src': '${path}${img}' }";
    }
    $image_js = "[" . join(", ", $images) . "]";
    echo <<<EOF
    <div class="slideshow" id="slideshow">
    <img src="$i" alt="main slideshow image"/>
    </div>
    <script type="text/javascript">
    $(function(){
        $('#slideshow').crossSlide({
            sleep: 2,
            fade: 1
        }, $image_js );
    });
    </script>

EOF;
}

?>
