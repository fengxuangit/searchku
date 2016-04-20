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
                                <a href="<?php echo U('Manage/info', '', '');?>"><i class="icon-folder-open"></i> Projects</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Manage/tasks', '', '');?>"><i class="icon-check"></i> Tasks</a>
                            </li>
                            <li>
                                <a href="messages.htm"><i class="icon-envelope"></i> Messages</a>
                            </li>
                            <li>
                                <a href="files.htm"><i class="icon-file"></i> Files</a>
                            </li>
                            <li>
                                <a href="activity.htm"><i class="icon-list-alt"></i> Activity</a>
                            </li>
                            <li class="nav-header">
                                Your Account
                            </li>
                            <li>
                                <a href="profile.htm"><i class="icon-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="settings.htm"><i class="icon-cog"></i> Settings</a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="help.htm"><i class="icon-info-sign"></i> Help</a>
                            </li>
                            <li class="nav-header">
                                Bonus Templates
                            </li>
                            <li>
                                <a href="gallery.htm"><i class="icon-picture"></i> Gallery</a>
                            </li>
                            <li>
                                <a href="blank.htm"><i class="icon-stop"></i> Blank Slate</a>
                            </li>
                        </ul>
                    </div>
                </div>

                
                
				<div class="span9">
					<h1>
						Tasks
					</h1>
					<ul class="tasks zebra-list">
						<li>
							<input type="checkbox" /> <span class="title">Thank Bill for loaning his tools last weekend</span> <span class="meta">Created <em>1 week ago</em> by <em>Jill</em></span>
						</li>
						<li>
							<input type="checkbox" /> <span class="title">Pay internet bill</span> <span class="meta">Created <em>1 week ago</em> by <em>Jill</em></span>
						</li>
						<li>
							<input type="checkbox" /> <span class="title">Finish reading Game of Thrones</span> <span class="meta">Created <em>1 week ago</em> by <em>Jill</em></span>
						</li>
						<li>
							<input type="checkbox" /> <span class="title">Buy sunscreen for the next summer day trip</span> <span class="meta">Created <em>1 week ago</em> by <em>Jill</em></span>
						</li>
						<li>
							<input type="checkbox" /> <span class="title">Send a birthday card to Frankie</span> <span class="meta">Created <em>1 week ago</em> by <em>Jill</em></span>
						</li>
					</ul>
					<a class="toggle-link" href="#new-task"><i class="icon-plus"></i> New Task</a>
					<form id="new-task" class="form-horizontal hidden">
						<fieldset>
							<legend>New Task</legend>
							<div class="control-group">
								<label class="control-label" for="textarea">Task Details</label>
								<div class="controls">
									<textarea class="input-xlarge" id="textarea" rows="2"></textarea>
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Create</button> <button class="btn">Cancel</button>
							</div>
						</fieldset>
					</form>
					<h2>
						Completed Tasks
					</h2>
					<ul class="tasks done">
						<li>
							<i class="icon-ok"></i> <span class="title">Wash the Car</span> <span class="meta">Completed <em>2 days ago</em> by <em>John</em></span>
						</li>
						<li>
							<i class="icon-ok"></i> <span class="title">Call the plumber</span> <span class="meta">Completed <em>5 days ago</em> by <em>John</em></span>
						</li>
						<li>
							<i class="icon-ok"></i> <span class="title">Try that new cookie recipe</span> <span class="meta">Completed <em>2 weeks ago</em> by <em>Jill</em></span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>