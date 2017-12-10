<?php /* Smarty version Smarty-3.1.13, created on 2017-12-10 11:30:13
         compiled from "ui\theme\default\pool.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14593335755a2cb855d48279-08722677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97b9415ec4c6e2322b082dfc8b8665372d760a1f' => 
    array (
      0 => 'ui\\theme\\default\\pool.tpl',
      1 => 1446196464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14593335755a2cb855d48279-08722677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'd' => 0,
    'no' => 0,
    'ds' => 0,
    'paginator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5a2cb855d8b727_96166146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cb855d8b727_96166146')) {function content_5a2cb855d8b727_96166146($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Pool'];?>
</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
										
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pool/list/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_by_Name'];?>
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
pool/add" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New_Pool'];?>
</a>
										</div>&nbsp;
									</div>
									<table class="table table-striped table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Pool_Name'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Range_IP'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
											</tr>
										</thead>
										<tbody>
										<?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
										<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
											<tr>
												<td align="center"><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['pool_name'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['range_ip'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</td>
												<td align="center">
													<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pool/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-warning btn-sm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
													<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pool/delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
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