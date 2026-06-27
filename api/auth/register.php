<?php
require_once '../../config/db.php'; // ← 一番上
$data = json_decode(file_get_contents("php://input"), true);
$name = $data["name"];
$email = $data["email"];
$password = $data["password"];
$phone = $data["phone"];
$gender = $data["gender"];
$errors = [];
$phonePattern = "/^0\d{9,10}$/";
$emailPattern = "/^[^\s@]+@[^\s@]+\.[^\s@]+$/";

if (empty($name)) {
    $errors["name"] = "名前を入力してください";
}

if (empty($email)) {
    $errors["email"] = "メールアドレスを入力してください";
} else if (!preg_match($emailPattern, $email)) {
    $errors["email"] = "正しいメールアドレスの形式で入力してください";
}

if (empty($password)) {
    $errors["password"] = "パスワードを入力してください";
} else if (strlen($password) < 8) {
    $errors["password"] = "パスワードは８文字以上で入力してください";
}

if (empty($phone)) {
    $errors["phone"] = "電話番号を入力してください";
} else if (!preg_match($phonePattern, $phone)) {
    $errors["phone"] = "ハイフンなしの10桁または11桁で入力してください";
}

if (!empty($errors)) {
    echo json_encode(["success" => false, "errors" => $errors]);
    exit; // ここで処理を止める
}

// バリデーション通ったらdbに情報を登録する

echo json_encode(["success" => true]);
