@extends('layout.admin')
@section('content')
    <main class="p-6 space-y-6">



        <!-- Table + Activity -->
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-2">
            <!-- Table -->
            <div class="card bg-base-100 shadow-md border border-base-300">
                <div class="card-body">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 mb-4">
                        <h2 class="card-title">Form Order</h2>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                        <div>
                            <label class="form-control w-full mt-2">
                                <div class="label">
                                    <span class="label-text">Kode Order</span>
                                </div>
                                <input type="text" name="nama" placeholder=""
                                    class="input input-bordered input-success w-full" value="{{ $kode }}"
                                    required />
                            </label>
                        </div>

                        <div>
                            <label class="form-control w-full mt-2">
                                <div class="label">
                                    <span class="label-text">Nomor Antrian</span>
                                </div>
                                <input type="text" name="nama" placeholder=""
                                    class="input input-bordered input-success w-full"
                                    value="{{ $nomorantrian->no_antrian }}" required />
                            </label>
                        </div>


                        <div>
                            <label class="form-control w-full mt-2">
                                <div class="label">
                                    <span class="label-text">Customer</span>
                                </div>

                                <select name="customer" id="" class="input input-bordered input-success" required>
                                    <option value="">-- Pilih Customer --</option>
                                    @foreach ($customer as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }} - {{ $item->nohp }}
                                        </option>
                                    @endforeach
                                </select>

                            </label>
                        </div>

                        <div>
                            <label class="form-control w-full mt-2">
                                <div class="label">
                                    <span class="label-text">Desainer</span>
                                </div>
                                <select class="input input-bordered input-success" name="desainer" id="" required>
                                    <option value="">-- Pilih Desainer --</option>
                                    @foreach ($pegawai as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach

                                </select>
                            </label>
                        </div>

                        <div>
                            <label class="form-control w-full mt-2">
                                <div class="label">
                                    <span class="label-text">Jasa Desain</span>
                                </div>
                                <select name="jenis_desain" id="harga" class="input input-bordered input-success"
                                    required>
                                    <option value="">-- Pilih Jasa Desain --</option>
                                    @foreach ($jasa as $item)
                                        <option value="{{ $item->harga }}">{{ $item->nama_jasa }} -
                                            {{ number_format($item->harga) }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>



                        <div>
                            <label class="form-control w-full mt-2">
                                <div class="label">
                                    <span class="label-text">Jenis Hitungan</span>
                                </div>
                                <select id="hitungan" name="jenis_desain" id=""
                                    class="input input-bordered input-success" required>
                                    <option value="">-- Pilih Jenis Hitungan --</option>
                                    <option>Per meter</option>
                                    <option>Per qty</option>
                                </select>
                            </label>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-1" id="formhitung" style="display: none">
                            <div>
                                <label class="form-control w-full mt-2">
                                    <div class="label">
                                        <span class="label-text">Lebar (Meter)</span>
                                    </div>
                                    <input type="number" id="lebar" name="nama" placeholder=""
                                        class="input input-bordered input-success w-full" required />
                                </label>
                            </div>

                            <div>
                                <label class="form-control w-full mt-2">
                                    <div class="label">
                                        <span class="label-text">Tinggi (Meter)</span>
                                    </div>
                                    <input type="number" name="nama" id="tinggi" placeholder=""
                                        class="input input-bordered input-success w-full" required />
                                </label>
                            </div>
                        </div>


                        <div>
                            <label class="form-control w-full mt-2">
                                <div class="label">
                                    <span class="label-text">QTY</span>
                                </div>
                                <input type="number" name="nama" id="qty"pl aceholder=""
                                    class="input input-bordered input-success w-full" required />
                            </label>
                        </div>

                        <div>
                            <label class="form-control w-full mt-2">
                                <div class="label">
                                    <span class="label-text">Total Harga</span>
                                </div>
                                <input type="text" name="nama" id="totalharga" placeholder=""
                                    class="input input-bordered input-success w-full" required />
                            </label>
                        </div>
                    </div>

                    <div class="mt-3 grid sm:grid-cols-2 gap-2">
                        <div class="mt-3">
                            <button class="btn btn-success w-full"><i class="fas fa-add"></i>SUBMIT</button>
                        </div>
                        <div class="mt-3">
                            <a href="" class="btn btn-dark w-full"><i class="fa-solid fa-rotate-right"></i>
                                REFRESH</a>
                        </div>
                    </div>



                </div>
            </div>
            <div class="card bg-base-100 shadow-md border border-base-300">
                <div class="card-body">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 mb-4">
                        <h2 class="card-title">Data Antrian</h2>
                        <div class="flex gap-2">

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
@endsection
