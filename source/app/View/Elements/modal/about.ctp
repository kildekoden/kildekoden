<div class="remodal" data-remodal-id="modalAbout">
	<button data-remodal-action="close" class="remodal-close"></button>
	<?php echo $this->Html->image('logo.png', ['class' => 'img img-responsive center-block', 'alt' => 'Kildekoden logo', 'id' => 'logo']); ?>
	<h2>About Kildekoden</h2>
	<p class="text-center">
		An open source repository viewer by <a href="https://twitter.com/c1v0" title="Chris Vogt on Twitter">@c1v0</a>. Built with CakePHP and jQuery.</p>
	<hr>
	<p>
		<?php echo $this->Html->link('View source on <span class="octicon octicon-logo-github"></span>', '//github.com/kildekoden/kildekoden', ['title' => 'Kildekoden on GitHub', 'class' => 'btn btn-info', 'escape' => false]); ?>
		<?php echo $this->Html->link('About the developer <span class="octicon octicon-person"></span>', '//chrisvogt.me', ['title' => 'CHRISVOGT.me', 'class' => 'btn btn-primary', 'escape' => false]); ?>
	</p>
</div>
<script>
$(function() {
	var inst = $('[data-remodal-id=modal]').remodal();
});
</script>
