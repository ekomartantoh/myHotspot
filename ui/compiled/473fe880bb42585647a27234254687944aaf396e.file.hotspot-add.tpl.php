<?php /* Smarty version Smarty-3.1.13, created on 2017-12-10 11:31:05
         compiled from "ui\theme\default\hotspot-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1530935175a2cb8890a3777-85147874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '473fe880bb42585647a27234254687944aaf396e' => 
    array (
      0 => 'ui\\theme\\default\\hotspot-add.tpl',
      1 => 1446173841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1530935175a2cb8890a3777-85147874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'd' => 0,
    'ds' => 0,
    'r' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5a2cb8890ebf11_14521446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cb8890ebf11_14521446')) {function content_5a2cb8890ebf11_14521446($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Plan'];?>
</div>
						<div class="panel-body">

                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/add-post" >            
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="name" name="name">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Type'];?>
</label>
						<div class="col-md-10">
							<input type="radio" id="Unlimited" name="typebp" value="Unlimited" checked> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Unlimited'];?>
 
							<input type="radio" id="Limited" name="typebp" value="Limited"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Limited'];?>
 
						</div>
                    </div>
					<div style="display:none;" id="Type">
						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Limit_Type'];?>
</label>
							<div class="col-md-10">
								<input type="radio" id="Time_Limit" name="limit_type" value="Time_Limit" checked> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Time_Limit'];?>
 
								<input type="radio" id="Data_Limit" name="limit_type" value="Data_Limit"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Data_Limit'];?>
 
								<input type="radio" id="Both_Limit" name="limit_type" value="Both_Limit"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Both_Limit'];?>
 
							</div>
						</div>
					</div>
					<div style="display:none;" id="TimeLimit">
						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Time_Limit'];?>
</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="time_limit" name="time_limit" value="0">
							</div>
							<div class="col-md-2">
								<select class="form-control" id="time_unit" name="time_unit">
									<option value="Hrs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hrs'];?>
</option>
									<option value="Mins"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Mins'];?>
</option>
								</select>
							</div>
						</div>
					</div>
					<div style="display:none;" id="DataLimit">
						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Data_Limit'];?>
</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="data_limit" name="data_limit" value="0">
							</div>
							<div class="col-md-2">
								<select class="form-control" id="data_unit" name="data_unit">
									<option value="MB">MBs</option>
									<option value="GB">GBs</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['BW_Name'];?>
</label>
						<div class="col-md-6">
							<select id="id_bw" name="id_bw" class="form-control">
                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_BW'];?>
...</option>
                                <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_bw'];?>
</option>
                                <?php } ?>
                            </select>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="pricebp" name="pricebp">
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Shared_Users'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="sharedusers" name="sharedusers" value="1">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Validity'];?>
</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="validity" name="validity">
						</div>
						<div class="col-md-2">
							<select class="form-control" id="validity_unit" name="validity_unit">
								<option value="Days"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Days'];?>
</option>
								<option value="Months"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months'];?>
</option>
							</select>
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Router_Name'];?>
</label>
						<div class="col-md-6">
							<select id="routers" name="routers" class="form-control">
                                <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['r']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value){
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['name'];?>
</option>
                                <?php } ?>
                            </select>
						</div>
                    </div>
					
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-success waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
							Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/hotspot"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
						</div>
					</div>
                </form>
				
					</div>
				</div>
			</div>
		</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>