<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ニュース記事登録</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<body>
  <img src ="\img\10966000158.jpg">
@include('adminheader')
<form action="{{route('newscomplete')}}" method="POST" class="date" enctype="multipart/form-data">
  @csrf
    <div class="newsreg">
        <div class="date">
            <input name="date" value="{{ old('date') }}" placeholder="日付" type="date"></input>
            @if ($errors->has('date'))
            <p>{{$errors->first('date')}}</p>
            @endif
        </div>

        <div class="user">
            <input name="user" value="{{ old('user') }}" placeholder="登録者" type="text">
            @if ($errors->has('user'))
            <p>{{$errors->first('user')}}</p>
            @endif
        </div>

        <div class="newstitle">
            <input name="title" value="{{ old('title') }}" placeholder="タイトル" type="text">
            @if ($errors->has('title'))
            <p>{{$errors->first('title')}}</p>
            @endif
        </div>
    </div>

        <div class="newscontent">
            <textarea name="content" value="{{ old('content') }}" placeholder="内容の入力" type="text"></textarea>
            @if ($errors->has('content'))
            <p>{{$errors->first('content')}}</p>
            @endif
        </div>

        <div class="newsimg">
            <label for="image">画像登録</label>
            <input type="file" class="image" name='image' id="image">
        </div>
        <input type='button' onclick='history.back()' value='戻る' class="formbtn">
        <button type="submit" class="formbtn">送信</button>
</form>

@include('adminfooter')

</body>
