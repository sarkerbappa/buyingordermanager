@extends('admin.templates.default')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box">
                <div class="box-header"><i class="fa fa-files-o fa_title"></i>
                        <h1 class="box-title">Order Detail </h1>
                    <span class="pull-right">
                        <a class="btn btn-success" href="{{ URL::action('OrderController@orderEditForm',  [base64_encode($order_info->id)]) }}"><i class="fa fa-edit" ></i> Edit</a>
                        <a href="{{URL::route("allOrders")}}"  class="btn btn-bitbucket"><i class="fa fa-list"></i>  Order List </a>
                    </span>
                </div>
            </div><!-- /.box -->
        </div><!-- /.col -->
      </div>
        <!-- /.col -->
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#order_details" data-toggle="tab">Order Details</a></li>
              <!--<li><a href="#time_action_tab" data-toggle="tab">Time & Action</a></li>-->
              <li><a href="#lab_dip_tab" data-toggle="tab">Lab Dip Submit</a></li>
              <li><a href="#fit_pro_tab" data-toggle="tab">Fit and Proto Sample</a></li>
              <li><a href="#trim_tab" data-toggle="tab">Trims</a></li>
              <li><a href="#bulk_febric_tab" data-toggle="tab">Bulk Fabrics</a></li>
              <li><a href="#pp_sample_tab" data-toggle="tab">PP Sample</a></li>
              <li><a href="#print_embrodiry_tab" data-toggle="tab">Print / Embrodiry</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="order_details">
                 @include('admin.pages.order.order_detail.order_detail_tab')
                </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="lab_dip_tab">
                  @include('admin.pages.order.order_detail.lab_dip_tab')
                <!-- The timeline -->
              </div>
              <div class="tab-pane" id="fit_pro_tab">
                   @include('admin.pages.order.order_detail.fit_pro_tab')
                <!-- The timeline -->
              </div>
              <div class="tab-pane" id="trim_tab">
                 @include('admin.pages.order.order_detail.trim_tab')
                <!-- The timeline -->
              </div>
              <div class="tab-pane" id="bulk_febric_tab">
                 @include('admin.pages.order.order_detail.bulk_febric_tab')
                <!-- The timeline -->
              </div>
              <div class="tab-pane" id="pp_sample_tab">
                @include('admin.pages.order.order_detail.pp_sample_tab')
                <!-- The timeline -->
              </div>
              <div class="tab-pane" id="print_embrodiry_tab">
                  @include('admin.pages.order.order_detail.print_embrodiry_tab')
                <!-- The timeline -->
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
      </div>
        <!-- /.col -->
    </section>
@stop
