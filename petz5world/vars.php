<?php
	// get the current page
	$page = basename($_SERVER["SCRIPT_FILENAME"], '.php');

	// set the common parts of the wayback link once
	$wburl = 'https://web.archive.org/web/';
	$url   = '/http://www.angelfire.com/pa5/petz5world/';

	// set the part that changes per page
	$links = array(
		'index'    => '20190803215024',
		'home'     => '20111128022657',
		'litterz1' => '20111129041648',
		'litterz2' => '20111129041653',
		'litterz3' => '20111129041653',
		'litterz4' => '20111129041653',
		'litterz5' => '20111129041653',
		'skinz'    => '20111129041638',
		'skinz2'   => '20111129041703',
		'breeds'   => '20111128022652',
		'breeds2'  => '20111129041643'
	);

	// put it all together
	// the index doesn't have a filename at the end of the url, so omit that if we're on that page
	// otherwise: wayback url + grab correct capture int from array + site url + page name + ext
	if ($page == 'index') {
		$wayback = $wburl . $links[$page] . $url;
	} else {
		$wayback = $wburl . $links[$page] . $url . $page . '.html';
	}
