<?php

require_once "../../database.php";
require_once "../../functions.php";

$errors = [];

$title = '';
$description = '';
$price = '';
$product = ['image' => ''];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  date_default_timezone_set('Asia/Seoul');

  require_once "../../validate_product.php";

  // 에러가 비어있는 게 true면
  if (empty($errors)) {
    $statement = $pdo->prepare("INSERT INTO products(title, image, description, price, create_date) VALUE(:title, :image, :description, :price, :date)");
    $statement->bindValue(':title', $title);
    $statement->bindValue(':image', $imagePath);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':date', date('Y-m-d H:i:s'));
    $statement->execute();
    header('Location: index.php');
  }
}

// $pdo 커넥션 끊기
// $pdo = null;
?>

<?php include_once "../../views/partials/header.php" ?>

<div style="display: flex; justify-content: space-between;">
  <h1>새상품 만들기&nbsp;<i class="bi bi-gift" style="color: red;"></i>
  </h1>

  <p class="mt-2">
    <a href="index.php" class="btn btn-secondary">홈으로 이동</a>
  </p>
</div>
<?php include_once "../../views/products/form.php" ?>

</body>

</html>