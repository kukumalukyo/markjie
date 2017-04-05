<?php
/**
 * Created by PhpStorm.
 * User: xuqiezi
 * Date: 2017/4/1
 * Time: 下午6:05
 */

namespace app\Http\Controllers;

use app\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ArticleController extends Controller  {
    public function create(Request $request) {
        $article = Article::create($request->all());
        return response()->json($article);
    }
}