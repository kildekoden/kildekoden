  <aside id="latest">
		<strong>Latest searches:</strong>
		<ul><?php
			foreach ($latest as $key => $project) {
				extract($project['Project']);
				echo "<li>" . "\n";
				echo $this->Html->link($username . '/' . $repository, '/gh/' . $username . DS . $repository);
				echo "</li>" . "\n";
			} ?>
		</ul>
	</aside>
