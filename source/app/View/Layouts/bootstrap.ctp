<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $this->Html->charset(); ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--
				brought to you by...
	 ██████╗ ██╗██╗   ██╗ ██████╗
	██╔════╝███║██║   ██║██╔═████╗
	██║     ╚██║██║   ██║██║██╔██║
	██║      ██║╚██╗ ██╔╝████╔╝██║
	╚██████╗ ██║ ╚████╔╝ ╚██████╔╝
	 ╚═════╝ ╚═╝  ╚═══╝   ╚═════╝
			 chrisvogt.me | @c1v0
		 -->
		<meta name="description" content="An example CakePHP project by Chris Vogt.">
		<meta name="author" content="Chris Vogt">
		<?php echo $this->Html->meta('icon'); ?>

		<title><?php echo $this->fetch('title'); ?></title>

	<?php
		echo $this->Html->meta('icon');

		$this->Html->script([
			'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js',
			'common.jquery'
		], ['block' => 'script']);

		$this->Html->css([
			'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css',
			'styles',
			'https://cdnjs.cloudflare.com/ajax/libs/octicons/2.4.1/octicons.min.css',
			'https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css'
		], ['inline' => false]);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script'); ?>

    <!--[if lt IE 9]>
    <?php echo $this->Html->css([
    	'https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js',
    	'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'
	  ]); ?>
	<style>
		.gradient {
			 filter: none;
		}
	</style>
    <![endif]-->
	</head>

	<body>
		<?php echo $this->element('navigation'); ?>
		<?php echo $this->fetch('content'); ?>
    <?php echo $this->fetch('scriptBottom'); ?>
  </body>
</html>
