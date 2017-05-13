{macro release($release)}
    <div class="post release">
        <h2 class="title">{$release.title}</h2>
        <p class="meta">Release Date: {$release.date}</p>
        <div class="entry">
            <img style="float:left; margin-right: 20px; margin-bottom: 20px" src="img/release/{$release.coverart}" width="350" height="350" alt="">
            <span>{$release.description}</span>
        </div>
        <div class="clear"></div>
        <div class="player">
            <iframe style="border: 0; width: 700px; height: {$release.bandcamp.height}px;" src="https://bandcamp.com/EmbeddedPlayer/album={$release.bandcamp.id}/size=large/bgcol=333333/linkcol=ffffff/artwork=none/transparent=true/" seamless>
                <a href="{$release.bandcamp.url}">{$release.title} by inVerse</a>
            </iframe>
        </div>
    </div>
{/macro}

{macro release2($release)}
    <div class="post release">
        <h2 class="title">{$release.title}</h2>
        <p class="meta">Release Date: {$release.date}</p>
        <div class="entry">
            <img style="float:left; margin-right: 20px; margin-bottom: 20px" src="img/release/{$release.coverart}" width="350" height="350" alt="">
            <div class="player">
            <iframe style="border: 0; width: 600px; height: {$release.bandcamp.height}px;" src="https://bandcamp.com/EmbeddedPlayer/album={$release.bandcamp.id}/size=large/bgcol=333333/linkcol=ffffff/artwork=none/transparent=true/" seamless>
                <a href="{$release.bandcamp.url}">{$release.title} by inVerse</a>
            </iframe>
            </div>
        </div>
        <div class="clear"></div>
        <span>{$release.description}</span>
    </div>
{/macro}