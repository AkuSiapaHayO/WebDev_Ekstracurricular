<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->name(),
            'nickname' => fake()->unique()->name(),
            'grade_number' => fake()->numberBetween(1, 12),
            'phone' => fake()->unique()->phoneNumber(),
            'sosmed' => fake()->unique()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => fake()->password(),
            'gender' => fake()->randomElement(["Male", "female"]),
            'birthdate' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'nationality' => fake()->randomElement([
                "American",
                "British",
                "Canadian",
                "Australian",
                "French",
                "German",
                "Spanish",
                "Italian",
                "Japanese",
                "Chinese",
                "Indian",
                "Russian",
                "Mexican",
                "Brazilian",
                "Argentinian",
                "South African",
                "Swiss",
                "Swedish",
                "Norwegian",
                "Dutch",
                "Belgian",
                "Irish",
                "Scottish",
                "Portuguese",
                "Greek",
                "Turkish",
                "Egyptian",
                "Israeli",
                "Saudi Arabian",
                "Korean",
                "Singaporean",
                "Thai",
                "Filipino",
                "Indonesian",
                "Vietnamese",
                "Malaysian",
                "New Zealander",
                "Mexican",
                "Colombian",
                "Chilean",
                "Peruvian",
                "Venezuelan",
                "Panamanian",
                "Costa Rican",
                "Honduran",
                "Guatemalan",
                "Ecuadorian",
                "Bolivian",
                "Paraguayan",
                "Uruguayan",
                "Cuban",
                "Jamaican",
                "Trinidadian and Tobagonian",
            ]),
            "address" => fake()->address(),
            "city" => fake()->city(),
            "province" => fake()->randomElement([
                "California",
                "Queensland",
                "Gauteng",
                "Ontario",
                "Lombardy",
                "Punjab",
                "Kanto",
                "New South Wales",
                "British Columbia",
                "Texas",
                "Buenos Aires",
                "Catalonia",
                "Hesse",
                "Sichuan",
                "Sao Paulo",
                "Central Java",
                "West Bengal",
                "Western Cape",
                "New York",
                "Veneto",
                "Quebec",
                "Chubu",
                "Victoria",
                "North Rhine-Westphalia",
                "Henan",
                "Rio de Janeiro",
                "Andalusia",
                "Punjab",
                "KwaZulu-Natal",
                "Florida",
                "Lombardy",
                "British Columbia",
                "Sindh",
                "New South Wales",
                "Tokyo",
                "Texas",
                "Cairo",
                "Amazonas",
                "Bavaria",
                "Shanghai",
                "Maharashtra",
                "Catalonia",
                "Western Cape",
                "Quebec",
                "Buenos Aires",
                "Central Java",
                "Punjab",
                "Baden-Württemberg",
                "Hubei",
                "Massachusetts",
                "Lazio",
                "Alberta",
                "Kyushu",
                "Victoria",
                "Rio Grande do Sul",
                "Cairo Governorate",
                "North Carolina",
                "Punjab",
                "Valencia",
                "KwaZulu-Natal",
                "Western Australia",
                "Bavaria",
                "Eastern Cape",
                "Buenos Aires Province",
                "Andalusia",
                "Punjab",
                "California",
                "Guangdong",
                "Tamil Nadu",
                "Lombardy",
                "New South Wales",
                "Ontario",
                "Hokkaido",
                "Minas Gerais",
                "Alexandria Governorate",
                "New Jersey",
                "Catalonia",
                "Punjab",
                "Limpopo",
                "Queensland",
                "Bavaria",
                "Heilongjiang",
                "Maharashtra",
                "Buenos Aires City",
                "Western Cape",
                "Alberta",
                "Tokyo",
                "New South Wales",
                "Rio de Janeiro",
                "Cairo",
                "Punjab",
                "KwaZulu-Natal",
                "Florida",
                "Lombardy",
                "Central Java",
                "British Columbia",
                "Hesse",
                "Sichuan",
                "Sao Paulo",
                "Andalusia",
            ]),
            "country" => fake()->country(),
            "postcode" => fake()->postcode(),
            "photo" => 'https://source.unsplash.com/random',
            "note" => fake()->paragraph(20),
        ];
    }
}
