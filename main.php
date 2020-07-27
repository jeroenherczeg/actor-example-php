<?php

print "Starting ...\n";
print "ENV vars:\n";
print_r($_ENV);
print "Fetching http://example.com ...\n";
$input = file_get_contents('https://api.apify.com/v2/key-value-stores/' . $_ENV['APIFY_DEFAULT_KEY_VALUE_STORE_ID'] . '/records/' . $_ENV['APIFY_INPUT_KEY']);
var_dump($input);

print "I am done!\n";
