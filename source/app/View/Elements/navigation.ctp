<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php echo $this->Html->link('<span class="mega-octicon octicon-telescope"></span> <strong>GHREPO</strong>.info', '/', ['escape' => false, 'class' => 'navbar-brand']); ?>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#modalAbout" title="About GHREPO.info">About</a></li>
			</ul>
			<?php
			echo $this->Form->create('lookup', [
		    'url' 	=> ['controller' => 'commits', 'action' => 'lookup'],
		    'class' => 'navbar-form navbar-right',
		    'id' 		=> 'lookupDisplayForm',
		    'inputDefaults' => [
		    	'label' => false,
		    	'div'		=> false
		    ]
			]);
			echo $this->Form->input('userrepo', [
				'class' 			=> 'form-control',
				'placeholder' => 'Lookup repository...',
				'data-toggle' => 'tooltip',
				'data-placement' => 'bottom',
				'title'				=> 'Format: username/project'
			]);
			echo $this->Form->end(); ?>
	</div>
</div>
</nav>
