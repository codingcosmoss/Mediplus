<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Item;
use App\Models\Button;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {
        return 'salom';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function itemShow()
    {
        $items = Item::where('section_id', 1)->get();

        return view('Admin.app.item' , compact('items'));
    }

    public function itemUpdate(string $id)
    {
        $item = Item::where('id' , $id)->get();
        $button = Button::where('id' , $id)->get();
        return view('Admin.app.itemUpdate' , compact('item' , 'button') );
    }

    public function itemEdit(Request $request, $id)
{
    // 1. ID bo'yicha itemni toping
    $item = Item::find($id);
    $button = Button::find($id);
    // 2. Agar item topilmasa, xato qaytarish
    if (!$item) {
        return redirect()->back()->with('error', 'Item not found.');
    }

    // 3. Request orqali kelgan yangi ma'lumotlarni o'zgartirish
    $item->title = $request->input('title'); // Formadan kelgan yangi title
    $item->description = $request->input('description'); // Formadan kelgan yangi description
    $item->text = $request->input('title');
    $item->link = $request->input('link');
    if ($request->hasFile('image')) {
        $paths = [];
        $images = $request->file('image');
        foreach ($images as $image){
            $path = $image->store('images', 'public'); // 'images' papkasi ichiga saqlaydi
            array_push($paths, $path);
        }

        $item->image = json_encode($paths);
    }
    // 4. O'zgartirilgan ma'lumotlarni saqlash
    $item->save();

    $button->title = $request->input('title');
    $button->link = $request->input('link');
    
    $button->save();
    
    
    return view('Admin.app.index');
}

public function itemDelete(string $id) {
    $item = Item::find($id);

    if($item) {
        $item->delete();
    }

    return view('Admin.app.index');
}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

   
}
