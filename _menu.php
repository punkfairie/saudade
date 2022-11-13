<?php
	// *** *** defining the archive root *** ***
	// detect if we're using https or not
	if (isset($_SERVER['HTTPS'])) {
		$http = 'https://';
	} else {
		$http = 'http://';
	}

	// put it together
	$archive_root = $http . $_SERVER['HTTP_HOST'];

	// *** *** defining the sub-site root *** ***
	// get the current directory
	$path = getcwd();

	// if it's a windows path, fix that mf (aka ugh windows)
	if (str_contains($path, "\\")) {
		$better_path = str_replace("\\", '/', $path);
	} else {
		$better_path = $path;
	}

	// explode the path into an array
	$ex_path = explode('/', $better_path);

	// find the archive root
	$root_pos = array_search('saudade', $ex_path);

	// voila! we have the site root!
	$site_name = $ex_path[$root_pos + 1];
	$site_root = $archive_root . '/'. $site_name;

	$config = $site_name . '/' . 'vars.php';
	include $config;
?>

<div id="archive-menu" class="<?= isset($wayback) ? 'wayback' : 'no-wayback' ?>" style="border:
1px solid; background-color: inherit; background-image: inherit; color: inherit;">
	<span id="hrt">♥</span>
	<a href="<?php echo $archive_root; ?>/index.php" target="_top">Home</a>
	<a href="<?php echo $site_root; ?>/CHANGELOG.txt" target="_blank">Changelog</a>
	<?php if (isset($wayback)) : ?>
		<a href="<?= $wayback ?>" target="_blank">Wayback Capture</a>
	<?php endif; ?>
</div>