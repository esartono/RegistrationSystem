<?php

namespace App\Http\Controllers;

use App\User;
use DataTables;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $reportUser = [
            'all' => User::where('role', 'user')->get()->count(),
            'verified' => User::where('role', 'user')->where('verified', true)->get()->count(),
            'progress' => User::where('role', 'user')->where('step', '<', 5)->get()->count(),
            'done' => User::where('role', 'user')->where('step', 5)->get()->count(),
        ];
        return view('users.index', compact('reportUser'));
    }

    public function userslist()
    {
        $user = User::all();
        return DataTables::collection($user)->addIndexColumn()
            // ->addColumn('action', 'users.partials.action')
            ->editColumn('step', 'users.partials.step')
            ->editColumn('verified', 'users.partials.verified')
            ->toJson();
    }

    public function update(Request $request, User $user)
    {
        if($request->step == 1){
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('public')->put($file->getFilename().'.'.$extension, File::get($file));

            $dataUser = $request->only('npm', 'faculty', 'address', 'phone') + ['step' => $request->step + 1, 'file' => $file->getFilename().'.'.$extension];
            $user->update($dataUser);
        }

        $dataUser = ['step' => $request->step + 1];
        $user->update($dataUser);

        return redirect()->route('home');
    }

    public function show(User $user)
    {
        return view('users.check', compact('user'));
    }

    public function verify($id)
    {
        $user = User::find($id);
        $user->verified = true;
        $user->save();

        return redirect()->route('user.index');
    }
}
