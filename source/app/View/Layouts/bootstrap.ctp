<?php echo $this->Html->docType('html5'); ?>
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
		<title><?php echo $this->fetch('title'); ?> | <?php echo env(APP_NAME); ?></title>

	<?php
	/**
	 * Common stylehseets
	 */
		$this->Html->css([
			'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css',
			'styles',
			'/components/remodal/dist/remodal.css',
			'/components/remodal/dist/remodal-default-theme.css',
			'https://cdnjs.cloudflare.com/ajax/libs/octicons/2.4.1/octicons.min.css'
		], ['inline' => false]);

	/**
	 * Common scripts
	 */
		$this->Html->script([
			'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js',
			'common.jquery',
			'/components/remodal/dist/remodal.min.js'
		], ['block' => 'script']);

		$appDescription = 'Lookup repository information from GitHub using this free, open source CakePHP app.';

		echo $this->Html->meta(['name' => 'application-name', 'content' => env('APP_NAME')], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'author', 'content' => 'Chris Vogt'], null, ['inline' => false]);
		echo $this->Html->meta('description', h($appDescription), ['inline' => false]);
		echo $this->Html->meta('keywords', 'GitHub, repository, repo, source code, repository information', ['inline' => false]);

		echo $this->Html->meta(['name' => 'og:title', 'content' => 'Kildekoden repository browser'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'og:description', 'content' => h($appDescription)], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'og:image', 'content' => 'https://cdn.rawgit.com/chrisvogt/kildekoden/master/source/webroot/img/screenshot.home.jpg'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'og:image', 'content' => 'https://cdn.rawgit.com/chrisvogt/kildekoden/master/source/webroot/img/screenshot.result.jpg'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'og:type', 'content' => 'website'], null, ['inline' => false]);

		echo $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'twitter:title', 'content' => 'Kildekoden repository browser'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'twitter:creator', 'content' => '@C1V0'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'twitter:site', 'content' => '@kildekoden'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'twitter:description', 'content' => h($appDescription)], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'twitter:image', 'content' => 'https://cdn.rawgit.com/chrisvogt/kildekoden/master/source/webroot/img/screenshot.home.jpg'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'twitter:site', 'content' => '<?php echo Router::url( $this->here, true ); ?>'], null, ['inline' => false]);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script'); ?>

		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#603cba">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
		<meta name="theme-color" content="#6c5285">

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

		<?php echo $this->element('modal/about'); ?>
    <?php echo $this->fetch('scriptBottom'); ?>
    <?php if (env('ANALYTICS')) echo $this->element('analytics'); ?>
  </body>
</html>
