<?php
// スピーカーフィールド post_type speaker
acf_add_local_field_group(array(
	'key' => 'group_5d19715432993',
	'title' => 'スピーカーフィールド',
	'fields' => array(
		array(
			'key' => 'field_5d2863f297631',
			'label' => 'トップページに表示',
			'name' => 'mu_speaker_show_top',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5d1971959df58',
			'label' => '名前（英語）',
			'name' => 'mu_en_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d1971fa53ebe',
			'label' => '肩書き（日本語）',
			'name' => 'mu_ja_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d19723853ebf',
			'label' => '肩書き（英語)',
			'name' => 'mu_en_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d19725353ec0',
			'label' => '肩書き(略称)',
			'name' => 'mu_title_abbr',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d19729353ec1',
			'label' => 'プロフィール文（日本語）',
			'name' => 'mu_ja_profile',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5d1972b253ec2',
			'label' => 'プロフィール文（英語)',
			'name' => 'mu_en_profile',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5d1972b253ec4',
			'label' => 'BI編集部からの推薦コメント',
			'name' => 'mu_ja_editor_comment',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5d1972c853ec3',
			'label' => '登壇セッション',
			'name' => 'mu_relation_session',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'session',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
				1 => 'taxonomy',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => 0,
			'max' => '',
			'return_format' => 'object',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'speaker',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

// スポンサーフィールド post_type sponsor
acf_add_local_field_group(array(
	'key' => 'group_5d19731f12656',
	'title' => 'スポンサーフィールド',
	'fields' => array(
		array(
			'key' => 'field_5d19735ea9482',
			'label' => '文章（英語）',
			'name' => 'mu_en_sponsor_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5d197381a9483',
			'label' => 'リンクボタンの文字',
			'name' => 'mu_sponsor_link_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d197391a9484',
			'label' => 'リンク先URL',
			'name' => 'mu_sponsor_link_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'sponsor',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

// セッションフィールド  post_type session
acf_add_local_field_group(array(
	'key' => 'group_5d19752fb08f6',
	'title' => 'セッションフィールド',
	'fields' => array(
		array(
			'key' => 'field_5d19753d3b9e4',
			'label' => 'タイトル（英語）',
			'name' => 'mu_session_title_en',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d19753d3b9e5',
			'label' => 'セッション概要（日本語）',
			'name' => 'mu_session_summary_ja',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 8,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5d19753d3b9e6',
			'label' => 'セッション概要（英語）',
			'name' => 'mu_session_summary_en',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 8,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5d19753d3b9e7',
			'label' => '日付',
			'name' => 'mu_session_date',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'schedule',
			),
			'taxonomy' => '',
			'allow_null' => 0,
			'multiple' => 0,
			'return_format' => 'id',
			'ui' => 1,
		),
		array(
			'key' => 'field_5d1975713b9e8',
			'label' => '開始時刻',
			'name' => 'mu_session_start_time',
			'type' => 'time_picker',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'H:i',
			'return_format' => 'H:i',
		),
		array(
			'key' => 'field_5d1975933b9e9',
			'label' => '終了時刻',
			'name' => 'mu_session_end_time',
			'type' => 'time_picker',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'H:i',
			'return_format' => 'H:i',
		),
		array(
			'key' => 'field_5d272af7870de',
			'label' => '終了時間を表示しない',
			'name' => 'mu_session_exclude_end',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5d272b17870df',
			'label' => '時間を表示しない',
			'name' => 'mu_session_exclude_time',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5d1972c853eca',
			'label' => '登壇者',
			'name' => 'mu_session_speaker',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'speaker',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search'
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => 0,
			'max' => '',
			'return_format' => 'object',
		),
		array(
			'key' => 'field_5d1975a53b9eb',
			'label' => 'スポンサー',
			'name' => 'mu_session_sponsor',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'sponsor',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
				1 => 'taxonomy',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => 0,
			'max' => '',
			'return_format' => 'object',
		),
		array(
			'key' => 'field_5d1975ca3b9ec',
			'label' => '関連セッション',
			'name' => 'mu_session_relation',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'session',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
				1 => 'taxonomy',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => 0,
			'max' => '',
			'return_format' => 'object',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'session',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
));

// 固定ページ スピーカー speakers
$pagecheck = get_page_by_path( 'speakers' );
if ( ! empty( $pagecheck ) ) {
	$speakers_pageid = $pagecheck->ID;
} else {
	$speakers_pageid = 1;
}
acf_add_local_field_group(array(
	'key' => 'group_5d2294e1433be',
	'title' => 'Speakers',
	'fields' => array(
		array(
			'key' => 'field_5d2294f008484',
			'label' => 'スピーカー自由入力欄（日本語）',
			'name' => 'mu_speakers_lead_ja',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 8,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5d22951108485',
			'label' => 'スピーカー自由入力欄（英語）',
			'name' => 'mu_speakers_lead_en',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 8,
			'new_lines' => 'br',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => $speakers_pageid,
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
));

// 固定ページ スピーカー supporters
$pagecheck = get_page_by_path( 'supporters' );
if ( ! empty( $pagecheck ) ) {
	$supporters_pageid = $pagecheck->ID;
} else {
	$supporters_pageid = 1;
}
acf_add_local_field_group(array(
	'key' => 'group_5d21f4bb89d83',
	'title' => 'スポンサー募集情報',
	'fields' => array(
		array(
			'key' => 'field_5d21f4f3353a0',
			'label' => '見出し',
			'name' => 'mashing-up_sponsored--heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d21f502353a1',
			'label' => 'リード文(日本語)',
			'name' => 'mashing-up_sponsored--lead_ja',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 2,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5d21f517353a2',
			'label' => 'リード文(英語)',
			'name' => 'mashing-up_sponsored--lead_en',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 2,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5d21f526353a3',
			'label' => '募集文言（日本語）',
			'name' => 'mashing-up_sponsored--content_ja',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5d21f526353a4',
			'label' => '募集文言（英語)',
			'name' => 'mashing-up_sponsored--content_en',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5d21f526353a5',
			'label' => 'リンクボタンの文字',
			'name' => 'mashing-up_sponsored--text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d21f53a353a6',
			'label' => '送信先メールアドレス',
			'name' => 'mashing-up_sponsored--email',
			'type' => 'email',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => $supporters_pageid,
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5d248ea3f1ca4',
	'title' => 'セッション選択',
	'fields' => array(
		array(
			'key' => 'field_5d248f137f205',
			'label' => 'セッション選択',
			'name' => 'mu_timetable_session',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'session',
			),
			'taxonomy' => '',
			'filters' => '',
			'elements' => '',
			'min' => '',
			'max' => 1,
			'return_format' => 'id',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'mp-event',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5d25e4babc0fa',
	'title' => 'timetable',
	'fields' => array(
		array(
			'key' => 'field_5d2715a7644e4',
			'label' => 'リード文（日本語）',
			'name' => 'mu_timetable_lead_ja',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5d2715c0644e5',
			'label' => 'リード文（英語）',
			'name' => 'mu_timetable_lead_en',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5d2715c0644e6',
			'label' => '注意書き（日本語）',
			'name' => 'mu_timetable_note_ja',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5d2715c0644e7',
			'label' => '注意書き（英語）',
			'name' => 'mu_timetable_note_en',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5d297293af123',
			'label' => 'フロアマップ',
			'name' => 'mu_timetable_floormaps',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5d2972e1af124',
					'label' => 'フロアマップ画像',
					'name' => 'mu_timetable_floormap',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'medium',
					'library' => 'uploadedTo',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
		array(
			'key' => 'field_5d2972b4af125',
			'label' => 'フロアマップ注意書き（日本語）',
			'name' => 'mu_floormap_note_ja',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5d2972b4af126',
			'label' => 'フロアマップ注意書き（英語）',
			'name' => 'mu_floormap_note_en',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5d297bd8b0927',
			'label' => '表示するスポンサー種別',
			'name' => 'mu_timetable_sponsor_types',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'sponsor_type',
			'field_type' => 'checkbox',
			'add_term' => 1,
			'save_terms' => 0,
			'load_terms' => 0,
			'return_format' => 'id',
			'multiple' => 0,
			'allow_null' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '13',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5d25e6e2a6660',
	'title' => '日程管理',
	'fields' => array(
		array(
			'key' => 'field_5d25e6ed1a221',
			'label' => '開始時間',
			'name' => 'mu_day_start',
			'type' => 'time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'H:i',
			'return_format' => 'H:i',
		),
		array(
			'key' => 'field_5d25e70c1a222',
			'label' => '終了時間',
			'name' => 'mu_day_end',
			'type' => 'time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'H:i',
			'return_format' => 'H:i',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'schedule',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5d25e83e0edf3',
	'title' => 'セッション自由入力欄',
	'fields' => array(
		array(
			'key' => 'field_5d25e84285883',
			'label' => 'リード文（日本語）',
			'name' => 'mu_session_lead_ja',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 6,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5d26b84288493',
			'label' => 'リード文（英語）',
			'name' => 'mu_session_lead_en',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 6,
			'new_lines' => 'br',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '15',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
));

// 固定ページ チケット tickets
$pagecheck = get_page_by_path( 'tickets' );
if ( ! empty( $pagecheck ) ) {
	$tickets_pageid = $pagecheck->ID;
} else {
	$tickets_pageid = 1;
}
acf_add_local_field_group(array(
	'key' => 'group_5d26fe802366d',
	'title' => 'ticket',
	'fields' => array(
		array(
			'key' => 'field_5d26fe8db4685',
			'label' => 'サブタイトル',
			'name' => 'mu_tickets_subtitle',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d26feacb4686',
			'label' => '自由入力欄（日本語）',
			'name' => 'mu_tickets_text_ja',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5d26fedeb4687',
			'label' => '自由入力欄（英語）',
			'name' => 'mu_tickets_text_en',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5d26feeab4688',
			'label' => '埋め込みフォーム',
			'name' => 'mu_tickets_embed',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5d27018a8b475',
			'label' => '補足事項（日本語）',
			'name' => 'mu_tickets_notes_ja',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5d2705763e687',
			'label' => '補足事項（英語）',
			'name' => 'mu_tickets_notes_en',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => $tickets_pageid,
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5d22927ea7ae8',
	'title' => 'about',
	'fields' => array(
		array(
			'key' => 'field_5d22f709147b4',
			'label' => 'タイトル',
			'name' => 'title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d22928d60a79',
			'label' => 'サブタイトル（日本語）',
			'name' => 'subt-title-ja',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d2292cd60a7a',
			'label' => 'サブタイトル（英語）',
			'name' => 'subt-title-en',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d2292df60a7b',
			'label' => 'リード文（日本語）',
			'name' => 'lead-ja',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5d2292f560a7c',
			'label' => 'リード文（英語）',
			'name' => 'lead-en',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => 'br',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '2',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5d2860ec26dbe',
	'title' => 'about2',
	'fields' => array(
		array(
			'key' => 'field_5d2873aa13fd3',
			'label' => 'アドバイザリーボードメンバー リード文（日本語）',
			'name' => 'mashing-up_about--advisory-ja',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5d2873eb13fd4',
			'label' => 'アドバイザリーボードメンバー リード文（英語）',
			'name' => 'mashing-up_about--advisory-en',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5d2873fb0e1d3',
			'label' => 'コミッティメンバー リード文（日本語）',
			'name' => 'mashing-up_about--committee-ja',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5d2873fd0e1d4',
			'label' => 'コミッティメンバー リード文（英語）',
			'name' => 'mashing-up_about--committee-en',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5d286103bedd5',
			'label' => '問い合わせエリア表示',
			'name' => 'mashing-up_about--contact',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '2',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5d39575fa84b6',
	'title' => '表示サイズ',
	'fields' => array(
		array(
			'key' => 'field_5d39577280eb9',
			'label' => '表示サイズを選択',
			'name' => 'mu_sponsor_size',
			'type' => 'select',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'small' => '小',
				'medium' => '中',
				'large' => '大',
			),
			'default_value' => array(
				0 => 'small',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'sponsor_type',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));
