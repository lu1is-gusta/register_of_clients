<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Clients\Client;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Client::class, 'client_id')->constrained()->onDelete('cascade');
            $table->string('type_of_address'); 
            $table->string('road'); 
            $table->string('number'); 
            $table->string('city'); 
            $table->string('state'); 
            $table->string('country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropforeignIdFor(Client::class);
        });

        Schema::dropIfExists('addresses');
    }
};
