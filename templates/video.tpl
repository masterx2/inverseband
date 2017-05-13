{import 'macros/video.tpl'}

{block 'content'}
    <div class="post">
        <div class="entry">
            <div id="videos">
                {foreach $video as $id}
                    {macro.youtube id=$id}
                {/foreach}
            </div>
        </div>
    </div>
{/block}