<?php
session_start();
$_SESSION = array();
session_destroy();
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ログイン</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<body>
  <img src ="img\10966000158.jpg">
  <div class="box">
    <div class="textbox">
      <form action="usercheck" class="text-center card" method="POST">
        @csrf
            <div class="container">
              <h2>ログイン</h2>

                <label class="mt-1">ユーザーID</label>
                  <input type="text" name="userid" class="form-control" id=userid>
                  <?php if (isset($err['userid'])) : ?>
                        <p class="error"><?php echo h($err['userid']); ?></p>
                  <?php endif; ?>

                <label class="mt-1">パスワード</label>
                  <input type="password" name="password" class="form-control" id=password>
                <button class="btn btn-primary mt-3" type="submit">ログイン</button>
        </form>
              <p class="card-text"><a href="newuser">新規登録はこちら</a></p>
              <p class="card-text"><a href="login">管理者の方はこちら</a></p>
            </div>
        </div>
    </div>
  <div class="emptybox">
    <h2>Meal<br>Survey</h2>
  </div>
</body>
</html>
