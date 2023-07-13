<?php

namespace App\Models;

use App\Models\category;
use Illuminate\Database\Eloquent\Model;
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
}
