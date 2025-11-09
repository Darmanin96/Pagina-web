{extends file='page.tpl'}

{block name='page_header_container'}{/block}

{block name='page_content'}
  <h2>{l s='Reset Password' d='Shop.Theme.Customeraccount'}</h2>
  
  {if $layout === 'layouts/layout-full-width.tpl'}
    <div class="container">
      <div class="row">
  {/if}

  <div class="reset-password-form">
    {form_field field=$form.new_password}
  </div>

  {if $layout === 'layouts/layout-full-width.tpl'}
      </div>
    </div>
  {/if}
{/block}

{block name='page_footer'}
  <ul>
    <li><a href="{$urls.pages.authentication}">{l s='Back to Login' d='Shop.Theme.Actions'}</a></li>
  </ul>
{/block}