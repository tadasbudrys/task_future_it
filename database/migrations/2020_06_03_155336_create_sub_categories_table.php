<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'subcategory', function ( Blueprint $table ) {
            $table->increments( 'id' );
            $table->string( 'subcategory_name', 200 );
            $table->integer( 'category_id' )->unsigned();
        } );

        Schema::table('subcategory', function (Blueprint $table) {
            $table->foreign('category_id')
                ->references('id')->on('category')
                ->onDelete('cascade');
        });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategory');
    }
}
