<html>
    <head>
        <title>View Data Dosen</title>
    </head>
    <body>



        @for ($i = 0; $i < count($data); $i++)
            {{ $data[$i]->nama }}
        @endfor


        {{-- @for ($i=0; $i<count($data);$i++)
            @php
                $mahasiswa = $data[$i]
            @endphp
            {{ $mahasiswa->nama }}
        @endfor --}} 

        {{-- atau --}}

        @foreach ($data as $mahasiswa)
            {{ $mahasiswa->nama }}
        @endforeach
        {{-- @if($data)
        {{ $data->nama }}
        <p>Ini True</p>

        @else
        <p>Data tidak ada</p>
        <p>Ini False</p>
        @endif --}}
    </body>
</html>