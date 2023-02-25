<?php

error_reporting(E_ALL);

$broken_serialized = 'a:5:{i:0;s:69:\"/home/web/www.chevalfirenze.com/www/wp-content/themes/aurum/style.css\";i:1;s:122:\"/home/web/www.chevalfirenze.com/www/wp-content/plugins/woocommerce-pdf-invoices-packing-slips/templates/Simple/invoice.php\";i:2;s:136:\"/home/web/www.chevalfirenze.com/www/wp-content/plugins/woocommerce-pdf-invoices-packing-slips/templates/Simple/html-document-wrapper.php\";i:3;s:115:\"/home/web/www.chevalfirenze.com/www/wp-content/plugins/woocommerce-pdf-invoices-packing-slips/changelog-archive.txt\";i:4;s:105:\"/home/web/www.chevalfirenze.com/www/wp-content/plugins/woocommerce-pdf-invoices-packing-slips/license.txt\";}';

unserialize($broken_serialized);
