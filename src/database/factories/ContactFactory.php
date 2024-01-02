<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;


class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $buildingName = ['東京', '埼玉', '神奈川'];
        $detail = ['商品はありませんでした', '商品はありました'];
        return [
            'category_id' => 1,
            'first_name' => $this->faker->firstName($gender),
            'last_name' => $this->faker->lastName,
            'gender' => $gender,
            'email' => $this->faker->safeEmail(),
            'tell' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'buildding' => $this->faker->randomElement($buildingName),
            'detail' => $this->faker->randomElement($detail)


        ];
    }
}
