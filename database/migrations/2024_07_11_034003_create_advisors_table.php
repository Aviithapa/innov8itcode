<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->integer('count_of_courses');
            $table->decimal('rating', 2, 1);
            $table->integer('students_taught');
            $table->text('overview')->nullable();
            $table->text('qualifications')->nullable(); // Storing multiple qualifications
            $table->text('experience')->nullable(); // Storing multiple experiences
            $table->string('contact_number');
            $table->string('email')->unique();
            $table->string('linkedin_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('advisors');
    }
}
