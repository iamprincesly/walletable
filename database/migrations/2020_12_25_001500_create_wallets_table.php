<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalletsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'wallets';

    /**
     * Run the migrations.
     * @table wallets
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->morphs('walletable');
            $table->string('label', 45);
            $table->string('tag', 45);
            $table->unsignedBigInteger('amount');
            $table->string('currency', 10);
            $table->json('data')->nullable();
            $table->string('provider', 45);
            $table->enum('status', ['active', 'blocked'])->index();
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
       Schema::dropIfExists($this->tableName);
     }
}
