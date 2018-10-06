<?php
function university_post_types() {
  //Campus post type
  register_post_type('campus', [
    'supports' => ['title', 'editor', 'excerpt'],
    'rewrite' => [
      'slug' => 'campuses'
    ],
    'has_archive' => true,
    'public'      => true,
    'labels'      => [
      'name'          => 'Кампусы',
      'add_new_item'  => 'Добавить кампус',
      'edit_item'     => 'Редактировать кампус',
      'all_items'     => 'Все кампусы',
      'singular_name' => 'Кампус',
      'new_item'      => 'Добавить кампус',
      'add_new'       => 'Добавить кампус'
    ],
    'menu_icon'   => 'dashicons-location-alt'
  ]);

  //Event post type
  register_post_type('event', [
    'supports' => ['title', 'editor', 'excerpt'],
    'rewrite' => [
      'slug' => 'events'
    ],
    'has_archive' => true,
    'public'      => true,
    'labels'      => [
      'name'          => 'События',
      'add_new_item'  => 'Добавить событие',
      'edit_item'     => 'Редактировать событие',
      'all_items'     => 'Все события',
      'singular_name' => 'Событие',
      'new_item'      => 'Добавить событие',
      'add_new'       => 'Добавить событие'
    ],
    'menu_icon'   => 'dashicons-calendar-alt'
  ]);

  //Program post type
  register_post_type('program', [
    'supports' => ['title', 'editor'],
    'rewrite' => [
      'slug' => 'programs'
    ],
    'has_archive' => true,
    'public'      => true,
    'labels'      => [
      'name'          => 'Программы',
      'add_new_item'  => 'Добавить программу',
      'edit_item'     => 'Редактировать программу',
      'all_items'     => 'Все программы',
      'singular_name' => 'Программа',
      'new_item'      => 'Добавить программу',
      'add_new'       => 'Добавить программу'
    ],
    'menu_icon'   => 'dashicons-sticky'
  ]);

  //Program post type
  register_post_type('professor', [
    'supports' => ['title', 'editor', 'thumbnail'],
    'public'      => true,
    'labels'      => [
      'name'          => 'Профессора',
      'add_new_item'  => 'Добавить профессора',
      'edit_item'     => 'Редактировать профессора',
      'all_items'     => 'Все профессора',
      'singular_name' => 'Профессор',
      'new_item'      => 'Добавить профессора',
      'add_new'       => 'Добавить профессора'
    ],
    'menu_icon'   => 'dashicons-welcome-learn-more'
  ]);
}

add_action('init', 'university_post_types');