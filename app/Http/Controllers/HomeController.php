<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Item;
use App\Models\Button;
use App\Models\Lists;


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
        $buttons = Lists::where('section_id' , 1)->get();

        $array = $items;

        foreach ($array as $index => $firstObj) {
            // Ikkinchi arraydan mos keluvchi elementni olish
            $secondObj = $buttons[$index] ?? null;
    
            // Agar mos element bo'lsa, `title` va `link` qo'shish
            if ($secondObj) {
                $firstObj->slider_title = $secondObj->title;
                $firstObj->slider_link = $secondObj->link;
            }
        }

        return view('Admin.app.item' , compact('items' , 'array'));
    }

    public function openHoursItem()
    {
        $items = Item::where('section_id', 2)->get();
        $buttons = Lists::where('section_id' , 2)->get();

        $array = $items;

        foreach ($array as $index => $firstObj) {
            // Ikkinchi arraydan mos keluvchi elementni olish
            $secondObj = $buttons[$index] ?? null;
    
            // Agar mos element bo'lsa, `title` va `link` qo'shish
            if ($secondObj) {
                $firstObj->slider_title = $secondObj->title;
                $firstObj->slider_link = $secondObj->link;
            }
        }

        return view('Admin.app.itemHour' , compact('items' , 'array'));
    }


    public function HelpersItem()
    {
        $items = Item::where('section_id', 3)->get();
        $buttons = Lists::where('section_id' , 3)->get();

        $array = $items;

        foreach ($array as $index => $firstObj) {
            // Ikkinchi arraydan mos keluvchi elementni olish
            $secondObj = $buttons[$index] ?? null;
    
            // Agar mos element bo'lsa, `title` va `link` qo'shish
            if ($secondObj) {
                $firstObj->slider_title = $secondObj->title;
                $firstObj->slider_link = $secondObj->link;
            }
        }

        return view('Admin.app.itemHelper' , compact('items' , 'array'));
    }


    public function NumbersItem()
    {
        $items = Item::where('section_id', 4)->get();
        $buttons = Lists::where('section_id' , 4)->get();

        $array = $items;

        foreach ($array as $index => $firstObj) {
            // Ikkinchi arraydan mos keluvchi elementni olish
            $secondObj = $buttons[$index] ?? null;
    
            // Agar mos element bo'lsa, `title` va `link` qo'shish
            if ($secondObj) {
                $firstObj->slider_title = $secondObj->title;
                $firstObj->slider_link = $secondObj->link;
            }
        }

        return view('Admin.app.itemNumbers' , compact('items' , 'array'));
    }
    



    public function itemUpdate(string $id)
    {
        $item = Item::where('id' , $id)->get();
        $button = Lists::where('id' , $id)->get();
        return view('Admin.app.itemUpdate' , compact('item' , 'button') );
    }

    public function itemEdit(Request $request, $id)
{
    // 1. ID bo'yicha itemni toping
    $item = Item::find($id);
    $button = Lists::find($id);
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

    $button->title = $request->input('button-title');
    $button->link = $request->input('button-link');
    
    $button->save();
    
    
    return view('Admin.app.index');
}


public function itemAdd(string $id) {

    return view('Admin.app.sliderAdd' , compact('id'));
}

public function itemHourAdd(string $id) {

    return view('Admin.app.hourAdd' , compact('id'));
}

public function itemAddComplete(Request $request, $id) {

    $item = new Item();
    $button = new Lists();
    $item->section_id = $id;
    $item->title = $request->input('title'); // Formadan kelgan yangi title
    $item->description = $request->input('description'); // Formadan kelgan yangi description
    $item->text = $request->input('text');
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


    return view('Admin.app.index');

}


public function itemHourAddComplete(Request $request, $id) {

    $item = new Item();
    $button = new Lists();
    $item->section_id = $id;
    $item->title = $request->input('title'); // Formadan kelgan yangi title
    $item->description = $request->input('description'); // Formadan kelgan yangi description
    $item->text = $request->input('text');
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


    return view('Admin.app.index');

}


public function itemDelete(string $id) {
    $item = Item::find($id);

    if($item) {
        $item->delete();
    }

    return view('Admin.app.index');
}

// public function itemButtonShow(string $id) {
//     return view('Admin.app.button' , compact('id')); 
// }


public function itemButtonShow(string $id) {
    $button = Lists::where('item_id' , $id)->get();
    return view('Admin.app.ButtonTable' , compact('id' , 'button')); 
}

public function itemButtonEditShow(string $id) {
    return view('Admin.app.button' , compact('id')); 
}

public function ButtonUpdateShow(string $id , string $slug) {
    $button = Lists::where('item_id', $id)->where('id', $slug)->first();
    return view('Admin.app.ButtonUpdate' , compact('button' , 'id' , 'slug'));
}

public function ButtonUpdate(Request $request, string $id , string $slug) {
    $button = Lists::where('item_id', $id)->where('id', $slug)->first();

    // Ma'lumot mavjudligini tekshirish
    if ($button) {
        // Yangilash
        $button->title = $request->title;
        $button->link = $request->link;
        $button->save(); // Bazaga saqlash

        return view('Admin.app.index');
    } else {
        return response()->json(['message' => 'Ma\'lumot topilmadi!'], 404);
    }
}

public function ButtonDelete(string $id , string $slug) {
    $button = Lists::where('item_id', $id)->where('id', $slug)->first();

    $button->delete();

    return view('Admin.app.index');
}

public function itemButtonAdd(Request $request ,  $id) {
    $button = new Lists();

    $button->title = $request->input('button-title');
    $button->link = $request->input('button-link');
    $button->item_id = $id;
    $button->section_id = 1;
    $button->save();

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
