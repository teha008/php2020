<?php
// Magic constants
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';
echo __LINE__ . '<br>';

// Create directory
// mkdir('test');

// Rename directory
// rename('test', 'test2');

// Delete directory
// rmdir('test2');

// Read files and folders inside directory
// $files = scandir('../');
// echo '<pre>';
// var_dump($files);
// '</pre>';

// file_get_contents, file_put_contents
// echo file_get_contents('lorem.txt');
// file_put_contents('sample.txt', 'Some Content');

// file_get_contents from URL
// $userJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
// echo $userJson;
// $users = json_decode($userJson, true);
// echo '<pre>';
// var_dump($users);
// '</pre>';

// echo $users[0]->id;
// echo $users[0]->name;

echo file_exists('sample.txt') . '<br>';
echo is_dir('test') . '<br>';

date_default_timezone_set('Asia/Seoul');
echo date("F d Y H:i:s.", filemtime('sample.txt')) . '<br>';

echo filesize('sample.txt') . '<br>';
echo disk_free_space('/') . '<br>';
$lines = file('sample.txt');
foreach ($lines as $line) {
  echo ($line);
}
// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file