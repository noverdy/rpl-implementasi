<x-template>
    <x-navbar />

    <x-content>
        <div class="my-5">
            <h1 class="fw-bold">Detail Praproposal</h1>
            <h5>Berikut adalah detail dari prapoposal yang Anda ajukan.</h5>
        </div>
        <div class="my-5">
            <table class="table">
                <tbody>
                    @foreach ($praproposal->toArray() as $key => $value)
                        @if (!in_array($key, ['status', 'id', 'user_id', 'updated_at']))
                            <tr>
                                <th scope="row">{{ ucwords(str_replace('_', ' ', $key)) }}</th>
                                <td>{{ $value }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="my-5">
            <h2 class="fw-bold">Status Praproposal: {{ $status }}</h2>
        </div>
    </x-content>

    <x-footer />
</x-template>
