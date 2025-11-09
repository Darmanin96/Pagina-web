{extends file='page.tpl'}

{block name='page_content'}
  <h1>{$page.title}</h1>
  <div class="homepage-content">
    {block name='homepage_content'}
      {$cms.content nofilter}
    {/block}
  </div>
{/block}