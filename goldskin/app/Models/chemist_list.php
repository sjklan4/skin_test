<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chemist_list extends Model
{
    use HasFactory;

    protected $table = 'chemist_list';
    protected  $primaryKey = 'chem_num';

}
