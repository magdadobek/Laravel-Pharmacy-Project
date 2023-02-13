<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;

    public const FIELD_ID='id';
    public const FIELD_ID_USER='idUser';
    public const FIELD_ID_PRODUCT='idProduct';
    public const FIELD_DONE='done';

    protected $table = 'order';

    protected $primaryKey = self::FIELD_ID;
}
