<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->biginteger('product');
            $table->string('ean');
            $table->string('description');
            $table->string('supplier');
            $table->string('jan_20');
            $table->string('feb_20');
            $table->string('mar_20');
            $table->string('apr_20');
            $table->string('may_20');
            $table->string('jun_20');
            $table->string('jul_20');
            $table->string('aug_20');
            $table->string('sep_20');
            $table->string('oct_20');
            $table->string('nov_20');
            $table->string('dec_20');
            $table->string('jan_21');
            $table->string('feb_21');
            $table->string('mar_21');
            $table->string('apr_21');
            $table->string('may_21');
            $table->string('jun_21');
            $table->string('jul_21');
            $table->string('aug_21');
            $table->string('sep_21');
            $table->string('oct_21');
            $table->string('nov_21');
            $table->string('dec_21');
            //$table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
