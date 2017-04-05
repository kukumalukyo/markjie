<?php
/**
 * Created by PhpStorm.
 * User: xuqiezi
 * Date: 2017/3/28
 * Time: 下午5:27
 */

namespace app\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Log;

class UserController extends Controller {

    public function sendReminderEmail(Request $request, $id) {
//        $user = User::findOrFail($id);
//        $job = (new SendReminder)
    }

    public function showProfile($id) {
        Log::info("show user:".$id);
        return User::findOrFail($id);
    }

}