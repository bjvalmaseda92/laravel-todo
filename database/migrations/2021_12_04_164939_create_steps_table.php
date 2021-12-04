<?php

use App\Models\Todo;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("steps", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table
                ->foreignIdFor(Todo::class)
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->timestamps();

            $table
                ->foreign("todo_id")
                ->references("id")
                ->on("todos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("steps");
    }
}
