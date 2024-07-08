<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeToFormSubmissionsTable extends Migration
{
    public function up()
    {
        Schema::table('form_submissions', function (Blueprint $table) {
            $table->string('type'); // Modify data type and nullable as per your requirements
        });
    }

    public function down()
    {
        Schema::table('form_submissions', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
}
