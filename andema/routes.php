<?php
// Mendapatkan URL yang diminta
$requested_url = $_SERVER['REQUEST_URI'];

// Mendapatkan alamat IP pengunjung
$ip_address = $_SERVER['REMOTE_ADDR'];

// Mendapatkan tanggal dan waktu saat ini
$timestamp = date('Y-m-d H:i:s');

// Format log yang akan disimpan
$log_message = "$timestamp - $ip_address - $requested_url\n";

// Tentukan path dan nama file log
$log_file = __DIR__ . '/url_logs.txt';

// Menulis log ke file
file_put_contents($log_file, $log_message, FILE_APPEND);
require_once __DIR__.'/router.php';

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'home.php');

// Dynamic GET. Example with 1 variable
// The $id will be available in user.php
get('/about', 'about/about.php');
get('/about/vision_and_mission', 'about/vision_and_mission/visi.php');
get('/about/board_management', 'about/board_management/board.php');
get('/about/core_values', 'about/core_values/core.php');
get('/about/achievement', 'about/achievement/achievement.php');
get('/about/download', 'about/download/download.php');
get('/about/csr', 'about/csr/csr.php');

// part name
get('/part/connect.php', 'part/connect.php');



// product page
get('/product', 'product/product.php');
get('/product/international-paint', 'product/international-paint/ip.php');

get('/product/jotun', 'product/jotun/jotun.php');
get('/product/jotun/$paging', 'product/jotun/jotun.php');

get('/product/hempel', 'product/hempel/hempel.php');
get('/product/hempel/$paging', 'product/hempel/hempel.php');
get('/product/ppg-coatings', 'product/ppg-coatings/ppg.php');
get('/product/carboline', 'product/carboline/car.php');
get('/product/carboline/$paging', 'product/carboline/car.php');
get('/product/$paint/$name', 'product/template.php');
get('/product/kcc', 'product/kcc/kcc.php');
get('/product/kcc/', 'product/kcc/kcc.php');
get('/services', 'services/services.php');
get('/galery', 'galery/galery.php');
get('/project', 'project/project.php');
get('/project/$paging', 'project/project.php');


get('/contact', 'contact/index_contact.php');
get('/contact/whatsapp', 'contact/whatsapp_link_kontak.php');
post('/contact/submit-mail', 'contact/contact.php');



// get('/jkdjfkajdfjkadjfadfjkadfjkadsfasdf/search', 'searchProduct.php');
// post('/jkdjfkajdfjkadjfadfjkadfjkadsfasdf/functionSearch', 'search.php');
// get('/tes', 'tes.html');

// Dynamic GET. Example with 2 variables
// The $name will be available in full_name.php
// The $last_name will be available in full_name.php
// In the browser point to: localhost/user/X/Y
get('/user/$name/$last_name', 'views/full_name.php');



// A route with a callback
get('/callback', function(){
  echo 'Callback executed';
});

// A route with a callback passing a variable
// To run this route, in the browser type:
// http://localhost/user/A
get('/callback/$name', function($name){
  echo "Callback executed. The name is $name";
});

// A route with a callback passing 2 variables
// To run this route, in the browser type:
// http://localhost/callback/A/B
get('/callback/$name/$last_name', function($name, $last_name){
  echo "Callback executed. The full name is $name $last_name";
});

// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','views/404.php');
