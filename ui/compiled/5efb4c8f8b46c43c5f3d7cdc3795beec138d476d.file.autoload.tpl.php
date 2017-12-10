<?php /* Smarty version Smarty-3.1.13, created on 2017-12-10 11:34:40
         compiled from "ui\theme\default\autoload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10381839195a2cb96049f429-65149151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5efb4c8f8b46c43c5f3d7cdc3795beec138d476d' => 
    array (
      0 => 'ui\\theme\\default\\autoload.tpl',
      1 => 1445789862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10381839195a2cb96049f429-65149151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'd' => 0,
    'ds' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5a2cb9604d7b05_46989403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cb9604d7b05_46989403')) {function content_5a2cb9604d7b05_46989403($_smarty_tpl) {?><option value="">Select Plans</option>
<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_plan'];?>
</option>
<?php } ?><?php }} ?>