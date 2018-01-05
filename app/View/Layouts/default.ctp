<?php echo $this->element('meta');?>
<body class="<?php echo $this->params->params['controller'].'_'.$this->params->params['action']?>">
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser
	today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better
	experience this site.</p>
<![endif]-->
<div class="container tlo pb20 cien">
<?php echo $this->element('nav')?>
<?php echo $this->Session->flash();?>
<?php /*<div id="wrapper">
	<div id="page-wrapper">
		<?php echo $this->Session->flash(); ?>
	</div>
	<!-- /#page-wrapper -->
</div> */ ?>

	<?php echo $this->fetch('content'); ?>
<?php /*</div>
<div class="container tlo pb20"> */ ?>
	<?php echo $this->element('footer');?>
</div>
<!-- /#wrapper -->

<?php echo $this->element('js');?>
</body>
</html>
