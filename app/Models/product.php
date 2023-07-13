<?php

namespace App\Models;

use App\Models\category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;

    public function Category(): BelongsTo
    {
        return $this->BelongsTo(category::class);
    }

    // protected function name(): Attribute
    // {
    //     // return Attribute::make(
    //     //     get: function ($value) {
    //     //         return ucfirst($value);
    //     //     },
    //     //     set: fn (string $value) => strtolower($value),
    //     // );
    // }
}
