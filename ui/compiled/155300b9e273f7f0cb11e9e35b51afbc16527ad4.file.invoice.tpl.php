<?php /* Smarty version Smarty-3.1.13, created on 2017-12-10 11:34:44
         compiled from "ui\theme\default\invoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7256394365a2cb964838d11-23857188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '155300b9e273f7f0cb11e9e35b51afbc16527ad4' => 
    array (
      0 => 'ui\\theme\\default\\invoice.tpl',
      1 => 1446036888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7256394365a2cb964838d11-23857188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_c' => 0,
    'in' => 0,
    '_L' => 0,
    'date' => 0,
    '_admin' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5a2cb96490d6e6_08604688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cb96490d6e6_08604688')) {function content_5a2cb96490d6e6_08604688($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="row">
	<div class="col-md-6 col-sm-12">
		<div class="panel panel-hovered panel-default panel-stacked mb30">
			<div class="panel-heading">PRINT INVOICE</div>
			<div class="panel-body">
				<div class="well">
				<fieldset>
					<center>
					<b><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_c']->value['address'];?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['_c']->value['phone'];?>
<br>
					</center>
					====================================================<br>
					INVOICE: <b><?php echo $_smarty_tpl->tpl_vars['in']->value['invoice'];?>
</b> - <?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
 : <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
 : <?php echo $_smarty_tpl->tpl_vars['_admin']->value['fullname'];?>
<br>
					====================================================<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['in']->value['type'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['in']->value['plan_name'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['in']->value['price'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</b><br>
					<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['in']->value['username'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
 : **********<br>
					<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
 : <b><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['in']->value['recharged_on']));?>
 <?php echo $_smarty_tpl->tpl_vars['in']->value['time'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
 : <b><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['in']->value['expiration']));?>
 <?php echo $_smarty_tpl->tpl_vars['in']->value['time'];?>
</b><br>
					=====================================================<br>
					<center><?php echo $_smarty_tpl->tpl_vars['_c']->value['note'];?>
</center>
				</fieldset>
				</div>
				<form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/print" target="_blank">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['in']->value['id'];?>
">
					<button type="submit" class="btn btn-default btn-sm"><i class="fa fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Click_Here_to_Print'];?>
</button>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/list" class="btn btn-primary"><i class="ion-reply-all"></i><?php echo $_smarty_tpl->tpl_vars['_L']->value['Finish'];?>
</a>
				</form>
				
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var s5_taf_parent = window.location;
	function popup_print() {
	window.open('print.php?page=<<?php ?>?php echo $_GET['act'];?<?php ?>>','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=800,height=600,left=50,top=50,titlebar=yes')
	}
</script>
<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>