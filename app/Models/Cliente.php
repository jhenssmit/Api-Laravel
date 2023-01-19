<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Cliente extends Model
{
    protected $fillable=[
        'id',
        'nombres',
        'apellidos'
    ];

    public $table = "clientes";
    public static function getAllClientes(){
        $cliente= self::all();
        return $cliente;
    }

    use HasFactory;
}
