<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ニュース記事</title>
<link rel="stylesheet" href="{{ asset('/css/bootstrap.css')  }}" type="text/css">
<link rel="stylesheet" href="{{ asset('/css/meal.css')  }}">
</head>
<body>
  <img src ="\img\10966000158.jpg">
<header>
@include('userheader')
</header>
    <div class="newsdetail">
        <div class="button001">
          <a href="{{route('usernews')}}">戻る</a>
        </div>
        <div class="userdate">
          {{$data->date}}
        </div>

        <div class="usernewstitle">
          <label>{{$data->title}}</label>
        </div>

        <div class="usernewscontent">
          {!!nl2br($data->content)!!}
        </div>

        <div class="newsimage">
          <img src="{{'/storage/'.$data['image']}}">
        </div>
    </div>

<footer>
@include('userfooter')
</footer>
</body>
