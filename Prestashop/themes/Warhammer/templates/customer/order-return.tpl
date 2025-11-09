{extends file='customer/page.tpl'}

{block name='page_title'}
  {l s='Return details' d='Shop.Theme.Customeraccount'}
{/block}

{block name='page_content'}
  {block name='order_return_infos'}
    <div id="order-return-infos" class="card">
      <div class="card-block">
        <p>
          <strong>{l s='Return #%number%' sprintf=['%number%' => $return.return_number] d='Shop.Theme.Customeraccount'}</strong>
          <br/>
          {l s='Order #%number%' sprintf=['%number%' => $return.order.reference] d='Shop.Theme.Customeraccount'}
        </p>
        <p>{l s='Return status' d='Shop.Theme.Customeraccount'}: <span class="bright">{$return.state_name}</span></p>
        <p>{l s='Date issued' d='Shop.Theme.Customeraccount'}: {$return.return_date}</p>
        {if $return.state == 2}
          <p>
            <a href="{$return.print_url}">{l s='Download your return slip' d='Shop.Theme.Customeraccount'}</a>
          </p>
        {/if}
      </div>
    </div>
  {/block}

  {block name='order_return_products'}
    <div class="table-responsive">
      <table class="table table-striped table-bordered hidden-sm-down">
        <thead class="thead-default">
          <tr>
            <th>{l s='Product' d='Shop.Theme.Catalog'}</th>
            <th>{l s='Quantity' d='Shop.Theme.Checkout'}</th>
            <th>{l s='Reason' d='Shop.Theme.Customeraccount'}</th>
          </tr>
        </thead>
        <tbody>
        {foreach from=$return.products item=product}
          <tr>
            <td>
              <strong>{$product.product_name}</strong>
              {if $product.product_reference}
                <br />
                {l s='Reference' d='Shop.Theme.Catalog'}: {$product.product_reference}
              {/if}
              {if $product.customizations}
                {foreach from=$product.customizations item="customization"}
                  <br />{$customization.label}: {$customization.value}
                {/foreach}
              {/if}
            </td>
            <td>
              {$product.product_quantity}
            </td>
            <td>
              {$product.return_reason}
            </td>
          </tr>
        {/foreach}
        </tbody>
      </table>

      <div class="order-return-products hidden-md-up">
        {foreach from=$return.products item=product}
          <div class="order-return-product">
            <p><strong>{$product.product_name}</strong></p>
            {if $product.product_reference}
              <p>{l s='Reference' d='Shop.Theme.Catalog'}: {$product.product_reference}</p>
            {/if}
            {if $product.customizations}
              {foreach from=$product.customizations item="customization"}
                <p>{$customization.label}: {$customization.value}</p>
              {/foreach}
            {/if}
            <p>{l s='Quantity' d='Shop.Theme.Checkout'}: {$product.product_quantity}</p>
            <p>{l s='Reason' d='Shop.Theme.Customeraccount'}: {$product.return_reason}</p>
          </div>
        {/foreach}
      </div>
    </div>
  {/block}

  {if $return.carrier}
    {block name='order_return_shipping'}
      <div class="card">
        <div class="card-block">
          <h3 class="card-title h3">{l s='Return shipping' d='Shop.Theme.Customeraccount'}</h3>
          <p>
            {l s='Carrier' d='Shop.Theme.Checkout'}: {$return.carrier.name}<br/>
            {l s='Tracking number' d='Shop.Theme.Checkout'}: 
            {if $return.carrier.tracking_url}
              <a href="{$return.carrier.tracking_url}">{$return.carrier.tracking_number}</a>
            {else}
              {$return.carrier.tracking_number}
            {/if}
          </p>
        </div>
      </div>
    {/block}
  {/if}
{/block}

{block name='page_footer'}
  <a href="{$urls.pages.my_account}" class="btn btn-link">
    <i class="material-icons">&#xE5CB;</i>
    {l s='Back to your account' d='Shop.Theme.Customeraccount'}
  </a>
{/block}