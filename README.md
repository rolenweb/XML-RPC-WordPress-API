# xml-rpc-wordpress-api
xml-rpc-wordpress-api


Usage
------

use Rolenweb\Wpapi\Wp;

$wp = new Wp('http://site/','login','password');


Create term:

$content = [
    'name' => 'name',
    'taxonomy' => 'post_tag',
    //'slug' => null,
    //'description' => null,
    //'parent' => null,
];
$wp->newTerm($content);