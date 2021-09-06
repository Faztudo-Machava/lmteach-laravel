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
            $table->tinyInteger('pedi_status')->default(0);
            $table->foreignId('pedi_especialista')->nullable(true)->constrained('usuarios','user_id');
            $table->foreignId('pedi_cliente')->nullable(false)->constrained('usuarios','user_id');
            $table->string('pedi_tipo');
            $table->date('pedi_prazo');
            $table->string('pedi_arquivo');
            $table->foreignId('pedi_instituicao')->nullable(false)->constrained('inst_id','instituicaos');
            $table->text('pedi_descricao');
            $table->text('pedi_assunto');
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
