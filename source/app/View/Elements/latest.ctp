  <aside id="latest">
		<strong>Recent lookups:</strong>
		<ul><?php
			foreach ($latest as $key => $project) {
				extract($project['Project']);
				echo "<li>" . "\n";
				echo ($provider === 'gh') ? '<span class="octicon octicon-mark-github"></span> ' : '';
				echo $this->Html->link($username . '/' . $repository, '/gh/' . $username . DS . $repository);
				echo "</li>" . "\n";
			} ?>
		</ul>
	</aside>
