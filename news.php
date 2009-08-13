<? 
$cat_mapping = array(
    "Head of the Hudson" => 4,
    "Learn to Row" => 5,
);

$base = "http://www.albanyrowingcenter.org/";
$base .= "wpblog/";
$url = $base . "?feed=rss2";

$cat = $_GET['cat'];
#php is such a joke...
if(array_key_exists($cat, $cat_mapping)){
    $url .= "&cat=" . $cat_mapping[$cat];
}

function cat_link($c)
{
    return sprintf('<a href="news.php?cat=%s">%s</a>', $c, $c);
}
function cat_links($cs)
{
    $links = array();
    foreach($cs as $c){
        array_push($links, cat_link($c));
    }
    return join(", ", $links);
}
function get_feed($url)
{
    $doc = new DOMDocument();
    $doc->load($url);
    $news_feed = array();
    foreach ($doc->getElementsByTagName('item') as $node) {

        $categories = array();
        foreach($node->getElementsByTagName('category') as $c)
            array_push($categories, $c->nodeValue);

        $itemRSS = array ( 
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'content' => $node->getElementsByTagName('encoded')->item(0)->nodeValue,
            'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
            'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
            'categories' => $categories
            );
        array_push($news_feed, $itemRSS);
    }
    return $news_feed;
}

$feed = get_feed($url);

$title = "News";
include("header.inc");
?>
<div id="main">
<h1> <?= $title ?> </h1>

<? foreach ($feed as $item){ ?>
        <h2><?= $item['title'] ?></h2>
        <small>Posted on <?= $item['date'] ?> in <?= cat_links($item['categories']) ?> </small>
        <?= $item['content'] ?>
<? } ?>

</div>
<? include("footer.inc"); ?>
