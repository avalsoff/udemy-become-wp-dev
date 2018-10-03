<?php
function university_post_types() {
  register_post_type('event', [
    'public' => true,
    'labels' => [
      'name'          => 'События',
      'add_new_item'  => 'Добавить событие',
      'edit_item'     => 'Редактировать событие',
      'all_items'     => 'Все события',
      'singular_name' => 'Событие',
      'new_item'      => 'Добавить событие',
      'add_new'      => 'Добавить событие'
    ],
    'menu_icon' => 'dashicons-calendar-alt'
  ]);
}

add_action('init', 'university_post_types');