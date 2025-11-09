{block name='order_confirmation_table'}
<div id="order-items" class="col-md-8">
  <h3 class="card-title h3">{l s='Order items' d='Shop.Theme.Checkout'}</h3>

  <div class="order-confirmation-table">
    {block name='order_items_table_head'}
      <div class="order-confirmation-table-head">
        <div class="row">
          <div class="col-md-5 col-xs-6 text-xs-left">{l s='Product' d='Shop.Theme.Catalog'}</div>
          <div class="col-md-2 hidden-sm-down text-xs-left">{l s='Unit price' d='Shop.Theme.Catalog'}</div>
          <div class="col-md-2 col-xs-3 text-xs-left">{l s='Quantity' d='Shop.Theme.Catalog'}</div>
          <div class="col-md-3 col-xs-3 text-xs-right">{l s='Total' d='Shop.Theme.Catalog'}</div>
        </div>
      </div>
    {/block}

    {foreach from=$products item=product}
      <div class="order-line row">
        <div class="col-md-5 col-xs-6">
          <span class="product-image media-middle">
            {if $product.cover}
              <img src="{$product.cover.medium.url}" alt="{$product.name|escape:'quotes'}" loading="lazy" />
            {else}
              <img src="{$urls.no_picture_image.bySize.medium_default.url}" loading="lazy" />
            {/if}
          </span>
          <div class="product-name">
            <strong>{$product.name}</strong>
            {if $product.reference}
              <br/>{l s='Reference' d='Shop.Theme.Catalog'}: {$product.reference}
            {/if}
            {if $product.customizations}
              {foreach from=$product.customizations item="customization"}
                <div class="customizations">
                  <a href="#" data-toggle="modal" data-target="#product-customizations-modal-{$customization.id_customization}">{l s='Product customization' d='Shop.Theme.Catalog'}</a>
                </div>
                <div class="modal fade customization-modal" id="product-customizations-modal-{$customization.id_customization}" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">{l s='Product customization' d='Shop.Theme.Catalog'}</h4>
                      </div>
                      <div class="modal-body">
                        {foreach from=$customization.fields item="field"}
                          <div class="product-customization-line row">
                            <div class="col-sm-3 col-xs-4 label">
                              {$field.label}
                            </div>
                            <div class="col-sm-9 col-xs-8 value">
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
                          </div>
                        {/foreach}
                      </div>
                    </div>
                  </div>
                </div>
              {/foreach}
            {/if}
          </div>
        </div>
        <div class="col-md-2 hidden-sm-down text-xs-left">
          {$product.price}
        </div>
        <div class="col-md-2 col-xs-3 text-xs-left">
          {$product.quantity}
        </div>
        <div class="col-md-3 col-xs-3 text-xs-right">
          {$product.total}
        </div>
      </div>
    {/foreach}

    <hr>

    <table class="table table-bordered table-striped">
      {foreach $subtotals as $subtotal}
        {if $subtotal !== null && $subtotal.type !== 'tax' && $subtotal.label !== null}
          <tr>
            <td>{$subtotal.label}</td>
            <td class="text-xs-right">{$subtotal.value}</td>
          </tr>
        {/if}
      {/foreach}
      {if !$configuration.display_prices_tax_incl && $configuration.taxes_enabled}
        <tr>
          <td><span class="text-uppercase">{$totals.total.label}&nbsp;{$labels.tax_short}</span></td>
          <td class="text-xs-right">{$totals.total.value}</td>
        </tr>
        <tr class="total-value font-weight-bold">
          <td><span class="text-uppercase">{$totals.total_including_tax.label}</span></td>
          <td class="text-xs-right">{$totals.total_including_tax.value}</td>
        </tr>
      {else}
        <tr class="total-value font-weight-bold">
          <td><span class="text-uppercase">{$totals.total.label}&nbsp;{if $configuration.taxes_enabled && $configuration.display_taxes_label}{$labels.tax_short}{/if}</span></td>
          <td class="text-xs-right">{$totals.total.value}</td>
        </tr>
      {/if}
    </table>
  </div>
</div>
{/block}