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

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<style type="text/css">
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
