{extends file='page.tpl'}

{block name='page_title'}
  {l s='Page not found' d='Shop.Theme.Global'}
{/block}

{block name='page_content_container'}
  <section id="content" class="page-content page-not-found">
    <div class="alert alert-danger">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1><i class="material-icons">&#xE001;</i> {l s='404 Not Found' d='Shop.Theme.Global'}</h1>
            <p>{l s='The page you are looking for was not found.' d='Shop.Theme.Global'}</p>
          </div>
        </div>
      </div>
    </div>

    {block name='search'}
      {hook h='displaySearch'}
      
      {block name='hook_not_found'}
        {hook h='displayNotFound'}
      {/block}
    {/block}

    {block name='page_content'}
      <div class="col-md-12">
        <div class="suggestions text-center">
          <p>{l s='Here are some helpful links:' d='Shop.Theme.Global'}</p>
          <ul class="list-unstyled">
            <li>
              <a class="btn btn-primary mb-2" href="{$urls.base_url}">
                <i class="material-icons">&#xE88A;</i>
                {l s='Home page' d='Shop.Theme.Global'}
              </a>
            </li>
            <li>
              <a class="btn btn-outline-primary mb-2" href="{$urls.pages.contact}">
                <i class="material-icons">&#xE0BE;</i>
                {l s='Contact us' d='Shop.Theme.Global'}
              </a>
            </li>
            {if $is_logged}
              <li>
                <a class="btn btn-outline-primary mb-2" href="{$urls.pages.my_account}">
                  <i class="material-icons">&#xE853;</i>
                  {l s='My account' d='Shop.Theme.Global'}
                </a>
              </li>
            {/if}
          </ul>
        </div>

        {if isset($search_controller_url)}
          <div class="search-widget text-center mt-4">
            <form method="get" action="{$search_controller_url}">
              <input type="hidden" name="controller" value="search">
              <div class="input-group">
                <input type="text" name="s" value="" class="form-control" 
                       placeholder="{l s='Search our catalog' d='Shop.Theme.Catalog'}"
                       aria-label="{l s='Search' d='Shop.Theme.Catalog'}">
                <button class="btn btn-primary" type="submit" aria-label="{l s='Search' d='Shop.Theme.Catalog'}">
                  <i class="material-icons">&#xE8B6;</i>
                </button>
              </div>
            </form>
          </div>
        {/if}
      </div>
    {/block}
  </section>
{/block}

{block name='page_footer'}
  {hook h='display404PageFooter'}
{/block}