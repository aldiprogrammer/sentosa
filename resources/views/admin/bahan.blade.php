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
                                    <form method="post" action="{{ route('admin.bahan.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <label class="form-control w-full mt-2">
                                            <div class="label">
                                                <span class="label-text">Tanggal Masuk</span>
                                            </div>
                                            <input type="date" name="tgl_masuk" placeholder=""
                                                class="input input-bordered input-success w-full" required />
                                        </label>

                                        <label class="form-control w-full mt-2">
                                            <div class="label">
                                                <span class="label-text">Nama Bahan</span>
                                            </div>
                                            <input type="text" name="nama_bahan" placeholder=""
                                                class="input input-bordered input-success w-full" required />
                                        </label>

                                        <label class="form-control w-full mt-2">
                                            <div class="label">
                                                <span class="label-text">Jumlah Bahan</span>
                                            </div>
                                            <input type="number" name="jml_bahan" placeholder=""
                                                class="input input-bordered input-success w-full" required />
                                        </label>

                                        <label class="form-control w-full mt-2">
                                            <div class="label">
                                                <span class="label-text">Jenis Bahan</span>
                                            </div>
                                            <select name="jenis_bahan" id=""
                                                class="input input-bordered input-success" required>
                                                <option value="">-- Pilih Jenis Bahan --</option>
                                                @foreach ($jenis as $item)
                                                    <option value="{{ $item->id }}">{{ $item->jenis_bahan }}</option>
                                                @endforeach
                                            </select>
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
                                    <th>Tanggal Masuk</th>
                                    <th>Nama Bahan</th>
                                    <th>Jumlah Stok</th>
                                    <th>Jenis Bahan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($bahan as $i => $item)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $item->tgl_masuk }}</td>
                                        <td>{{ $item->nama_bahan }}</td>
                                        <td>{{ $item->jumlah_bahan }}</td>
                                        <td>{{ $item->jenisbahan->jenis_bahan }}</td>
                                        <td>
                                            <div class="flex gap-2">
                                                <button class="btn btn-primary btn-sm"
                                                    onclick="my_modal_3{{ $item->id }}.showModal()">
                                                    Edit</button>

                                                <form id="delete-user-{{ $item->id }}"
                                                    action="{{ route('admin.bahan.delete', $item->id) }}" method="POST">
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
                                            <form method="post" action="{{ route('admin.bahan.update', $item->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('put')

                                                <label class="form-control w-full mt-2">
                                                    <div class="label">
                                                        <span class="label-text">Tanggal Masuk</span>
                                                    </div>
                                                    <input type="date" name="tgl_masuk" placeholder=""
                                                        class="input input-bordered input-success w-full"
                                                        value="{{ $item->tgl_masuk }}" required />
                                                </label>

                                                <label class="form-control w-full mt-2">
                                                    <div class="label">
                                                        <span class="label-text">Nama Bahan</span>
                                                    </div>
                                                    <input type="text" name="nama_bahan" placeholder=""
                                                        class="input input-bordered input-success w-full"
                                                        value="{{ $item->nama_bahan }}" required />
                                                </label>

                                                <label class="form-control w-full mt-2">
                                                    <div class="label">
                                                        <span class="label-text">Jumlah Bahan</span>
                                                    </div>
                                                    <input type="number" name="jml_bahan" placeholder=""
                                                        class="input input-bordered input-success w-full"
                                                        value="{{ $item->jumlah_bahan }}" required />
                                                </label>

                                                <label class="form-control w-full mt-2">
                                                    <div class="label">
                                                        <span class="label-text">Jenis Bahan</span>
                                                    </div>
                                                    <select name="jenis_bahan" id=""
                                                        class="input input-bordered input-success" required>
                                                        <option value="{{ $item->id_kategori_bahan }}">
                                                            {{ $item->jenisbahan->jenis_bahan }}</option>
                                                        @foreach ($jenis as $a)
                                                            <option value="{{ $a->id }}">{{ $a->jenis_bahan }}
                                                            </option>
                                                        @endforeach
                                                    </select>
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
