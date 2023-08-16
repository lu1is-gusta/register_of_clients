<?php

namespace App\Models\Clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clients\Address;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'telephone', 'date_of_birth', 'cpf'];

    function address(){
        return $this->hasOne(Address::class);
    }
}
