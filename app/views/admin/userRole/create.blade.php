@extends('l.admin', array('active' => $resource))

@section('title')
@parent
{{ __('Create') . $resourceName }}
@stop


@section('container')
    @include('w.breadcrumb')
    @include('w.notification')

     <div class="row">
      <div class="col-xs-4">
        <div class="h1" style="line-height: 32px;">{{ __('Create') . $resourceName }}</div>
      </div>
      <div class="col-xs-8">
        <div class="pull-right">
            <a href="{{ route($resource.'.index') }}" class="btn btn-sm btn-default">
                &laquo; {{ __('Return') . $resourceName . __('List') }}
            </a>
        </div>
      </div>
    </div>
    <hr>


    <form class="form-horizontal" method="post" action="{{ route($resource.'.create') }}" autocomplete="off">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        @include('admin.role.detailForm')

 <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <a class="btn btn-default" href="{{ route($resource.'.create') }}">{{ __('Reset') }}</a>
              <button type="submit" class="btn btn-success">{{ __('Submit') }}</button>
            </div>
        </div>

    </form>

@stop

@section('end')
       {{ script('bootstrap-switch') }}
    @parent

    <script>
        // jQuery(document).ready(function($) {
        //     $("[data-toggle='switch']").bootstrapSwitch();
        // });
    </script>
@stop
