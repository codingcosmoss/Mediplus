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

            for ($i=0; $i < 2 ; $i++) { 
                $newSliderButton = new Lists();
                $newSliderButton->section_id = $section->id;
                $newSliderButton->item_id = $section;
                $newSliderButton->title = 'Slider button'; // Faqat bitta umumiy title
                $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
                $newSliderButton->save();
            }
           
        }

        $sectionsTwo = Item::where('section_id', 2)->pluck('id'); // section_id = 1 bo'lgan barcha id larni oladi

        foreach ($sectionsTwo as $section) { // Har bir section id uchun loop

            $newOpeningHoursButton = new Lists();
            $newOpeningHoursButton->section_id = 2;
            $newOpeningHoursButton->item_id = $section;
            $newOpeningHoursButton->title = 'LEARN MORE'; // Faqat bitta umumiy title
            $newOpeningHoursButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newOpeningHoursButton->save();
            
        }
        
    }
}
    