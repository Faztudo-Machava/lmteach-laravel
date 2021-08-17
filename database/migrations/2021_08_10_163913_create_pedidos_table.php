<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('pedi_id');
            $table->foreignId('pedi_especilidade')->nullable(false)->constrained('esp_id', 'especialidades');
            $table->tinyInteger('pedi_status')->default(0);
            $table->foreignId('pedi_especialista')->nullable(false)->constrained('usuarios','user_id');
            $table->foreignId('pedi_cliente')->nullable(false)->constrained('usuarios','user_id');
            $table->string('pedi_tipo');
            $table->date('pedi_prazo');
            $table->string('pedi_arquivo');
            $table->foreignId('pedi_especialidade')->nullable(false)->constrained('esp_id','especialidades');
            $table->text('pedi_descricao');
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
        Schema::dropIfExists('pedidos');
    }
}
