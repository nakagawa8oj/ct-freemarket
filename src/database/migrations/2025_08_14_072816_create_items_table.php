<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
           $table->id();
           $table->string('itemname', 100);
           $table->string('image')->nullable();
           $table->string('brandname', 100);
           $table->integer('itemprice');
           $table->integer('favoritescore');
           $table->integer('commentscore');
           $table->string('itemcontent');
           $table->string('categoryname');
           $table->id('category_id');
           $table->string('itemcondition');
           $table->string('username');
           $table->string('usercomment');           
           $table->timestamp('created_at');
           $table->timestamp('updated_at');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
