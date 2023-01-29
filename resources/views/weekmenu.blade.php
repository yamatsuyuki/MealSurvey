<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>週刊献立</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<header>
@include('userheader')
</header>
<body class="home page page-id-6">
<img src ="\img\10966000158.jpg">
<div class="weekmenu">
  <h2>直近献立</h1><b2>
  @foreach($contacts as $meal)
  <table>
    <tr>
      <th>日付</th>
      <th>時間帯</th>
      <th>詳細</th>
    </tr>
    <tr>
      <td>{{$meal->date}}</td>
      <td>{{$meal->timezone}}</td>
      <td><a href="/menudetail/{{$meal->id}}"><button type="button" class="btn-primary">メニュー詳細</button></a></td>
    </tr>
  </table>
  @endforeach
</div>
</body>
<footer>
@include('userfooter')
</footer>
