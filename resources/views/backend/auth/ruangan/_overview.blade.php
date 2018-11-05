<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">

            <tr>
                <th>Nama Ruangan</th>
                <td>Ruangan {{ $ruangan->name }}</td>
            </tr>

            <tr>
                <th>Luas Ruangan</th>
                <td>{{ $ruangan->luas_ruangan }} m2</td>
            </tr>

            <tr>
                <th>Letak</th>
                <td>Lantai {!! $ruangan->lantai !!}</td>
            </tr>

            <tr>
                <th>Fungsi</th>
                <td>{!! $ruangan->peruntukkan !!} ha</td>
            </tr>

            <tr>
                <th>Kapasitas</th>
                <td>{!! $ruangan->kapasitas !!} ha</td>
            </tr>
        </table>
    </div>
</div><!--table-responsive-->
