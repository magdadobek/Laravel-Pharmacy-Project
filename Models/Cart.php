<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamps = false;

    public const FIELD_ID='id';
    public const FIELD_ID_USER='idUser';
    public const FIELD_ID_PRODUCT='idProduct';
    public const FIELD_QUANTITY='quantity';

    protected $table = 'cart';

    protected $primaryKey = self::FIELD_ID;
}
