<?php

// get the current page
$page = basename($_SERVER["SCRIPT_FILENAME"], '.php');

// set the common parts of the wayback link once
$wburl = 'https://web.archive.org/web/';
$url   = '/http://www.angelfire.com/moon2/petzzoo2/';

// set the part that changes per page
$links = array(
	'index'    => '20200510220014',
	'felinez'  => '20200609155611',
	'c_wildz'  => '20190805174324'
);

// map new filenames to old
$source_page = array(
	'felinez'      => 'id29',
	'c_wildz'      => 'id22',
	'c_fantasyz'   => 'id30',
	'forestfolk'   => 'id50',
	'catzdogz'     => 'id48',
	'caninez'      => 'id33',
	'd_wildz'      => 'id23',
	'd_fantasyz'   => 'id39',
	'clothez-toyz' => 'id24',
	'skinz'        => 'id25',
	'playscenes'   => 'id26',
	'hexing'       => 'id27',
	'codes'        => 'id35',
	'offset'       => 'id28',
	'links'        => 'id37'
);

// put it all together
// the index doesn't have a filename in the url, so omit that if we're on that page
// otherwise: 
// 		wayback url + grab correct capture int from array + site url + source page name + ext
if ($page == 'index') {
	$wayback = $wburl . $links[$page] . $url;
} else {
	$wayback = $wburl . $links[$page] . $url . $source_page[$page] . '.htm';
}
