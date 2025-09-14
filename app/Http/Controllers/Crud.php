<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class Crud extends Controller
{
    public $col = ['name','email','department'];
    public function index()
    {
        $user = User::all();
        return view('user', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        return view('user', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
User::create(array_merge(
    $request->only($this->col),
    ['password' => bcrypt($request->password)]
));        //dd($request->name,$request->email);
    // $user = new User();
    // $user->name  = $request->name;
    // $user->email = $request->email;
    //$user->password = bcrypt('123456');
        // $user->save();
    return redirect()->route('admin.create')->with('success', 'User Created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $finduser = User::Find($id);
        return view('show',compact('finduser'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $finduser = User::Find($id);
        return view('edit',compact('finduser'));
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
{
//User::where('id',$id)->update($request->only($this->col));
    $user = User::findOrFail($id);
    $data = $request->only($this->col);
    if ($request->filled('password')) {
        $data['password'] = bcrypt($request->password);
    }
    $user->update($data);
    return redirect()->route('admin.create')->with('success', 'User updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $finduser = User::Find($id);
        $finduser->delete();
        return redirect()->route('admin.create')->with('Delete', 'User DELETED successfully!');
    }
}
