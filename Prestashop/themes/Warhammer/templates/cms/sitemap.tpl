{extends file='page.tpl'}

{block name='page_title'}
  {l s='Sitemap' d='Shop.Theme.Global'}
{/block}

{block name='page_content_container'}
  <div id="sitemap-tree" class="sitemap">
    <div class="tree-top">
      <a href="{$urls.base_url}" title="{$shop.name}"></a>
    </div>
    <ul class="tree">
      {foreach $categories as $category}
        {include file='cms/_partials/sitemap-tree-branch.tpl' node=$category}
      {/foreach}
      
      {foreach $manufacturers as $manufacturer}
        {include file='cms/_partials/sitemap-tree-branch.tpl' node=$manufacturer}
      {/foreach}
      
      {foreach $suppliers as $supplier}
        {include file='cms/_partials/sitemap-tree-branch.tpl' node=$supplier}
      {/foreach}

      <li class="sitemap-item">
        <span class="sitemap-title"><a href="{$urls.pages.contact}">{l s='Contact us' d='Shop.Theme.Global'}</a></span>
      </li>

      {foreach $cms_categories as $cms_category}
        {include file='cms/_partials/sitemap-tree-branch.tpl' node=$cms_category}
      {/foreach}

      <li class="sitemap-item">
        <span class="sitemap-title"><a href="{$urls.pages.stores}">{l s='Our stores' d='Shop.Theme.Global'}</a></span>
      </li>

      {if $my_account_urls}
        <li class="sitemap-item">
          <span class="sitemap-title"><a href="{$urls.pages.my_account}">{l s='My account' d='Shop.Theme.Global'}</a></span>
          <ul>
            {foreach $my_account_urls as $my_account_url}
              <li>
                <a href="{$my_account_url.url}">{$my_account_url.title}</a>
              </li>
            {/foreach}
            {if $is_logged}
              <li>
                <a href="{$urls.actions.logout}" rel="nofollow">{l s='Sign out' d='Shop.Theme.Actions'}</a>
              </li>
            {/if}
          </ul>
        </li>
      {/if}
    </ul>
  </div>
{/block}