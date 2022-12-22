@extends('core.app')
@section('title', 'Master Data')
@section('title2', 'Produk')
@section('product', 'active')
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
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </nav>
            {{-- /Breadcrumb --}}
            {{-- Content --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <h5 class="card-header">Daftar Produk</h5>
                            <!-- Account -->
                            <div class="card-body">
                                <div class="d-flex justify-content-end align-items-end align-items-sm-center gap-4">
                                    <div class="button-wrapper">
                                        <button type="button" class="btn btn-sm rounded-pill btn-outline-success" data-bs-toggle="modal" data-bs-target="#addModal">
                                            Tambah Produk<i class="bx bx-plus-circle ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <table class="table table-striped w-100" id="dtindex_produk">
                                    <thead>
                                        <th style="width: 5%">No</th>
                                        <th>Kode Produk</th>
                                        <th>Kategori</th>
                                        <th>Stok</th>
                                        <th>Terjual</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                        </tr>
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
        <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Tambah Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                            <label for="nameLarge" class="form-label">Name</label>
                            <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name" />
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                            <label for="emailLarge" class="form-label">Email</label>
                            <input type="text" id="emailLarge" class="form-control" placeholder="xxxx@xxx.xx" />
                            </div>
                            <div class="col mb-0">
                            <label for="dobLarge" class="form-label">DOB</label>
                            <input type="text" id="dobLarge" class="form-control" placeholder="DD / MM / YY" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="button" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- /Modal --}}
        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
            ©
            <script>
                document.write(new Date().getFullYear());
            </script>
            , made with ❤️ by
            <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
            </div>
            <div>
            <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
            <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

            <a
                href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank"
                class="footer-link me-4"
                >Documentation</a
            >

            <a
                href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                target="_blank"
                class="footer-link me-4"
                >Support</a
            >
            </div>
        </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
@endsection
@push('scripts')
    <!-- JS Libraies -->
    <script>
        $(document).ready(function () {
            $('#dtindex_produk').DataTable({
            "autoWidth":false,
            "columnDefs": [
                { "width": "5%", "targets": 0 }
            ],
            language: {
                "url": "{{ url('json/datatable-id.json') }}",
            }
        });
        });
    </script>
    <!-- Page Specific JS File -->
@endpush