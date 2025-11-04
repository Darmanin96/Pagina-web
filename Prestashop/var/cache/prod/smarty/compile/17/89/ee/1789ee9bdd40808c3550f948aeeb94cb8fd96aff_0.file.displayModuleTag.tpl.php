<?php
/* Smarty version 4.3.1, created on 2025-11-04 19:08:51
  from 'C:\xampp\htdocs\Pagina-web\Prestashop\modules\psxdesign\views\templates\hook\displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_690a4133c78981_27580870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1789ee9bdd40808c3550f948aeeb94cb8fd96aff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Pagina-web\\Prestashop\\modules\\psxdesign\\views\\templates\\hook\\displayModuleTag.tpl',
      1 => 1760707302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690a4133c78981_27580870 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
