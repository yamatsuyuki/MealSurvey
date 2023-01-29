<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ユーザートップ</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<img src ="\img\10966000158.jpg">
<header>
@include('userheader')
</header>
<body class="home page page-id-1">
<div class="usertopdate">
  <h2>本日の献立</h2><br>
  <?php echo date('m月d日'); ?>
  @foreach($contacts as $meal)
  <table>
    <tr>
      <th>食事の時間</th>
      <th>メニュー</th>
    </tr>
    <tr>
      <td>{{$meal->timezone}}</td>
      <td>{{$meal->menu}}</td>
      <td><div class="button004"><a href="/menudetail/{{$meal->id}}">メニュー詳細</a></div>
      <form action="" method="post"></td>
    </tr>
  </table>
  @endforeach
  </body>
</div>

</body>
<footer>
@include('userfooter')
</footer>
