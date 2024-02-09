<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use App\Models\UserVerify;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LogsController;

class UserController extends Controller
{

    public function index(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $perPage = $request->input('perPage', session('perPage', 10));
        session(['perPage' => $perPage]);

        $users = User::when($name, function ($query) use ($name) {
            $query->where('name', 'like', '%' . $name . '%');
        })->when($email, function ($query) use ($email) {
            $query->where('email', 'like', '%' . $email . '%');
        })
            ->paginate($perPage);

        return view('user.index', compact('users', 'perPage'));
    }

    public function add()
    {
        $roles = Role::all();

        return view('user.add', compact('roles'));
    }

    public function store(Request $request, LogsController $logController)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' =>
                'required',
                'min:5',
                'max:30',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            ]);

            if ($request->hasFile('profile_pic')) {
                $image = $request->file('profile_pic');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/uploads'), $imageName);
            } else {
                $imageName = "";
            }
            $users = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => \Hash::make($request->password),
                'profile_pic' => @$imageName,
                'status' => $request->status,
            ]);

            RoleUser::create([
                'user_id' => $users->id,
                'role_id' => $request->role_id,
            ]);
            $logController->createLog(__METHOD__, 'success', 'User Created.', auth()->user(), '');


            return redirect()->to('/user')->with('success', 'New Record Created SuccessFully!');
        } catch (Exception $e) {
            $logController->createLog(__METHOD__, 'error', $e, auth()->user(), '');

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }

    public function edit(User $user)
    {
        $user = User::where('id', $user->id)->first();
        $roles = Role::all();
        $user_role = RoleUser::where('user_id', $user->id)->first();

        return view('user.edit', compact('user', 'roles', 'user_role'));
    }

    public function update(User $user, Request $request, LogsController $logController)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);
            if ($request->hasFile('profile_pic')) {
                $image = $request->file('profile_pic');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/uploads'), $imageName);
            } else {
                $imageName = $user->profile_pic;
            }
            if ($request->password !== null) {
                $password = \Hash::make($request->password);
            } else {
                $password = $user->password;
            }

            $users = User::where('id', $user->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password,
                'profile_pic' => @$imageName,
                'status' => $request->status,
            ]);
            RoleUser::where('user_id', $user->id)->delete();

            RoleUser::create([
                'user_id' => $user->id,
                'role_id' => $request->role_id,
            ]);
            $logController->createLog(__METHOD__, 'success', 'Edited User', auth()->user(), json_encode($user));


            return redirect()->to('/user')->with('success', 'Record Updated SuccessFully!');
        } catch (Exception $e) {

            $logController->createLog(__METHOD__, 'error', 'Error on Edited User', auth()->user(), json_encode($user));

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }

    public function delete($id)
    {
        try {
            $user = User::find($id);
            $user->delete();

            return redirect()->back()->with('success', 'Record Deleted Succesfully!');
        } catch (Exception $e) {

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }

    // public function toggleStatus(Request $request, User $user)
    // {
    //     try {
    //         User::where('id', $user->id)->update([
    //             'status' => !$user->status
    //         ]);

    //         return redirect()->back()->with('success', 'Status Updated Succesfully!');
    //     } catch (Exception $e) {
    //         return redirect()->back()->with('error', 'Something Went Wrong!');
    //     }
    // }
}
