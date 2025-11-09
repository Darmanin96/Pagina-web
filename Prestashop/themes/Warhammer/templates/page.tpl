{extends file='layouts/layout-both-columns.tpl'}

{block name='left_column'}{/block}
{block name='right_column'}{/block}

{block name='content_wrapper'}
  <div id="content-wrapper" class="js-content-wrapper">
    {hook h="displayContentWrapperTop"}
    {block name='content'}
      <p>Default content</p>
    {/block}
    {hook h="displayContentWrapperBottom"}
  </div>
{/block}