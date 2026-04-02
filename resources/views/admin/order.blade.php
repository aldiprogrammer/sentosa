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
                                    class="input input-bordered input-success w-full" required />
                            </label>
                        </div>

                        <div>
                            <label class="form-control w-full mt-2">
                                <div class="label">
                                    <span class="label-text">Nomor Antrian</span>
                                </div>
                                <input type="text" name="nama" placeholder=""
                                    class="input input-bordered input-success w-full" required />
                            </label>
                        </div>


                        <div>
                            <label class="form-control w-full mt-2">
                                <div class="label">
                                    <span class="label-text">Customer</span>
                                </div>
                                <input type="text" name="nama" placeholder=""
                                    class="input input-bordered input-success w-full" required />
                            </label>
                        </div>

                        <div>
                            <label class="form-control w-full mt-2">
                                <div class="label">
                                    <span class="label-text">No Whatsapp</span>
                                </div>
                                <input type="text" name="nama" placeholder=""
                                    class="input input-bordered input-success w-full" required />
                            </label>
                        </div>

                        <div>
                            <label class="form-control w-full mt-2">
                                <div class="label">
                                    <span class="label-text">Jenis Desain</span>
                                </div>
                                <input type="text" name="nama" placeholder=""
                                    class="input input-bordered input-success w-full" required />
                            </label>
                        </div>

                        <div>
                            <label class="form-control w-full mt-2">
                                <div class="label">
                                    <span class="label-text">Ukuran</span>
                                </div>
                                <input type="text" name="nama" placeholder=""
                                    class="input input-bordered input-success w-full" required />
                            </label>
                        </div>

                        <div>
                            <label class="form-control w-full mt-2">
                                <div class="label">
                                    <span class="label-text">QTY</span>
                                </div>
                                <input type="number" name="nama" placeholder=""
                                    class="input input-bordered input-success w-full" required />
                            </label>
                        </div>

                        <div>
                            <label class="form-control w-full mt-2">
                                <div class="label">
                                    <span class="label-text">Total Harga</span>
                                </div>
                                <input type="text" name="nama" placeholder=""
                                    class="input input-bordered input-success w-full" required />
                            </label>
                        </div>

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
