<?php
$schools = [
	[
		"name"     => "Sardar Vallabhbhai National Institute of Technology, Surat",
		"degree"   => "BTech in Electronics and Communication",
		// "location" => "",
		"year"     => "2017-2021",
		"CGPA/Percentage"     => "CGPA - 9.30"
		// "logo"     => "https://myfullsailjourney.files.wordpress.com/2013/04/fullsail1.png"
	],
	[
		"name"     => "Guru Teg Bahadur, Karnal",
		"degree"   => "	Class XII-Science",
		// "location" => "Karnal",
		"year"     => "2015-2017",
		"CGPA/Percentage"     => "Percentage - 89%"
		// "logo"     => "https://w1ww.ferris.edu/HTMLS/administration/advance/standards/logos/thumbnails/01-BoxFlameFullColor.png"
	]
];
?>

<div class="education">
	<h3><u>Education</u></h3>
	<?php foreach ($schools as $school) : ?>
	<div class="row">
		<div class="rightCol">
			<h3><strong><?php echo $school['name']; ?></strong></h3>
			<!-- <h5><?php echo $school['degree']; ?> <span>•</span> <?php echo $school['location']; ?></h5> -->
			<h5><?php echo $school['degree']; ?>  </h5>
			<h5><?php echo $school["CGPA/Percentage"]; ?>  </h5>

		</div>
		<div class="rightCol2">
			<!-- <div class="schoolLogo"><img src="<?php echo $school['logo']; ?>" alt="<?php echo $school['name']; ?> Logo" /></div> -->
		</div>
	</div>
	<?php endforeach; ?>
</div>
<hr />
