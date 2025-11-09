{extends file='page.tpl'}

{block name='page_title'}
  {l s='Shopping Cart' d='Shop.Theme.Checkout'}
{/block}

{block name='page_content_container'}
  {block name='cart_overview'}
    <div class="cart-empty">
      <h1>{l s='Your shopping cart is empty.' d='Shop.Theme.Checkout'}</h1>
      {if $empty_cart_tips}
        <div class="tips">
          {foreach from=$empty_cart_tips item=tip}
            <p>{$tip}</p>
          {/foreach}
        </div>
      {/if}
    </div>
  {/block}

  {block name='continue_shopping'}
    <a class="btn btn-primary" href="{$urls.pages.index}">
      <i class="material-icons">&#xE5CB;</i>
      {l s='Continue shopping' d='Shop.Theme.Actions'}
    </a>
  {/block}

  {hook h='displayCrossSellingShoppingCart'}
{/block}

{block name='cart_actions'}
  <div class="cart-actions">
    <a href="{$urls.pages.index}" class="btn btn-primary">
      {l s='Continue shopping' d='Shop.Theme.Actions'}
    </a>
  </div>
{/block}

{block name='continue_shopping'}
  <a class="label" href="{$urls.pages.index}">
    <i class="material-icons">&#xE5CB;</i>{l s='Continue shopping' d='Shop.Theme.Actions'}
  </a>
{/block}

{block name='cart_voucher'}
{/block}

{block name='display_reassurance'}
{/block}