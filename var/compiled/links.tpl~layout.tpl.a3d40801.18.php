<?php 
/** Fenom template 'links.tpl' compiled at 2017-05-13 19:38:50 */
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

    <div class="post">
        <div class="entry">
            <div id="insp">
                <p>Inspirations</p>
                <ul>
                    <li><a href="http://www.myvitriol.net/">My Vitriol</a></li>
                    <li><a href="http://www.thechameleons.com/">The Chameleons</a></li>
                    <li><a href="http://www.words-on-music.com/foragainst.html">For Against</a></li>
                    <li><a href="http://www.comsatangels.net/">The Comsat Angels</a></li>
                    <li><a href="http://www.lastfm.ru/music/Radio+Berlin">Radio Berlin</a></li>
                    <li><a href="http://www.pry.com/codeine">Codeine</a></li>
                    <li><a href="http://ddt.ru/">DDT</a></li>
                </ul>
            </div>
            <div id="follow">
                <p>Follow us</p>
                <img src="img/links_panel.png" alt="" usemap="#Map">
            </div>
        </div>
    </div>
    <map name="Map" id="Map">
        <area shape="rect" coords="277,59,395,112" href="http://www.lastfm.ru/music/In+Verse" />
        <area shape="rect" coords="310,15,420,40" href="http://www.facebook.com/pages/inVerse/195529150480513" />
        <area shape="rect" coords="13,72,162,100" href="http://vk.com/inverseband" />
        <area shape="poly" coords="189,74,214,65,238,67,251,79,259,93,255,107,237,110,181,109,173,90" href="http://soundcloud.com/inversespb" />
        <area shape="rect" coords="95,14,293,45" href="http://inversemusic.bandcamp.com/" />
        <area shape="rect" coords="410,60,513,109" href="http://www.youtube.com/user/inVerseinVideo" />
    </map>

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
	'name' => 'links.tpl',
	'base_name' => 'links.tpl',
	'time' => 1494693402,
	'depends' => array (
  0 => 
  array (
    'links.tpl' => 1494693402,
    'layout.tpl' => 1494693402,
  ),
),
	'macros' => array(),

        ));
