<?php
	// get the current page
	$page = basename($_SERVER["SCRIPT_FILENAME"], '.php');

	// set the common parts of the wayback link once
	$wburl = 'https://web.archive.org/web/';
	$url   = '/http://home.earthlink.net/~wordfire/';

	// set the part that changes per page
	$links = array(
		'index'    => '20050913215113',
		'play1'    => '20050911044611',
		'play2'    => '20050911220624',
		'play3'    => '20050912163724',
		'possums'  => '20050905152820',
		'play4'    => '20050912184232',
		'sound'    => '20050413012516',
		'precious' => '20050413012604'
	);

	$source_page = array(
		'play1'    => 'id1',
		'play2'    => 'id5',
		'play3'    => 'id6',
		'possums'  => 'id12',
		'play4'    => 'id13',
		'sound'    => 'id14',
		'precious' => 'id2'
	);

	// put it all together
	// the index filename matches the source, so omit finding that if we're on that page
	// otherwise: 
	// wayback url + grab correct capture int from array + site url + source page name + ext
	if ($page == 'index') {
		$wayback = $wburl . $links[$page] . $url;
	} else {
		$wayback = $wburl . $links[$page] . $url . $source_page[$page] . '.html';
	}
