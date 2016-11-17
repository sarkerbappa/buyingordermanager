 
@if ($order_info)
<ul class="timeline timeline-inverse">
    <!-- timeline time label -->
    <li class="time-label">
        <span class="bg-blue">
            First Time Submit
        </span>
    </li>
    <!-- /.timeline-label -->
    <!-- timeline item -->
    <li>
        @if($order_info->ppsample_fst_ac_date !== '0000-00-00')
    <li>
        <i class="fa fa-files-o bg-aqua"></i>

        <div class="timeline-item time_action_items alert-success">
            <h3 class="timeline-header no-border time_action_date">Actual Date  <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                <span class="pull-right" ><i class="fa fa-clock-o" aria-hidden="true"></i> {{$order_info->ppsample_fst_ac_date }}</span>
            </h3>
        </div>
    </li>
    @endif
    @if($order_info->ppsample_fst_sub_date !== '0000-00-00')

    <li>
        <i class="fa fa-files-o bg-aqua"></i>

        <div class="timeline-item time_action_items alert-warning">
            <h3 class="timeline-header no-border time_action_date ">Submit Date    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                <span class="pull-right" ><i class="fa fa-clock-o" aria-hidden="true"></i> {{$order_info->ppsample_fst_sub_date }}</span>
            </h3>
        </div>
    </li>
    @endif

    <!-- END Lab Dip Submit -->

    <!-- timeline time label -->
    <li class="time-label">
        <span class="bg-yellow">
            Second Time Submit
        </span>
    </li>
    <!-- /.timeline-label -->
    <!-- timeline item -->
    <li>
        @if($order_info->ppsample_second_ac_date !== '0000-00-00')
    <li>
        <i class="fa fa-files-o bg-aqua"></i>

        <div class="timeline-item time_action_items alert-success">
            <h3 class="timeline-header no-border time_action_date">Actual Date  <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                <span class="pull-right" ><i class="fa fa-clock-o" aria-hidden="true"></i> {{$order_info->ppsample_second_ac_date }}</span>
            </h3>
        </div>
    </li>
    @endif
    @if($order_info->ppsample_second_sub_date !== '0000-00-00')
    <li>
        <i class="fa fa-files-o bg-aqua"></i>

        <div class="timeline-item time_action_items alert-warning">
            <h3 class="timeline-header no-border time_action_date ">Submit Date    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                <span class="pull-right" ><i class="fa fa-clock-o" aria-hidden="true"></i> {{$order_info->ppsample_second_sub_date }}</span>
            </h3>
        </div>
    </li>
    @endif


    <!--End of the Fit and Proto Sample-->


    <!-- timeline time label -->
    <li class="time-label">
        <span class="bg-red">
            Third Time Submit 
        </span>
    </li>
    <!-- /.timeline-label -->


    <!-- timeline item -->
    <li>
        @if($order_info->ppsample_third_ac_date !== '0000-00-00')
    <li>
        <i class="fa fa-files-o bg-aqua"></i>

        <div class="timeline-item time_action_items alert-success">
            <h3 class="timeline-header no-border time_action_date">Actual Date  <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                <span class="pull-right" ><i class="fa fa-clock-o" aria-hidden="true"></i> {{$order_info->ppsample_third_ac_date }}</span>
            </h3>
        </div>
    </li>
    @endif
    @if($order_info->ppsample_third_sub_date !== '0000-00-00')
    <li>
        <i class="fa fa-files-o bg-aqua"></i>

        <div class="timeline-item time_action_items alert-warning">
            <h3 class="timeline-header no-border time_action_date ">Submit Date    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                <span class="pull-right" ><i class="fa fa-clock-o" aria-hidden="true"></i> {{$order_info->ppsample_third_sub_date }}</span>
            </h3>
        </div>
    </li>
    @endif
</ul>
@endif