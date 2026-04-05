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

                                        <div class="grid sm:grid-cols-2 gap-2">
                                            <label class="form-control w-full mt-2">
                                                <div class="label">
                                                    <span class="label-text">Tanggal Masuk</span>
                                                </div>
                                                <input type="date" name="tgl_masuk" placeholder=""
                                                    class="input input-bordered input-success w-full" required />
                                            </label>

                                            <label class="form-control w-full mt-2">
                                                <div class="label">
                                                    <span class="label-text">Kode</span>
                                                </div>
                                                <input type="text" name="kode" placeholder=""
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
                                                    <span class="label-text">Kategori Bahan</span>
                                                </div>
                                                <select name="jenis_bahan" id=""
                                                    class="input input-bordered input-success" required>
                                                    <option value="">-- Pilih Jenis Bahan --</option>
                                                    @foreach ($jenis as $item)
                                                        <option value="{{ $item->id }}">{{ $item->jenis_bahan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </label>

                                            <label class="form-control w-full mt-2">
                                                <div class="label">
                                                    <span class="label-text">Satuan Bahan</span>
                                                </div>
                                                <select name="satuan_bahan" id=""
                                                    class="input input-bordered input-success" required>
                                                    <option value="">-- Pilih Satuan Bahan --</option>
                                                    @foreach ($satuan as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama_satuan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </label>

                                            <label class="form-control w-full mt-2">
                                                <div class="label">
                                                    <span class="label-text">Kelompok</span>
                                                </div>
                                                <select name="kelompok" id=""
                                                    class="input input-bordered input-success">
                                                    <option></option>
                                                    @foreach ($bahan as $item)
                                                        <option value="{{ $item->kode }}">{{ $item->kode }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </label>

                                            <label class="form-control w-full mt-2">
                                                <div class="label">
                                                    <span class="label-text">Konversi</span>
                                                </div>
                                                <input type="number" class="input input-bordered input-success"
                                                    name="konversi" required value="0">
                                            </label>

                                            <label class="form-control w-full mt-2">
                                                <div class="label">
                                                    <span class="label-text">Mode Cetak</span>
                                                </div>
                                                <input type="number" class="input input-bordered input-success"
                                                    name="mode_cetak" required value="0">
                                            </label>


                                            <label class="form-control w-full mt-2">
                                                <div class="label">
                                                    <span class="label-text">Klik</span>
                                                </div>
                                                <input type="number" class="input input-bordered input-success"
                                                    name="klik" required value="0">
                                            </label>

                                            <div class="flex">
                                                <label class="form-control mt-2">
                                                    <div class="label">
                                                        <span class="label-text">Luas</span>
                                                    </div>
                                                    <input type="checkbox" class="checkbox" name="luas" />
                                                </label>

                                                <label class="form-control mt-2">
                                                    <div class="label">
                                                        <span class="label-text">Qty</span>
                                                    </div>
                                                    <input type="checkbox" class="checkbox" name="qty" />
                                                </label>
                                            </div>



                                        </div>








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
                                    <th>Kode</th>
                                    <th>Nama Bahan</th>
                                    <th>Jumlah Stok</th>
                                    <th>Kategori Bahan</th>
                                    <th>Satuan Stok</th>
                                    <th>Kelompok</th>
                                    <th>Konversi</th>
                                    <th>Mod Label</th>
                                    <th>Klik</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($bahan as $i => $item)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $item->tgl_masuk }}</td>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->nama_bahan }}</td>
                                        <td>{{ $item->jumlah_bahan }}</td>
                                        <td>{{ $item->jenisbahan->jenis_bahan }}</td>
                                        <td>{{ $item->satuanstok->nama_satuan }}</td>
                                        <td>{{ $item->kelompok }}</td>
                                        <td>{{ $item->konversi }}</td>
                                        <td>{{ $item->mode_cetak }}</td>
                                        <td>{{ $item->klik }}</td>
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

                                                <div class="grid sm:grid-cols-2 gap-2">
                                                    <label class="form-control w-full mt-2">
                                                        <div class="label">
                                                            <span class="label-text">Tanggal Masuk</span>
                                                        </div>
                                                        <input type="date" name="tgl_masuk" placeholder=""
                                                            value="{{ $item->tgl_masuk }}"
                                                            class="input input-bordered input-success w-full" required />
                                                    </label>

                                                    <label class="form-control w-full mt-2">
                                                        <div class="label">
                                                            <span class="label-text">Kode</span>
                                                        </div>
                                                        <input type="text" name="kode" placeholder=""
                                                            class="input input-bordered input-success w-full" required
                                                            value="{{ $item->kode }}" />
                                                    </label>

                                                    <label class="form-control w-full mt-2">
                                                        <div class="label">
                                                            <span class="label-text">Nama Bahan</span>
                                                        </div>
                                                        <input type="text" name="nama_bahan" placeholder=""
                                                            class="input input-bordered input-success w-full" required
                                                            value="{{ $item->nama_bahan }}" />
                                                    </label>

                                                    <label class="form-control w-full mt-2">
                                                        <div class="label">
                                                            <span class="label-text">Jumlah Bahan</span>
                                                        </div>
                                                        <input type="number" name="jml_bahan" placeholder=""
                                                            class="input input-bordered input-success w-full" required
                                                            value="{{ $item->jumlah_bahan }}" />
                                                    </label>

                                                    <label class="form-control w-full mt-2">
                                                        <div class="label">
                                                            <span class="label-text">Kategori Bahan</span>
                                                        </div>
                                                        <select name="jenis_bahan" id=""
                                                            class="input input-bordered input-success" required>
                                                            <option value="{{ $item->id_kategori_bahan }}">
                                                                {{ $item->jenisbahan->jenis_bahan }}</option>
                                                            @foreach ($jenis as $c)
                                                                <option value="{{ $c->id }}">
                                                                    {{ $c->jenis_bahan }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </label>

                                                    <label class="form-control w-full mt-2">
                                                        <div class="label">
                                                            <span class="label-text">Satuan Bahan</span>
                                                        </div>
                                                        <select name="satuan_bahan" id=""
                                                            class="input input-bordered input-success" required>
                                                            <option value="{{ $item->satuan_stok }}">
                                                                {{ $item->satuanstok->nama_satuan }}</option>
                                                            @foreach ($satuan as $b)
                                                                <option value="{{ $b->id }}">
                                                                    {{ $b->nama_satuan }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </label>

                                                    <label class="form-control w-full mt-2">
                                                        <div class="label">
                                                            <span class="label-text">Kelompok</span>
                                                        </div>
                                                        <select name="kelompok" id=""
                                                            class="input input-bordered input-success">
                                                            <option>{{ $item->kelompok }}</option>
                                                            @foreach ($bahan as $a)
                                                                <option value="{{ $a->kode }}">{{ $a->kode }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </label>

                                                    <label class="form-control w-full mt-2">
                                                        <div class="label">
                                                            <span class="label-text">Konversi</span>
                                                        </div>
                                                        <input type="number" class="input input-bordered input-success"
                                                            name="konversi" required value="{{ $item->konversi }}">
                                                    </label>

                                                    <label class="form-control w-full mt-2">
                                                        <div class="label">
                                                            <span class="label-text">Mode Cetak</span>
                                                        </div>
                                                        <input type="number" class="input input-bordered input-success"
                                                            name="mode_cetak" required value="0"
                                                            value="{{ $item->mode_cetak }}">
                                                    </label>


                                                    <label class="form-control w-full mt-2">
                                                        <div class="label">
                                                            <span class="label-text">Klik</span>
                                                        </div>
                                                        <input type="number" class="input input-bordered input-success"
                                                            name="klik" required value="{{ $item->klik }}">
                                                    </label>

                                                    <div class="flex">
                                                        <label class="form-control mt-2">
                                                            <div class="label">
                                                                <span class="label-text">Luas</span>
                                                            </div>
                                                            <input type="checkbox" class="checkbox"
                                                                @checked($item->luas == 'on') name="luas" />
                                                        </label>

                                                        <label class="form-control mt-2">
                                                            <div class="label">
                                                                <span class="label-text">Qty</span>
                                                            </div>
                                                            <input type="checkbox" class="checkbox" name="qty"
                                                                @checked($item->qty == 'on') />
                                                        </label>
                                                    </div>



                                                </div>


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
