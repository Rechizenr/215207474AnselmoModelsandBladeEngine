<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('isbn')->unique();
        $table->string('title');
        $table->string('author');
        $table->text('description');
        $table->date('date_published');
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
