<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="renderer" content="webkit">
        <title>管理员修改</title>
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
                        <label class="col-xs-3 control-label">所有工作流：</label>
                        <div class="col-xs-8">
                            <select id="workflow_id" name="workflow_id">
                                <option value="">请选择</option>
                                <?php if(is_array($workflow_rows)): foreach($workflow_rows as $key=>$workflow_row): ?><option value="<?php echo ($workflow_row['workflow_id']); ?>"><?php echo ($workflow_row['workflow_name']); ?></option><?php endforeach; endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">是否启用：</label>
                        <div class="col-xs-8">
                            <input type="radio" name="isenable" value="0" checked="checked">启用
                            <input type="radio" name="isenable" value="1">禁用
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>