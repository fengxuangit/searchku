<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"><!--<![endif]--> 
    <head>
        <meta charset="utf-8">
        <title>Dashboard - Akira</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/searchku/Public/css/bootstrap.min.css" rel="stylesheet">
        <link href="/searchku/Public/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="/searchku/Public/css/site.css" rel="stylesheet">
        <script src="/searchku/Public/js/jquery.min.js"></script>
        <script src="/searchku/Public/js/bootstrap.min.js"></script>
        <script src="/searchku/Public/js/site.js"></script>
    </head>


	<body>
		<div class="container">
			<div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#">XFREE</a>
                        <div class="nav-collapse">
                            <ul class="nav">
                                <li class="active">
                                    <a href="index.html">管理主界面</a>
                                </li>
                                <li>
                                    <a href="settings.htm">Account Settings</a>
                                </li>
                                <li>
                                    <a href="help.htm">Help</a>
                                </li>
                                <li class="dropdown">
                                    <a href="help.htm" class="dropdown-toggle" data-toggle="dropdown">Tours <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="help.htm">Introduction Tour</a>
                                        </li>
                                        <li>
                                            <a href="help.htm">Project Organisation</a>
                                        </li>
                                        <li>
                                            <a href="help.htm">Task Assignment</a>
                                        </li>
                                        <li>
                                            <a href="help.htm">Access Permissions</a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li class="nav-header">
                                            Files
                                        </li>
                                        <li>
                                            <a href="help.htm">How to upload multiple files</a>
                                        </li>
                                        <li>
                                            <a href="help.htm">Using file version</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <form class="navbar-search pull-left" action="">
                                <input type="text" class="search-query span2" placeholder="Search" />
                            </form>
                            <ul class="nav pull-right">
                                <li>
                                    <a href="profile.htm"><?php echo ($username); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Login/logout', '', '');?>">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
		</div>
			
<div class="row">
                <div class="span3">
                    <div class="well" style="padding: 8px 0;">
                        <ul class="nav nav-list">
                            <li class="nav-header">
                                管理面板
                            </li>
                            <li class="active">
                                <a href="<?php echo U('Index/index', '', '');?>"><i class="icon-white icon-home"></i> 系统状态</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Manage/info', '', '');?>"><i class="icon-folder-open"></i> 任务相关</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Manage/tasks', '', '');?>"><i class="icon-check"></i> Tasks</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-envelope"></i> Messages</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-file"></i> Files</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-list-alt"></i> Activity</a>
                            </li>
                            <li class="nav-header">
                                Your Account
                            </li>
                            <li>
                                <a href="#"><i class="icon-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-cog"></i> Settings</a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="#"><i class="icon-info-sign"></i> Help</a>
                            </li>
                            <li class="nav-header">
                                Bonus Templates
                            </li>
                            <li>
                                <a href="#"><i class="icon-picture"></i> Gallery</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-stop"></i> Blank Slate</a>
                            </li>
                        </ul>
                    </div>
                </div>

                
                
            <div class="span9">
                    <h1>
                        系统状态
                    </h1>
                    <div class="well summary">
                        <ul>
                            <li>
                                <a href="#"><span class="count">3</span> 条数据</a>
                            </li>
                            <li>
                                <a href="#"><span class="count">27</span> 个数据库</a>
                            </li>
                            <li>
                                <a href="#"><span class="count">7</span> 个用户</a>
                            </li>
                            <li class="last">
                                <a href="#"><span class="count">5</span> Files</a>
                            </li>
                        </ul>
                    </div>
                    <h2>
                        Recent Activity
                    </h2>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Project
                                </th>
                                <th>
                                    Client
                                </th>
                                <th>
                                    Type
                                </th>
                                <th>
                                    Date
                                </th>
                                <th>
                                    View
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Nike.com Redesign
                                </td>
                                <td>
                                    Monsters Inc
                                </td>
                                <td>
                                    New Task
                                </td>
                                <td>
                                    4 days ago
                                </td>
                                <td>
                                    <a href="#" class="view-link">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nike.com Redesign
                                </td>
                                <td>
                                    Monsters Inc
                                </td>
                                <td>
                                    New Message
                                </td>
                                <td>
                                    5 days ago
                                </td>
                                <td>
                                    <a href="#" class="view-link">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nike.com Redesign
                                </td>
                                <td>
                                    Monsters Inc
                                </td>
                                <td>
                                    New Project
                                </td>
                                <td>
                                    5 days ago
                                </td>
                                <td>
                                    <a href="#" class="view-link">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Twitter Server Consulting
                                </td>
                                <td>
                                    Bad Robot
                                </td>
                                <td>
                                    New Task
                                </td>
                                <td>
                                    6 days ago
                                </td>
                                <td>
                                    <a href="#" class="view-link">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Childrens Book Illustration
                                </td>
                                <td>
                                    Evil Genius
                                </td>
                                <td>
                                    New Message
                                </td>
                                <td>
                                    9 days ago
                                </td>
                                <td>
                                    <a href="#" class="view-link">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Twitter Server Consulting
                                </td>
                                <td>
                                    Bad Robot
                                </td>
                                <td>
                                    New Task
                                </td>
                                <td>
                                    16 days ago
                                </td>
                                <td>
                                    <a href="#" class="view-link">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Twitter Server Consulting
                                </td>
                                <td>
                                    Bad Robot
                                </td>
                                <td>
                                    New Project
                                </td>
                                <td>
                                    16 days ago
                                </td>
                                <td>
                                    <a href="#" class="view-link">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Twitter Server Proposal
                                </td>
                                <td>
                                    Bad Robot
                                </td>
                                <td>
                                    Completed Project
                                </td>
                                <td>
                                    20 days ago
                                </td>
                                <td>
                                    <a href="#" class="view-link">View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="pager">
                        <li class="next">
                            <a href="activity.htm">More &rarr;</a>
                        </li>
                    </ul>
                    <ul class="pager">
                        <li class="next">
                            More Templates <a href="http://www.mycodes.net/" target="_blank">源码之家</a> <a href="http://www.mycodes.net/153/" title="网页模板" target="_blank">网页模板</a>
                        </li>
                    </ul>
                </div>
		</div>
		
	</body>
</html>