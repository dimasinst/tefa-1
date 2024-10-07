<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneToResellersTable extends Migration
{
    public function up()
    {
        Schema::table('resellers', function (Blueprint $table) {
            $table->string('phone')->nullable(); // Menambahkan kolom phone
        });
    }

    public function down()
    {
        Schema::table('resellers', function (Blueprint $table) {
            $table->dropColumn('phone'); // Menghapus kolom phone saat rollback
        });
    }
}
