<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
            $table->id();
            $table->integer("d_codigo");
            $table->string("d_asenta");
            $table->string("d_tipo_asenta");
            $table->string("D_mnpio");
            $table->string("d_estado");
            $table->string("d_ciudad");
            $table->integer("d_CP");
            $table->string("c_estado");
            $table->integer("c_oficina");
            $table->string("c_CP");
            $table->string("c_tipo_asenta");
            $table->string("c_mnpio");
            $table->strign(" id_asenta_cpcons");
            $table->string("d_zona");
            $table->string("c_cve_ciudad");
            
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
        Schema::dropIfExists('datos');
    }
}
