<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Pedido;

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
            $statuses = [
                Pedido::NOVO,
                Pedido::PARCIAL,
                Pedido::QUITADO,
                Pedido::CANCELADO,
                Pedido::RESERVADO05,
                Pedido::RESERVADO06,
                Pedido::RESERVADO07,
                Pedido::RESERVADO08,
                Pedido::RESERVADO09,
            ];
            $table->id();

            $table->decimal('valor_total', 8, 2);
            $table->enum('status', $statuses)->default(Pedido::NOVO);
            $table->string('observacao');

            $table->unsignedBigInteger('evento_id');
            $table->foreign('evento_id')->references('id')->on('eventos')->onDelete('cascade');

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
        Schema::dropIfExists('pedidos');
    }
}
