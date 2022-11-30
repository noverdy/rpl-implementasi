<x-template>
    <x-navbar />

    <x-content>
        <div class="my-5">
            <h1 class="fw-bold">Login</h1>
            <h5>Login untuk mengakses fungsi-fungsi pengajuan judul skripsi.</h5>
        </div>
        <div class="my-5">
            <form action="{{ route('login.authenticate') }}" method="POST">
                @csrf
                <x-floating-input label="NIM" name="nim" />
                <x-floating-input type="password" label="Password" name="password" />

                <button type="submit" class="btn btn-primary text-white">Login</button>
            </form>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                {{ $errors->first() }}
            </div>
        @endif
    </x-content>

    <x-footer />
</x-template>
