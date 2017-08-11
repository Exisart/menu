<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>menu</title>
</head>
<body>
<?php

$menu = [
	[
		'title' => 'Title 1',
		'link' 	=> '/link_1'
	],
	[
		'title' => 'Title 2',
		'link' 	=> '/link_2',
		'child' => [
			[
				'title' => 'Title 21',
				'link' 	=> '/link_21'
			],
			[
				'title' => 'Title 22',
				'link' 	=> '/link_22'
			],
			[
				'title' => 'Title 23',
				'link' 	=> '/link_23',
				'child' => [
					[
						'title' => 'Title 231',
						'link' 	=> '/link_231'
					],
					[
						'title' => 'Title 232',
						'link' 	=> '/link_232'
					],
					[
						'title' => 'Title 233',
						'link' 	=> '/link_233'
					]
				]
			]
		]
	],
	[
		'title' => 'Title 3',
		'link' 	=> '/link_3'
	],
	[
		'title' => 'Title 4',
		'link' 	=> '/link_4',
		'child' => [
			[
				'title' => 'Title 41',
				'link' 	=> '/link_41'
			],
			[
				'title' => 'Title 42',
				'link' 	=> '/link_42'
			],
			[
				'title' => 'Title 43',
				'link' 	=> '/link_43'
			]
		]
	],
	[
		'title' => 'Title 5',
		'link' 	=> '/link_5'
	]
];


function PrintMenu($menu_arr) {
	foreach ($menu_arr as $key => $value) {
		$child = $menu_arr[$key]['child'];

		if (isset($child)) {
			echo '<li><a href="'.$menu_arr[$key]['link'].'">'.$menu_arr[$key]['title'].'</a>';

			echo '<ul>';
			PrintMenu($child);
			echo '</ul></li>';
		
		} else {			
			echo '<li><a href="'.$menu_arr[$key]['link'].'">'.$menu_arr[$key]['title'].'</a></li>';
		}
	}
}

echo '<ul>';
PrintMenu($menu);
echo '</ul>';

?>
</body>
</html>