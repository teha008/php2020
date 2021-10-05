<?php

require_once "../../database.php";

$search = $_GET['search'] ?? '';
if ($search) {
  $statement = $pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC');
  $statement->bindValue(':title', "%$search%");
} else {
  $statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
}

// $pdo->exec('SET NAMES "utf8"');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include_once "../../views/partials/header.php"; ?>

<div style="display: flex; justify-content: space-between;" class="mb-2">
  <h1>상품 CRUD</h1>

  <p class="mt-2">
    <a href="create.php" class="btn btn-success">상품 만들기</a>
  </p>
</div>

<form action="" method="get">
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="상품 검색" name="search" value="<?= $search ?>">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="submit">검색</button>
    </div>
  </div>
</form>



<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">번호</th>
      <th scope="col">사진</th>
      <th scope="col">이름</th>
      <th scope="col">가격</th>
      <th scope="col">생성일</th>
      <th scope="col">수행</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $i => $product) :  ?>
      <tr>
        <th scope="row"><?= $i + 1 ?></th>
        <td>
          <img class="thumb-image" src="/<?= $product['image'] ?>" alt="<?= $product['image'] ?>">
        </td>
        <td><?= $product['title']; ?></td>
        <td><?= number_format($product['price']) . '원'; ?></td>
        <td><?= $product['create_date']; ?></td>
        <td>
          <a href="update.php?id=<?= $product['id'] ?>" class="btn btn-sm btn-outline-primary">수정</a>
          <form action="delete.php" method="post" style="display: inline-block;">
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
            <button type="submit" class="btn btn-sm btn-outline-danger">삭제</button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>

</html>