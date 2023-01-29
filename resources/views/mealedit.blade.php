<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>献立編集</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<body>
  <img src ="\img\10966000158.jpg">
@include('adminheader')
<div class="edittitle">
    <h3>献立一覧</h3>
</div>

<table>

  <tr>
    <th>献立日時</th>
    <th>時間帯</th>
    <th>登録者</th>
    <th>メニュー</th>
    <th>編集</th>
    <th>削除</th>
  </tr>

@foreach($contacts as $meal)
  <tr>
    <td>{{$meal->date}}</td>
    <td>{{$meal->timezone}}</td>
    <td>{{$meal->user}}</td>
    <td>{{$meal->menu}}</td>
    <td><a href="/mealeditconfirm/{{$meal->id}}"><button type="button" class="btn-primary">編集</button></a></td>
    <td><form action="/mealdelete/{{$meal->id}}" method="post">
      {{ csrf_field()}}
      <input type="submit" class="btn-primary" value="削除" onclick="return confirm('本当に削除しますか？')" action="/mealdelete/{{$meal->id}}" method="post">
    </form></td>
  </tr>
@endforeach
</table>
<footer>
@include('adminfooter')
</footer>
