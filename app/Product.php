<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\DatabaseConnection;

class Product extends Model
{   
    
    protected $connection = 'anotherDB';
    protected $table = 'product';
    protected $primaryKey = 'q';

}
