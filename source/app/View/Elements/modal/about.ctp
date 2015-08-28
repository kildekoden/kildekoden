<div class="remodal" data-remodal-id="modalAbout">
	<button data-remodal-action="close" class="remodal-close"></button>
	<img src="https://cdn.rawgit.com/chrisvogt/chrisvogt.github.io/develop/img/favicon-152.png" class="img img-responsive center-block" width="120" alt="logo">
	<h2>About GHREPO.info</h2>
	<p class="text-left">
		This is an open source hobby project by <a href="https://twitter.com/c1v0" title="Chris Vogt on Twitter">@C1V0</a>. The application core is powered by CakePHP - it retrieves, processes, and caches the data before feeding it to a jQuery-powered front end that asynchronously loads the aforementioned repository data.</p>
	<hr>
	<p>
		<?php echo $this->Html->link('View source on <span class="octicon octicon-logo-github"></span>', '//github.com/chrisvogt/ghrepo-info', ['title' => 'gh-repo on GitHub', 'class' => 'btn btn-info', 'escape' => false]); ?>
		<?php echo $this->Html->link('About the developer <span class="octicon octicon-person"></span>', '//chrisvogt.me', ['title' => 'CHRISVOGT.me', 'class' => 'btn btn-primary', 'escape' => false]); ?>
	</p>
</div>
<script>
$(function() {
	var inst = $('[data-remodal-id=modal]').remodal();
});
</script>
