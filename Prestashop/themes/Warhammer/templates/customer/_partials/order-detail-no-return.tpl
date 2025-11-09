{foreach from=$order.products item=product}
  <div class="box">
    <div class="row">
      {block name='order_detail_product_line_body'}
        <div class="col-sm-4 col-xs-9">
          <span class="image">
            {if $product.cover}
              <img src="{$product.cover.medium.url}" alt="{$product.name|escape:'html':'UTF-8'}" loading="lazy">
            {else}
              <img src="{$urls.no_picture_image.bySize.medium_default.url}" loading="lazy" />
            {/if}
          </span>
          <div class="product-info">
            <div class="product-name">{$product.name}</div>
            {if $product.product_reference}
              {l s='Reference' d='Shop.Theme.Catalog'}: {$product.product_reference}<br/>
            {/if}
            {if $product.customizations}
              {foreach from=$product.customizations item="customization"}
                <div class="customization">
                  {foreach from=$customization.fields item="field"}
                    <div class="custom-field">
                      <span class="label">{$field.label}:</span>
                      {if $field.type == 'text'}
                        {if (int)$field.id_module}
                          {$field.text nofilter}
                        {else}
                          {$field.text}
                        {/if}
                      {elseif $field.type == 'image'}
                        <img src="{$field.image.small.url}" loading="lazy">
                      {/if}
                    </div>
                  {/foreach}
                </div>
              {/foreach}
            {/if}
          </div>
        </div>
        <div class="col-sm-4 col-xs-3">
          <div class="row">
            <div class="col-xs-4 text-sm-center">{$product.price}</div>
            <div class="col-xs-4 text-sm-center">{$product.quantity}</div>
            <div class="col-xs-4 text-sm-center">{$product.total}</div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          {if $product.return_allowed}
            <div class="order-line-actions">
              <a href="{$urls.pages.order_follow}"
                 class="btn btn-sm btn-outline-primary">
                {l s='Return' d='Shop.Theme.Customeraccount'}
              </a>
            </div>
          {/if}
        </div>
      {/block}
    </div>
  </div>
{/foreach}