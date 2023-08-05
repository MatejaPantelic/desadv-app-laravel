<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('desadvs', function (Blueprint $table) {
            $table->id();
            $table->string('material');
            $table->unsignedInteger('quantity');
            $table->string('delivery_id')->nullable();
            $table->string('document_id');
            $table->string('tracking_number')->nullable();
            $table->string('hwb')->nullable();
            $table->string('contract_number')->nullable();
            $table->string('ponr_line');
            $table->string('sonr')->nullable();
            $table->string('invoice_nr')->nullable();
            $table->date('despatch_date')->nullable();
            $table->date('arrival_date')->nullable();
            $table->string('inco_term')->nullable();
            $table->unsignedInteger('da_packages')->nullable();
            $table->string('pack_list_nr')->nullable();
            $table->string('transport_mode');
            $table->string('carrier')->nullable();
            $table->string('van_id');
            $table->unsignedInteger('interchange_control_reference');
            $table->date('message_data');
            $table->string('lig1')->nullable();
            $table->string('ctr1')->nullable();
            $table->string('fv1')->nullable();
            $table->string('lig2')->nullable();
            $table->string('ctr2')->nullable();
            $table->string('fv2')->nullable();
            $table->string('lig3')->nullable();
            $table->string('ctr3')->nullable();
            $table->string('fv3')->nullable();
            $table->string('supplier_material');
            $table->float('weight')->nullable();
            $table->string('key');
            $table->string('line');
            $table->boolean('calculated_arrival_date');
            $table->string('filename');
            $table->foreign('van_id')->references('id')->on('suppliers');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desadvs');
    }
};
