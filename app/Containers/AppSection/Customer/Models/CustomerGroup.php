<?php

namespace App\Containers\AppSection\Customer\Models;

use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class CustomerGroup extends ParentModel
{
    protected $fillable = [
        "name"
    ];

    public function customers(): BelongsToMany
    {
        return $this->belongsToMany(Customer::class)->withTimestamps();
    }
}
