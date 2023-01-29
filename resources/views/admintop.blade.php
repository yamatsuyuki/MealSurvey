<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>新規登録</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<body>
  <img src ="\img\10966000158.jpg">
@include('adminheader')
<div class="usertopdate">
  <h1>本日の献立</h1><br>
  <?php echo date('m月d日'); ?>
</div>
@foreach($contacts as $meal)
<table>
  <tr>
    <th>食事の時間</th>
    <th>メニュー</th>
  </tr>
  <tr>
    <td>{{$meal->timezone}}</td>
    <td>{{$meal->menu}}</td>
    <td><a href="/admintodaymenu/{{$meal->id}}"><button type="button" class="btn-primary">メニュー詳細</button></a>
    <form action="" method="post"></td>
  </tr>
</table>
@endforeach
</body>

<footer>
@include('adminfooter')
</footer>
</body>
