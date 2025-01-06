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
            $newSliderItem->image = 'images/46.jpg';
            $newSliderItem->save();
        }

        $openingHoursMenu = ['Item 1' , 'Item 2' , 'Item 3'];

        foreach ($openingHoursMenu as $key => $value) {
            $section = Section::where('name', 'hours')->first();
            $sectionId = $section ? $section->id : null;
    
            // Har bir iteratsiya uchun yangi Item ob'ekti yaratish
            $newSliderItem = new Item();
            $newSliderItem->section_id = $sectionId;
            $newSliderItem->title = 'Emergency Cases';
            $newSliderItem->text = 'Lorem Amet';
            $newSliderItem->description = 'Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.';
            $newSliderItem->image = 'images/46.jpg';
            $newSliderItem->save();
        }

        $helperItems = ['Item 1' , 'Item 2' , 'Item 3'];

        foreach ($helperItems as $key => $value) {
            $section = Section::where('name', 'helper')->first();
            $sectionId = $section ? $section->id : null;
    
            // Har bir iteratsiya uchun yangi Item ob'ekti yaratish
            $newSliderItem = new Item();
            $newSliderItem->section_id = $sectionId;
            $newSliderItem->title = 'Emergency Help';
            $newSliderItem->text = 'Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.';
            $newSliderItem->image = 'images/46.jpg';
            // $newSliderItem->description = 'Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.';
            $newSliderItem->save();
        }


        $ourNumbers = ['Item 1' , 'Item 2' , 'Item 3' , 'Item 4'];

        
        foreach ($ourNumbers as $key => $value) {
            $section = Section::where('name', 'numbers')->first();
            $sectionId = $section ? $section->id : null;
    
            // Har bir iteratsiya uchun yangi Item ob'ekti yaratish
            $newSliderItem = new Item();
            $newSliderItem->section_id = $sectionId;
            $newSliderItem->title = '3468';
            $newSliderItem->text = 'Hospital Rooms';
            $newSliderItem->image = 'images/46.jpg';
            // $newSliderItem->description = 'Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.';
            $newSliderItem->save();
        }
    }
    
}
