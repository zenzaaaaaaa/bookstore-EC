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
        <form id="register-form">
          <div class="d-flex align-items-start text-center mb-1">
            <label style="width: 96px; padding-top: 6.6px;">名前</label>
            <div>
              <input type="text" id="register-name" class="form-control">
              <span class="text-danger d-block" id="name-error" style="min-height: 25px;"></span>
            </div>
          </div>

          <div class="d-flex align-items-start text-center mb-1">
            <label style="width: 96px; padding-top: 6.6px;">メールアドレス</label>
            <div>
              <input type="text" id="register-email" class="form-control">
              <span class="text-danger d-block" id="email-error" style="min-height: 25px;"></span>
            </div>
          </div>

          <div class="d-flex align-items-start  text-center mb-1">
            <label style="width: 96px; padding-top: 6.6px;">パスワード</label>
            <div>
              <input type="password" id="register-password" class="form-control">
              <span class="text-danger d-block" id="password-error" style="min-height: 25px;"></span>
            </div>
          </div>

          <div class="d-flex align-items-start  text-center mb-1">
            <label style="width: 96px; padding-top: 6.6px;">電話番号</label>
            <div>
              <input type="tel" id="register-phone-number" class="form-control">
              <span class="text-danger d-block" id="phone-number-error" style="min-height: 25px;"></span>
            </div>
          </div>

          <div class="d-flex align-items-center text-center mb-3">
            <label class="">性別（任意）</label>
            <select id="gender" class="form-control" style="width: 200px;">
              <option value="">選択しない</option>
              <option value="male">男性</option>
              <option value="female">女性</option>
              <option value="other">その他</option>
            </select>
          </div>

          <div class="text-center">
            <button type="submit" id="register-btn" class="btn btn-primary">送信</button>
          </div>
        </form>
      </div>
    </div>
  </main>
  <?php include 'components/footer.php'; ?>
  <script type="module" src="js/script.js" defer></script>
  <script type="module" src="js/register.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>