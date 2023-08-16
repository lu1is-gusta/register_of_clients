<?php

namespace App\Models\Clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clients\Client;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['road', 'number', 'city', 'state', 'country'];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
