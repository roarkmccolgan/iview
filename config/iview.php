<?php

return [
	'iviews' => [
			'dellstorage'=>[
				'en'=>[
					'projectId'=>'72504542',
					'url'=>'http://www.delliview.com',
					'from'=>'2015-03-26',
					'to'=>'2015-03-26',
					'company'=>'DELL',
					'title'=>'Storage',
					'corpcolor'=> [13,134,200],
					'ignore_fields'=>['id', 'lang','url'],
					'database'=>'tyco',
					'conection'=>'mysqliview',
					'table'=>'dellstorage_registration',
					//'extrasql'=>" WHERE url='main' ",
					'emails'=>[
						[
							'name'=>'Roark McColgan',
							'address'=>'roarkmccolgan@gmail.com'
							]/*,
						[
							'name'=>'Fung-Yee Tang',
							'address'=>'ftang@idc.com'
							]*/
						]
				]
			]/*,
			'res'=>[
				'en'=>[
					'projectId'=>'73829797',
					'url'=>'http://res.idciview.net',
					'from'=>'2013-07-23',
					'to'=>'2014-10-02',
					'company'=>'Res',
					'title'=>'Virtualization',
					'corpcolor'=> [237,34,36],
					'ignore_fields'=>['id', 'lang'],
					'database'=>'tyco',
					'table'=>'res_registration',
					'emails'=>[
						[
							'name'=>'Roark McColgan',
							'address'=>'roarkmccolgan@gmail.com'
							],
						[
							'name'=>'Phil Odgers',
							'address'=>'podgers@idc.com'
							],
						[
							'name'=>'Scott Gemmell',
							'address'=>'sgemmell@idc.com'
							]
						]
				]
			],
			'vodafone'=>[
				'en'=>[
					'projectId'=>'74808266',
					'url'=>'http://vodafone.idciview.net',
					'from'=>'2013-08-15',
					'to'=>'2014-10-02',
					'company'=>'Vodafone',
					'title'=>'IPVPN',
					'corpcolor'=> [237,34,36],
					'ignore_fields'=>['id', 'lang'],
					'database'=>'tyco',
					'table'=>'vodafone_registration',
					'emails'=>[
						[
							'name'=>'Roark McColgan',
							'address'=>'roarkmccolgan@gmail.com'
							],
						[
							'name'=>'Phil Odgers',
							'address'=>'podgers@idc.com'
							]
						]
				]
			],
			'vodafonecloud'=>[
				'en'=>[
					'projectId'=>'74808266',
					'url'=>'http://vodafone.idciview.net',
					'from'=>'2013-08-15',
					'to'=>'2014-10-02',
					'company'=>'Vodafone',
					'title'=>'Cloud',
					'corpcolor'=> [237,34,36],
					'ignore_fields'=>['id', 'lang'],
					'database'=>'tyco',
					'table'=>'vodafonecloud_registration',
					'emails'=>[
						[
							'name'=>'Roark McColgan',
							'address'=>'roarkmccolgan@gmail.com'
							],
						[
							'name'=>'Phil Odgers',
							'address'=>'podgers@idc.com'
							],
						[
							'name'=>'Kate Slater',
							'address'=>'Kate.Slater@vodafone.com'
							]
						]
				]
			],
			'hpconverged'=>[
				'en'=>[
					'projectId'=>'77783158',
					'url'=>'http://hpconverged.idciview.net',
					'from'=>'2013-10-13',
					'to'=>'2014-10-02',
					'company'=>'HP',
					'title'=>'Converged Storage',
					'corpcolor'=> [0,150,214],
					'ignore_fields'=>['id', 'lang', 'answers'],
					'database'=>'tyco',
					'table'=>'hpconverged_registration',
					'exclude_leads'=>false,
					'emails'=>[
						[
							'name'=>'Roark McColgan',
							'address'=>'roarkmccolgan@gmail.com'
							],
						[
							'name'=>'Fung-Yee Tang',
							'address'=>'ftang@idc.com'
							]
						]
				]
			],
			'zebra'=>[
				'en'=>[
					'projectId'=>'82539791',
					'url'=>'http://zebra.idciview.net',
					'from'=>'2014-03-15',
					'to'=>'2014-10-02',
					'company'=>'Zebra',
					'title'=>'Operational Excellence',
					'corpcolor'=> [0,0,0],
					'ignore_fields'=>['id', 'lang'],
					'database'=>'tyco',
					'table'=>'zebra_registration',
					'emails'=>[
						[
							'name'=>'Roark McColgan',
							'address'=>'roarkmccolgan@gmail.com'
							],
						[
							'name'=>'Phil Odgers',
							'address'=>'podgers@idc.com'
							],
						[
							'name'=>'Joy Dobbs',
							'address'=>'JDobbs@zebra.com'
							]
						]
				]
			],
			'symantec'=>[
				'security'=>[
					'projectId'=>'84754927',
					'url'=>'http://symantecsecurity.idciview.net',
					'from'=>'2014-05-01',
					'to'=>'2014-10-02',
					'company'=>'Symantec',
					'title'=>'Security',
					'corpcolor'=> [0,0,0],
					'ignore_fields'=>['id', 'lang'],
					'database'=>'iview_security',
					'sql'=>"SELECT ivx_users.ID AS id, ivx_usermeta.meta_value AS name, ivx_users.user_email AS email, f.VALUE AS company, c.VALUE AS title, k.VALUE AS Country
						FROM ivx_users
						LEFT JOIN ivx_usermeta on ivx_usermeta.user_id = ivx_users.ID AND ivx_usermeta.meta_key='first_name'
						LEFT JOIN  ivx_cimy_uef_data f on f.USER_ID = ivx_users.ID AND f.FIELD_ID = 1
						LEFT JOIN  ivx_cimy_uef_data c on c.USER_ID = ivx_users.ID AND c.FIELD_ID = 2
						LEFT JOIN  ivx_cimy_uef_data k on k.USER_ID = ivx_users.ID AND k.FIELD_ID = 3
						WHERE  ivx_users.user_login !='admin'
						ORDER BY ivx_users.ID",
					'emails'=>[
						[
							'name'=>'Roark McColgan',
							'address'=>'roarkmccolgan@gmail.com'
							],
						[
							'name'=>'Phil Odgers',
							'address'=>'podgers@idc.com'
							]
						]
				],
				'virtualisation'=>[
					'projectId'=>'84752845',
					'url'=>'symantecvirtualisation.idciview.net',
					'from'=>'2014-05-01',
					'to'=>'2014-10-02',
					'company'=>'Symantec',
					'title'=>'Virtualisation',
					'corpcolor'=> [0,0,0],
					'ignore_fields'=>['id', 'lang'],
					'database'=>'iview',
					'sql'=>"SELECT ivx_users.ID AS id, ivx_usermeta.meta_value AS name, ivx_users.user_email AS email, f.VALUE AS company, c.VALUE AS title, k.VALUE AS Country
						FROM ivx_users
						LEFT JOIN ivx_usermeta on ivx_usermeta.user_id = ivx_users.ID AND ivx_usermeta.meta_key='first_name'
						LEFT JOIN  ivx_cimy_uef_data f on f.USER_ID = ivx_users.ID AND f.FIELD_ID = 1
						LEFT JOIN  ivx_cimy_uef_data c on c.USER_ID = ivx_users.ID AND c.FIELD_ID = 2
						LEFT JOIN  ivx_cimy_uef_data k on k.USER_ID = ivx_users.ID AND k.FIELD_ID = 3
						WHERE  ivx_users.user_login !='admin'
						ORDER BY ivx_users.ID",
					'emails'=>[
						[
							'name'=>'Roark McColgan',
							'address'=>'roarkmccolgan@gmail.com'
							],
						[
							'name'=>'Phil Odgers',
							'address'=>'podgers@idc.com'
							]
						]
				],
				'unified'=>[
					'projectId'=>'84756802',
					'url'=>'http://symantecunified.idciview.net',
					'from'=>'2014-05-01',
					'to'=>'2014-10-02',
					'company'=>'Symantec',
					'title'=>'Unified Data',
					'corpcolor'=> [0,0,0],
					'ignore_fields'=>['id', 'lang'],
					'database'=>'iview_unified',
					'sql'=>"SELECT ivx_users.ID AS id, ivx_usermeta.meta_value AS name, ivx_users.user_email AS email, f.VALUE AS company, c.VALUE AS title, k.VALUE AS Country
						FROM ivx_users
						LEFT JOIN ivx_usermeta on ivx_usermeta.user_id = ivx_users.ID AND ivx_usermeta.meta_key='first_name'
						LEFT JOIN  ivx_cimy_uef_data f on f.USER_ID = ivx_users.ID AND f.FIELD_ID = 1
						LEFT JOIN  ivx_cimy_uef_data c on c.USER_ID = ivx_users.ID AND c.FIELD_ID = 2
						LEFT JOIN  ivx_cimy_uef_data k on k.USER_ID = ivx_users.ID AND k.FIELD_ID = 3
						WHERE  ivx_users.user_login !='admin'
						ORDER BY ivx_users.ID",
					'emails'=>[
						[
							'name'=>'Roark McColgan',
							'address'=>'roarkmccolgan@gmail.com'
							],
						[
							'name'=>'Phil Odgers',
							'address'=>'podgers@idc.com'
							]
						]
				]
			]*/
		]
];