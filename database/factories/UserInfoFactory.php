<?php

namespace Database\Factories;

use App\Models\Userinfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Userinfo::class;

    /**
     * Define the model's default state.
     *
     * @param $faker_name
     * @return array
     */
    public function definition()
    {
       // проба создать переменные которые будут локализовывать данные подаваемые Фейкером.
       // $faker_name = \Faker\Provider\ru_RU\name();
       // $faker_phone = addProvider(new \Faker\Provider\ru_RU\PhoneNumber($faker_phone));

        return [
//            'name' => $this->faker->name()->unique(),
            'name' => $this->faker->name(),
            'email' => $this->faker->Email(),
            'phone' => $this->faker->PhoneNumber(),

    }
}
