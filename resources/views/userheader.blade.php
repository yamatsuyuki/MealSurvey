<?php
session_start();
$username = $_SESSION['name'];
if (isset($_SESSION['id'])) {//ログインしているとき
    $msg =  htmlspecialchars($username, \ENT_QUOTES, 'UTF-8');
    $link = '<a href="userlogout">ログアウト</a>';
} else {//ログインしていない時
    $msg = 'ログインしていません';
    $link = '<a href="login">ログイン</a>';
}
?>
<!doctype html>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
<body>
  <div class="headeruser">
    <div class="username">
      <h5>MealSurvey</h5>
      <h6><?php echo $msg; ?></h6>
      <h6><?php echo $link; ?></h6>
    </div>
    <div class="userheader">
        <a href="{{ route('userto') }}">TOP</a>
        <a href="{{ route('weekmenu') }}">直近献立</a>
        <a href="{{ route('usernews') }}">ニュース</a>
    </div>
  </div>
</body>
