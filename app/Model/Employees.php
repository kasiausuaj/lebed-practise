<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $table = 'employees';
    protected $fillable = [
        'Surname',
        'Name',
        'Patronym',
        'Gender',
        'Date_of_Birth',
        'Address',
        'Position',
        'Subunit_ID',
        'Role',
        'Users_ID',

    ];
 
   use HasFactory;
   public $timestamps = false;
   public function getId(): int
   {
       return $this->ID;
   }

}
