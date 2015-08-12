<?php
/**
 * Recent commits template
 *
 * @author Chris Vogt <mail@chrisvogt.me>
 */
$this->Html->script([ // scripts for this view
		'https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js',
		'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js',
		'repository.jquery'
	],
	array('block' => 'scriptBottom'));
?>
<script>
	var endpoint = '<?php echo $endpoint; ?>';
	var username = '<?php echo $username; ?>';
	var repository = '<?php echo $repository; ?>';
</script>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
			</ul>
		</div>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<h1 class="page-header">
				<span class="mega-octicon octicon-package"></span>
				<a href="https://github.com/<?php echo $username; ?>" title="<?php echo $username; ?> on GitHub"><?php echo $username; ?></a>
				/
				<a href="https://github.com/<?php echo $username . DS . $repository; ?>" title="<?php echo $repository; ?> on GitHub"><?php echo $repository; ?></a>
			</h1>
			<div class="row stats">
				<div class="col-xs-6 col-sm-3 stat stat-watchers">
					<a href="https://github.com/<?php echo $username . DS . $repository; ?>/watchers" title="Watchers - <?php echo $username . '/' . $repository; ?> on GitHub" class="btn btn-default btn-block hvr-underline-from-center">
						<h4><span class="mega-octicon octicon-eye"></span></h4>
						<span class="text-muted"><span class="count">#</span> Watchers</span>
					</a>
				</div>
				<div class="col-xs-6 col-sm-3 stat stat-stars">
					<a href="https://github.com/<?php echo $username . DS . $repository; ?>/stargazers" title="Stargazers - <?php echo $username . '/' . $repository; ?> on GitHub" class="btn btn-default btn-block hvr-underline-from-center">
						<h4><span class="mega-octicon octicon-star"></span></h4>
						<span class="text-muted"><span class="count">#</span> Stars</span>
					</a>
				</div>
				<div class="col-xs-6 col-sm-3 stat stat-forks">
					<a href="https://github.com/<?php echo $username . DS . $repository; ?>/network" title="Forks - <?php echo $username . '/' . $repository; ?> on GitHub" class="btn btn-default btn-block hvr-underline-from-center">
						<h4><span class="mega-octicon octicon-repo-forked"></span></h4>
						<span class="text-muted"><span class="count">#</span> Forks</span>
					</a>
				</div>
				<div class="col-xs-6 col-sm-3 stat stat-issues">
					<a href="https://github.com/<?php echo $username . DS . $repository; ?>/issues" title="Issues - <?php echo $username . '/' . $repository; ?> on GitHub" class="btn btn-default btn-block hvr-underline-from-center">
						<h4><span class="mega-octicon octicon-issue-opened"></span></h4>
						<span class="text-muted"><span class="count">#</span> Issues</span>
					</a>
				</div>
			</div>

			<h2 class="sub-header">Recent commits</h2>
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>SHA</th>
							<th>Author</th>
							<th>Timestamp</th>
							<th>Message</th>
						</tr>
					</thead>
					<tbody id="commits">
						<tr>
							<td colspan="4">
								<div class="loader">Loading...</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
