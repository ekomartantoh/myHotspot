<?php /* Smarty version Smarty-3.1.13, created on 2017-12-10 11:30:20
         compiled from "ui\theme\default\routers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10150651445a2cb85c0ae710-33790119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40bc1c1f4e04e1da73f12acdea264ee2ca4471dc' => 
    array (
      0 => 'ui\\theme\\default\\routers.tpl',
      1 => 1446195308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10150651445a2cb85c0ae710-33790119',
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
  'unifunc' => 'content_5a2cb85c0fd476_42590890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cb85c0fd476_42590890')) {function content_5a2cb85c0fd476_42590890($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
										
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/list/">
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
routers/add" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New_Router'];?>
</a>
										</div>&nbsp;
									</div>
									
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Router_Name'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['IP_Address'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Router_Secret'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
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
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['ip_address'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['password'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>
									<td>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-warning btn-sm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
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