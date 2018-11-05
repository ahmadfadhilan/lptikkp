
        <div class="row mt-4 mb-4">
            <div class="col">
                <div class="form-group row">
                    {{ html()->label(__('Name'))->class('col-md-2 form-control-label')->for('first_name') }}

                    <div class="col-md-10">
                        {{ Form::text('name',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Tahun Didirikan'))->class('col-md-2 form-control-label')->for('last_name') }}
                    <div class="col-md-10">
                      {{ Form::number('tahun_bangun',  null, [ 'class' => 'form-control', 'placeholder' => 'Ex : 2018'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Jumlah Lantai'))->class('col-md-2 form-control-label')->for('first_name') }}

                    <div class="col-md-10">
                        {{ Form::number('jumlah_lantai',  null, [ 'class' => 'form-control', 'placeholder' => '0'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Luas Bangunan'))->class('col-md-2 form-control-label')->for('first_name') }}

                    <div class="col-md-10 input-group mb-2">
                        {{ Form::number('luas',  null, [ 'class' => 'form-control', 'placeholder' => '0'])}}
                        <div class="input-group-prepend">
                            <div class="input-group-text">ha (hektar)</div>
                        </div>
                    </div><!--col-->
                </div><!--form-group-->

            </div><!--col-->
        </div><!--row-->
