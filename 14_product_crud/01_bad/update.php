<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'] ?? null;

if (!$id) {
  header('Location: index.php');
  exit;
}

$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);

$errors = [];

$title = $product['title'];
$price = $product['price'];
$description = $product['description'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = (int)$_POST['price'];

  if (!$title) {
    $errors[] = '상품명을 입력하세요.';
  }

  if (!$price) {
    $errors[] = '상품 가격을 입력하세요.';
  }

  if (!is_dir('images')) {
    mkdir('images');
  }

  // 에러가 비어있는 게 true면 => 에러가 없다면
  if (empty($errors)) {
    $image = $_FILES['image'] ?? null;
    $imagePath = $product['image'];

    if ($image && $image['tmp_name']) {
      if ($product['image']) {
        unlink($product['image']);
      }

      $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
      mkdir(dirname($imagePath));

      move_uploaded_file($image['tmp_name'], $imagePath);
    }

    $statement = $pdo->prepare("UPDATE products SET title=:title, image=:image, description=:description, price=:price WHERE id=:id");
    $statement->bindValue(':title', $title);
    $statement->bindValue(':image', $imagePath);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':id', $id);
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

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="app.css">
  <title>Products CRUD</title>
</head>

<body>

  <div style="display: flex; justify-content: space-between;">
    <h1>상품 수정&nbsp;<i class="bi bi-gift" style="color: red;"></i>&nbsp;<b style="color: green;"><?= $product['title'] ?></b>
    </h1>

    <p class="mt-2">
      <a href="index.php" class="btn btn-secondary">홈으로 이동</a>
    </p>
  </div>
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

    <?php if ($product['image']) : ?>
      <img class="update-thumb-image" src="<?= $product['image'] ?>" alt="사진">
    <?php endif; ?>

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