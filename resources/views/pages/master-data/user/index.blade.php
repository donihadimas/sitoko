@extends('core.app')
@section('title', 'Master Data')
@section('title2', 'User')
@section('user', 'active')
@push('style')
    <!-- CSS Libraries -->
@endpush
@section('main')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            {{-- Breadcrumb --}}
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Master Data</a>
                        </li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </nav>
            {{-- /Breadcrumb --}}
            {{-- Content --}}
                {{-- Spinner --}}
                    <div class="position-absolute top-50 start-50 translate-middle" style="z-index: 2">
                        <div class="spinner-border spinner-border-lg text-primary loader" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                {{-- /Spinner --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <h4 class="card-header">Daftar User</h4>
                            <!-- Account -->
                            <div class="card-body">
                                <div class="d-flex justify-content-end align-items-end align-items-sm-center gap-4">
                                    <div class="button-wrapper">
                                        <button type="button" class="btn rounded-pill btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                                            Tambah User<i class="bx bx-plus-circle ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <table class="table table-striped w-100" id="dtindex_produk">
                                    <thead>
                                        <th style="width: 5%">No</th>
                                        <th>ID User</th>
                                        <th>Nama User</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        @for ($i = 1; $i <= 10; $i++)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>Dummy</td>
                                                <td>Dummy</td>
                                                <td>Dummy</td>
                                                <td>
                                                    <div class="d-flex justify-content-start gap-1">
                                                        <button type="button" class="btn rounded-pill btn-icon btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#detailModal">
                                                            <span class="tf-icons bx bx-list-check" data-bs-toggle="tooltip" data-bs-offset="0,9" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-list-check bx-xs' ></i> <span>Detail</span>"></span>
                                                        </button>
                                                        <button type="button" class="btn rounded-pill btn-icon btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal">
                                                            <span class="tf-icons bx bx-edit" data-bs-toggle="tooltip" data-bs-offset="0,9" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-edit bx-xs' ></i> <span>Ubah</span>"></span>
                                                        </button>
                                                        <button type="button" class="btn rounded-pill btn-icon btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                            <span class="tf-icons bx bx-trash" data-bs-toggle="tooltip" data-bs-offset="0,9" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-trash bx-xs' ></i> <span>Hapus</span>"></span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                            <!-- /Account -->
                        </div>
                    </div>
                </div>
            {{-- /Content --}}
        </div>
        <!-- / Content -->
        {{-- Modal --}}
            {{-- addModal --}}
                <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel3">Tambah User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Masukan nama user" aria-describedby="floatingInputHelp" />
                                            <label for="floatingInput">Nama User</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-md-12">
                                        <label for="defaultSelect" class="form-label">Jabatan</label>
                                        <select id="defaultSelect" class="form-select">
                                            <option value="">Pilih Jabatan</option>
                                            <option value="1">Administrator</option>
                                            <option value="2">Kasir</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col my-3">
                                        <label for="" class="form-label">Telepon User</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">+62</span>
                                            <input type="text" class="form-control" placeholder="822-9531-1234" aria-label="Amount (to the nearest rupiah)" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col my-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat Supplier</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Batal
                                </button>
                                <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- /addModal --}}
            {{-- detailModal --}}
                <div class="modal fade" id="detailModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel3">Detail User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Masukan nama user" aria-describedby="floatingInputHelp" disabled/>
                                            <label for="floatingInput">Nama User</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-md-12">
                                        <label for="defaultSelect" class="form-label">Jabatan</label>
                                        <select id="defaultSelect" class="form-select" disabled>
                                            <option value="">Pilih Jabatan</option>
                                            <option value="1">Administrator</option>
                                            <option value="2">Kasir</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col my-3">
                                        <label for="" class="form-label">Telepon User</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">+62</span>
                                            <input type="text" class="form-control" placeholder="822-9531-1234" aria-label="Amount (to the nearest rupiah)" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col my-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat Supplier</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Batal
                                </button>
                                <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- /detailModal --}}
            {{-- editModal --}}
                <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel3">Ubah User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Masukan nama user" aria-describedby="floatingInputHelp" />
                                            <label for="floatingInput">Nama User</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-md-12">
                                        <label for="defaultSelect" class="form-label">Jabatan</label>
                                        <select id="defaultSelect" class="form-select">
                                            <option value="">Pilih Jabatan</option>
                                            <option value="1">Administrator</option>
                                            <option value="2">Kasir</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col my-3">
                                        <label for="" class="form-label">Telepon User</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">+62</span>
                                            <input type="text" class="form-control" placeholder="822-9531-1234" aria-label="Amount (to the nearest rupiah)" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col my-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat Supplier</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- /editModal --}}
            {{-- deleteModal --}}
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel3">Hapus User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin ingin menghapus data : <strong>Dummy</strong>  ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- /deleteModal --}}
        {{-- /Modal --}}
        <div class="content-backdrop fade"></div>
    </div>
@endsection
@push('scripts')
    <!-- JS Libraies -->
    <script>
        $(document).ready(function () {
            // Data Table
                $('#dtindex_produk').DataTable({
                    "autoWidth":false,
                    "columnDefs": [
                        { "width": "5%", "targets": 0 }
                    ],
                    language: {
                        "url": "{{ url('json/datatable-id.json') }}",
                    }
                });
            // End Data Table
        });

        // Function Spinner
            window.addEventListener("load", () => {
                const loader = document.querySelector(".loader");
                loader.classList.add("visually-hidden");

                loader.addEventListener("transitionend", () => {
                    document.body.removeChild("loader");
                })
            })
        // End Function Spinner
    </script>
    <!-- Page Specific JS File -->
@endpush