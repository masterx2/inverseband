{import 'macros/music.tpl'}

{block 'content'}
    {foreach $release as $item}
        {macro.release2 release=$item}
    {/foreach}
{/block}