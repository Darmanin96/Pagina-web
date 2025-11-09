{extends file='page.tpl'}

{block name='page_title'}
  {l s='Forbidden' d='Shop.Theme.Global'}
{/block}

{block name='page_content_container'}
  <section id="content" class="page-content page-restricted">
    <div class="alert alert-danger">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><i class="material-icons">&#xE14B;</i> {l s='403 Forbidden' d='Shop.Theme.Global'}</h1>
            <p>{l s='You are not allowed to access this page.' d='Shop.Theme.Global'}</p>
          </div>
        </div>
      </div>
    </div>

    {block name='page_content'}
      {if isset($error_content)}
        {foreach $error_content as $error}
          {$error}
        {/foreach}
      {else}
        <div class="col-md-12">
          <p class="text-center">
            <a class="btn btn-primary" href="{$urls.base_url}">
              <i class="material-icons">&#xE88A;</i>
              {l s='Go to homepage' d='Shop.Theme.Global'}
            </a>
          </p>
          {if $is_logged}
            <p class="text-center">
              <a class="btn btn-outline-primary" href="{$urls.pages.my_account}">
                <i class="material-icons">&#xE853;</i>
                {l s='My account' d='Shop.Theme.Global'}
              </a>
            </p>
          {/if}
        </div>
      {/if}
    {/block}
  </section>
{/block}

{block name='page_footer'}
  {hook h='displayRestrictedPageFooter'}
{/block}