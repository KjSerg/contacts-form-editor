<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_in_front_page' );
function crb_attach_in_front_page() {
	$var            = variables();
	$set            = $var['setting_home'];
	$assets         = $var['assets'];
	$url            = $var['url'];
	$screens_labels = array(
		'plural_name'   => 'секции',
		'singular_name' => 'секцию',
	);
	$labels         = array(
		'plural_name'   => 'элементы',
		'singular_name' => 'элемент',
	);
	$labels_modals  = array(
		'plural_name'   => 'модальные окна',
		'singular_name' => 'модальное окно',
	);
	Container::make( 'post_meta', 'Секции' )
	         ->show_on_template( 'index.php' )
	         ->add_fields( array(
		         Field::make( "image", "logo", "Логотип в шапке" )->set_required( true ),
		         Field::make( "image", "logo_f", "Логотип в подвале" )->set_required( true ),
		         Field::make( "text", "copyright", "Копирайт" ),
		         Field::make( 'complex', 'screens', 'Секции' )
		              ->set_layout( 'tabbed-vertical' )
		              ->setup_labels( $screens_labels )
		              ->add_fields(
			              'screen_1', 'Баннер',
			              array(
				              Field::make( "separator", "crb_style_screen_off", "Выключить секцию?" ),
				              Field::make( 'checkbox', 'screen_off', 'Выключить секцию?' ),
				              Field::make( "separator", "crb_style_inform", "Информация" ),
				              get_field_id(),
				              Field::make( "rich_text", "title", "Заголовок" )->set_required( true ),
				              Field::make( "rich_text", "subtitle", "Подзаголовок" ),
				              Field::make( "rich_text", "decorative_subtitle", "Декоративный текст" ),
				              add_button(),
				              Field::make( "separator", "crb_style_inform1", "Изображения" ),
				              Field::make( "image", "image", "Главное изображение" )->set_required( true )->set_width( 25 ),
				              Field::make( "image", "image1", "Обводка главного изображения" )->set_width( 25 ),
				            //   Field::make( "image", "image2", "Изображение декоративное 1" )->set_width( 25 ),
				              Field::make( "image", "image3", "Изображение декоративное" )->set_width( 25 ),
				
			              )
		              )
		              ->add_fields(
			              'screen_2', 'Технологии',
			              array(
				              Field::make( "separator", "crb_style_screen_off", "Выключить секцию?" ),
				              Field::make( 'checkbox', 'screen_off', 'Выключить секцию?' ),
				              Field::make( "separator", "crb_style_inform", "Информация" ),
				              get_field_id(),
				              Field::make( "rich_text", "title", "Заголовок" )->set_required( true ),
				              Field::make( 'complex', 'list', 'Список' )
				                   ->setup_labels( $labels )
				                   ->add_fields(
					                   array(
						                   Field::make( "image", "image", "Зображення" )->set_width( 20 )->set_required( true ),
						                   Field::make( "text", "text", "Текст" )->set_width( 80 )->set_required( true ),
					                   )
				                   )
			              )
		              )
		              ->add_fields(
			              'screen_3', 'Наши показатели',
			              array(
				              Field::make( "separator", "crb_style_screen_off", "Выключить секцию?" ),
				              Field::make( 'checkbox', 'screen_off', 'Выключить секцию?' ),
				              Field::make( "separator", "crb_style_inform", "Информация" ),
				              get_field_id(),
				              Field::make( "rich_text", "title", "Заголовок" )->set_required( true ),
				              Field::make( 'complex', 'list', 'Список' )
				                   ->setup_labels( $labels )
				                   ->add_fields(
					                   array(
						                   Field::make( "text", "number", "Номер" )->set_width( 25 )->set_attribute( 'type', 'number' )->set_required( true ),
						                   Field::make( "text", "suffix", "Суффикс" )->set_width( 25 ),
						                   Field::make( "text", "text", "Текст" )->set_width( 50 )->set_required( true ),
					                   )
				                   )
			              )
		              )
		              ->add_fields(
			              'screen_4', 'Бегущая строка',
			              array(
				              Field::make( "separator", "crb_style_screen_off", "Выключить секцию?" ),
				              Field::make( 'checkbox', 'screen_off', 'Выключить секцию?' ),
				              Field::make( "separator", "crb_style_inform", "Информация" ),
				              get_field_id(),
				              Field::make( 'complex', 'list', 'Слова' )
				                   ->set_required( true )
				                   ->setup_labels( $labels )
				                   ->add_fields(
					                   array(
						                   Field::make( "text", "text", "Слово" )->set_required( true ),
					                   )
				                   )
			              )
		              )
		              ->add_fields(
			              'screen_5', 'Преимущества',
			              array(
				              Field::make( "separator", "crb_style_screen_off", "Выключить секцию?" ),
				              Field::make( 'checkbox', 'screen_off', 'Выключить секцию?' ),
				              Field::make( "separator", "crb_style_inform", "Информация" ),
				              get_field_id(),
				              Field::make( "rich_text", "title", "Заголовок" )->set_required( true ),
				              Field::make( 'complex', 'list', 'Список' )
				                   ->set_required( true )
				                   ->setup_labels( $labels )
				                   ->add_fields(
					                   array(
						                   Field::make( "text", "text", "Текст" )->set_required( true ),
					                   )
				                   )
			              )
		              )
		              ->add_fields(
			              'screen_6', 'Branding',
			              array(
				              Field::make( "separator", "crb_style_screen_off", "Выключить секцию?" ),
				              Field::make( 'checkbox', 'screen_off', 'Выключить секцию?' ),
				              Field::make( "separator", "crb_style_inform", "Информация" ),
				              get_field_id(),
				              Field::make( "rich_text", "title", "Заголовок" )->set_required( true ),
				              Field::make( "text", "subtitle", "Подзаголовок" )->set_required( true ),
				              Field::make( 'complex', 'list', 'Список' )
				                   ->set_required( true )
				                   ->setup_labels( $labels )
				                   ->add_fields(
					                   array(
						                   Field::make( "text", "title", "Заголовок" )
						                        ->set_required( true )->set_width( 80 ),
						                   Field::make( "file", "video", "Видео" )
						                        ->set_type( 'video' )
						                        ->set_required( true )->set_width( 20 ),
					                   )
				                   ),
				              add_button()
			              )
		              )
		              ->add_fields(
			              'screen_7', 'Performance',
			              array(
				              Field::make( "separator", "crb_style_screen_off", "Выключить секцию?" ),
				              Field::make( 'checkbox', 'screen_off', 'Выключить секцию?' ),
				              Field::make( "separator", "crb_style_inform", "Информация" ),
				              get_field_id(),
				              Field::make( "rich_text", "title", "Заголовок" )->set_required( true ),
				              Field::make( 'complex', 'list', 'Список' )
				                   ->set_required( true )
				                   ->setup_labels( $labels )
				                   ->set_layout( 'tabbed-vertical' )
				                   ->add_fields(
					                   array(
						                   Field::make( "text", "title", "Заголовок" )
						                        ->set_required( true )->set_width( 80 ),
						                   Field::make( "image", "image", "Изображение" )
						                        ->set_required( true )->set_width( 20 ),
						                   Field::make( "text", "text", "Текст" )
					                   )
				                   )
				                   ->set_header_template( '
								     <%- $_index + 1 %>.
			                        <% if (title) { %>
			                            <%- title %>
			                        <% } %>
								' )
			              )
		              )
		              ->add_fields(
			              'screen_8', 'Наши клиенты',
			              array(
				              Field::make( "separator", "crb_style_screen_off", "Выключить секцию?" ),
				              Field::make( 'checkbox', 'screen_off', 'Выключить секцию?' ),
				              Field::make( "separator", "crb_style_inform", "Информация" ),
				              get_field_id(),
				              Field::make( "rich_text", "title", "Заголовок" )->set_required( true ),
				              Field::make( "rich_text", "subtitle", "Подзаголовок" ),
				              add_button(),
				              Field::make( 'complex', 'list', 'Список' )
				                   ->set_required( true )
				                   ->setup_labels( $labels )
				                   ->set_layout( 'tabbed-vertical' )
				                   ->add_fields(
					                   array(
						                   Field::make( "text", "title", "Заголовок" )->set_required( true ),
						                   Field::make( "text", "text", "Текст" )
					                   )
				                   )
				                   ->set_header_template( '
								     <%- $_index + 1 %>.
			                        <% if (title) { %>
			                            <%- title %>
			                        <% } %>
								' )
			              )
		              )
		              ->add_fields(
			              'screen_9', 'Наши партнеры',
			              array(
				              Field::make( "separator", "crb_style_screen_off", "Выключить секцию?" ),
				              Field::make( 'checkbox', 'screen_off', 'Выключить секцию?' ),
				              Field::make( "separator", "crb_style_inform", "Информация" ),
				              get_field_id(),
				              Field::make( "rich_text", "title", "Заголовок" )->set_required( true ),
				              Field::make( 'complex', 'list', 'Список' )
				                   ->set_required( true )
				                   ->setup_labels( $labels )
				                   ->set_layout( 'tabbed-vertical' )
				                   ->add_fields(
					                   array(
						                   Field::make( "text", "title", "Заголовок" )->set_required( true ),
					                   )
				                   )
				                   ->set_header_template( '
								     <%- $_index + 1 %>.
			                        <% if (title) { %>
			                            <%- title %>
			                        <% } %>
								' ),
				              Field::make( "media_gallery", "gallery", "Иконки" ),
			              )
		              )
		              ->add_fields(
			              'screen_10', 'Экосистема',
			              array(
				              Field::make( "separator", "crb_style_screen_off", "Выключить секцию?" ),
				              Field::make( 'checkbox', 'screen_off', 'Выключить секцию?' ),
				              Field::make( "separator", "crb_style_inform", "Информация" ),
				              get_field_id(),
				              Field::make( "rich_text", "title", "Заголовок" )->set_required( true ),
				              Field::make( 'complex', 'list', 'Список' )
				                   ->set_required( true )
				                   ->setup_labels( $labels )->set_max( 10 )
				                   ->set_layout( 'tabbed-vertical' )
				                   ->add_fields(
					                   array(
						                   Field::make( "text", "title", "Заголовок" )->set_required( true ),
						                   Field::make( "text", "text", "Текст" ),
						                   Field::make( 'complex', 'lines', 'Линии' )
						                        ->setup_labels( $labels )
						                        ->set_max( 3 )
						                        ->add_fields(
							                        array(
								                        Field::make( "html", "crb_information_text", '' )
								                             ->set_html( '<h2>Линия</h2>' )
							                        )
						                        )
					                   )
				                   )
				                   ->set_header_template( '
								     <%- $_index + 1 %>.
			                        <% if (title) { %>
			                            <%- title %>
			                        <% } %>
								' ),
			              )
		              )
		              ->add_fields(
			              'screen_11', 'О нас',
			              array(
				              Field::make( "separator", "crb_style_screen_off", "Выключить секцию?" ),
				              Field::make( 'checkbox', 'screen_off', 'Выключить секцию?' ),
				              Field::make( "separator", "crb_style_inform", "Информация" ),
				              get_field_id(),
				              Field::make( "rich_text", "title", "Заголовок" )->set_required( true ),
				              Field::make( "rich_text", "text", "Подзаголовок" ),
				              add_button(),
				              Field::make( "separator", "crb_style_inform1", "Изображения" ),
				              Field::make( "image", "image", "Главное изображение" )->set_required( true )->set_width( 50 ),
				              Field::make( "image", "image1", "Обводка главного изображения" )->set_width( 50 ),
			              )
		              )
		              ->add_fields(
			              'screen_12', 'Партнеры',
			              array(
				              Field::make( "separator", "crb_style_screen_off", "Выключить секцию?" ),
				              Field::make( 'checkbox', 'screen_off', 'Выключить секцию?' ),
				              Field::make( "separator", "crb_style_inform", "Информация" ),
				              get_field_id(),
				              Field::make( "rich_text", "title", "Заголовок" )->set_required( true ),
				              Field::make( 'complex', 'list', 'Список' )
				                   ->set_required( true )
				                   ->setup_labels( $labels )
				                   ->add_fields(
					                   array(
						                   Field::make( "image", "image", "Лого" )->set_required( true )->set_width( 20 ),
						                   Field::make( "text", "url" )->set_attribute( 'type', 'url' )->set_width( 80 ),
					                   )
				                   )
			              )
		              )
		              ->add_fields(
			              'screen_13', 'Вакансии',
			              array(
				              Field::make( "separator", "crb_style_screen_off", "Выключить секцию?" ),
				              Field::make( 'checkbox', 'screen_off', 'Выключить секцию?' ),
				              Field::make( "separator", "crb_style_inform", "Информация" ),
				              get_field_id(),
				              Field::make( "rich_text", "title", "Заголовок" )->set_required( true ),
				              Field::make( "rich_text", "subtitle", "Подзаголовок" ),
				              add_button(),
				              Field::make( 'complex', 'list', 'Вакансии' )
				                   ->set_required( true )
				                   ->setup_labels( $labels )
				                   ->set_layout( 'tabbed-vertical' )
				                   ->add_fields(
					                   array(
						                   Field::make( "text", "title", "Заголовок" )->set_required( true ),
						                   Field::make( "text", "text", "Текст" )
					                   )
				                   )
				                   ->set_header_template( '
								     <%- $_index + 1 %>.
			                        <% if (title) { %>
			                            <%- title %>
			                        <% } %>
								' )
			              )
		              )
		              ->add_fields(
			              'screen_14', 'Контакты',
			              array(
				              Field::make( "separator", "crb_style_screen_off", "Выключить секцию?" ),
				              Field::make( 'checkbox', 'screen_off', 'Выключить секцию?' ),
				              Field::make( "separator", "crb_style_inform", "Информация" ),
				              get_field_id(),
				              Field::make( "rich_text", "title", "Заголовок" )->set_required( true ),
				              Field::make( "rich_text", "subtitle", "Подзаголовок" ),
				              Field::make( "text", "form", "Шорт-код формы" )->set_required( true ),
				              Field::make( 'complex', 'list', 'Контакты' )
				                   ->set_required( true )
				                   ->setup_labels( $labels )
				                   ->add_fields(
					                   array(
						                   Field::make( "rich_text", "title", "Контент" )->set_required( true )->set_width( 80 ),
						                   Field::make( "image", "image", "Иконка" )->set_required( true )->set_width( 20 ),
					                   )
				                   )
			              )
		              )
	         ) );

}

add_action( 'after_setup_theme', 'crb_load' );

function crb_load() {
	get_template_part( 'vendor/autoload' );
	\Carbon_Fields\Carbon_Fields::boot();
}

add_filter( 'crb_media_buttons_html', function ( $html, $field_name ) {
	if (
		$field_name === 'logo' ||
		$field_name === 'decorative_subtitle' ||
		$field_name === 'text' ||
		$field_name === 'subtitle' ||
		$field_name === 'title'
	) {
		return;
	}

	return $html;
}, 10, 2 );

function get_field_id() {
	return Field::make( "text", "id", "ID секции (уникальное значение)" )
	            ->set_attribute( 'pattern', '^[a-z0-9\-]+$' )
	            ->set_help_text( 'Слово на латинице без пробелов. Возможен сымвол: "-" <br> <strong>Значение ID не должно повторятся!</strong>' )
	            ->set_required( true );
}

function add_button( $args = array() ) {
	$var      = variables();
	$set      = $var['setting_home'];
	$assets   = $var['assets'];
	$url      = $var['url'];
	$url_home = $var['url_home'];
	$id       = $args['id'] ?: 'links';
	$name     = $args['name'] ?: 'Кнопки';
	$max      = $args['max'] ?: 1;
	$labels   = array(
		'plural_name'   => 'элементы',
		'singular_name' => 'элемент',
	);

	return Field::make( 'complex', $id, $name )
	            ->setup_labels( $labels )
	            ->set_max( $max )
	            ->add_fields( 'link', 'Ссылка', array(
		            Field::make( 'text', 'button_text', 'Текст' )
		                 ->set_width( 50 )
		                 ->set_required( true ),
		            Field::make( 'text', 'link', 'Ссылка' )
		                 ->set_width( 50 )
		                 ->set_attribute( 'type', 'url' )
		                 ->set_required( true ),
	            ) );
}