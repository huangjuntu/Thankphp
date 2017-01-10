<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>sing后台管理平台</title>
    <!-- Bootstrap Core CSS -->
    <!--<link href="/Public/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="/thinkphp3.2/model/Public/css/bootstrap.min.css" />

    <!-- Custom CSS -->
    <!--<link href="/Public/css/sb-admin.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="/thinkphp3.2/model/Public/css/sb-admin.css" />

    <!-- Morris Charts CSS -->
    <!--<link href="/Public/css/plugins/morris.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="/thinkphp3.2/model/Public/css/plugins/morris.css" />

    <!-- Custom Fonts -->
    <!--<link href="/Public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/Public/css/sing/common.css" />
    <link rel="stylesheet" href="/Public/css/party/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/party/uploadify.css">-->
    <link rel="stylesheet" type="text/css" href="/thinkphp3.2/model/Public/css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/thinkphp3.2/model/Public/css/sing/common.css" />
    <link rel="stylesheet" type="text/css" href="/thinkphp3.2/model/Public/css/party/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="/thinkphp3.2/model/Public/css/party/uploadify.css" />

    <!-- jQuery -->
    
    <!--<script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <script src="/Public/js/dialog/layer.js"></script>
    <script src="/Public/js/dialog.js"></script>
    <script type="text/javascript" src="/Public/js/party/jquery.uploadify.js"></script>-->

    <script type="text/javascript" src="/thinkphp3.2/model/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/thinkphp3.2/model/Public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/thinkphp3.2/model/Public/js/dialog/layer.js"></script>
    <script type="text/javascript" src="/thinkphp3.2/model/Public/js/dialog.js"></script>
    <script type="text/javascript" src="/thinkphp3.2/model/Public/js/party/jquery.uploadify.js"></script>

</head>

    



<body>

<div id="wrapper">

    
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    
    <a class="navbar-brand" >singcms内容管理平台</a>
  </div>
  <!-- Top Menu Items -->
  <ul class="nav navbar-right top-nav">
    
    
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li>
          <a href="/admin.php?c=admin&a=personal"><i class="fa fa-fw fa-user"></i> 个人中心</a>
        </li>
       
        <li class="divider"></li>
        <li>
          <a href="/admin.php?c=login&a=loginout"><i class="fa fa-fw fa-power-off"></i> 退出</a>
        </li>
      </ul>
    </li>
  </ul>
  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav nav_list">
      <li >
        <a href=""><i class="fa fa-fw fa-dashboard"></i> 首页</a>
      </li>
      <li>
        <a href=""><i class="fa fa-fw fa-bar-chart-o"></i>菜单管理</a>
      </li>

    </ul>
  </div>
  <!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    您好!欢迎使用singcms内容管理平台
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> 平台整理指标
                    </li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-comments fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"></div>
                                <div>今日登录用户数12</div>
                            </div>
                        </div>
                    </div>
                    
                        <div class="panel-footer">
                            <span class="pull-left"></span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"></div>
                                <div>文章数量12</div>
                            </div>
                        </div>
                    </div>
                    <a href="/admin.php?c=content&a=index">
                        <div class="panel-footer">
                            <span class="pull-left">查看</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa glyphicon glyphicon-asterisk  fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"></div>
                                <div>文章最大阅读数12</div>
                            </div>
                        </div>
                    </div>
                    <a target="_blank" href="">
                        <div class="panel-footer">
                            <span class="pull-left"></span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix">ssssssssssssssss</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"></div>
                                <div>推荐位数</div>
                            </div>
                        </div>
                    </div>
                    <a href="/admin.php?c=position">
                        <div class="panel-footer">
                            <span class="pull-left">查看</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>




    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<!-- Morris Charts JavaScript -->

</div>
    <!-- /#wrapper -->

<script src="/Public/js/admin/common.js"></script>



</body>

</html>