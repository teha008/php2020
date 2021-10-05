<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';
// exit;

$errors = [];

$title = '';
$description = '';
$price = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = (int)$_POST['price'];

  date_default_timezone_set('Asia/Seoul');
  $date = date('Y-m-d H:i:s');

  if (!$title) {
    $errors[] = '상품명을 입력하세요.';
  }

  if (!$price) {
    $errors[] = '상품 가격을 입력하세요.';
  }

  if (!is_dir('images')) {
    mkdir('images');
  }

  // 에러가 비어있는 게 true면
  if (empty($errors)) {
    $image = $_FILES['image'] ?? null;
    $imagePath = '';
    echo '<pre>';
    var_dump($image);
    echo '<pre>';

    // $imageRealAddress = './uploads/' . $image['name'];

    if ($image && $image['tmp_name']) {
      $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
      mkdir(dirname($imagePath));

      move_uploaded_file($image['tmp_name'], $imagePath);
    }

    $statement = $pdo->prepare("INSERT INTO products(title, image, description, price, create_date) VALUE(:title, :image, :description, :price, :date)");
    $statement->bindValue(':title', $title);
    $statement->bindValue(':image', $imagePath);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':date', $date);
    $statement->execute();
    header('Location: index.php');
  }
}

function randomString($n)
{
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $str = '';
  for ($i = 0; $i < $n; $i++) {
    $index = rand(0, strlen($characters) - 1);
    $str .= $characters[$index];
  }

  return $str;
}

// $pdo 커넥션 끊기
// $pdo = null;
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="app.css">
  <title>Products CRUD</title>
</head>

<body>
  <h1>새상품 만들기</h1>
  <!-- 에러가 있을 때만 실행 -->
  <?php if (!empty($errors)) : ?>
    <div class="alert alert-danger">
      <?php foreach ($errors as $error) : ?>
        <div><?= $error ?></div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
  <!-- 에러가 있을 때만 실행 -->

  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group mb-2">
      <label>상품 사진</label>
      <br>
      <input type="file" name="image">
    </div>
    <div class="form-group mb-2">
      <label>상품명</label>
      <input type="text" name="title" class="form-control" value="<?= $title ?>">
    </div>
    <div class="form-group mb-2">
      <label>상품 설명</label>
      <textarea name="description" class="form-control"><?= $description ?></textarea>
    </div>
    <div class=" form-group mb-2">
      <label>상품 가격</label>
      <input type="number" name="price" step=".01" class="form-control" value="<?= $price ?>"></input>
    </div>
    <button type=" submit" class="btn btn-primary">완료</button>
  </form>
</body>

</html>