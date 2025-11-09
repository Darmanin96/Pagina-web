{extends file='page.tpl'}

{block name='notifications'}{/block}

{block name='page_content_container'}
  <section id="content" class="page-content">
    {block name='page_content_top'}
      {block name='customer_breadcrumb'}
        <nav class="breadcrumb">
          <ol>
            <li>
              <a href="{$urls.pages.my_account}">
                <span>{l s='Your account' d='Shop.Theme.Customeraccount'}</span>
              </a>
            </li>
            <li>
              <span>{$page.title}</span>
            </li>
          </ol>
        </nav>
      {/block}
      {block name='page_title'}
        <h1 class="page-title">
          {$page.title}
        </h1>
      {/block}
    {/block}
    
    {block name='page_content'}
      <!-- Page content will be added by child templates -->
    {/block}
  </section>
{/block}

{block name='page_footer'}
  {block name='my_account_links'}
    <div class="text-sm-center">
      <a href="{$urls.pages.my_account}" class="btn btn-outline-primary">
        <i class="material-icons">&#xE5CB;</i>
        {l s='Back to your account' d='Shop.Theme.Customeraccount'}
      </a>
    </div>
  {/block}
{/block}