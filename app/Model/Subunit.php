<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subunit extends Model
{
    protected $table = 'Subunit';
    protected $fillable = [
        'Name',
        'Description',
    ];
 
   use HasFactory;
   public $timestamps = false;
   public function getId(): int
   {
       return $this->ID;
   }

}
