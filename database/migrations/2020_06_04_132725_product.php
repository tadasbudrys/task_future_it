<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {

            $table->increments( 'id' );
            $table->integer( 'category_id' )->unsigned();
            $table->integer( 'subcategory_id' )->unsigned();
            $table->string( 'title' );
            $table->string( 'coment' );
            $table->timestamp('created_at')->nullable();
        });

        Schema::table('product', function (Blueprint $table) {
            $table->foreign( 'category_id' )
                ->references( 'id' )->on( 'category' )
                ->onDelete( 'cascade' );

            $table->foreign( 'subcategory_id' )
                ->references( 'id' )->on( 'subcategory' )
                ->onDelete( 'cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
