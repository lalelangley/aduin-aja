<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('petugas', function (Blueprint $table) {
            if (!Schema::hasColumn('petugas', 'divisi')) {
                $table->string('divisi')->nullable()->after('level');
            }
        });
    }
    

    public function down()
    {
        Schema::table('masyarakat', function (Blueprint $table) {
            $table->dropColumn('google_id');
            $table->dropColumn('email');
        });
    }

};
