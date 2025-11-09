<!DOCTYPE html>
<html lang="{$language.iso_code}">
  <head>
    {block name='head'}
      {include file='_partials/head.tpl'}
    {/block}
  </head>

  <body id="{$page.page_name}" class="{$page.body_classes|classnames}">
    {block name='header'}
      {include file='_partials/header.tpl'}
    {/block}

    {block name='main'}
      <div id="wrapper">
        {block name='breadcrumb'}
          {include file='_partials/breadcrumb.tpl'}
        {/block}

        {block name='content_wrapper'}
          <div id="content-wrapper">
            {block name='content'}
              <p>Hello world! This is the main content area.</p>
            {/block}
          </div>
        {/block}
      </div>
    {/block}

    {block name='footer'}
      {include file='_partials/footer.tpl'}
    {/block}

    {block name='javascript_bottom'}
      {include file="_partials/javascript.tpl" javascript=$javascript.bottom}
    {/block}
  </body>
</html>