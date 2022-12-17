<?php

use App\Models\Plan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->integer('months');
            $table->float('price');
            $table->timestamps();
        });

        $plans = [
            ['month' => 3, 'price' => 43.00],
            ['month' => 6, 'price' => 35.00],
            ['month' => 12, 'price' => 27.00],
        ];

        foreach ($plans as $plan) {
            Plan::create([
                'months'=>$plan['month'],
                'price'=>$plan['price']]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
};
