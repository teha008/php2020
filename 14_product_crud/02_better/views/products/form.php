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
    <img class="update-thumb-image" src="/<?= $product['image'] ?>" alt="사진">
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