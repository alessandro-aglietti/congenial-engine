<?php

error_reporting(E_ALL);

$broken_serialized = 'a:5:{i:0;s:69:"/home/web/www.chevalfirenze.com/wp-content/themes/aurum/style.css";i:1;s:122:"/home/web/www.chevalfirenze.com/www/wp-content/plugins/woocommerce-pdf-invoices-packing-slips/templates/Simple/invoice.php";i:2;s:136:"/home/web/www.chevalfirenze.com/www/wp-content/plugins/woocommerce-pdf-invoices-packing-slips/templates/Simple/html-document-wrapper.php";i:3;s:115:"/home/web/www.chevalfirenze.com/www/wp-content/plugins/woocommerce-pdf-invoices-packing-slips/changelog-archive.txt";i:4;s:105:"/home/web/www.chevalfirenze.com/www/wp-content/plugins/woocommerce-pdf-invoices-packing-slips/license.txt";}';

// unserialize($broken_serialized);

// s:(\d+):"(\/home\/web[^"]+)"
$matches = null;
$match = preg_match_all('#s:(\d+):"(\/home\/web[^"]+)"#', $broken_serialized, $matches);

$lookups = $matches[0];
$counts = $matches[1];
$urls = $matches[2];

for($i = 0; $i < count($lookups); $i++) {
    $lookup = $lookups[$i];
    $current_count = $counts[$i];
    //echo "i: ${i}; current_count: ${current_count}; ${lookup}\n";
    $new_count = strlen($urls[$i]);
    $new_lookup = str_replace("s:${current_count}", "s:${new_count}", $lookup);
    $broken_serialized = str_replace($lookup, $new_lookup, $broken_serialized);
}

unserialize($broken_serialized);

echo "#### nuovo valore serializzato non rotto\n\n";
echo $broken_serialized;