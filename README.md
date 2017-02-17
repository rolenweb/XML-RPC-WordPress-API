# xml-rpc-wordpress-api
https://codex.wordpress.org/XML-RPC_WordPress_API


##Usage


```
use Rolenweb\Wpapi\Wp;

$wp = new Wp('http://site/','login','password');
```


##Create term:

```
$content = [
    'name' => 'name',
    'taxonomy' => 'post_tag',
    //'slug' => null,
    //'description' => null,
    //'parent' => null,
];
$wp->newTerm($content);
```

##Create post:
```
$content = [
	'post_type' => 'post',
    'post_content' => null,
    'post_title' => 'title',
    'post_status' => 'publish',
    'ping_status' => 'closed',
    'custom_fields' => [
    	[
    		'key' => 'key',
    		'value' => 'value'
    	],
    	
    	
    ],

];

$wp->newPost($contentMap);
```
