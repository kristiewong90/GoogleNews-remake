<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Faker\Factory;

class Article{}
class Profile{}
class Button{}
class Title{}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    $faker = Factory::create();

    $article1= new Article();
    $article1->sentence = $faker->sentence($nbWords = 6, $variableNbWords = true);
    $article1->country = $faker->country;
    $article1->time = $faker->randomDigit;
    $article1->image = $faker->imageUrl($width=134, $height=134, 'people');

    $article2= new Article();
    $article2->sentence = $faker->sentence($nbWords = 6, $variableNbWords = true);
    $article2->country = $faker->country;
    $article2->time = $faker->randomDigit;
    $article2->image = $faker->imageUrl($width=134, $height=134, 'cats');

    $article3= new Article();
    $article3->sentence = $faker->sentence($nbWords = 6, $variableNbWords = true);
    $article3->country = $faker->country;
    $article3->time = $faker->randomDigit;
    $article3->image = $faker->imageUrl($width=134, $height=134);

    $article4= new Article();
    $article4->sentence = $faker->sentence($nbWords = 6, $variableNbWords = true);
    $article4->country = $faker->country;
    $article4->time = $faker->randomDigit;
    $article4->image = $faker->imageUrl($width=134, $height=134, 'people');

    $article5= new Article();
    $article5->sentence = $faker->sentence($nbWords = 6, $variableNbWords = true);
    $article5->country = $faker->country;
    $article5->time = $faker->randomDigit;
    $article5->image = $faker->imageUrl($width=134, $height=134, 'cats');

    $profile1= new Profile();
    $profile1->image = $faker->imageUrl($width=40, $height=40, 'people');

    $button1= new Button();
    $button1->name = $faker->name;

    $button2= new Button();
    $button2->name = $faker->name;

    $button3= new Button();
    $button3->name = $faker->name;

    $button4= new Button();
    $button4->name = $faker->name;

    $button5= new Button();
    $button5->name = $faker->name;

    $button6= new Button();
    $button6->name = $faker->name;

    $button7= new Button();
    $button7->name = $faker->name;

    $button8= new Button();
    $button8->name = $faker->name;

    $button9= new Button();
    $button9->name = $faker->name;

    $button10= new Button();
    $button10->name = $faker->name;

    $title1 = new Title();
    $title1->name = $faker->sentence($nbWords = 8, $variableNbWords = true);
    $title1->domain = $faker->safeEmailDomain;
    $title1->time = $faker->randomDigit;

    $title2 = new Title();
    $title2->name = $faker->sentence($nbWords = 8, $variableNbWords = true);
    $title2->domain = $faker->safeEmailDomain;
    $title2->time = $faker->randomDigit;


    $data = [
        'articles' => [$article1, $article2, $article3, $article4, $article5],
        'buttons' => [$button1, $button2, $button3, $button4, $button5, $button6, $button7, $button8, $button9, $button10],
        'titles' => [$title1, $title2],
        'profiles' => [$profile1],
    ];

    return view('welcome', $data);
});
