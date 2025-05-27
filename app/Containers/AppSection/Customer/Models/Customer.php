<?php

namespace App\Containers\AppSection\Customer\Models;

use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class Customer extends ParentModel
{
    protected $fillable = [];

    public function customer_groups(): BelongsToMany
    {
        return $this->belongsToMany(CustomerGroup::class)->withTimestamps();
    }

}
