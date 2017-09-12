<?php
class Post {
  public $title;

  public $author;

  public $published;

  public function __construct($title, $author, $isPublished) {
    $this->title = $title;
    $this->author = $author;
    $this->published = $isPublished;
  }
}

$posts = [
  new Post('My first', 'BO', true),
  new Post('DExig', 'BO', true),
  new Post('BMP', 'YOKER', false),
  new Post('Accorn', 'MP', false)
];

// Filter

// $unpublishedPosts = array_filter($posts, function($post) {
//   return !$post->published;
// });

// Map

// $modified = array_map(function($post) {
//   $post->AAA = 'PPP';
//   return $post;
// }, $posts);

// var_dump($modified);

// foreach

// foreach ($posts as $post) {
//   $post->published = null;
// };

// var_dump($posts);

// columns
// The array_column() function returns the values from a single column in the input array.

$posts = array_map(function ($post) {
  return (array) $post;
}, $posts);

$titles = array_column($posts, 'title', 'author');

var_dump($titles);