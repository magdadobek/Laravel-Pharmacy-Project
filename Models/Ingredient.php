<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public $timestamps = false;

    public const FIELD_ID='id';
    public const FIELD_NAME='name';

    protected $table = 'ingredient';

    protected $primaryKey = self::FIELD_ID;
}
