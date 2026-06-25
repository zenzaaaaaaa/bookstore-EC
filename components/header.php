<?php
session_start();
// require_once 'db.php';
?>

<header>
  <div class="d-flex justify-content-between">
    <div class="m-3">
      <h1>ZENJI Bookstore</h1>
    </div>
    <div class="d-flex align-items-center m-3">
      <div>
        <a href="#">カート？？</a>
      </div>
      <?php if (isset($_SESSION['user_id'])): ?>
        <div>
          <a href="#">マイページ？？</a>
        </div>
        <div>
          <a href="#">ログアウト？？</a>
        </div>
      <?php else: ?>
        <div>
          <a href="#">ログイン？？</a>
        </div>
        <div>
          <a href="#">会員登録？？</a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</header>