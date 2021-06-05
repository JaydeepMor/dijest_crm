@extends('layouts')

@section('content')

<div class="row">
    <div class="col-sm-3">
        <!-- Bars Chart Block -->
        <div class="block full">
            <!-- Bars Chart Title -->
            <div class="block-title">
                <h2><strong>{{ __('Monthly') }}</strong> {{ __('Revenue') }}</h2>
            </div>
            <!-- END Bars Chart Title -->

            <!-- Bars Chart Content -->
            <div id="chart-monthly-revenues" class="chart"></div>
            <!-- END Bars Chart Content -->
        </div>
        <!-- END Bars Chart Block -->
    </div>

    <div class="col-sm-3">
        <!-- Pie Chart Block -->
        <div class="block full">
            <!-- Pie Chart Title -->
            <div class="block-title">
                <h2><strong>{{ __('Monthly') }}</strong> {{ __('Bookings') }}</h2>
            </div>
            <!-- END Pie Title -->

            <!-- Pie Chart Content -->
            <div id="chart-monthly-bookings" class="chart"></div>
            <!-- END Pie Chart Content -->
        </div>
        <!-- END Pie Chart Block -->
    </div>

    <div class="col-sm-6">
        <!-- Responsive Partial Block -->
        <div class="block">
            <!-- Responsive Partial Title -->
            <div class="block-title">
                <h2><strong>{{ __('Remainders') }}</strong></h2>
            </div>
            <!-- END Responsive Partial Title -->

            <!-- Responsive Partial Content -->
                <!-- Add new task functionality (initialized in js/pages/readyTasks.js) -->
                <form id="add-task-form" class="push" method="POST">
                    @csrf

                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="{{ __('Add New Remainder..') }}">
                        <span class="input-group-addon"><!-- {{ __('Start') }} --><input type="time" class="form-control"></span>
                        <span class="input-group-addon"><!-- {{ __('End') }} --><input type="time" class="form-control"></span>
                        <div class="input-group-btn">
                            <button type="submit" id="add-task-btn" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </form>

                <ul class="task-list">
                    <li>
                        <a href="javascript:void(0)" class="task-close"><i class="fa fa-times"></i></a>
                        <label class="checkbox-inline">
                            Update Backend plugins
                        </label>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="task-close"><i class="fa fa-times"></i></a>
                        <label class="checkbox-inline">
                            Frontend Template
                        </label>
                    </li>
                </ul>
            <!-- END Responsive Partial Content -->
        </div>
        <!-- END Responsive Partial Block -->
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <!-- Responsive Partial Block -->
        <div class="block">
            <!-- Responsive Partial Title -->
            <div class="block-title">
                <h2><strong>{{ __('Your Upcoming') }}</strong> {{ __('Bookings') }}</h2>
            </div>
            <!-- END Responsive Partial Title -->

            <!-- Responsive Partial Content -->
            <!-- <p>{{ __('Your Upcoming Bookings.') }}</p> -->
            <table class="table table-vcenter table-striped">
                <thead>
                    <tr>
                        <th>{{ __('Type') }}</th>
                        <th>{{ __('Client') }}</th>
                        <th>{{ __('Descriptions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="javascript:void(0)" class="label label-warning">{{ __('Billable') }}</a></td>
                        <td>Formula - 1</td>
                        <td>Formula - 1 Open Day</td>
                    </tr>

                    <tr>
                        <td><a href="javascript:void(0)" class="label label-info">{{ __('Billable') }}</a></td>
                        <td>Formula - 1</td>
                        <td>Formula - 1 Open Day</td>
                    </tr>

                    <tr>
                        <td><a href="javascript:void(0)" class="label label-primary">{{ __('Billable') }}</a></td>
                        <td>Formula - 1</td>
                        <td>Formula - 1 Open Day</td>
                    </tr>

                    <tr>
                        <td><a href="javascript:void(0)" class="label label-warning">{{ __('Billable') }}</a></td>
                        <td>Formula - 1</td>
                        <td>Formula - 1 Open Day</td>
                    </tr>

                    <tr>
                        <td><a href="javascript:void(0)" class="label label-warning">{{ __('Billable') }}</a></td>
                        <td>Formula - 1</td>
                        <td>Formula - 1 Open Day</td>
                    </tr>

                    <tr>
                        <td><a href="javascript:void(0)" class="label label-warning">{{ __('Billable') }}</a></td>
                        <td>Formula - 1</td>
                        <td>Formula - 1 Open Day</td>
                    </tr>

                    <tr>
                        <td><a href="javascript:void(0)" class="label label-warning">{{ __('Billable') }}</a></td>
                        <td>Formula - 1</td>
                        <td>Formula - 1 Open Day</td>
                    </tr>

                    <tr>
                        <td><a href="javascript:void(0)" class="label label-warning">{{ __('Billable') }}</a></td>
                        <td>Formula - 1</td>
                        <td>Formula - 1 Open Day</td>
                    </tr>

                    <!-- TODO : Paginations -->
                </tbody>
            </table>
            <!-- END Responsive Partial Content -->
        </div>
        <!-- END Responsive Partial Block -->
    </div>
</div>

@endsection
