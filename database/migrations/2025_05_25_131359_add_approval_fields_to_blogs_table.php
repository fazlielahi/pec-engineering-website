<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddApprovalFieldsToBlogsTable extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->text('approval_message')->nullable();
            $table->text('rejection_message')->nullable();
        });

        DB::statement("ALTER TABLE blogs MODIFY status ENUM('request', 'draft', 'published', 'rejected') NOT NULL DEFAULT 'draft'");
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['approved_by', 'approved_at', 'approval_message', 'rejection_message']);
        });

        DB::statement("ALTER TABLE blogs MODIFY status ENUM('request', 'draft', 'published') NOT NULL DEFAULT 'draft'");
    }
}
