<?php

namespace App\Rules;

use App\Models\DataBarang;
use Closure;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\ValidationRule;

class jumlahBarang implements DataAwareRule, ValidationRule
{
    /**
     * All of the data under validation.
     *
     * @var array<string, mixed>
     */
    protected $data = [];

    /**
     * Set the data under validation.
     *
     * @param  array<string, mixed>  $data
     */
    public function setData(array $data): static
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $id_barang = null;
        $jumlah = null;

        foreach ($this->data as $key => $value) {
            if ($key == 'id_barang') {
                $id_barang = $value;
            }
            if ($key == 'jumlah') {
                $jumlah = $value;
            }
        }

        if ($jumlah > DataBarang::where('id', $id_barang)->first()->jumlah) {
            $fail('Jumlah barang yang dipinjam melebihi stok yang tersedia');
        }
    }
}
