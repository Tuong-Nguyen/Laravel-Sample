<?php
/**
 * Created by PhpStorm.
 * User: lnthao
 * Date: 3/7/2017
 * Time: 3:13 PM
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\User;
use App\Http\Controllers\Controller;

class UserController extends Controller {
    const PASSWORD_DEFAULT = '12345678';

    public function index($id = null) {
        if ($id == null) {
            return User::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
//        $users = DB::table('users')->paginate(2);
//        return view('user', ['users' => $users]);
    }

    public function show($id) {
        return User::find($id)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $user = new User;

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt(PASSWORD_DEFAULT);
        $user->save();

        return 'User record successfully created with id ' . $user->id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // updated_at will be edited automatically
        $user->update();

        return "Sucess updating user #" . $user->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $user = User::find($id);
        $user->delete();

        return "User record successfully deleted #" . $id;
    }

}