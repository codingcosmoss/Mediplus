<?php

namespace Database\Seeders;
use App\Models\Item;
use App\Models\Section;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuos = ['Slider 1', 'Slider 2', 'Slider 3'];
    
        foreach ($menuos as $key => $value) {
            $section = Section::where('name', 'home')->first();
            $sectionId = $section ? $section->id : null;
    
            // Har bir iteratsiya uchun yangi Item ob'ekti yaratish
            $newSliderItem = new Item();
            $newSliderItem->section_id = $sectionId;
            $newSliderItem->title = 'We Provide Medical Services Than You can Trust';
            $newSliderItem->text = 'Lorem ipsum dolor sit amet sit sit amet';
            $newSliderItem->save();
        }
    }
    
}
