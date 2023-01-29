<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>記事編集確認ページ</title>
<link rel="stylesheet" href="{{ asset('/css/bootstrap.css')  }}" type="text/css">
<link rel="stylesheet" href="{{ asset('/css/meal.css')  }}">
</head>
<body>
  <img src ="\img\10966000158.jpg">
<div class="topimg">
</div>
  @include('adminheader')
  <form action="/newseditcomplete" method="POST" class="date" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="id" name="id" value="{{ $data->id }}">
      <div class="newsreg">
          <div class="date">
              <input name="date" value="{{ $data->date }}" placeholder="日付" type="date"></input>
              @if ($errors->has('user'))
              <p>{{$errors->first('user')}}</p>
              @endif
          </div>

          <div class="user">
              <input name="user" value="{{  $data->user }}" placeholder="登録者" type="text">
              @if ($errors->has('user'))
              <p>{{$errors->first('user')}}</p>
              @endif
          </div>

          <div class="newstitle">
              <input name="title" value="{{  $data->title }}" placeholder="タイトル" type="text">
              @if ($errors->has('title'))
              <p>{{$errors->first('title')}}</p>
              @endif
          </div>
      </div>

          <div class="newscontent">
              <textarea name="content" value="" placeholder="内容の入力" type="text">{{ $data->content }}</textarea>
              @if ($errors->has('content'))
              <p>{{$errors->first('content')}}</p>
              @endif
          </div>

          <div class="newsimage">
              <input name="image" value="{{  $data->image }}"  type="file">
          </div>


          <input type='button' onclick='history.back()' value='戻る' class="formbtn">
          <button type="submit" class="formbtn">編集する</button>
  </form>
  <div class="admfooter">
  @include('adminfooter')
  </div>
