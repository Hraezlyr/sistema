<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cedula' => $this->faker->unique()->numerify('###-######-####Q'),
            'inss' => $this->faker->unique()->numerify('#######-#'),
            'nombre' => $this->faker->name($gender = null),
            'facultad' => $this->faker->word(),
            'departamento' => $this->faker->word(),
            'correo' => $this->faker->freeEmail(),
            'direccion' => $this->faker->address(),
            'fecha_afiliacion' => $this->faker->date($format = 'Y-m-d',$max = 'now'),
            'fecha_ingreso' => $this->faker->date($format = 'Y-m-d',$max = 'now'),
            'fecha_actualizacion' => $this->faker->date($format = 'Y-m-d',$max = 'now'),
            'telefono_casa' => $this->faker->phoneNumber(),
            'telefono_tigo' => $this->faker->phoneNumber(),
            'telefono_claro' => $this->faker->phoneNumber(),
            'telefono_trabajo' => $this->faker->phoneNumber()
        ];
    }
}
