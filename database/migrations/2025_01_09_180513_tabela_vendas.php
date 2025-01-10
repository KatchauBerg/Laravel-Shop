<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use function Webmozart\Assert\Tests\StaticAnalysis\string;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vendas', function (Blueprint $table) {

           $table->id()->unique();
           $table->string('nome')->nullable()->default(null);
           $table->string('email')->nullable()->default(null);
            $table->float('valor_produto')->nullable()->default(0.00);
            $table->float('valor_venda')->nullable()->default(0.00);
           $table->float('comissao')->nullable()->default(0.00);
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
