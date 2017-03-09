<?php
/**
 * Created by PhpStorm.
 * User: lnthao
 * Date: 3/7/2017
 * Time: 3:13 PM
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller {
    public function index($id = null) {
        if ($id == null) {
            return DB::table('users')->get();
        } else {
            return $this->show($id);
        }
//        $users = DB::table('users')->paginate(2);
//        return view('user', ['users' => $users]);
    }

    public function show($id) {
        return DB::table('users')->where('id', $id)->first();
    }

}