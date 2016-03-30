<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    public function __construct()
    {

        $this->middleware('role:admin');
    }

    public function index(User $userModel)
    {
        $data = array();
        $data['allUsers'] = User::all();

        $permissions = array();

        foreach($data['allUsers'] as $user)
        {
            foreach ($user->roles as $role)
            {
                foreach ($role->permissions as $permission)
                {
                    $permissions[] = $permission['name'];
                }
            }
        }
//dd($permissions);
        foreach ($data['allUsers'] as $user)
        {

            foreach ($user->roles as $role) {
                echo ' <br>';
                $data['roles'][] =  $role;

            }
        }

        return view('admins.users.home', compact('data'));
    }
}


//public function index(User $userModel, Role $roleModel, Role_user $role_userModel )
//{
//        $user = User::find(1);
//        echo '<pre>';
//    $data = array();
//        $user->hasMany('App\Role');
//
//
//
//        foreach ($user->roles as $role) {
//            echo $role->description;
//        }
//        $role_userModel->get();
//        $data['allRole'] = $roleModel->get();
//    $data   = $userModel->get();
//        dd($data['allUsers']);
//        $allRole = $roleModel->get();
//           echo "forbidden";
//    return view('admins.users.home', ['data' => $data ]);