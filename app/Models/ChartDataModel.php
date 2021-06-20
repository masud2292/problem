<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartDataModel extends Model
{
    
    protected $table='services_table';
    protected $primaryKey ='id';
    public $incrementing='true';
    protected $keyType='int';
    public $timestamps=false;
}
