@extends('backend.layouts.app')

@section('title', __('labels.backend.access.users.bangunan') . ' | ' . __('labels.backend.access.users.create'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    {!! Form::open(['route' => 'ruangan.store', 'method' => 'post'] ) !!}
      <div class="card">

        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        @lang('labels.backend.access.users.bangunan')
                        <small class="text-muted">@lang('labels.backend.access.users.create')</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

        @include('backend.auth.ruangan._form')

        </div><!--card-body-->

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('ruangan.index'), __('buttons.general.cancel')) }}
                    </div><!--col-->

                    <div class="col text-right">
                        {{ form_submit(__('buttons.general.crud.create')) }}
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->

    {{ Form::close() }}
@endsection
