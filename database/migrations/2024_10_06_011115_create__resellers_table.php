<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResellersTable extends Migration
{
   // database/migrations/YYYY_MM_DD_create_resellers_table.php
public function up()
{
    Schema::create('resellers', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('city');
        $table->string('phone')->nullable();
        $table->string('province');
        $table->string('instagram');
        $table->string('alamat');

        $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('resellers');
    }
}
