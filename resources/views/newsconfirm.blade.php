<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ニュース登録確認</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<body>
  <img src ="\img\10966000158.jpg">
@include('adminheader')
  <div class="contact-box">
    <form method="POST" action="{{ route('newscomplete') }}" enctype="multipart/form-data">
        @csrf
        <dt class="date">投稿日時</dt>
          <dd>
            <div class="">{!! htmlspecialchars($date) !!}</div>
            <input name="date" value="{{$date}}" type="hidden">
          </dd>
          <br>

        <dt class="user">登録者</dt>
          <dd>
            <div class="">{!! htmlspecialchars($user) !!}</div>
            <input name="user" value="{{$user}}" type="hidden">
          </dd>
          <br>

        <dt class="title">記事タイトル</dt>
          <dd>
            <div class="">{!! htmlspecialchars($title) !!}</div>
            <input name="title" value="{{$title}}" type="hidden">
          </dd>
          <br>

        <dt class="content">内容</dt>
            {!! (nl2br(e($content))) !!}
            <input name="content" value="{{$content}}" type="hidden">
          <br>

        <dt class="image">写真</dt>
            {!! htmlspecialchars($image) !!}
            <input name="image" value="{{$image}}" type="hidden">
          <br>

        <input type='button' onclick='history.back()' value='戻る' class="formbtn">
        <button type="submit" class="formbtn">登録</button>
    </form>
  </div>

@include('adminfooter')

</body>
