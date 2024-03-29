<?php

namespace App\Entities;

use App\Traits\CryptId;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publication extends Model
{
    use SoftDeletes;
    use CryptId;

    protected $primaryKey = 'id';

    protected $table = 'publications';

    protected $fillable = ['title','content'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
