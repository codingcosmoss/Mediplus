<?php

namespace Database\Seeders;
use App\Models\Section;
use App\Models\Button;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuos = ['Slider 1 button', 'Slider 2 button', 'Slider 3 button'];
        foreach ($menuos as $key => $value) {
            $section = Section::where('name', 'home')->first();
            $newSliderButton = new Button();
            $sectionId = $section ? $section->id : null;
            $newSliderButton->section_id = $sectionId;
            $newSliderButton->title = $value;
            $newSliderButton->link = 'file:///C:/Users/aslbe/AppData/Local/Temp/Rar$EXa10804.16008.rartemp/demo1/dist/assets/media/svg/misc/006-plurk.svg';
            $newSliderButton->save();
        }
    }
}
