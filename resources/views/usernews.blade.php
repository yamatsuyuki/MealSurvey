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
  <img src ="img\10966000158.jpg">
<header>
@include('userheader')
</header>
<h4>最近のニュース</h4>

@foreach($contacts as $news)
<dl>
  <div class="denews">
    <dt>{{$news->date}}</dt>
    <dd>{{$news->title}}
    <dd><img src="/storage/{{ $news->image }}"></dd>
    <dd><div class="button002"><a href="/newsdetail/{{$news->id}}">ニュースを読む</a></div></a></dd>
  </div>
</dl>
      {{ csrf_field()}}
@endforeach


@include('userfooter')

</body>
