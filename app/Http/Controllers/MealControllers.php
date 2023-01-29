<?php
namespace App\Http\Controllers;
//use App\Http\Controller;
use App\Models\Contact;
use App\Models\Meal;
use App\Models\Normaluser;
use App\Models\News;
use App\Http\Requests\MealRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Validator;

class MealControllers extends Controller{
    public function index() {
        //header('location','login.blade.php');
        return view('login');
    }

    public function userregister() {
        //header('location','login.blade.php');
        return view('userregister');
    }

    public function newpass() {
        //header('location','newpass.blade.php');
        return view('newpass');
    }

    public function newuser() {
        //header('location','newuser.blade.php');
        return view('newuser');
    }

    public function adminuser() {
        //header('location','adminuser.blade.php');
        return view('adminuser');
    }

    public function register() {
        //header('location','register.blade.php');
        return view('register');
    }

    public function usercheck() {
        //header('location','usertop.blade.php');
        return view('usercheck');
    }

    public function userlogout() {
        //header('location','usertop.blade.php');
        return view('userlogout');
    }

    public function touser(){
      $contacts = DB::select('SELECT * FROM meal WHERE date = current_date');
      $data = ['contacts' => $contacts];
      return view('admintop', $data);
    }

    public function mealdetail($id){
        $meal = Meal::find($id);
        return view('admintodaymenu')->with('meal', $meal);
      }

    public function registers() {
      //header('location','registers.blade.php');
      return view('registers');
  }

    public function mealregister() {
      //header('location','mealregister.blade.php');
      return view('mealregister');
  }


  public function newusercomplete(Request $request){
    $post = new Normaluser;
    $post->userid = $request->userid;
    $post->name = $request->name;
    $post->password = $request->password;
    $post->save();

    return view('newusercomplete');
  }

  public function store(MealRequest $request){
    // アップロードされたファイルの取得
       $image = $request->file('image');
       // ファイルの保存とパスの取得
       $path = isset($image) ? $image->store('image', 'public') : '';

    Meal::create([
      'date' => $request->date,
      'timezone' => $request->timezone,
      'user' => $request->user,
      'menu' => $request->menu,
      'image' => $path,
    ]);
    return view('mealcomplete');
  }


    public function newsregister() {
      //header('location','newsregister.blade.php');
      return view('newsregister');
  }

    public function newsstore(Request $request){
      $image = $request->file('image');
      // ファイルの保存とパスの取得
      $path = isset($image) ? $image->store('image', 'public') : '';

       News::create([
         'date' => $request->date,
         'user' => $request->user,
         'title' => $request->title,
         'content' => $request->content,
         'image' => $path,
       ]);
       return view('newscomplete');
     }

    public function userlogin() {
      //header('location','userlogin.blade.php');
      return view('userlogin');
    }

    public function newsuser(){
      $contacts = DB::select('select * from news ORDER BY date DESC');
      $data = ['contacts' => $contacts];
      return view('usernews', $data);
    }

    public function detailnews($id){
        $data = News::find($id);
        return view('newsdetail')->with('data', $data);
      }


    public function contact() {
      $contacts = DB::select('select * from news ORDER BY date DESC');
      $data = ['contacts' => $contacts];
      return view('newsedit', $data);
    }

    public function update($id){
      $data = News::find($id);
      return view('newseditconfirm')->with('data', $data);
      }

      public function newseditcomplete(Request $request){
        $data = $request->all();
        $request->validate([
          'date' => 'required',
          'user' => 'required',
          'title' => 'required',
          'content' => 'required',
        ]);


        $post = News::find($request->id);
        $post->date = $request->date;
        $post->user = $request->user;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $request->image;
        $post->save();
        // 保存
        return view('newseditcomplete');
      }


    public function newstop() {
      //header('location','userlogin.blade.php');
      return view('newstop');
    }

    public function logout(\Illuminate\Http\Request $request)
      {
        Auth::logout();
        return redirect()->route('userlogin');
      }

    public function topuser(){
      $contacts = DB::select('SELECT * FROM meal WHERE date = current_date');
      $data = ['contacts' => $contacts];
      return view('usertop', $data);
    }

    public function menudetail($id){
        $meal = Meal::find($id);
        return view('menudetail')->with('meal', $meal);
      }


    public function menuweek(){
      $contacts = DB::select('SELECT * FROM meal WHERE current_date <= (NOW() - INTERVAL 7 DAY)');
      $data = ['contacts' => $contacts];
      return view('weekmenu', $data);
    }

    public function detailmenu($id){
        $meal = Meal::find($id);
        return view('menudetail')->with('meal', $meal);
    }

    public function mealpast(){
      $contacts = DB::select('SELECT * FROM meal WHERE date < current_date');
      $data = ['contacts' => $contacts];
      return view('pastmeal', $data);
    }


    public function meal() {
      $contacts = DB::select('SELECT * FROM meal WHERE date > now()');
      $data = ['contacts' => $contacts];
      return view('mealedit', $data);
    }

    public function mealupdate($id){
      $data = Meal::find($id);
      return view('mealeditconfirm')->with('data', $data);
    }

      public function mealeditcomplete(MealRequest $request, Meal $data){
        // アップロードされたファイルの取得
        // 画像ファイルインスタンス取得
         $image = $request->file('image');
         // 現在の画像へのパスをセット
         $path = $data->image;
         if (isset($image)) {
             // 現在の画像ファイルの削除
             \Storage::disk('public')->delete($path);
             // 選択された画像ファイルを保存してパスをセット
             $path = $image->store('image', 'public');
         }
         // データベースを更新
         $data->update([
          'date' => 'required',
          'timezone' => 'required',
          'user' => 'required',
          'menu' => 'required',
          'image' => $path,
      ]);
      return view('mealeditcomplete');
    }

    public function delete($id){
      $book = News::find($id);
      $book -> delete();

      return redirect('newsedit');
    }

    public function mealdelete($id){
      $book = Meal::find($id);
      $book -> delete();
      return redirect('pastmeal');
    }

    public function usertop(){
      $contacts = DB::select('SELECT * FROM meal WHERE date = current_date');
      $data = ['contacts' => $contacts];
      return view('usertop', $data);
    }

    public function useredit(){
      $contacts = DB::select('SELECT * FROM normalusers ORDER BY id ASC');
      $data = ['contacts' => $contacts];
      return view('useredit', $data);
    }

    public function userdelete($id){
      $book = Normaluser::find($id);
      $book -> delete();
      return redirect('useredit');
    }

    public function userupdate($id){
      $data = Normaluser::find($id);
      return view('usereditconfirm')->with('data', $data);
    }

    public function usereditcomplete(Request $request){
      $data = $request->all();
      $request->validate([
        'name' => 'required',
        'userid' => 'required','min:8','max:8',
        'password' => 'required',
      ]);

      $post = Normalusers::find($request->id);
      $post->name = $request->name;
      $post->userid = $request->userid;
      $post->password = $request->password;
      $post->save();
      // 保存
      return view('usereditcomplete');
    }

    public function userto(){
      $contacts = DB::select('SELECT * FROM meal WHERE date = current_date');
      $data = ['contacts' => $contacts];
      return view('userto', $data);
    }


}
