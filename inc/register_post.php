<?php
// создаем новый тип записи [Тарифы]
add_action('init', 'register_post_tariff');
function register_post_tariff()
{
    $labels = array(
        'name' => 'Тарифы',
        'singular_name' => 'Тариф', // админ панель Добавить->Функцию
        'add_new' => 'Добавить тариф',
        'add_new_item' => 'Добавить тариф', // заголовок тега <title>
        'edit_item' => 'Редактировать тариф',
        'new_item' => 'Новый тариф',
        'all_items' => 'Все тарифы',
        'view_item' => 'Просмотр тарифа на сайте',
        'search_items' => 'Искать тарифы',
        'not_found' => 'Тарифов не найдено.',
        'not_found_in_trash' => 'В корзине нет тарифов.',
        'parent_item_colon' => 'Родитель',
        'menu_name' => 'Тарифы' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'map_meta_cap' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => 'dashicons-chart-bar', // иконка в меню - заменена на подходящую
        'menu_position' => 20, // порядок в меню
        'hierarchical' => true,
        'supports' => array('title', 'thumbnail', 'page-attributes'),
        'show_in_rest' => true
    );
    register_post_type('tariffs', $args);
}
// регистрируем для типа записи [Тариф] таксономию
add_action('init', 'additional_taxonomies_tariff');
function additional_taxonomies_tariff()
{
    register_taxonomy_for_object_type('post_tag', 'tariffs');
    register_taxonomy_for_object_type('category', 'tariffs');
}
