<?php
foreach ($row->field_field_video_env as $key => $raw) {
		$tid = $row->field_field_video_env[$key]['raw']['tid'];
		$variables = array(
			'path' => path_to_theme().'/images/lib/lib-'.$tid.'.png',
			'width' => '24px',
			'height' => '24px',
		);
	echo theme('image', $variables);
}
?>