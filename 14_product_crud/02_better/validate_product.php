<?php

$title = $_POST['title'];
$description = $_POST['description'];
$price = (int)$_POST['price'];
$imagePath = '';

if (!$title) {
  $errors[] = '상품명을 입력하세요.';
}

if (!$price) {
  $errors[] = '상품 가격을 입력하세요.';
}

if (!is_dir(__DIR__ . '/public/images')) {
  mkdir(__DIR__ . '/public/images');
}

// 에러가 비어있는 게 true면 => 에러가 없다면
if (empty($errors)) {
  $image = $_FILES['image'] ?? null;
  $imagePath = $product['image'];

  if ($image && $image['tmp_name']) {
    if ($product['image']) {
      unlink(__DIR__ . '/public/' . $product['image']);
    }

    $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
    mkdir(dirname(__DIR__ . '/public/' . $imagePath));
    move_uploaded_file($image['tmp_name'], __DIR__ . '/public/' . $imagePath);
  }
}
