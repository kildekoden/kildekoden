<?php
/**
 * Recent commits template
 *
 * @author Chris Vogt <mail@chrisvogt.me>
 */
$this->Html->script([
		'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
		'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js',
		'https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js',
		'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js',
		'repository.jquery'
	],
	array('block' => 'scriptBottom'));
$this->Html->css([
		'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css',
		'styles',
		'https://cdnjs.cloudflare.com/ajax/libs/octicons/2.4.1/octicons.min.css',
		'https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css'
	], ['inline' => false]);
?>
<script>var endpoint = '<?php echo $endpoint; ?>';</script>
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
        <a href="https://github.com/joyent" title="Joyent on GitHub"><?php echo $username; ?></a>
        /
        <a href="https://github.com/joyent/node" title="Node on GitHub"><?php echo $repository; ?></a>
      </h1>
      <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="https://github.com/joyent/node/watchers" title="Watchers - Joyent/Node on GitHub" class="btn btn-default btn-block hvr-underline-from-center">
            <h4><span class="mega-octicon octicon-eye"></span></h4>
            <span class="text-muted"><span class="count">#</span> Watchers</span>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="https://github.com/joyent/node/stargazers" title="Stargazers - Joyent/Node on GitHub" class="btn btn-default btn-block hvr-underline-from-center">
            <h4><span class="mega-octicon octicon-star"></span></h4>
            <span class="text-muted"><span class="count">#</span> Stars</span>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="https://github.com/joyent/node/network" title="Forks - Joyent/Node on GitHub" class="btn btn-default btn-block hvr-underline-from-center">
            <h4><span class="mega-octicon octicon-repo-forked"></span></h4>
            <span class="text-muted"><span class="count">#</span> Forks</span>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="https://github.com/joyent/node/issues" title="Issues - Joyent/Node on GitHub" class="btn btn-default btn-block hvr-underline-from-center">
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
