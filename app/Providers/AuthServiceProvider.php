<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
     public function boot()
     {
         //なんやかんやあって



         //カスタムプロバイダの名前を定義
         \Auth::provider(
             //この部分の名前は何でもよい。config/auth.php には、この名称で設定を行う。
             'my_eloquent_user_provider',
             function ($app, array $config) {
                 //MyEloquentUserProviderクラスのインスタンスを生成する
                 return new MyEloquentUserProvider($app['hash'], $config['model']);
             }
         );


         //なんやかんやが続く

     }
}
