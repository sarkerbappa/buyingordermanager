<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->text('po_number');
            $table->date('po_receive_date')->nullable();
            $table->text('sp_name');
            $table->text('customer_name');
            $table->text('item_description');
            $table->text('item_style_number');
            $table->text('vendor_code');
            $table->date('color_receive_date')->nullable();
            $table->text('color_code');
            $table->text('color_name');
            $table->mediumInteger('quantity');
            $table->text('brand_name');
            $table->date('shipment_date');
            $table->date('revise_shipment_date');
            
            $table->date('lab_dip_fst_ac_date');
            $table->date('lab_dip_fst_sub_date')->nullable()
            ->default(null);
            $table->date('lab_dip_second_ac_date')->nullable()
            ->default(null);
            $table->date('lab_dip_second_sub_date')->nullable()
            ->default(null);
            $table->date('lab_dip_third_ac_date')->nullable()
            ->default(null);
            $table->date('lab_dip_third_sub_date')->nullable()
            ->default(null);
            
            $table->date('fit_proto_fst_ac_date');
            $table->date('fit_proto_fst_sub_date')->nullable()
            ->default(null);
            $table->date('fit_proto_second_ac_date')->nullable()
            ->default(null);;
            $table->date('fit_proto_second_sub_date')->nullable()
            ->default(null);
            $table->date('fit_proto_third_ac_date')->nullable()
            ->default(null);
            $table->date('fit_proto_third_sub_date')->nullable()
            ->default(null);
            
            $table->date('trim_fst_ac_date');
            $table->date('trim_fst_sub_date')->nullable()
            ->default(null);
            $table->date('trim_second_ac_date')->nullable()
            ->default(null);
            $table->date('trim_second_sub_date')->nullable()
            ->default(null);
            $table->date('trim_third_ac_date')->nullable()
            ->default(null);
            $table->date('trim_third_sub_date')->nullable()
            ->default(null);
            
            $table->date('bulk_feb_fst_ac_date');
            $table->date('bulk_feb_fst_sub_date')->nullable()
            ->default(null);
            $table->date('bulk_feb_second_ac_date')->nullable()
            ->default(null);
            $table->date('bulk_feb_second_sub_date')->nullable()
            ->default(null);
            $table->date('bulk_feb_third_ac_date')->nullable()
            ->default(null);
            $table->date('bulk_feb_third_sub_date')->nullable()
            ->default(null);
            
            $table->date('ppsample_fst_ac_date');
            $table->date('ppsample_fst_sub_date')->nullable()
            ->default(null);
            $table->date('ppsample_second_ac_date')->nullable()
            ->default(null);
            $table->date('ppsample_second_sub_date')->nullable()
            ->default(null);
            $table->date('ppsample_third_ac_date')->nullable()
            ->default(null);
            $table->date('ppsample_third_sub_date')->nullable()
            ->default(null);
            
            $table->date('print_emrrodiry_fst_ac_date');
            $table->date('print_emrrodiry_fst_sub_date')->nullable()
            ->default(null);
            $table->date('print_emrrodiry_second_ac_date')->nullable()
            ->default(null);
            $table->date('print_emrrodiry_second_sub_date')->nullable()
            ->default(null);
            $table->date('print_emrrodiry_third_ac_date')->nullable()
            ->default(null);
            $table->date('print_emrrodiry_third_sub_date')->nullable()
            ->default(null);
            
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
        Schema::drop('orders');
    }
}
