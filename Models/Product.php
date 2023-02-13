<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public const FIELD_ID='id';
    public const FIELD_NAME='name';
    public const FIELD_USAGE='usage';
    public const FIELD_PRICE='price';
    public const FIELD_ID_INDICATION='idIndication';
    public const FIELD_ID_SIDE_EFFECT='idSideEffect';
    public const FIELD_ID_INGREDIENT='idIngredient';
    public const FIELD_IMAGE='image';

    protected $table = 'product';

    protected $primaryKey = self::FIELD_ID;

}
