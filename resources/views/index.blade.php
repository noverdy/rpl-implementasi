<x-template>
    <x-navbar />
    <x-content>
        <div class="my-5 text-center">
            <img src="{{ asset('logo.png') }}" alt="Logo" width="300">
            <div class="my-5 text-center">
                <h1 class="fw-bold">Pengajuan Judul Skripsi</h1>
                <h5>Silakan <a href="{{ route('login.index') }}">masuk</a> agar dapat mengakses fungsi pada sistem.</h5>
            </div>
        </div>
    </x-content>
    <x-footer />
</x-template>
