<x-template>
    <x-navbar />
    <x-content>
        <div class="my-5">
            <h1 class="fw-bold">Sukses</h1>
            <h5>Praproposal skripsi berhasil diajukan. Status dari praproposal dapat dilihat pada tautan <a
                    href="{{ route('praproposal.status') }}">berikut</a>.</h5>
        </div>
    </x-content>
    <x-footer />
</x-template>
