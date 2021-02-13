<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenificiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benificiaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nickname')->nullable();
            $table->string('name')->nullable();
            $table->string('account_number')->nullable();
            $table->text('address')->nullable();
            $table->text('address2')->nullable();
            $table->string('area')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pin',6)->nullable();
            $table->string('ifsc',11)->nullable();
            $table->string('bank_name')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->nullable();
            $table->enum('is_remitter',['yes', 'no'])->default('yes');
            $table->enum('status',['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('benificiaries');
    }
}
