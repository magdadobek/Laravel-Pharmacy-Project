<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    public $timestamps = false;

    public const FIELD_ID='id';
    public const FIELD_NAME='name';

    
    protected $table = 'problem';

    protected $primaryKey = self::FIELD_ID;
}
