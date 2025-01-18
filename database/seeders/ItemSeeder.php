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


        
        $healthArray = ['Item 1'];

        
        foreach ($healthArray as $key => $value) {
            $section = Section::where('name', 'health')->first();
            $sectionId = $section ? $section->id : null;
    
            // Har bir iteratsiya uchun yangi Item ob'ekti yaratish
            $newSliderItem = new Item();
            $newSliderItem->section_id = $sectionId;
            $newSliderItem->title = 'Who We Are';

            $newSliderItem->text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pharetra antege vel est lobortis, a commodo magna rhoncus. In quis nisi non emet quam pharetra commodo.';
            $newSliderItem->image = 'images/46.jpg';
            $newSliderItem->description = 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.';
            $newSliderItem->save();
        }


        $call = ['Item 1'];

        
        foreach ($call as $key => $value) {
            $section = Section::where('name', 'call')->first();
            $sectionId = $section ? $section->id : null;
    
            // Har bir iteratsiya uchun yangi Item ob'ekti yaratish
            $newSliderItem = new Item();
            $newSliderItem->section_id = $sectionId;
            $newSliderItem->title = 'Do you need Emergency Medical Care? Call @ 1234 56789';

            $newSliderItem->text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.';
            $newSliderItem->image = 'images/46.jpg';
            // $newSliderItem->description = 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.';
            $newSliderItem->save();
        }


        
        $imagesArray = ['Item 1' , 'item 2' , 'item 3' ,'item 4'];

        
        foreach ($imagesArray as $key => $value) {
            $section = Section::where('name', 'images')->first();
            $sectionId = $section ? $section->id : null;
    
            // Har bir iteratsiya uchun yangi Item ob'ekti yaratish
            $newSliderItem = new Item();
            $newSliderItem->section_id = $sectionId;
            $newSliderItem->title = 'View Details';
            $newSliderItem->link = 'example.com/link';
            $newSliderItem->image = 'images/46.jpg';
            // $newSliderItem->description = 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.';
            $newSliderItem->save();
        }


                
        $differentServiceArr = ['Item 1' , 'item 2' , 'item 3' ,'item 4' , 'Item 5' , 'Item 6'];

        
        foreach ($differentServiceArr as $key => $value) {
            $section = Section::where('name', 'differentServices')->first();
            $sectionId = $section ? $section->id : null;
    
            // Har bir iteratsiya uchun yangi Item ob'ekti yaratish
            $newSliderItem = new Item();
            $newSliderItem->section_id = $sectionId;
            $newSliderItem->title = 'General Treatment';
            // $newSliderItem->link = 'example.com/link';
            $newSliderItem->image = 'images/46.jpg';
            $newSliderItem->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.';
            $newSliderItem->save();
        }

        $pricesItems = ['Item 1' , 'Item 2' , 'Item 3'];
                
        foreach ($pricesItems as $key => $value) {
            $section = Section::where('name', 'prices')->first();
            $sectionId = $section ? $section->id : null;
    
            // Har bir iteratsiya uchun yangi Item ob'ekti yaratish
            $newSliderItem = new Item();
            $newSliderItem->section_id = $sectionId;
            $newSliderItem->title = 'Plastic Suggery';
            $newSliderItem->text = '199$';
            $newSliderItem->link = 'example.com/link';
            $newSliderItem->image = 'images/46.jpg';
            $newSliderItem->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.';
            $newSliderItem->save();
        }


        
        $medicalNews = ['Item 1' , 'Item 2' , 'Item 3'];
                
        foreach ($medicalNews as $key => $value) {
            $section = Section::where('name', 'medicalNews')->first();
            $sectionId = $section ? $section->id : null;
    
            // Har bir iteratsiya uchun yangi Item ob'ekti yaratish
            $newSliderItem = new Item();
            $newSliderItem->section_id = $sectionId;
            $newSliderItem->title = 'We have annnocuced our new product.';
            // $newSliderItem->text = 'Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.';
            // $newSliderItem->link = 'example.com/link';
            $newSliderItem->image = 'images/46.jpg';
            $newSliderItem->description = 'Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.';
            $newSliderItem->save();
        }

    }
    
}
