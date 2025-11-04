<?php
/* Smarty version 4.3.1, created on 2025-11-04 19:06:52
  from 'C:\xampp\htdocs\Pagina-web\Prestashop\modules\psxdesign\views\templates\hook\displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_690a40bcbfeed0_26204374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9887cebf95973f03ec4eb68a87dc43d39f97a23' => 
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
function content_690a40bcbfeed0_26204374 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
