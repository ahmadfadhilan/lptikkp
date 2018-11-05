<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">

            <tr>
                <th>Nama Bangunan</th>
                <td>Gedung {{ $bangunan->name }}</td>
            </tr>

            <tr>
                <th>Tahun Berdiri</th>
                <td>{{ $bangunan->tahun_bangun }}</td>
            </tr>

            <tr>
                <th>Jumlah Lantai</th>
                <td>{!! $bangunan->jumlah_lantai !!} lantai</td>
            </tr>

            <tr>
                <th>Luas Bangunan</th>
                <td>{!! $bangunan->luas !!} ha</td>
            </tr>


        </table>
    </div>
</div><!--table-responsive-->
