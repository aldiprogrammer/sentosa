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
                                    <form method="post" action={{ route('admin.customer.store') }}
                                        enctype="multipart/form-data">
                                        @csrf

                                        <label class="form-control w-full mt-2">
                                            <div class="label">
                                                <span class="label-text">Nama</span>
                                            </div>
                                            <input type="text" name="nama" placeholder=""
                                                class="input input-bordered input-success w-full" required />
                                        </label>

                                        <label class="form-control w-full mt-2">
                                            <div class="label">
                                                <span class="label-text">No Whatsapp</span>
                                            </div>
                                            <input type="text" name="nohp" placeholder=""
                                                class="input input-bordered input-success w-full" required />
                                        </label>



                                        <label class="form-control w-full mt-2">
                                            <div class="label">
                                                <span class="label-text">Alamat</span>
                                            </div>

                                        </label>
                                        div



                                        <label class="form-control w-full mt-2">
                                            <label class="form-control w-full mt-2">
                                                <div class="label">
                                                    <span class="label-text">Jenis Kelamin</span>
                                                </div>
                                                <select name="jk" id=""
                                                    class="input input bordered input-success  w-full " required>
                                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                                    <option>Laki-laki</option>
                                                    <option>Perempuan</option>
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
                        <table class="table table-zebra">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ahmad Fauzi</td>
                                    <td>ahmad@email.com</td>
                                    <td><span class="badge badge-success">Admin</span></td>
                                    <td><span class="badge badge-success">Aktif</span></td>
                                    <td>
                                        <div class="flex gap-2">
                                            <button class="btn btn-sm btn-danger text-white">Edit</button>
                                            <button class="btn btn-sm btn-success">Hapus</button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Siti Rahma</td>
                                    <td>siti@email.com</td>
                                    <td><span class="badge badge-secondary">User</span></td>
                                    <td><span class="badge badge-success">Aktif</span></td>
                                    <td>
                                        <div class="flex gap-2">
                                            <button class="btn btn-sm btn-info text-white">Edit</button>
                                            <button class="btn btn-sm btn-error">Hapus</button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Budi Santoso</td>
                                    <td>budi@email.com</td>
                                    <td><span class="badge badge-warning">Editor</span></td>
                                    <td><span class="badge badge-error">Nonaktif</span></td>
                                    <td>
                                        <div class="flex gap-2">
                                            <button class="btn btn-sm btn-info text-white">Edit</button>
                                            <button class="btn btn-sm btn-error">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </main>
@endsection
