<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Kunjungan;

class KunjunganFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kunjungan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'tiket' => $this->faker->word(),
            'nik' => $this->faker->word(),
            'nama_pengunjung' => $this->faker->word(),
            'narapidana' => $this->faker->word(),
            'barang_bawaan' => $this->faker->text(),
            'hubungan' => $this->faker->word(),
            'jumlah_pengunjung' => $this->faker->numberBetween(-10000, 10000),
            'tanggal_kunjungan' => $this->faker->date(),
            'sesi_kunjungan' => $this->faker->numberBetween(-10000, 10000),
            'waktu_status' => $this->faker->time(),
            'diperiksa' => $this->faker->boolean(),
            'status_periksa' => $this->faker->numberBetween(-10000, 10000),
            'antrian' => $this->faker->numberBetween(-10000, 10000),
            'waktu_antrian' => $this->faker->time(),
        ];
    }
}
