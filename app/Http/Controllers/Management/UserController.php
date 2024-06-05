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
            'email' => 'required|email',
            'role' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'writer',
            'birth_date' => $request->birth_date,
        ]);

        return response()->json(['message' => 'User created successfully']);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
        ]);

        User::find($id)->update([
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
