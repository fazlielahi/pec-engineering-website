<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class UpdateStatusEnumInBlogsTable extends Migration
{
    public function up()
    {
        // Add 'request' value to ENUM using raw SQL (works for MySQL)
        DB::statement("ALTER TABLE blogs MODIFY COLUMN status ENUM('published', 'draft', 'request') NOT NULL DEFAULT 'draft'");
    }

    public function down()
    {
        // Revert to original ENUM values
        DB::statement("ALTER TABLE blogs MODIFY COLUMN status ENUM('published', 'draft') NOT NULL DEFAULT 'draft'");
    }
}
