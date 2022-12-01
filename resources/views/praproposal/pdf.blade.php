<head>
    <title>{{ $judul }}</title>

    <style>
        @page {
            size: 21cm 29.7cm;
            margin: 3cm 3cm 3cm 4cm;
        }

        .page-break {
            page-break-before: always;
        }
    </style>
</head>

<body>
    <div style="text-align: center">
        <h1>{{ $judul }}</h1>

        <div style="margin: 40px 0">
            <h2>Proposal Skripsi</h2>
        </div>

        <div style="font-size: 1.2em">
            Disusun oleh: <br>
            {{ $user['nama'] }} <br>
            NIM: {{ $user['nim'] }}
        </div>

        <div style="margin: 100px 0">
            <img src="{{ asset('brawijaya.png') }}" width=250>
        </div>

        <div>
            PROGRAM STUDI TEKNIK INFORMATIKA <br>
            DEPARTEMEN TEKNIK INFORMATIKA <br>
            FAKULTAS ILMU KOMPUTER <br>
            UNIVERSITAS BRAWIJAYA <br>
            MALANG <br>
            {{ now()->year }}
        </div>
    </div>

    <div class="page-break"></div>

    <div style="text-align: center">
        <h2 style="margin-bottom: 0">BAB 1</h2>
        <h2 style="margin-top: 0">PENDAHULUAN</h2>
    </div>

    <h3>1.1 Latar Belakang</h3>
    <div style="text-align: justify; text-indent: 30px">
        {{ $latar_belakang }}
    </div>

    <h3>1.2 Rumusan Masalah</h3>
    <div style="text-align: justify; text-indent: 30px">
        {{ $rumusan_masalah }}
    </div>

    <div class="page-break"></div>

    <div style="text-align: center">
        <h2>Daftar Pustaka</h2>
    </div>
    <div style="text-align: justify">
        @foreach (explode("\n", $daftar_pustaka) as $pustaka)
            <div style="text-indent: -30px">{{ $pustaka }}</div>
        @endforeach
    </div>
</body>
