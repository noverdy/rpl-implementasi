<x-template>
    <x-navbar />

    <x-content>
        <div class="my-5">
            <h1 class="fw-bold">Ajukan Praproposal</h1>
            <h5>Masukkan data-data berikut sebagai syarat pengajuan praproposal skripsi.</h5>
        </div>
        <div class="my-5">
            <form action="{{ route('praproposal.store') }}" method="POST">
                @csrf
                <x-floating-input label="Judul Praproposal" name="judul" />
                <x-floating-input label="Sumber Ide Judul" name="sumber_ide" />
                <x-floating-input label="Keminatan dan Bidang Penelitian" name="keminatan" />
                <x-floating-input label="Tipe Penelitian" name="tipe_penelitian" />
                <x-floating-input label="Calon Dosen Pembimbing" name="calon_dosen_pembimbing" />
                <x-floating-input type="textarea" label="Latar Belakang" name="latar_belakang" />
                <x-floating-input type="textarea" label="Rumusan Masalah" name="rumusan_masalah" />
                <x-floating-input type="textarea" label="Metode Penyelesaian Permasalahan" name="metode_penyelesaian" />
                <x-floating-input type="textarea" label="Daftar Pustaka" name="daftar_pustaka" />

                <button type="submit" class="btn btn-primary text-white">Ajukan Praproposal</button>
            </form>
        </div>
    </x-content>

    <x-footer />
</x-template>
