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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_nome');
            $table->string('user_especialidade');
            $table->string('user_email')->unique();
            $table->string('user_diploma');
            $table->string('user_telefone');
            $table->string('user_tipo');
            $table->foreignId('user_instituicao')->nullable(false)->constrained('instituicaos', 'inst_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_senha');
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
        Schema::dropIfExists('usuarios');
    }
}
