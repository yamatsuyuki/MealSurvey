<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>献立登録</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<body>
  <img src ="\img\10966000158.jpg">
<header>
@include('adminheader')
</header>
<div class="date">
  <form method='POST' action='{{route('mealcomplete')}}'enctype="multipart/form-data">
      @csrf
        <div class="time">
            <div class="date">
                <input name="date" value="{{ old('date') }}" placeholder="日付" type="date"></input>
                @if ($errors->has('date'))
                <p>{{$errors->first('date')}}</p>
                @endif
            </div>

            <div class="timezone">
              <select name="timezone"><option value="">選択してください▼</option>
                                  <option value="朝食">朝食</option>
                                  <option value="昼食">昼食</option>
                                  <option value="夕食">夕食</option>
              </select>
                @if ($errors->has('timezone'))
                <p>{{$errors->first('timezone')}}</p>
                @endif
            </div>

        <div class="user">
            <input name="user" value="{{ old('user') }}" placeholder="登録者" type="text">
            @if ($errors->has('user'))
            <p>{{$errors->first('user')}}</p>
            @endif
        </div>
      </div>

        <div class="menu">
          @if ($errors->has('menu'))
          <p>{{$errors->first('menu')}}</p>
          @endif
            <textarea name="menu" value="{{ old('menu') }}" placeholder="献立の入力" type="text" id="textarea"></textarea>
        </div>
        <div class="image">
            <label for="image">画像登録</label>
            <input type="file" class="image" name='image' id="image">
        </div>


        <input type='button' onclick='history.back()' value='戻る' class="formbtn"></input>
        <input type="submit" class="formbtn"></input>
</form>
</div>

@include('adminfooter')
</body>
