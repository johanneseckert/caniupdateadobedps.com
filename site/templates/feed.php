<?php 
// defaults
if(!isset($descriptionExcerpt)) $descriptionExcerpt = true; 

// send the right header
header('Content-type: text/xml; charset="utf-8"');

// echo the doctype
echo '<?xml version="1.0" encoding="utf-8"?>';


$articles = $pages->findByUID('dps');

?>
<!-- generator="<?php echo c::get('feed.generator', 'Kirby') ?>" -->

<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:wfw="http://wellformedweb.org/CommentAPI/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:atom="http://www.w3.org/2005/Atom">

  <channel>
    <title><?php echo (isset($title)) ? xml($title) : xml($page->title()) ?></title>
    <link><?php echo xml(url()) ?></link>
    <generator><?php echo c::get('feed.generator', 'Kirby') ?></generator>
    <lastBuildDate><?php echo (isset($modified)) ? date('r', $modified) : date('r', $site->modified()) ?></lastBuildDate>
    <atom:link href="<?php echo xml(thisURL()) ?>" rel="self" type="application/rss+xml" />

    <?php if($page->description() || isset($description)): ?>
    <description><?php echo (isset($description)) ? xml($description) : xml($page->description()) ?></description>
    <?php endif ?>
  
    <?php foreach($articles as $item): ?>
    <?php $modifydate = filemtime("content/dps/dps.txt") ?>
    <item>
      <title><?php echo ($item->rss_update() == "") ? xml($page->title()) : xml($item->rss_update())  ?></title>  
      <link><?php echo xml($site->url()) ?>?s=<?php echo $modifydate ?></link>
      <guid><?php echo xml($site->url()) ?>?s=<?php echo $modifydate ?></guid>
      <pubDate><?php echo ($item->date()) ? date('r', $modifydate) : date('r', $modifydate) ?></pubDate>
<?php
  $desc = "<p>Updated information on the current set of Adobe Digital Publishing Tools from <a href='http://caniupdateadobedps.com'>caniupdateadobedps.com</a>:<br>";
  $desc .= "Current Version: ".$item->dps_sprint()." (released on ".$item->dps_date().")</p>";
  if ($item->alert() != "")
  	$desc .= "<p><b>Alert: </b>".$item->alert()."</p>";
  $desc .= "<h2>Status: ".$item->status."</h2>";
  if ($item->rss_update() != "")
  $desc .= "<h3>What changed: ".$item->rss_update."</h3>";
  
  $desc .= "<p>";
  $desc .= "<b>Folio Builder Panel:</b> ".$item->panel_status()."<br />";
  $desc .= "<b>Folio Producer Tools:</b> ".$item->producer_status()."<br />";
  $desc .= "<b>Viewer Builder:</b> ".$item->viewerbuilder_status()."<br />";
  $desc .= "<b>Adobe Content Viewer:</b> ".$item->viewer_status();
  $desc .= "</p>";

  $desc .= "<p>For details and more info, check <a href='http://caniupdateadobedps.com'>caniupdateadobedps.com</a>.</p>";
  $desc .= "<p><em>&mdash;Johannes</p>";
?>
      <description><?php echo htmlentities($desc) ?></description>      

    </item>
    <?php endforeach ?>
        
  </channel>
</rss>