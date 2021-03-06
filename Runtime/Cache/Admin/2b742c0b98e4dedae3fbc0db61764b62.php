<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>主页</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="{：C('WEB_FAVICON')}">
    <link href="/cateringcms/Public/admin_tpl/css/bootstrap.min-v=3.3.6.css" rel="stylesheet">
    <link href="/cateringcms/Public/admin_tpl/css/font-awesome.min-v=4.4.0.css" rel="stylesheet">
    <link href="/cateringcms/Public/admin_tpl/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="/cateringcms/Public/admin_tpl/css/animate.min.css" rel="stylesheet">
    <link href="/cateringcms/Public/admin_tpl/css/style.min-v=4.1.0.css" rel="stylesheet">
    <script>
        var admin_home_url = "<?php echo U('Index/index');?>"
    </script>
</head>

<body class="gray-bg">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h3 class="font-bold text-center">官方公告</h3>
                    </div>
                    <div class="ibox-content">
                        <p class="font-bold">公告内容：</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeIn">
        <div class="row">
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-content p-md">
                        <h4 class="m-b-xxs">系统详情</h4>
                        <br/>
                        <div>
                            <span class="simple_tag">服务器版本号：</span>
                            <span>
                                <?php echo ($os); ?>
                            </span>
                        </div>
                        <div>
                            <span class="simple_tag">服务器解析引擎：</span>
                            <span>
                                <?php echo ($webserver); ?>
                            </span>
                        </div>
                        <div>
                            <span class="simple_tag">PHP版本号：</span><span><?php echo ($php_v); ?></span>
                        </div>
                        <div>
                            </span>

                            <span class="simple_tag">MySQL版本号：</span><span><?php echo ($mysql_v); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-content  p-md">
                        <h4 class="m-b-xxs">快捷方式</h4>
                        <br/>
                        <div>
                            <a href="<?php echo U('Admin/index');?>" class="btn btn-block btn-outline btn-primary">管理员管理</a>
                        </div>
                        <div>
                            <a href="<?php echo U('Menu/index');?>" class="btn btn-block btn-outline btn-primary">菜单信息管理</a>
                        </div>
                        <div>
                            <a href="<?php echo U('Upload/index');?>" class="btn btn-block btn-outline btn-primary">上传管理</a>
                        </div>
                        <div>
                            <a href="<?php echo U('User/index');?>" class="btn btn-block btn-outline btn-primary">会员管理</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="/cateringcms/Public/admin_tpl/js/jquery.min-v=2.1.4.js"></script>
    <script src="/cateringcms/Public/admin_tpl/js/bootstrap.min-v=3.3.6.js"></script>

</body>

</html>