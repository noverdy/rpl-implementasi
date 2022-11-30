<x-template>
    <x-navbar />

    <x-content>
        <div class="my-5">
            <h1 class="fw-bold">Register</h1>
            <h5>Mendaftar ke dalam sistem pengajuan judul skripsi.</h5>
        </div>
        <div class="my-5">
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <x-floating-input label="Nama" name="nama" />
                <x-floating-input label="NIM" name="nim" />
                <x-floating-input type="email" label="Email" name="email" />
                <x-floating-input type="password" label="Password" name="password" />
                <x-floating-input type="password" label="Konfirmasi Password" name="password_confirmation" />

                <button type="submit" class="btn btn-primary text-white">Register</button>
            </form>
        </div>
    </x-content>

    <x-footer />
</x-template>
