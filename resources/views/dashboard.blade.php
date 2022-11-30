<x-template>
    <x-navbar />
    <x-content>
        <div class="my-5 text-center">
            <img src="{{ asset('logo.png') }}" alt="Logo" width="300">
            <div class="my-5 text-center">
                <h1 class="fw-bold">Halo, {{ auth()->user()->nama }}.</h1>
                @if (auth()->user()->praproposal()->count() > 0)
                    <h5>Lihat status praproposal skripsi Anda pada tautan <a
                            href="{{ route('praproposal.status') }}">berikut
                            ini</a>.
                    </h5>
                @else
                    <h5>Ajukan praproposal skripsi pada tautan <a href="{{ route('praproposal.create') }}">berikut
                            ini</a>.
                    </h5>
                @endif
            </div>
        </div>
    </x-content>
    <x-footer />
</x-template>
