<?php

namespace Database\Seeders;
use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newSection1 = new Section();
$newSection1->name = 'home';
$newSection1->title = 'home';
$newSection1->save();

$newSection2 = new Section();
$newSection2->name = 'hours';
$newSection2->title = 'hours';
$newSection2->save();



$newSection3 = new Section();
$newSection3->name = 'helper';
$newSection3->title = 'We Are Always Ready to Help You & Your Family';
$newSection3->text = 'Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts';
$newSection3->save();

$newSection4 = new Section();
$newSection4->name = 'numbers';
$newSection4->title = 'our-numbers';
$newSection4->save();
    }
}
