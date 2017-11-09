<?php
/**
 * Plugin Name: Custome post type ridwan
 * Plugin URI: 
 * Description: Belajar Custome Post Type
 * Author: Ridwan
 * Version: 1.0.
 * Author URI: 
 * Text Domain: 
 */
/* https://codex.wordpress.org/Function_Reference/register_post_type */

function create_laporan() {
	

        register_post_type('Laporan', array(
            'labels' 			=> array(
                'name'               => __('Laporan'), //Nama utk menu
                'singular_name'      => __('xxx'), //nama untuk satu objek dari jenis posting ini. Default adalah Posting / Halaman
                'add_new'            => __('Add Laporan'), //Nama tombol untuk menambahkan post 
                'edit_item'          => __('Edit Laporan'), //Nama untuk page edit 
                'add_new_item'       => __('Add New Laporan'), //Default is Add New Post/Add New Page.
                'not_found'          => __('Laporan Tidak di Temukan'), 
                'not_found_in_trash' => __('Laporan di Trash Tidak di Temukan '),
                'all_items'          => __('Semua Laporan'), //nama utnuk sebmenu all item
                'search_items'       => __('Cari Laporan'), //untuk nama button cari
                'insert_into_item'   => __('masukan item gan'), //nama button add saat akan memasukan media
                // 'uploaded_to_this_item' => __('Upload Gan') 
            ),
            'supports' 			=> array(
            	'editor',
            	'title',
            	'excerpt',
            	'thumbnail',
            	'author',
            	'custom-fields',
            	'comments',
            	'revisions',
            	'post-formats'
            ),
            'has_archive' 		=> true,
            'show_in_menu' 		=> true,
            'show_in_admin_bar' => true,
            'public' 			=> true,
            'rewrite' 			=> array('slug' => 'laporan'),
            'menu_position'     => 5,
            'menu_icon' 		=> 'dashicons-smartphone',
            'hierarchical' 		=> true
            
                )
        );
    }
add_action('init','create_laporan');




?>