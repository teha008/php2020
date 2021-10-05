<?php

session_start();

$_SESSION['page_counter'] = $_SESSION['page_counter'] ?? 0;
$_SESSION['page_counter']++;

$pageCounter = $_SESSION['page_counter'] ?? 0;
if ($_SESSION['page_counter'] === 10) {
  echo '저희를 10번 방문해 주셔서 감사합니다.' . '<br>';
  $pageCounter = $_SESSION['page_counter'];
  session_unset();
  session_destroy();
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h1>My Awesome page, Visited: <?= $pageCounter ?> times</h1>
</body>

</html>