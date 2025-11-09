{extends file='page.tpl'}

{block name='page_title'}
  {l s='Order details' d='Shop.Theme.Customeraccount'}
{/block}

{block name='page_content'}
  {block name='order_infos'}
    <div id="order-infos" class="mb-3">
      <div class="card">
        <div class="card-block">
          <p>
            <strong>{l s='Order Reference:' d='Shop.Theme.Customeraccount'}</strong>
            <span>{$order.details.reference}</span>
          </p>
          <p>
            <strong>{l s='Date:' d='Shop.Theme.Customeraccount'}</strong>
            <span>{$order.details.order_date}</span>
          </p>
          <p>
            <strong>{l s='Total amount:' d='Shop.Theme.Customeraccount'}</strong>
            <span>{$order.totals.total.value}</span>
          </p>
          <p>
            <strong>{l s='Payment:' d='Shop.Theme.Customeraccount'}</strong>
            <span>{$order.details.payment}</span>
          </p>
        </div>
      </div>
    </div>
  {/block}

  {block name='order_history'}
    <h3>{l s='Order history' d='Shop.Theme.Customeraccount'}</h3>
    <table class="table table-striped table-bordered table-labeled hidden-sm-down">
      <thead class="thead-default">
        <tr>
          <th>{l s='Date' d='Shop.Theme.Global'}</th>
          <th>{l s='Status' d='Shop.Theme.Global'}</th>
        </tr>
      </thead>
      <tbody>
        {foreach from=$order.history item=state}
          <tr>
            <td>{$state.history_date}</td>
            <td>
              <span class="label label-pill {$state.contrast}" style="background-color:{$state.color}">
                {$state.ostate_name}
              </span>
            </td>
          </tr>
        {/foreach}
      </tbody>
    </table>
  {/block}

  {block name='order_carriers'}
    {if $order.shipping}
      <div class="box">
        <table class="table table-striped table-bordered hidden-sm-down">
          <thead class="thead-default">
            <tr>
              <th>{l s='Date' d='Shop.Theme.Global'}</th>
              <th>{l s='Carrier' d='Shop.Theme.Checkout'}</th>
              <th>{l s='Weight' d='Shop.Theme.Checkout'}</th>
              <th>{l s='Shipping cost' d='Shop.Theme.Checkout'}</th>
              <th>{l s='Tracking number' d='Shop.Theme.Checkout'}</th>
            </tr>
          </thead>
          <tbody>
            {foreach from=$order.shipping item=line}
              <tr>
                <td>{$line.shipping_date}</td>
                <td>{$line.carrier_name}</td>
                <td>{$line.shipping_weight}</td>
                <td>{$line.shipping_cost}</td>
                <td>
                  {if $line.tracking_number}
                    {if $line.url}
                      <a href="{$line.url|replace:'@':$line.tracking_number}">{$line.tracking_number}</a>
                    {else}
                      {$line.tracking_number}
                    {/if}
                  {/if}
                </td>
              </tr>
            {/foreach}
          </tbody>
        </table>
      </div>
    {/if}
  {/block}

  {block name='order_messages'}
    {if $messages}
      <h3>{l s='Messages' d='Shop.Theme.Customeraccount'}</h3>
      <div class="messages">
        {foreach from=$messages item=message}
          <div class="message card">
            <div class="card-block">
              <div class="message-body">
                <p class="message-date">{$message.date}</p>
                {if $message.url}
                  <a href="{$message.url}">
                    {$message.name}
                  </a>
                {else}
                  {$message.name}
                {/if}
                <p class="message-text">{$message.message nofilter}</p>
              </div>
            </div>
          </div>
        {/foreach}
      </div>
    {/if}
  {/block}

  {block name='order_detail'}
    {if $order.details.is_returnable && !$orderIsVirtual}
      {include file='customer/_partials/order-detail-return.tpl'}
    {else}
      {include file='customer/_partials/order-detail-no-return.tpl'}
    {/if}
  {/block}

  {block name='order_follow_up'}
    {if $order.details.follow_up}
      <p>
        {l s='Click the following link to track the delivery of your order' d='Shop.Theme.Customeraccount'}
        <a href="{$order.details.follow_up}">{$order.details.follow_up}</a>
      </p>
    {/if}
  {/block}

  {block name='order_actions'}
    <div class="order-actions">
      {if $order.details.reorder_url}
        <a href="{$order.details.reorder_url}" class="btn btn-primary">{l s='Reorder' d='Shop.Theme.Actions'}</a>
      {/if}

      {if $order.details.invoice_url}
        <a href="{$order.details.invoice_url}" class="btn btn-outline-primary">
          {l s='Download your invoice as a PDF file' d='Shop.Theme.Customeraccount'}
        </a>
      {/if}

      {if $order.details.recyclable}
        <p>
          <a href="{$urls.pages.order_slip}">{l s='Download your recycling slip' d='Shop.Theme.Customeraccount'}</a>
        </p>
      {/if}
    </div>
  {/block}
{/block}