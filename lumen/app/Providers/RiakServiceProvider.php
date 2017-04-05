<?php
/**
 * Created by PhpStorm.
 * User: xuqiezi
 * Date: 2017/3/31
 * Time: 下午4:10
 */

namespace app\Providers;


use Illuminate\Database\Connection;
use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->singleton('Riak\Contracts\Connection', function ($app) {
            return new Connection(config('riak'));
        });
    }
}