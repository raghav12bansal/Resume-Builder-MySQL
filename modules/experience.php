<?php
$jobs = $conn->query("SELECT * FROM experience");
$jobs = $jobs->fetchAll();
?>
<div class="experience">
	<h3><u>Experience</u></h3>
	<?php foreach ($jobs as $job) : ?>
		<div class="row">
			<div class="leftCol">
				<h4><?php echo $job['year']; ?></h4>
			</div>
			<div class="rightCol">
				<h4><?php echo $job['position']; ?></h4>
				<h5><h3><strong><?php echo $job['company']; ?> </strong></h3><span>•</span> <?php echo $job['location']; ?></h5>
				<p><?php echo $job['description']; ?></p>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<hr/>
