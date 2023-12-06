<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        $admins = User::where('type' , 'admin')->get();
        return view('dashboard.backend.admins.index' , compact('admins'));
    }

    
    public function create()
    {
        return view('dashboard.backend.admins.create');

    }

   
    public function store(Request $request)
    {
        $data = $request->except('img');
        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('admins');
        }
   
        return redirect(route('admin.admins.index'))->with('success', 'Data Created Successfully');
        
    }

    
    public function show(string $id)
    {
        //
    }

   
    public function edit(string $id)
    {
        return view('dashboard.backend.admins.edit');

    }

   
    public function update(Request $request, string $id)
    {
        

    }

   
    public function destroy(string $id)
    {
        //
    }
}
