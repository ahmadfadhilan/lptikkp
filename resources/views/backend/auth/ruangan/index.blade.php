@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.users.management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('Room Management') }} <small class="text-muted">{{ __(' ') }}</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
              <div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
                  <a href="{{ route('ruangan.create') }}" class="btn btn-success ml-1" data-toggle="tooltip" title="@lang('labels.general.create_new')"><i class="fas fa-plus-circle"></i></a>
              </div>
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nomor Ruangan</th>
                            <th>Nama Ruangan</th>
                            <th>Luas Ruangan</th>
                            <th>Letak</th>
                            <th>Fungsi</th>
                            <th>Kapasitas</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($ruangan as $ruangan)
                              <tr>
                                  <td>{{ $ruangan->id }}</td>
                                  <td>{{ $ruangan->name }}</td>
                                  <td>{{ $ruangan->luas_ruangan }}</td>
                                  <td>Lantai {{ $ruangan->lantai }}</td>
                                  <td>{{ $ruangan->peruntukkan }}</td>
                                  <td>{{ $ruangan->kapasitas }}</td>
                                  <td>
                                    <a href="{{ route('ruangan.show', [$ruangan->id]) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fa fa-eye"> </i>
                                    </a>
                                    <a href="{{ route('ruangan.edit', [$ruangan->id]) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="svg-inline fa fa-edit fa-w-18"> </i>
                                    </a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("Apakah Kamu Yakin?")."');",
                                        'route' => ['ruangan.destroy', $ruangan->id])) !!}
                                    {!! Form::submit(trans('Delete'), array('class' => 'btn btn-sm btn-danger')) !!}
                                    {!! Form::close() !!}
                                  </td>
                              </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">

                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">

                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
