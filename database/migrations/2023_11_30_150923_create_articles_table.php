<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->string('banner')->nullable();
            $table->string('folder')->nullable();
            $table->timestamps();

            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $directories = Storage::disk('Articles')->allDirectories();

        foreach ($directories as $directory){
            Storage::disk('Articles')->deleteDirectory($directory);
        }

        Schema::dropIfExists('articles');
    }
};
