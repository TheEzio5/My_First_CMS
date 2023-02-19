<?php

namespace Modules\Roby\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roby extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'robies';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Roby\database\factories\RobyFactory::new();
    }
}
