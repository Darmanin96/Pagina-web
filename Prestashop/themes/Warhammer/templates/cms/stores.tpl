{extends file='page.tpl'}

{block name='page_title'}
  {l s='Our stores' d='Shop.Theme.Global'}
{/block}

{block name='page_content_container'}
  <section id="content" class="page-content page-stores">
    {foreach $stores as $store}
      <article id="store-{$store.id}" class="store-item card">
        <div class="store-item-container">
          <div class="col-md-3 store-picture hidden-sm-down">
            {if $store.image.bySize.stores_default.url}
              <img
                src="{$store.image.bySize.stores_default.url}"
                alt="{$store.image.legend}"
                title="{$store.image.legend}"
              >
            {/if}
          </div>
          <div class="col-md-5 col-sm-7 col-xs-12 store-description">
            <p class="h3 card-title">{$store.name}</p>
            <address>{$store.address.formatted nofilter}</address>
            {if $store.note || $store.phone || $store.fax || $store.email}
              <a data-toggle="collapse" href="#about-{$store.id}" aria-expanded="false" aria-controls="about-{$store.id}">
                <strong>{l s='About and Contact' d='Shop.Theme.Global'}</strong>
                <i class="material-icons">&#xE409;</i>
              </a>
              <div class="collapse" id="about-{$store.id}">
                <ul>
                  {if $store.note}
                    <li>{$store.note}</li>
                  {/if}
                  {if $store.phone}
                    <li><i class="material-icons">&#xE0B0;</i>{$store.phone}</li>
                  {/if}
                  {if $store.fax}
                    <li><i class="material-icons">&#xE8AD;</i>{$store.fax}</li>
                  {/if}
                  {if $store.email}
                    <li><i class="material-icons">&#xE0BE;</i>{$store.email}</li>
                  {/if}
                </ul>
              </div>
            {/if}
          </div>
          <div class="col-md-4 col-sm-5 col-xs-12 divide-left">
            <table>
              {foreach $store.business_hours as $day}
                <tr>
                  <td>{$day.day|truncate:4:'.'}</td>
                  <td>
                    {if $day.hours[0] == '00:00' && $day.hours[1] == '00:00'}
                      {l s='Closed' d='Shop.Theme.Global'}
                    {else}
                      {$day.hours[0]} - {$day.hours[1]}
                    {/if}
                  </td>
                </tr>
              {/foreach}
            </table>
          </div>
        </div>
        <footer id="store-footer" class="card-footer">
          <div class="store-item-footer divide-top">
            <div class="card-block">
              {if $store.has_map}
                <button
                  class="btn btn-primary float-xs-right"
                  data-store-url="{$store.url}"
                  onclick="showMap(this)"
                >
                  {l s='View larger map' d='Shop.Theme.Global'}
                </button>
              {/if}
            </div>
          </div>
        </footer>
      </article>
    {/foreach}
  </section>
{/block}