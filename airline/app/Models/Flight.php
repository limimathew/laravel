<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $tables='flights';
    protected $fieldlables=[
        'airlinename','departure','arrival','date','dtime','atime','seat','bussiness','economy','first','bcost','ecost','fcost'
    ];
    protected $primaryKey='fid';        

}
