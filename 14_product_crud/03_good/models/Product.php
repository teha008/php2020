<?php

namespace app\models;

use app\Database;
use app\helpers\UtilHelper;

class Product
{
  public ?int $id = null;
  public ?string $title = null;
  public ?string $description = null;
  public ?float $price = null;
  public ?array $imageFile = null;
  public ?string $imagePath = null;

  public function load($data)
  {
    $this->id = $data['id'] ?? null;
    $this->title = $data['title'];
    $this->description = $data['description'] ?? '';
    $this->price = $data['price'];
    $this->imageFile = $data['imageFile'] ?? null;
    $this->imagePath = $data['image'] ?? null;
  }

  public function save()
  {
    $errors = [];
    if (!$this->title) {
      $errors[] = '상품명이 필요합니다.';
    }

    if (!$this->price) {
      $errors[] = '상품 가격이 필요합니다.';
    }

    if (!is_dir(__DIR__ . '/../public/images')) {
      mkdir(__DIR__ . '/../public/images');
    }

    // 에러가 비어있는 게 true면 => 에러가 없다면
    if (empty($errors)) {
      if ($this->imageFile && $this->imageFile['tmp_name']) {
        if ($this->imagePath) {
          unlink(__DIR__ . '/../public/' . $this->imagePath);
        }

        $this->imagePath = 'images/' . UtilHelper::randomString(8) . '/' . $this->imageFile;
        mkdir(dirname(__DIR__ . '/../public/' . $this->imagePath));
        move_uploaded_file($this->imageFile['tmp_name'], __DIR__ . '/../public/' . $this->imagePath);
      }

      $db = Database::$db;
      if ($this->id) {
        $db->updateProduct($this);
      } else {
        $db->createProduct($this);
      }
    }

    return $errors;
  }
}
