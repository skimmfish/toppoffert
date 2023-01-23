<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingTestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\RatingTestimonials::factory()->count(10)->create();
    
       $ratingtestimonials = factory(App\Models\RatingTestimonials::class, 200)->create();
    }
}
