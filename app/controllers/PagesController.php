<?php

namespace App\Controllers;
use Core\Database\App;
// use App\Models\Post;

class PagesController
{
    public function index()
    {
        return view('homepage');
    }

    public function family()
    {
        return view('family');
    }

    public function dashboard()
    {

        return view('dashboard');
    }

    // public function family_read()
    // {
    //     return view('family_read');
    // }

    // public function table()
    // {
    //     // $table_data = App::get('database')->selectAll($table_name);
    //     $table_list =  App::get('database')->showTables();


    //     if (isset($_GET['table'])) {
    //         $table_name = $_GET['table'];

    //         $table_data = App::get('database')->selectAll_array($table_name);
    //         return view(
    //             'table',
    //             [
    //                 'table_name' => $table_name,
    //                 'table_data' => $table_data,
    //                 'table_list' => $table_list
    //             ]
    //         );
    //     } else {
    //         return view(
    //             'table',
    //             [
    //                 'table_list' => $table_list
    //             ]
    //         );
    //     }
    // }

    // public function contact_result()
    // {
    //     App::get('database')->insertIntoDB(
    //         'users',
    //         [
    //             'name' => $_POST['name'],
    //         ]
    //     );
    //     return view('contact-result');
    // }
    // public function form_result()
    // {
    //     App::get('database')->insertIntoDB(
    //         'users2',
    //         [
    //             'name' => $_POST['form-name'],
    //             'surname' => $_POST['form-surname'],
    //             'email' => $_POST['form-email'],
    //         ]
    //     );

    //     $last_row = App::get('database')->selectLastRow('users2');

    //     $data = App::get('database')->selectAll('users2');
    //     return view(
    //         'form-result',
    //         [
    //             'data' => $data,
    //             'last_row' => $last_row
    //         ]
    //     );
    // }

    // public function array()
    // {
    //     $posts = [
    //         new Post('First Article', 'author A', true),
    //         new Post('Second Article', 'author B', true),
    //         new Post('Third Article', 'author A', true),
    //         new Post('Fourth Article', 'author C', false),
    //     ];

    //     // $unpublishedposts = array_filter($posts, function ($post) {
    //     //     return !$post->published;
    //     // });

    //     // $publishedposts = array_filter($posts, function ($post) {
    //     //     return $post->published;
    //     // });


    //     // $modified = array_map(function($post){
    //     //     return ['title'=>$post->title];
    //     // }, $posts);

    //     $title = array_column($posts, 'title', 'author');

    //     return view('array', ['title' => $title, 'posts' => $posts]);
    // }
}