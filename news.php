<? 
$cat_mapping = array(
    "hoh" => 4,
    "l2r" => 5,
);

$base = "http://www.albanyrowingcenter.org/";
$base .= "wpblog/";
$url = $base . "?feed=rss2";

$cat = $_GET['cat'];
#php is such a joke...
if(array_key_exists($cat, $cat_mapping)){
    $url .= "&cat=" . $cat_mapping[$cat];
}

$doc = new DOMDocument();
$doc->load($url);
$news_feed = array();
foreach ($doc->getElementsByTagName('item') as $node) {
    $itemRSS = array ( 
        'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
        'content' => $node->getElementsByTagName('encoded')->item(0)->nodeValue,
        'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
        'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue
        );
    array_push($news_feed, $itemRSS);
}

$title = "News";
include("header.inc");
?>
<div id="main">
<h1> <?= $title ?> </h1>

<? foreach ($news_feed as $item){ ?>
        <h2><?= $item['title'] ?></h2>
        <small>Posted on <?= $item['date'] ?> </small>
        <?= $item['content'] ?>
<? } ?>

</div>
<? include("footer.inc"); ?>
