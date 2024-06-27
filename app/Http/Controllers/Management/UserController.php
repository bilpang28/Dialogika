<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.management.user.index');
    }

    public function getTableUser()
    {
        $query = User::orderBy('created_at', 'desc');

        return DataTables::of($query)
            ->addColumn('action', function ($query) {
                return view('pages.management.user.components.action', compact('query'));
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'role' => 'required',
            'password' => 'required',
            'comfirm_password' => 'required|same:password',
        ]);

        $profile_pic = null;
        if ($request->profile_pic) {
            $file = $request->file("profile_pic");
            $profile_pic = time() . "." . $file->getClientOriginalExtension();
            $file->storeAs('/user/profile/', $profile_pic, 'public');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'writer',
            'birth_date' => $request->birth_date,
            'profile_pic' => $profile_pic,
        ]);

        return response()->json(['message' => 'User created successfully']);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
        ]);

        $user = User::findOrFail($request->id);

        $profile_pic = null;
        if ($request->profile_pic) {
            $file = $request->file("profile_pic");
            if ($user->profile_pic) {
                $profile_pic = $user->profile_pic;
            } else {
                $profile_pic = time() . "." . $file->getClientOriginalExtension();
                $user->update(['profile_pic' => $profile_pic]);
            }
            $file->storeAs('/user/profile/', $profile_pic, 'public');
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'birth_date' => $request->birth_date,
        ]);

        return response()->json(['message' => 'User updated successfully']);
    }

    public function destroy(Request $request)
    {
        User::destroy($request->id);

        return response()->json(['message' => 'User deleted successfully']);
    }
}
