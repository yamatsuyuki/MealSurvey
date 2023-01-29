<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>記事編集</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<body>
  <img src ="\img\10966000158.jpg">
@include('adminheader')
<table>

  <tr>
    <th>投稿日時</th>
    <th>投稿者</th>
    <th>記事タイトル</th>
    <th>内容</th>
    <th>編集</th>
    <th>削除</th>
  </tr>

@foreach($contacts as $news)
  <tr>
    <td>{{$news->date}}</td>
    <td>{{$news->user}}</td>
    <td>{{$news->title}}</td>
    <td>{{$news->content}}</td>
    <td><a href="/newseditconfirm/{{$news->id}}"><button type="button" class="btn-primary">編集</button></a></td>
    <td><form action="/delete/{{$news->id}}" method="post">
      {{ csrf_field()}}
      <input type="submit" class="btn-primary" value="削除" onclick="return confirm('本当に削除しますか？')" action="/delete/{{$news->id}}" method="post">
    </form></td>
  </tr>
@endforeach
</table>
<footer>
@include('adminfooter')
</footer>
