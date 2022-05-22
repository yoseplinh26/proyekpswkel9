


<form action="/test" method="post">
    @csrf
    nama :
    <input type="text" name="nama" id="">
    <br/>
    kelas :
    <input type="text" name="asal" id="">

    <button>Simpan</button>

</form>



<h3>{{$title}}</h3>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Asal</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $index =>$stu)
            
            <tr>
                {{-- <td>{{$stu->nama}}</td> --}}
                <td>{{$stu['nama']}}</td>
                <td>{{$stu['asal']}}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>

{{-- @foreach ($students as $stu)
    {{$stu['nama']}}
@endforeach --}}