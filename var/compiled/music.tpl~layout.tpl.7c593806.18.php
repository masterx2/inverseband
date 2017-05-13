<?php 
/** Fenom template 'music.tpl' compiled at 2017-05-13 19:38:53 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>inVerse Official Site</title>
    <meta name="keywords" content="Inverse Inverseband Post-Punk Music">
    <meta name="description" content="Inverse Band Official Site">
    <link href='http://fonts.googleapis.com/css?family=Anaheim|Simonetta|Carrois+Gothic|Archivo+Narrow|Iceland'
          rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
</head>
<body>
<div id="logo">
    <a href="/"><img src="img/inVerse_Logo_Black.png" alt="Inverse Logo"></a>
    <p>The official band site</p>
</div>
<div id="menu" class="headmenu">
    <ul>
        <li><a href="/about">About</a></li>
        <li><a href="/photo">Photo</a></li>
        <li><a href="/music">Music</a></li>
        <li><a href="/video">Video</a></li>
        <li><a href="/links">Links</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</div>
<div id="content">

    <?php  if(!empty($var["release"]) && (is_array($var["release"]) || $var["release"] instanceof \Traversable)) {
  foreach($var["release"] as $var["item"]) { ?>
        <?php
/* music.tpl:5: {macro.release2 release=$item} */
 $tfb523814_1 = $var; $var = array("release" => $var["item"]);
?>
    <div class="post release">
        <h2 class="title"><?php
/* macros/music.tpl:20: {$release.title} */
 echo $var["release"]["title"]; ?></h2>
        <p class="meta">Release Date: <?php
/* macros/music.tpl:21: {$release.date} */
 echo $var["release"]["date"]; ?></p>
        <div class="entry">
            <img style="float:left; margin-right: 20px; margin-bottom: 20px" src="img/release/<?php
/* macros/music.tpl:23: {$release.coverart} */
 echo $var["release"]["coverart"]; ?>" width="350" height="350" alt="">
            <div class="player">
            <iframe style="border: 0; width: 600px; height: <?php
/* macros/music.tpl:25: {$release.bandcamp.height} */
 echo $var["release"]["bandcamp"]["height"]; ?>px;" src="https://bandcamp.com/EmbeddedPlayer/album=<?php
/* macros/music.tpl:25: {$release.bandcamp.id} */
 echo $var["release"]["bandcamp"]["id"]; ?>/size=large/bgcol=333333/linkcol=ffffff/artwork=none/transparent=true/" seamless>
                <a href="<?php
/* macros/music.tpl:26: {$release.bandcamp.url} */
 echo $var["release"]["bandcamp"]["url"]; ?>"><?php
/* macros/music.tpl:26: {$release.title} */
 echo $var["release"]["title"]; ?> by inVerse</a>
            </iframe>
            </div>
        </div>
        <div class="clear"></div>
        <span><?php
/* macros/music.tpl:31: {$release.description} */
 echo $var["release"]["description"]; ?></span>
    </div>
<?php
$var = $tfb523814_1; unset($tfb523814_1); ?>
    <?php
/* music.tpl:6: {/foreach} */
   } } ?>

</div>
<div id="footer">
    <p>Copyright © 2005-2017 inVerse. All rights reserved. Design by MasterX2.</p>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter10717024 = new Ya.Metrika({
                    id: 10717024,
                    webvisor: true,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="http://mc.yandex.ru/watch/10717024" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html><?php
}, array(
	'options' => 256,
	'provider' => false,
	'name' => 'music.tpl',
	'base_name' => 'music.tpl',
	'time' => 1494693402,
	'depends' => array (
  0 => 
  array (
    'macros/music.tpl' => 1494693402,
    'music.tpl' => 1494693402,
    'layout.tpl' => 1494693402,
  ),
),
	'macros' => array(
),

        ));
