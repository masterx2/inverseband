{import 'macros/music.tpl'}

{block 'content'}
    {foreach $release as $item}
        {macro.release release=$item}
    {/foreach}
{/block}