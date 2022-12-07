<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Expertise;
use App\Models\Cultural_right;
use App\Models\Nac;
class Categoria extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [  'nombre','actividad'];





    public function expertise()
    {
        return $this->belongsTo(expertise::class, 'id_expertises');
    }
    public function cultural_right()
    {
        return $this->belongsTo(cultural_right::class, 'id_cultural_rights');
    }
    public function nac()
    {
        return $this->belongsTo(nac::class, 'id_nacs');
    }
}
