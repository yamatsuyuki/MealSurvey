<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>登録ユーザーの編集</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<body>
  <img src ="\img\10966000158.jpg">
@include('adminheader')
<table>
  <tr>
    <th>id</th>
    <th>名前</th>
    <th>誕生日</th>
  </tr>

@foreach($contacts as $data)
  <tr>
    <td>{{$data->id}}</td>
    <td>{{$data->name}}</td>
    <td>{{$data->userid}}</td>
    <td><a href="usereditconfirm/{{$data->id}}"><button type="button" class="btn-primary">編集</button></a></td>
    <td><form action="/userdelete/{{$data->id}}" method="post">
      {{ csrf_field()}}
      <input type="submit" class="btn-primary" value="削除" onclick="return confirm('本当に削除しますか？')" action="/userdelete/{{$data->id}}" method="post">
    </form></td>
  </tr>
@endforeach
</table>
<footer>
@include('adminfooter')
</footer>

</body>
