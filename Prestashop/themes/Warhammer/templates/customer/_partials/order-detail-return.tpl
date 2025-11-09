{assign var='current_step' value='address'}
<form id="order-return-form" action="{$urls.pages.order_follow}" method="post">

  <div class="box">
    <table id="order-products" class="table table-bordered return">
      <thead class="thead-default">
        <tr>
          <th class="head-checkbox"><input type="checkbox" /></th>
          <th>{l s='Product' d='Shop.Theme.Catalog'}</th>
          <th>{l s='Quantity' d='Shop.Theme.Checkout'}</th>
          <th>{l s='Returned' d='Shop.Theme.Customeraccount'}</th>
          <th>{l s='Return status' d='Shop.Theme.Customeraccount'}</th>
          <th>{l s='Reason' d='Shop.Theme.Customeraccount'}</th>
        </tr>
      </thead>
      <tbody>
      {foreach from=$order.products item=product}
        <tr>
          <td>
            {if !$product.customizations}
              <span class="checkbox">
                <input type="checkbox" id="cb_{$product.id_order_detail}" name="ids_order_detail[{$product.id_order_detail}]" value="{$product.id_order_detail}">
                <label for="cb_{$product.id_order_detail}"><span class="sr-only">{l s='Select' d='Shop.Theme.Actions'}</span></label>
              </span>
            {/if}
          </td>
          <td>
            <strong>{$product.name}</strong>
            {if $product.product_reference}
              <br />
              {l s='Reference' d='Shop.Theme.Catalog'}: {$product.product_reference}
            {/if}
            {if $product.customizations}
              {foreach $product.customizations as $customization}
                <div class="customization">
                  <a href="#" data-toggle="modal" data-target="#product-customizations-modal-{$customization.id_customization}">{l s='Product customization' d='Shop.Theme.Catalog'}</a>
                </div>
                <div id="_desktop_product_customization_modal_wrapper_{$customization.id_customization}">
                  <div class="modal fade customization-modal" id="product-customizations-modal-{$customization.id_customization}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="{l s='Close' d='Shop.Theme.Global'}">
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
                </div>
              {/foreach}
            {/if}
          </td>
          <td class="text-xs-center">{$product.quantity}</td>
          <td class="text-xs-center">{$product.qty_returned}</td>
          <td class="text-xs-center">{$product.return_status}</td>
          <td class="text-xs-center">
            {if !$product.customizations}
              <select name="return_reason_{$product.id_order_detail}" class="form-control form-control-select">
                <option value="">{l s='-- Select --' d='Shop.Theme.Actions'}</option>
                {foreach from=$returnReasons item=reason}
                  <option value="{$reason.id_return_reason}">
                    {$reason.name}
                  </option>
                {/foreach}
              </select>
            {/if}
          </td>
        </tr>
      {/foreach}
      </tbody>
    </table>
  </div>

  <div class="form-group">
    <label for="question">{l s='Provide a return reason' d='Shop.Theme.Customeraccount'}</label>
    <textarea rows="3" name="returnText" class="form-control"></textarea>
  </div>

  <footer class="form-footer text-sm-center clearfix">
    <input type="hidden" name="id_order" value="{$order.details.id}">
    <button class="btn btn-primary form-control-submit" type="submit" name="submitReturnMerchandise">
      {l s='Request a return' d='Shop.Theme.Customeraccount'}
    </button>
  </footer>
</form>