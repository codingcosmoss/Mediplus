<?php

namespace Database\Seeders;
use App\Models\Section;
use App\Models\Item;
use App\Models\Button;
use App\Models\Lists;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = Item::where('section_id', 1)->pluck('id'); // section_id = 1 bo'lgan barcha id larni oladi

foreach ($sections as $section) { // Har bir section id uchun loop
    $newSliderButton = new Lists();
    $newSliderButton->section_id = 1; // section_id ni tayinlash
    $newSliderButton->item_id = $section;   // item_id ni tayinlash
    $newSliderButton->title = 'Slider button'; // Faqat bitta umumiy title
    $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
    $newSliderButton->save();

    // Ikkinchi yozuvni ham takrorlaymiz
    $newSliderButton = new Lists();
    $newSliderButton->section_id = 1; // section_id ni tayinlash
    $newSliderButton->item_id = $section;   // item_id ni tayinlash
    $newSliderButton->title = 'Slider button'; // Faqat bitta umumiy title
    $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
    $newSliderButton->save();
}


        $sectionsTwo = Item::where('section_id', 2)->pluck('id'); // section_id = 2 bo'lgan barcha id larni oladi

        foreach ($sectionsTwo as $section) { // Har bir section id uchun loop

            $newOpeningHoursButton = new Lists();
            $newOpeningHoursButton->section_id = 2;
            $newOpeningHoursButton->item_id = $section;
            $newOpeningHoursButton->title = 'LEARN MORE'; // Faqat bitta umumiy title
            $newOpeningHoursButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newOpeningHoursButton->save();
            
        }


        $sectionsFive = Item::where('section_id', 5)->pluck('id'); // section_id = 1 bo'lgan barcha id larni oladi

        foreach ($sectionsFive as $section) { // Har bir section id uchun loop
            $newSliderButton = new Lists();
            $newSliderButton->section_id = 5; // section_id ni tayinlash
            $newSliderButton->item_id = $section;   // item_id ni tayinlash
            $newSliderButton->title = 'Maecenas vitae luctus nibh.'; // Faqat bitta umumiy title
            $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newSliderButton->save();
        
            // Ikkinchi yozuvni ham takrorlaymiz
            $newSliderButton = new Lists();
            $newSliderButton->section_id = 5; // section_id ni tayinlash
            $newSliderButton->item_id = $section;   // item_id ni tayinlash
            $newSliderButton->title = 'Duis massa massa.'; // Faqat bitta umumiy title
            $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newSliderButton->save();

            $newSliderButton = new Lists();
            $newSliderButton->section_id = 5; // section_id ni tayinlash
            $newSliderButton->item_id = $section;   // item_id ni tayinlash
            $newSliderButton->title = 'Aliquam feugiat interdum.'; // Faqat bitta umumiy title
            $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newSliderButton->save();
        
            // Ikkinchi yozuvni ham takrorlaymiz
            $newSliderButton = new Lists();
            $newSliderButton->section_id = 5; // section_id ni tayinlash
            $newSliderButton->item_id = $section;   // item_id ni tayinlash
            $newSliderButton->title = 'Maecenas vitae luctus nibh.'; // Faqat bitta umumiy title
            $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newSliderButton->save();

            
            $newSliderButton = new Lists();
            $newSliderButton->section_id = 5; // section_id ni tayinlash
            $newSliderButton->item_id = $section;   // item_id ni tayinlash
            $newSliderButton->title = 'Duis massa massa.'; // Faqat bitta umumiy title
            $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newSliderButton->save();
        
            // Ikkinchi yozuvni ham takrorlaymiz
            $newSliderButton = new Lists();
            $newSliderButton->section_id = 5; // section_id ni tayinlash
            $newSliderButton->item_id = $section;   // item_id ni tayinlash
            $newSliderButton->title = 'Maecenas vitae luctus nibh.'; // Faqat bitta umumiy title
            $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newSliderButton->save();
        }


        $sections6 = Item::where('section_id', 6)->pluck('id'); // section_id = 1 bo'lgan barcha id larni oladi

        foreach ($sections6 as $section) { // Har bir section id uchun loop
            $newSliderButton = new Lists();
            $newSliderButton->section_id = 6; // section_id ni tayinlash
            $newSliderButton->item_id = $section;   // item_id ni tayinlash
            $newSliderButton->title = 'Contact Now'; // Faqat bitta umumiy title
            $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newSliderButton->save();
        
            // Ikkinchi yozuvni ham takrorlaymiz
            $newSliderButton = new Lists();
            $newSliderButton->section_id = 6; // section_id ni tayinlash
            $newSliderButton->item_id = $section;   // item_id ni tayinlash
            $newSliderButton->title = 'Learn More'; // Faqat bitta umumiy title
            $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newSliderButton->save();
        }   
        

        $section9 = Item::where('section_id', 9)->pluck('id');

        foreach ($section9 as $section) { // Har bir section id uchun loop
            $newSliderButton = new Lists();
            $newSliderButton->section_id = 9; // section_id ni tayinlash
            $newSliderButton->item_id = $section;   // item_id ni tayinlash
            $newSliderButton->title = 'Lorem ipsum dolor sit amet'; // Faqat bitta umumiy title
            // $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newSliderButton->save();

            $newSliderButton = new Lists();
            $newSliderButton->section_id = 9; // section_id ni tayinlash
            $newSliderButton->item_id = $section;   // item_id ni tayinlash
            $newSliderButton->title = 'Cubitur sollicitudin fentum'; // Faqat bitta umumiy title
            // $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newSliderButton->save();

            $newSliderButton = new Lists();
            $newSliderButton->section_id = 9; // section_id ni tayinlash
            $newSliderButton->item_id = $section;   // item_id ni tayinlash
            $newSliderButton->title = 'Nullam interdum enim'; // Faqat bitta umumiy title
            // $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newSliderButton->save();

            $newSliderButton = new Lists();
            $newSliderButton->section_id = 9; // section_id ni tayinlash
            $newSliderButton->item_id = $section;   // item_id ni tayinlash
            $newSliderButton->title = 'Donec ultricies metus'; // Faqat bitta umumiy title
            // $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newSliderButton->save();

            $newSliderButton = new Lists();
            $newSliderButton->section_id = 9; // section_id ni tayinlash
            $newSliderButton->item_id = $section;   // item_id ni tayinlash
            $newSliderButton->title = 'Pellentesque eget nibh'; // Faqat bitta umumiy title
            // $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newSliderButton->save();
        
        }   
    }
}
    