{if isset($field)}
  {block name='form_field'}
    {if $field.type === 'select'}
      {block name='form_field_select'}
        <select class="form-control form-control-select" name="{$field.name}" {if $field.required}required{/if}>
          <option value disabled selected>{l s='-- please choose --' d='Shop.Forms.Labels'}</option>
          {foreach from=$field.availableValues item="label" key="value"}
            <option value="{$value}" {if $field.value == $value} selected {/if}>{$label}</option>
          {/foreach}
        </select>
      {/block}

    {elseif $field.type === 'countrySelect'}
      {block name='form_field_country_select'}
        <select class="form-control form-control-select js-country" name="{$field.name}" {if $field.required}required{/if}>
          <option value disabled selected>{l s='-- please choose --' d='Shop.Forms.Labels'}</option>
          {foreach from=$field.availableValues item="label" key="value"}
            <option value="{$value}" {if $field.value == $value} selected {/if}>{$label}</option>
          {/foreach}
        </select>
      {/block}

    {elseif $field.type === 'radio-buttons'}
      {block name='form_field_radio_buttons'}
        {foreach from=$field.availableValues item="label" key="value"}
          <label class="radio-inline">
            <span class="custom-radio">
              <input name="{$field.name}" type="radio" value="{$value}" {if $field.required}required{/if} {if $field.value == $value} checked {/if}>
              <span></span>
            </span>
            {$label}
          </label>
        {/foreach}
      {/block}

    {elseif $field.type === 'checkbox'}
      {block name='form_field_checkbox'}
        <span class="custom-checkbox">
          <input name="{$field.name}" type="checkbox" value="1" {if $field.value}checked="checked"{/if} {if $field.required}required{/if}>
          <span><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
          <label>{$field.label nofilter}</label>
        </span>
      {/block}

    {elseif $field.type === 'date'}
      {block name='form_field_date'}
        <input name="{$field.name}" class="form-control" type="date" value="{$field.value}" placeholder="{if isset($field.availableValues.placeholder)}{$field.availableValues.placeholder}{/if}">
        {if isset($field.availableValues.comment)}
          <span class="form-control-comment">
            {$field.availableValues.comment}
          </span>
        {/if}
      {/block}

    {elseif $field.type === 'birthday'}
      {block name='form_field_birthday'}
        <div class="js-parent-focus">
          {html_select_date
          field_order=DMY
          time={$field.value}
          field_array={$field.name}
          prefix=false
          reverse_years=true
          field_separator='<br>'
          day_extra='class="form-control form-control-select"'
          month_extra='class="form-control form-control-select"'
          year_extra='class="form-control form-control-select"'
          day_empty={l s='-- day --' d='Shop.Forms.Labels'}
          month_empty={l s='-- month --' d='Shop.Forms.Labels'}
          year_empty={l s='-- year --' d='Shop.Forms.Labels'}
          start_year={'Y'|date}-100 end_year={'Y'|date}
          }
        </div>
      {/block}

    {elseif $field.type === 'password'}
      {block name='form_field_password'}
        <div class="input-group js-parent-focus">
          <input
            class="form-control js-child-focus js-visible-password"
            name="{$field.name}"
            title="{l s='At least 5 characters long' d='Shop.Forms.Help'}"
            type="password"
            value=""
            pattern=".{literal}{{/literal}5,{literal}}{/literal}"
            {if $field.required}required{/if}
          >
          <span class="input-group-btn">
            <button
              class="btn"
              type="button"
              data-action="show-password"
              data-text-show="{l s='Show' d='Shop.Theme.Actions'}"
              data-text-hide="{l s='Hide' d='Shop.Theme.Actions'}"
            >
              {l s='Show' d='Shop.Theme.Actions'}
            </button>
          </span>
        </div>
      {/block}

    {else}
      {block name='form_field_other'}
        <input
          class="form-control"
          name="{$field.name}"
          type="{$field.type}"
          value="{$field.value}"
          {if $field.maxLength}maxlength="{$field.maxLength}"{/if}
          {if $field.required}required{/if}
        >
      {/block}
    {/if}

    {block name='form_field_errors'}
      {include file='_partials/form-errors.tpl' errors=$field.errors}
    {/block}

    {block name='form_field_comment'}
      {if (!$field.required && !in_array($field.type, ['radio-buttons', 'checkbox']))}
        <span class="form-control-comment">
          {l s='Optional' d='Shop.Forms.Labels'}
        </span>
      {/if}
    {/block}
  {/block}
{/if}