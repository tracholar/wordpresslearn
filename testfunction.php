<?php 

function wp_extract_urls( $content ) {
	preg_match_all(
		"#((?:[\w-]+://?|[\w\d]+[.])[^\s()<>]+[.](?:\([\w\d]+\)|(?:[^`!()\[\]{};:'\".,<>???¡°¡±¡®¡¯\s]|(?:[:]\d+)?/?)+))#",
		$content,
		$post_links
	);

	$post_links = array_unique( array_map( 'html_entity_decode', $post_links[0] ) );

	return array_values( $post_links );
}

function testargs(){
	$args = func_get_args();
	print_r($args);
}

$cnt = 'Lorem ipsum dolor sit amet, 
consectetur adipiscing elit. 
Proin elementum quis lacus in accumsan. Sed sed lacus odio.
 Sed ullamcorper, nibh et dignissim convallis, 
 lacus tellus pellentesque ipsum, et interdum purus urna ultricies justo. 
 Phasellus blandit eros nec lectus vestibulum consequat. Cras faucibus turpis sed ante commodo cursus. 
 Duis vitae ligula vulputate, varius mi vel, facilisis est. 
 Nulla id mollis ipsum. Nunc faucibus augue vel erat luctus sodales. 
 Curabitur gravida vulputate nulla sed aliquam. Ut posuere mollis mauris, 
 et placerat diam cursus vitae. Vivamus eros arcu, lobortis id sapien at, 
 ustc.edu.cn
 www.g.cn
 ftp://t.cn
 tempus tristique nunc. Praesent sollicitudin vulputate lorem, vitae vestibulum nisi pretium non. 
 http://example.com is a cool site.';
 
 
print_r(wp_extract_urls($cnt));
testargs('arg1','arg2','arg3');
?>