<?php
/**
 * Created by PhpStorm.
 * User: xuqiezi
 * Date: 2017/4/1
 * Time: 下午5:59
 */

namespace app;


use Illuminate\Database\Eloquent\Model;

class Article extends Model {
    protected $fillable = ['title', 'body', 'user_id'];
    public $timestamps = false;
}