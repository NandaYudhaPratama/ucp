<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <a href="{{ route('mahasiswa.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> Create</a>
                    <table class="table-auto w-full mt-5">
                        <tr>
                            <th class="border px-4 py-2" width="5%"> No </th>
                            <th class="border px-4 py-2" width="25%"> Nama </th>
                            <th class="border px-4 py-2" width="20%"> Nim </th>
                            <th class="border px-4 py-2" width="40%"> Alamat </th>
                            <th class="border px-4 py-2" width="10%"> Aksi </th>
                        </tr>
                        @forelse ($mahasiswas as $mahasiswa)
                            <tr>
                                <td class="border px-4 py-2">{{ $mahasiswa-> id}} </td>
                                <td class="border px-4 py-2">{{ $mahasiswa-> nama}} </td>
                                <td class="border px-4 py-2">{{ $mahasiswa-> nim}} </td>
                                <td class="border px-4 py-2">{{ $mahasiswa-> alamat}} </td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}">Edit</a>
                                    <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submmit">
                                    delete
                                    </button>
                                    </form>
                                </td>

                        @empty
                            <tr>
                             <td colspan="5" class="border px-4 py-2 text-center"> Tidak ada data</td>
                            </tr>
                        @endforelse
                    </table>
            </div>
        </div>
    </div>
</x-app-layout>
