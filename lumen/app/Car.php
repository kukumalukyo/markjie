<?php
/**
 * Created by PhpStorm.
 * User: xuqiezi
 * Date: 2017/3/28
 * Time: 下午5:59
 */

namespace app;


use Illuminate\Database\Eloquent\Model;

class Car extends Model {
    protected $fillable = ['make', 'model', 'year'];
    public $timestamps = false;
    
}