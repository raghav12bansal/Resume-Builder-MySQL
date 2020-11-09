<?php
$links = [
	"linkedin" => "https://www.linkedin.com/in/raghav-bansal-16415b179/",
	"Github" => "https://github.com/braghav968"
];
?>
<div class="links">
	<h3><u>Links</u></h3>
	<div class="links-list">
	<?php foreach ($links as $name => $url) : ?>
		<div class="link-item">
			<h4><i class="fa fa-lg fa-<?php echo $name; ?>" aria-hidden="true"></i></h4>
			<h5><a href="<?php echo $url; ?>"><?php echo $url; ?></a></h5>
		</div>
	<?php endforeach; ?>
	</div>
</div>
