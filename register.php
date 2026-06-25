<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ZENJI Bookstore</title>
  <meta name="description" content="" />
  <link rel="stylesheet" href="/bookstore-EC/css/stylesheet.css">
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet" />
</head>

<body>
  <?php include 'components/header.php'; ?>
  <main>
    <div class="container">
      <div class="text-center">
        <h2 style="color: coral;">新規会員登録</h2>
      </div>

      <div class="d-flex justify-content-center mt-5">
        <div>
          <div class="text-center mb-1">
            <label style="width: 96px;">名前</label>
            <input type="text" name="name" class="form-control">
            <span class="text-danger d-block" id="name-error" style="min-height: 25px;"></span>
          </div>
          <div class="text-center mb-1">
            <label style="width: 96px;">メールアドレス</label>
            <input type="email" name="email" class="form-control">
            <span class="text-danger d-block" id="email-error" style="min-height: 25px;"></span>
          </div>
          <div class="text-center mb-1">
            <label style="width: 96px;">パスワード</label>
            <input type="password" name="password" class="form-control">
            <span class="text-danger d-block" id="password-error" style="min-height: 25px;"></span>
          </div>
          <div class="text-center mb-1">
            <label style="width: 96px;">電話番号</label>
            <input type="tel" name="phone" class="form-control">
            <span class="text-danger d-block" id="phone-error" style="min-height: 25px;"></span>
          </div>
          <div class="text-center mb-3">
            <label>性別（任意）</label>
            <select name="gender" class="from-control">
              <option value="">選択しない</option>
              <option value="male">男性</option>
              <option value="female">女性</option>
              <option value="other">その他</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include 'components/footer.php'; ?>
  <script type="module" src="script.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>