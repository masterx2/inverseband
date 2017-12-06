<?php
/**
 * Created by PhpStorm.
 * User: masterx2
 * Date: 5/13/17
 * Time: 3:36 PM
 */

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

define('ROOT_DIR', __DIR__ . '/../');
require ROOT_DIR.'vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app['fenom'] = function() {
    return Fenom::factory(ROOT_DIR.'templates', ROOT_DIR.'var/compiled', Fenom::FORCE_COMPILE);
};

$app['db'] = [
    'video' => [
        "PN-AeE-_UeY",
        "sydjIQ0OBV8",
        "wR61L9NdCcA",
        "2_qkdy-4jd4",
        "o-u6VFMFyzk",
        "doFd8cnIOVo",
        "tceuseP6bzo",
        "5sw7591GmDA",
        "4mwrHwtAsrI",
        "usVbBlKKBDE",
        "FdJI0DfmRuE",
        "qE7NUM4aPK4",
        "FDvzJR3V7Gs",
        "cJbi9a-ClZE"
    ],
    'release' => [
        [
            "title" => 'INVERSE / SUUR TÕLL',
            "date" => 'November 2, 2017',
            "coverart" => 'suur_toll.jpg', // image in ~img/release/~
            "description" => '<p>Tracks 01-05 lyrics by Ilya Rybakov, music by INVERSE<br>
    Tracks 06-10 lyrics by Fjodor Krivosheev, music by SUUR TÕLL & MOTRAWANNASLEEP</p>
<br>
<p>Recorded live at Fish Fabrique Nouvelle 29.07.2017 by Vadim Shesterikov, Saint-Petersburg<br>
Sound engineer irokeZZ, special thanks to Olga Hodakovska, mixed and mastered by Vladimir Nosyrev<br>
    Photo by Max Rassokhin, artwork by Fjodor Krivosheev</p>',
            "bandcamp" => [
                "id" => 511191570, // album id
                "url" => 'http://inversemusic.bandcamp.com/album/inverse-suur-t-ll', // full bandcamp album url
                "height" => 350
            ]
        ],
        [
            "title" => 'Shower Room',
            "date" => 'December 30, 2013',
            "coverart" => 'shower_room.jpg', // image in ~img/release/~
            "description" => '<p>"Shower Room" signifies our return from nearly a two-year hiatus. We haven\'t been especially active for quite a while, giving no concerts, making no new songs, doing next to nothing. However, there was one song that deserved to be recorded, and here it is. We didn\'t really mean to break some new ground, but in a way the song is different.</p>',
            "bandcamp" => [
                "id" => 2595430614, // album id
                "url" => 'http://inversemusic.bandcamp.com/album/shower-room', // full bandcamp album url
                "height" => 350
            ]
        ],
        [
            "title" => 'A Record',
            "date" => 'January 28, 2012',
            "coverart" => 'arecord.png', // image in ~img/release/~
            "description" => '<p>A Record took a few people to get it made. Ilya Rybakov wrote and sung all of the words, except for some additional vocals (#03, #05) done by Max Rassokhin, who is also solely responsible for all the electric and acoustic guitars you can hear on the album. The bass lines, riffs and grooves were invented and played by Mike Dolgov. The other half of the rhythm section is represented by Eugene Kulikov, who struck every kind of drums and played other less conventional percussion instruments, too.</p>
					<p># 11 "Enough" takes excerpt from "The Rules of Attraction" (c) by Bret Easton Ellis.</p>
					<p>The music of A Record was composed, arranged and elaborated by the inVerse band members listed above. The album was recorded at the RP-Studio in St. Petersburg by the two guys named Kiryll Pogonichev and Dmitry Rozé. The latter was also involved as the sound engineer and it was him who did the post-production job like mixing and mastering.</p>
					<p>Album artwork and design crafted by Natalia Ponomareva.</p>
					<p>Released in January 2012.</p>',
            "bandcamp" => [
                "id" => 2336715245, // album id
                "url" => 'http://inversemusic.bandcamp.com/album/a-record', // full bandcamp album url
                "height" => 350
            ]
        ],
        [
            "title" => 'Sunk',
            "date" => 'November 5, 2011',
            "coverart" => 'sunk_ep.png', // image in ~img/release/~
            "description" => '<p>Here is our first and only single from the forthcoming full-length, entitled Sunk. There’s nothing peculiar about this song, except two things (which are not quite exceptional either). The first one is that it is the fastest composed song that we did (it was fully written and arranged in some hour and a half over a glass of something, at Mike’s place). And the second is that it is actually our fastest song in terms of tempo. Maybe we’ve decided to pick an untypical track for a single considering that it would attract new people to the rest of our music, or maybe because it’s also one of the poppiest, the most accessible songs that we have. It is now yours to judge.</p>
                    <p>The b-side to the single (as if there were some a-side) is our authentic version of <i>December</i> by <i>For Against</i>, the vocals done by inVerse guitarist, Max.</p>',
            "bandcamp" => [
                "id" => 2359074107, // album id
                "url" => 'http://inversemusic.bandcamp.com/album/sunk', // full bandcamp album url
                "height" => 350
            ]
        ],
        [
            "title" => 'Response EP',
            "date" => 'July 25, 2011',
            "coverart" => 'response_ep.png', // image in ~img/release/~
            "description" => '<p>Hi!</p>
                    <p>We are proudly presenting our first studio record in years - the Response EP.</p>
                    <p>The recording session took place in autumn 2010 at the RP-Studio, St. Petersburg, Russia.</p>
                    <p>We have made this record available for free download in mp3 and flac format so that every creature could easily get it if they want to. The digital version of the Response EP is supposed to be distributed for free so do not try to sell it.</p>
                    <p>Labels and everyone who wishes to help us in any possible way - in promotion or getting signed - please feel free to contact us by e-mail or through the social networks. All who just want to ask or say anything to us directly may do the same.</p>
                    <p>Thanks to everyone who helped/supported us, used to go to see our live performances at those tiny local rock clubs with poor ventilation and cheap beer, and all who did really care to listen to the music our little band have been making all these years.</p>
                    <p>We hope that you will love this record - just like we do..</p>',
            "bandcamp" => [
                "id" => 4211849458, // album id
                "url" => 'http://inversemusic.bandcamp.com/album/response-ep', // full bandcamp album url
                "height" => 350
            ]
        ],
        [
            "title" => 'Zoccolo Live',
            "date" => 'December 1, 2009',
            "coverart" => 'zoccolo_live.png', // image in ~img/release/~
            "description" => '<p>Captured in 2009 in the band\'s heyday, this live recording gives you the right impression of how we sounded those days. Even though there were tens of concerts of this kind we made at St. Petersburg\'s most renowned rock place, Zoccolo Club, this one was different. It had some fifty people present - a great amount for a band gotten used to see empty halls when they play. Imperfect, raw-sounding as it may be, still there is something in it that can\'t be reproduced in a studio. There could be more songs of the set recorded if only someone pushed the REC button at the right time. Check this 3-track mini-album if you care.</p>',
            "bandcamp" => [
                "id" => 2694939787, // album id
                "url" => 'http://inversemusic.bandcamp.com/album/zoccolo-live', // full bandcamp album url
                "height" => 350
            ]
        ]
    ]
];

$app->get('/', function() use($app) {
    /** @var Fenom $fenom */
    $fenom = $app['fenom'];
    return $fenom->fetch(['home.tpl', 'layout.tpl'],[]);
});

$app->get('/{name}', function($name) use($app) {
    /** @var Fenom $fenom */
    $fenom = $app['fenom'];
    $data = [];

    if (!$fenom->templateExists($name.'.tpl')) {
        throw new NotFoundHttpException();
    }

    if ($name == 'video') {
        $data['video'] = $app['db']['video'];
    }

    if ($name == 'music') {
        $data['release'] = $app['db']['release'];
    }

    return $fenom->fetch([$name.'.tpl', 'layout.tpl'], $data);
});

$app->run();