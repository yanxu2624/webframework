<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="renderer" content="webkit">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="<?php echo (WWW_PUB); ?>/Public/Admin/BootStrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo (WWW_PUB); ?>Public/Admin/BootStrap/css/bootstrap-table.min.css">
		<!--js文件引入-->
		<script type="text/javascript" src="<?php echo (WWW_PUB); ?>Public/Admin/BootStrap/js/jquery-1.11.1.min.js"></script>		
		<script type="text/javascript" src="<?php echo (WWW_PUB); ?>Public/Admin/BootStrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div>
			<div class="modal-body">
				<form id="wt-forms" method="post" tabindex="-1" onsubmit="return false;" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">登录账号：</label>
                        <div class="col-xs-8">
                            <input type="text" id="user_account" name="user_account" class="form-control input-sm"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">密码：</label>
                        <div class="col-xs-8">
                            <input type="password" id="user_pwd" name="user_pwd" class="form-control input-sm"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">用户姓名：</label>
                        <div class="col-xs-8">
                            <input type="text" id="user_name" name="user_name" class="form-control input-sm"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">用户性别：</label>
                        <div class="col-xs-8">
                            <input type="radio" name="user_sex" value="0" checked="checked">男
                            <input type="radio" name="user_sex" value="1">女
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">所属机构：</label>
                        <div class="col-xs-8">
                            <select name="org_id">
                                <?php if(is_array($org_rows)): foreach($org_rows as $key=>$org_row): ?><option value="<?php echo ($key); ?>"><?php echo ($org_row); ?></option><?php endforeach; endif; ?>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">联系电话：</label>
                        <div class="col-xs-8">
                            <input type="phone" id="user_phone" name="user_phone" class="form-control input-sm"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">联系邮箱：</label>
                        <div class="col-xs-8">
                            <input type="email" id="user_email" name="user_email" class="form-control input-sm"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">用户地址：</label>
                        <div class="col-xs-8">
                            <input type="email" name="user_address" class="form-control input-sm"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" value="<?php echo ($isAdmin); ?>" name="is_admin">                        
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">是否启用：</label>
                        <div class="col-xs-8">
                            <input type="radio" name="isenable" value="0" checked="checked">启用&nbsp;&nbsp;
                            <input type="radio" name="isenable" value="1">禁用
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">用户角色：</label>
                        <div class="col-xs-8">
                            <select name="role_id">
                                <?php if(is_array($role_rows)): foreach($role_rows as $key=>$row): ?><option value="<?php echo ($row['role_id']); ?>"><?php echo ($row['role_name']); ?></option><?php endforeach; endif; ?>
                            </select>
                        </div>
                    </div>
                </form>
			</div>
		</div>		
	</body>
</html>