<?php
/* Smarty version 4.3.1, created on 2025-11-06 20:58:48
  from 'C:\xampp\htdocs\Pagina-web\Prestashop\admin1752864ggqext4hkrmf\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_690cfdf8845552_31398625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac74c43d85962ca51f820d47c95ed41664c55543' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Pagina-web\\Prestashop\\admin1752864ggqext4hkrmf\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1727250514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690cfdf8845552_31398625 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['confirmations']->value)) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
$_smarty_tpl->tpl_vars['conf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
