<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product_list_table extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product_list_table';

    protected  $primaryKey = 'product_id';


}
