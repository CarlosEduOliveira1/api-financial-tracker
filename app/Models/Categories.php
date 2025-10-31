<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'type'
    ];

    public function transactions() {
        return $this->hasMany(Transactions::class);
    }
}
