<?php
$CONFIG['template'] = './templates/bash_template/bash_template.php';

// Database
$CONFIG['phptype'] = 'mysql';
$CONFIG['hostspec'] = 'localhost';
$CONFIG['port'] = '';
$CONFIG['socket'] = '';
$CONFIG['database'] = 'rashdb';
$CONFIG['username'] = 'root';
$CONFIG['password'] = '';

// Site info
$CONFIG['site_short_title'] = 'nhqdb';
$CONFIG['site_long_title'] = '#NetHack Quote Database';
$CONFIG['rss_url'] = 'http://127.0.0.1';
$CONFIG['rss_title'] = 'Rash QDB';
$CONFIG['rss_desc'] = 'Quote Database for the IRC channel';
$CONFIG['language'] = 'US-english';

// Misc configs
$CONFIG['quote_limit'] = 10;	// how many quotes ?browse displays at once
$CONFIG['page_limit'] = 5;	// how many page numbers to show

// No need to change these
$CONFIG['GET_SEPARATOR'] = ini_get('arg_separator.output');
$CONFIG['GET_SEPARATOR_HTML'] = htmlspecialchars($CONFIG['GET_SEPARATOR'], ENT_QUOTES);