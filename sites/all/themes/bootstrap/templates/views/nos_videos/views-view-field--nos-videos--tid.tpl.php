<?php 
$tid = $row->field_field_video_categorie['0']['raw']['tid'];
$variables = array(
	'path' => path_to_theme().'/images/lib/lib-'.$tid.'.png',
);
echo theme('image', $variables);

?>