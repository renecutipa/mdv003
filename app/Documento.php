<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //
    protected $table = "documentos";

    protected $fillable = [
        'tipo_persona',
        'dni_ruc',
        'email',
        'celular',
        'paterno',
        'materno',
        'nombres',
        'idtupa',
        'numero_documento',
        'fecha_documento',
        'asunto',
        'folios',
        'obs'];
}
