
        <div class="row mt-4 mb-4">
            <div class="col">
                <div class="form-group row">
                    {{ html()->label(__('Name'))->class('col-md-2 form-control-label')->for('first_name') }}

                    <div class="col-md-10">
                        {{ Form::text('name',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Bangunan'))->class('col-md-2 form-control-label')->for('last_name') }}
                    <div class="col-md-10">
                      {{ Form::select('bangunan_id', $bangunan, null, [ 'class' => 'form-control', 'placeholder' => 'Pilih Nama Bangunan ...'])}}

                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Lantai'))->class('col-md-2 form-control-label')->for('first_name') }}

                    <div class="col-md-10">
                        {{ Form::number('lantai',  null, [ 'class' => 'form-control', 'placeholder' => 'Posisi Ruangan ...'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Luas Ruangan'))->class('col-md-2 form-control-label')->for('first_name') }}

                    <div class="col-md-10 input-group mb-2">
                        {{ Form::number('luas_ruangan',  null, [ 'class' => 'form-control', 'placeholder' => '0'])}}
                        <div class="input-group-prepend">
                            <div class="input-group-text">m (meter)</div>
                        </div>
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Fungsi'))->class('col-md-2 form-control-label')->for('first_name') }}

                    <div class="col-md-10">
                        {{ Form::text('peruntukkan',  null, [ 'class' => 'form-control', 'placeholder' => 'Peruntukkan Ruangan'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Kapasitas'))->class('col-md-2 form-control-label')->for('first_name') }}

                    <div class="col-md-10">
                        {{ Form::number('kapasitas',  null, [ 'class' => 'form-control', 'placeholder' => '0'])}}
                    </div><!--col-->
                </div><!--form-group-->

            </div><!--col-->
        </div><!--row-->
