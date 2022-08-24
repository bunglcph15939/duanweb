<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'content' => fake()->text(),
            'video_path' => fake()->imageUrl(),
            'video_type' => rand(0,4),
            'attachment' => fake()->text(), 
            'course_id' =>  rand(1,10),
            'section_id' => rand(1,10)
        ];
    }
}
