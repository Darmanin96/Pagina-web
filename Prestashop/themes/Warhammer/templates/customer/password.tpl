{extends file='page.tpl'}

{block name='page_title'}
  {l s='Reset your password' d='Shop.Theme.Customeraccount'}
{/block}

{block name='page_content'}
  <form action="{$urls.pages.password}" method="post">
    <ul class="ps-alert-error">
      {foreach $errors as $error}
        <li class="item">
          <i>
            <span class="material-icons">error</span>
          </i>
          <p>{$error}</p>
        </li>
      {/foreach}
    </ul>

    <header>
      <p>{l s='Please enter the email address you used to register. You will receive a temporary link to reset your password.' d='Shop.Theme.Customeraccount'}</p>
    </header>

    <section class="form-fields">
      <div class="form-group center-email-fields">
        <label class="col-md-3 form-control-label required">{l s='Email address' d='Shop.Forms.Labels'}</label>
        <div class="col-md-5">
          <input type="email" name="email" id="email" value="{if isset($smarty.post.email)}{$smarty.post.email|stripslashes}{/if}" class="form-control" required>
        </div>
        <button class="form-control-submit btn btn-primary hidden-xs-down" name="submit" type="submit">
          {l s='Send reset link' d='Shop.Theme.Actions'}
        </button>
        <button class="form-control-submit btn btn-primary hidden-sm-up" name="submit" type="submit">
          {l s='Send' d='Shop.Theme.Actions'}
        </button>
      </div>
    </section>

  </form>
{/block}

{block name='page_footer'}
  <a href="{$urls.pages.authentication}" class="account-link">
    <i class="material-icons">&#xE5CB;</i>
    <span>{l s='Back to login' d='Shop.Theme.Actions'}</span>
  </a>
{/block}