<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>献立編集確認ページ</title>
<link rel="stylesheet" href="{{ asset('/css/bootstrap.css')  }}" type="text/css">
<link rel="stylesheet" href="{{ asset('/css/meal.css')  }}">
</head>
<body class="home page page-id-4">
    <img src ="\img\10966000158.jpg">
<div class="topimg">

</div>
  @include('adminheader')
<div class="contact-menuwrap">
  <div class="contact-box">
  <form action="/mealeditcomplete" method="POST" class="date"enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="id" name="id" value="{{ $data->id }}">
      <div class="menucofi">
          <div class="dateconfi">
            <label>献立日時</label>
              <input name="date" value="{{ $data->date }}" placeholder="日付" type="date"></input>
              @if ($errors->has('user'))
              <p>{{$errors->first('user')}}</p>
              @endif
          </div>

          <div class="timezoneconfi">
            <label>時間帯</label>
            <select name="timezone"><option value="{{ $data->timezone }}">選択してください▼</option>
                                <option value="朝食">朝食</option>
                                <option value="昼食">昼食</option>
                                <option value="夕食">夕食</option>
            </select>
              @if ($errors->has('timezone'))
              <p>{{$errors->first('timezone')}}</p>
              @endif
          </div>
          <div class="user">
            <label>登録者</label>
              <input name="user" value="{{  $data->user }}" placeholder="登録者" type="text">
              @if ($errors->has('title'))
              <p>{{$errors->first('title')}}</p>
              @endif
          </div>
      </div>
      <div class="menuimga">
          <div class="imagemenu">
            @if ($data->image !=='')
              <img src="{{ \Storage::url($data->image) }}">
            @else
              <img src="{{ \Storage::url('data/no_image.png') }}">
            @endif
            <div>
              <input type="file" name="image" class="editimg">
            </div>
          </div>
          <div class="menu">
              <textarea name="menu" value="{{ $data->menu }}" placeholder="献立" type="text">{{ $data->menu }}</textarea>
              @if ($errors->has('menu'))
              <p>{{$errors->first('menu')}}</p>
              @endif
          </div>
          <br>
      </div>

          <input type='button' onclick='history.back()' value='戻る' class="formbtn">
          <button type="submit" class="formbtn">編集する</button>
  </form>
</div>
</div>

@include('adminfooter')
