<?php

namespace App\Http\Controllers;

use App\Models\GuestList;
use Illuminate\Http\Request;

class Guest_ListController extends Controller
{
    public function guest_list()
    {
        $guest = GuestList::all();
        return view('guest_list/guest_list')->with('guests',$guest);
    }
    
    public function create()
    {
        return view('guest_list/create_guest');
    }

    public function store(Request $request)
    {
        $guest_list = new GuestList();
        $guest_list->name=$request->name;
        $guest_list->discription=$request->discription;

        $guest_list->save();
        return redirect()->route('guest_list.all');
    }

    public function show($id)
    {
        $guest=GuestList::find($id);
        
         return view('guest_list/guest_details')->with('guest',$guest);
    }

    public function edit($id)
    {
        $guest=GuestList::find($id);
        return view('guest_list/guest_edit')->with('guest', $guest);
    }

    public function update(Request $request)
    {
        
        $guest_list = GuestList::find($request->id);
        $guest_list->name=$request->name;
        $guest_list->discription=$request->discription;
            // dd($guest_list);
        
        $guest_list->save();
        return redirect()->route('guest_list.all');
    }

    public function delete($id)
    {
        $guest=GuestList::find($id);
        $guest->delete();
        return redirect()->route('guest_list.all');
    }
}

