<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>inVerse Official Site</title>
    <meta name="keywords" content="Inverse Inverseband Post-Punk Music">
    <meta name="description" content="Inverse Band Official Site">
    <link href='http://fonts.googleapis.com/css?family=Anaheim|Simonetta|Carrois+Gothic|Archivo+Narrow|Iceland'
          rel='stylesheet' type='text/css'>
    <link href="css/style.css?v4" rel="stylesheet" type="text/css">
    {block 'scripts'}{/block}
</head>
<body{if $.server.REQUEST_URI === '/'} style="overflow: hidden"{/if}>
<div id="logo">
    <a class href="/"><img src="img/inVerse_Logo_Black.png" alt="Inverse Logo"></a>
    <p>The official band site</p>
</div>
<div id="menu" class="headmenu">
    <ul>
        <li><a href="/about">About</a></li>
        <li><a href="/photo">Photo</a></li>
        <li><a href="/music">Music</a></li>
        <li><a href="/video">Video</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</div>
<div id="content">
{block 'content'}
    Nothing here =(
{/block}
</div>
<div id="footer">
    <p>Copyright © 2005-2017 inVerse. All rights reserved. Coded by MasterX2.</p>
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
</html>