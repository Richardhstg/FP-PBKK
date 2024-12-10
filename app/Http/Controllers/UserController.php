<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function index()
    {
        $class = session('result');

        if (isset($class)) {
            $users = User::where('name', $class)->get();
        } else {
            $users = User::all();
        }
        return view('dashboard.user_info', compact('users'));
    }

    public function edit(string $id)
    {
        $edit = User::findOrFail($id);
        return view('dashboard.edit_user', compact('edit'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
            ]
        );

        $update = User::findOrFail($id);

        $update->name = $request->name;
        $update->email = $request->email;

        $result = $update->save();
        Session::flash('success', 'Data berhasil diperbaharui');
        return redirect()->route('dashboard-user-info');
    }

    public function destroy(Request $request)
    {
        $data = User::findOrFail($request->user_id);
        $data->delete();
        Session::flash('success', 'User deleted successfully');
        return redirect()->route('dashboard-user-info');
    }
}
