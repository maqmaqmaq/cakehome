<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $title_for_layout; ?> - <?php echo Configure::read('Application.name') ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<?php echo $this->Html->css(array('bootstrap.min', 'font-awesome/css/font-awesome.min')); ?>
	<?php if (AuthComponent::user('id')) echo $this->Html->css('sb-admin'); ?>
	<?php echo $this->Html->css('style');?>
	 <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	 <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	 <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
	<?php echo $this->CakeStrap->automaticCss(); ?>
	<?php echo $this->Html->script('lib/modernizr') ?>
</head>