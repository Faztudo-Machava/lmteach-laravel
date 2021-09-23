<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_nome');
            $table->string('user_especialidade')->nullable(true);
            $table->string('email')->unique();
            $table->string('user_diploma')->nullable(true);
            $table->string('user_telefone')->nullable(true);
            $table->string('user_tipo');
            $table->foreignId('user_instituicao')->nullable(true)->constrained('instituicaos', 'inst_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('verification_code');
            $table->string('user_img')->nullable(true);
            $table->Integer('is_verified')->default(0);
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
