<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNaturalLanguageSearch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE offers ADD FULLTEXT search(name, description)");
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE categories ADD FULLTEXT search(name)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->dropIndex('search');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropIndex('search');
        });
    }
}
