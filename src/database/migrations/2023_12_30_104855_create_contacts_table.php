<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // テーブルが存在する場合は削除
        if (Schema::hasTable('contacts')) {
            Schema::dropIfExists('contacts');
        }
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->default(1);
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('first_name')->default(1);
            $table->string('last_name')->default(1);
            $table->tinyInteger('gender')->default(1);
            $table->string('email')->default(1);
            $table->string('tell')->default(1);
            $table->string('address')->default(1);
            $table->string('building')->nullable()->default(1);
            $table->text('detail')->nullable();

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
        // 外部キー制約を削除
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });

        // テーブルを削除
        Schema::dropIfExists('contacts');
    }
}
