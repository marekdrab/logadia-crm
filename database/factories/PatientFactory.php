<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\Diagnosis;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition()
    {
        // Get all diagnosis IDs
        $diagnosisIds = Diagnosis::pluck('id')->toArray();

        return [
            'name' => $this->faker->name,
            'date_of_birth' => $this->faker->date(),
            'diagnosis_id' => $this->faker->randomElement($diagnosisIds),
        ];
    }
}
