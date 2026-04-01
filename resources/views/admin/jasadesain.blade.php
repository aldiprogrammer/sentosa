@extends('layout.admin')
@section('content')
    <main class="p-6 space-y-6">



        <!-- Table + Activity -->
        <div class="grid grid-cols-1 xl:grid-cols-1 gap-">

            <!-- Table -->
            <div class="xl:col-span-2 card bg-base-100 shadow-md border border-base-300">
                <div class="card-body">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 mb-4">
                        <h2 class="card-title">{{ $title }}</h2>
                        <div class="flex gap-2">
                            <button class="btn btn-success" onclick="my_modal_3.showModal()"><i class="fas fa-plus"></i>
                                Tambah
                                data</button>
                            <dialog id="my_modal_3" class="modal">
                                <div class="modal-box">
                                    <form method="dialog">
                                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                    </form>
                                    <h3 class="text-lg font-bold">Tambah {{ $title }}</h3>
                                    <form method="post" action="{{ route('admin.jasadesain.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <label class="form-control w-full mt-2">
                                            <div class="label">
                                                <span class="label-text">Nama Jasa Desain</span>
                                            </div>
                                            <input type="text" name="jasa" placeholder=""
                                                class="input input-bordered input-success w-full" required />
                                        </label>

                                        <label class="form-control w-full mt-2">
                                            <div class="label">
                                                <span class="label-text">Harga</span>
                                            </div>
                                            <input type="number" name="harga" placeholder=""
                                                class="input input-bordered input-success w-full" required />
                                        </label>

                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-success">Tambah data</button>
                                            <a href="" class="btn btn-danger">Keluar</a>
                                        </div>

                                    </form>
                                </div>
                            </dialog>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        {{-- <table class="table display" > --}}
                        <table class="table table-zebra" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Jasa</th>
                                    <th>Harga</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($jasa as $i => $item)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $item->nama_jasa }}</td>
                                        <td>{{ number_format($item->harga) }}</td>
                                        <td>
                                            <div class="flex gap-2">
                                                <button class="btn btn-primary btn-sm"
                                                    onclick="my_modal_3{{ $item->id }}.showModal()">
                                                    Edit</button>

                                                <form id="delete-user-{{ $item->id }}"
                                                    action="{{ route('admin.jasadesain.delete', $item->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="button"
                                                        onclick="confirmDelete('delete-user-{{ $item->id }}')"
                                                        class="btn btn-error btn-sm text-white">
                                                        Hapus
                                                    </button>

                                                </form>

                                            </div>

                                        </td>
                                    </tr>

                                    <dialog id="my_modal_3{{ $item->id }}" class="modal">
                                        <div class="modal-box">
                                            <form method="dialog">
                                                <button
                                                    class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                            </form>
                                            <h3 class="text-lg font-bold">Edit {{ $title }}</h3>
                                            <form method="post" action="{{ route('admin.jasadesain.update', $item->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('put')

                                                <label class="form-control w-full mt-2">
                                                    <div class="label">
                                                        <span class="label-text">Nama Jasa Desain</span>
                                                    </div>
                                                    <input type="text" name="jasa" placeholder=""
                                                        class="input input-bordered input-success w-full"
                                                        value="{{ $item->nama_jasa }}" required />
                                                </label>

                                                <label class="form-control w-full mt-2">
                                                    <div class="label">
                                                        <span class="label-text">Harga</span>
                                                    </div>
                                                    <input type="text" name="harga" placeholder=""
                                                        class="input input-bordered input-success w-full"
                                                        value="{{ $item->harga }}" required />
                                                </label>


                                                <div class="mt-4">
                                                    <button type="submit" class="btn btn-success">Edit
                                                    </button>
                                                    <a href="" class="btn btn-danger">Keluar</a>
                                                </div>

                                            </form>
                                        </div>
                                    </dialog>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </main>
@endsection
