<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    public function Government(){
        return $this->belongsTo(Government::class,'GovernmentId');
    }
    public function EducationalAdministration(){
        return $this->belongsTo(EducationalAdministration::class,'EducationalAdministrationId');
    }
}
