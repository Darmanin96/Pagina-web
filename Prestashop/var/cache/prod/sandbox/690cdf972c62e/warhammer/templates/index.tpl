{extends file='page.tpl'}

{block name='page_content'}
  <section class="home-catalog">
    <h1>Nuestro Catálogo de Miniaturas</h1>

    {* Muestra los módulos asignados al hook displayHome *}
    {hook h='displayHome'}
  </section>
{/block}
