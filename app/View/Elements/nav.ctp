<?php if(!Configure::read('Application.maintenance')){?>
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar <?php if(AuthComponent::user('id'))echo "navbar-inverse ";?>navbar-static-top" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php /*echo $this->Html->link(
						Configure::read('Application.name'),
						AuthComponent::user('id') ? "/home" : "/"
						, array('class' => 'navbar-brand'))*/ ?>
				</div>
				<?php if(!AuthComponent::user('id')){?>
			          <ul class="nav navbar-nav">
			          	<li class="<?php echo $this->params->controller == 'posts' && $this->params->action == 'index' ? 'active' : '' ?>">
			              <?php echo $this->Html->link(__('Teksty'),'/',array('class'=>'eff')) ?>
			            </li>
			          	<li class="<?php echo $this->params->controller == 'pages' && $this->params->action == 'display' && $this->params->pass[0] == 'tools' ? 'active' : '' ?>">
			              <?php echo $this->Html->link(__('Narzędzia'),'/tools',array('class'=>'eff')) ?>
			            </li>
			            <li class="<?php echo $this->params->controller == 'pages' && $this->params->action == 'display' && $this->params->pass[0] == 'about' ? 'active' : '' ?>">
			              <?php echo $this->Html->link(__('O mnie'),'/about',array('class'=>'eff')) ?>
			            </li>
					  </ul>
				<?php }?>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">

					<?php if(AuthComponent::user('id')){?>
						<ul class="nav navbar-inverse navbar-nav side-nav">
							<li class="<?php echo $this->params->params['controller'] == 'pages' ? 'active' : ''?>"><a href="<?php echo $this->params->webroot?>admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
							<li class="dropdown <?php echo $this->params->params['controller'] == 'users' ? 'active' : ''?>">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Users <b
										class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo $this->params->webroot?>admin/users"><i class="fa fa-list"></i> List</a></li>
									<li><a href="<?php echo $this->params->webroot?>users/add"><i class="fa fa-plus"></i> Register new user</a></li>
								</ul>
							</li>
							<li class="dropdown <?php echo $this->params->params['controller'] == 'posts' ? 'active' : ''?>">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Posts <b
										class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo $this->params->webroot?>admin/posts"><i class="fa fa-list"></i> List</a></li>
									<li><a href="<?php echo $this->params->webroot?>admin/posts/edit"><i class="fa fa-plus"></i> Add new post</a></li>
								</ul>
							</li>
			<!--				<li><a href="tables.html"><i class="fa fa-list"></i> Activity</a></li>-->
						</ul>
					<?php } ?>



					<?php if(AuthComponent::user('id')){?>

					<ul class="nav navbar-nav navbar-right navbar-user">
						<li class="dropdown user-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo AuthComponent::user('username')?> <b
									class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $this->params->webroot?>me"><i class="fa fa-user"></i> Profile</a></li>
								<li><a href="<?php echo $this->params->webroot?>me/edit"><i class="fa fa-gear"></i> Settings</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo $this->params->webroot?>logout"><i class="fa fa-power-off"></i> Log Out</a></li>
							</ul>
						</li>
					</ul>
					<?php }?>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
<?php } ?>