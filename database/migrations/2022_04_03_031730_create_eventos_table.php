<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Evento;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $statuses = [
                Evento::RASCUNHO,
                Evento::ATIVO,
                Evento::ARQUIVADO,
                Evento::RESERVADO04,
                Evento::RESERVADO05,
                Evento::RESERVADO06,
                Evento::RESERVADO07,
                Evento::RESERVADO08,
                Evento::RESERVADO09,
            ];
            
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->date('data_inicio_evento');
            $table->date('data_fim_evento');
            $table->text('local');
            $table->integer('qtd_limite_inscritos')->nullable(true);
            $table->date('data_inicio_inscricao');
            $table->date('data_fim_inscricao');
            $table->text('mensagem_apos_inscricao');
            $table->decimal('preco_inscricao', 8, 2);
            $table->enum('status', $statuses)->default(Evento::RASCUNHO);
            $table->string('slug');

            // $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('level_id')->nullable();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('eventos');
    }
}
