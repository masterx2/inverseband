<?php 
/** Fenom template 'contact.tpl' compiled at 2017-05-13 19:38:51 */
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
            <p>All your questions and offers send to: <a href="mailto:inversespb@gmail.com">inversespb@gmail.com</a></p>
        </div>
    </div>

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
	'name' => 'contact.tpl',
	'base_name' => 'contact.tpl',
	'time' => 1494693402,
	'depends' => array (
  0 => 
  array (
    'contact.tpl' => 1494693402,
    'layout.tpl' => 1494693402,
  ),
),
	'macros' => array(),

        ));
