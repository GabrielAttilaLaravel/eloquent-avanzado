<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');

            $table->text('title');
            $table->text('description');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            //delete_at: para eliminar registros logicamente (si hay un registro en sta campo es eliminado logicamente)
            // y lo buscamos con:
            //      books::withTrashed()->find();
            // buscamos todos los registros eliminados o no con:
            //      books::withTrashed()->get();
            // restauramos con:
            //      $book = books::withTrashed()->find(1);
            //      $book->restore();
            // eliminamos fisicamente con:
            //      $book = books::withTrashed()->find(1);
            //      $book->foceDelete();
            $table->softDeletes();
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
        Schema::drop('books');
    }
}
