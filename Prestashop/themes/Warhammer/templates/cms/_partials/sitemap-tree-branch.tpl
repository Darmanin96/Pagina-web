{if isset($node.children)}
  <li class="sitemap-item">
    <span class="sitemap-title">
      <a href="{$node.url}" title="{$node.label}">{$node.label}</a>
    </span>
    {if isset($node.children)}
      <ul>
        {foreach $node.children as $child}
          {include file='cms/_partials/sitemap-tree-branch.tpl' node=$child}
        {/foreach}
      </ul>
    {/if}
  </li>
{else}
  <li class="sitemap-item">
    <span class="sitemap-title">
      <a href="{$node.url}" title="{$node.label}">{$node.label}</a>
    </span>
  </li>
{/if}