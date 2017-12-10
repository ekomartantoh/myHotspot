<?php /* Smarty version Smarty-3.1.13, created on 2017-12-10 11:35:30
         compiled from "ui\theme\default\voucher.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2088896195a2cb992ef6e01-97719597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b27877a92edd7ca79928a1ff9e31b903c6aa2f74' => 
    array (
      0 => 'ui\\theme\\default\\voucher.tpl',
      1 => 1446193929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2088896195a2cb992ef6e01-97719597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'd' => 0,
    'ds' => 0,
    'paginator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5a2cb99300b8a8_74163332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cb99300b8a8_74163332')) {function content_5a2cb99300b8a8_74163332($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid_Vouchers'];?>
</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="code" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_by_Code'];?>
...">
												<div class="input-group-btn">
													<button class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button>
												</div>
											</div>
											</form>
										</div>
										<div class="col-md-4">
											<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/add-voucher" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Voucher'];?>
</a>
										</div>&nbsp;
									</div>

						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code_Voucher'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status_Voucher'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
								</tr>
							</thead>
							<tbody>
							<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_plan'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['code'];?>
</td>
									<td align="center"><?php if ($_smarty_tpl->tpl_vars['ds']->value['status']=='0'){?> <label class="btn-tag btn-tag-success">Not Use</label> <?php }else{ ?> <label class="btn-tag btn-tag-danger">Used</label> <?php }?></td>
									<td align="center"><?php if ($_smarty_tpl->tpl_vars['ds']->value['user']=='0'){?> - <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['user'];?>
 <?php }?></td>
									<td>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher-delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger btn-sm cdelete"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
									</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
						<?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

								</div>
							</div>
						</div>
					</div>


<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>