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

$newSection5 = new Section();
$newSection5->name = 'health';
$newSection5->title = 'We Offer Different Services To Improve Your Health';
$newSection5->text = 'Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts';
$newSection5->save();



$newSection6 = new Section();
$newSection6->name = 'call';
$newSection6->title = 'Call @ 1234 56789';
// $newSection5->text = 'Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts';
$newSection6->save();



$newSection7 = new Section();
$newSection7->name = 'images';
$newSection7->title = 'We Maintain Cleanliness Rules Inside Our Hospital';
$newSection7->text = 'Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts';
$newSection7->save();


$newSection8 = new Section();
$newSection8->name = 'differentServices';
$newSection8->title = 'We Offer Different Services To Improve Your Health';
$newSection8->text = 'Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts';
$newSection8->save();


// newSection 9 qolb ketmoqda u Plastic Suggery $199/ Per Visit shu text bor section qoww kerak bolsa shu o'rtada qoshb ketw kerak
$newSection9 = new Section();
$newSection9->name = 'prices';
$newSection9->title = 'We Provide You The Best Treatment In Resonable Price';
$newSection9->text = 'Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts';
$newSection9->save();


$newSection10 = new Section();
$newSection10->name = 'medicalNews';
$newSection10->title = 'Keep up with Our Most Recent Medical News.';
$newSection10->text = 'Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts';
$newSection10->save();

    }
}
