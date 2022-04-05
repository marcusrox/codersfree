<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Incricao;

class CreateInscricoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricoes', function (Blueprint $table) {
            $table->id();

            $table->decimal('valor_inscricao', 8, 2);
            //$table->enum('status', [Pedido::NOVO, Pedido::PARCIAL, Pedido::QUITADO])->default(Pedido::NOVO);
            $table->string('observacao');

            $table->unsignedBigInteger('pedido_id');
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');

            // $table->unsignedBigInteger('level_id')->nullable();
            // $table->foreign('level_id')->references('id')->on('levels')->onDelete('set null');

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
        Schema::dropIfExists('inscricoes');
    }
}
