<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Users;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showrooms', function (Blueprint $table) {
            $table->bigInteger('id',20)->unsigned()->unique()->primary();
            // $table->bigInteger('user_id',20)->unsigned()->foreignId('user_id')->references('id')->on('users');
            $table->string('name',255);
            $table->string('owner',255);
            $table->string('brand',255);
            $table->dateTime('purchase_date');
            $table->text('description');
            $table->string('image',255);
            $table->enum('status',['Lunas','Belum-Lunas']);
            // $table->timestamps('createdAt');
            // $table->timestamps('updateAt');
        });
    }

    public function users() {
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showrooms');
    }
};
