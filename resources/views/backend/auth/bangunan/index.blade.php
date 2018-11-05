@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.users.bangunan'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.users.bangunan') }} <small class="text-muted">{{ __('List Building') }}</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
              <div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
                  <a href="{{ route('bangunan.create') }}" class="btn btn-success ml-1" data-toggle="tooltip" title="@lang('labels.general.create_new')"><i class="fas fa-plus-circle"></i></a>
              </div>
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nomor Bangunan</th>
                            <th>Nama Bangunan</th>
                            <th>Tahun di Dirikan</th>
                            <th>Jumlah Lantai</th>
                            <th>Luas Bangunan</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($bangunan as $bangunan)
                              <tr>
                                  <td>{{ $bangunan->id }}</td>
                                  <td>Gedung {{ $bangunan->name }}</td>
                                  <td>{{ $bangunan->tahun_bangun }}</td>
                                  <td>{{ $bangunan->jumlah_lantai }} lantai</td>
                                  <td>{{ $bangunan->luas }} ha</td>
                                  <td >
                                      <a href="{{ route('bangunan.show', [$bangunan->id]) }}" class="btn btn-sm btn-outline-primary">
                                          <i class="fa fa-eye"> </i>
                                      </a>
                                      <a href="{{ route('bangunan.edit', [$bangunan->id]) }}" class="btn btn-sm btn-outline-primary">
                                          <i class="svg-inline fa fa-edit fa-w-18"> </i>
                                      </a>
                                      {!! Form::open(array(
                                          'style' => 'display: inline-block;',
                                          'method' => 'DELETE',
                                          'onsubmit' => "return confirm('".trans("Apakah Kamu Yakin?")."');",
                                          'route' => ['bangunan.destroy', $bangunan->id])) !!}
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
