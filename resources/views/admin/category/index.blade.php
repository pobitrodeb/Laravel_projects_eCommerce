@extends('admin.master')

@section('title')
    <?php
        $pageTitle = "Category";
        $role  = "Admin";
    ?>
@endsection

@section('main-content')
<!--start content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">{{ $role }}</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle }}</li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
          <a href="{{ route('category.create') }}" type="button" class="btn btn-primary">Add {{ $pageTitle }}</a>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Manage {{ $pageTitle }}</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Category Name</th>
                            <th>Stock Product</th>
                            <th>Stock Amount</th>
                            <th>Image</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SL</td>
                            <td>Category Name</td>
                            <td>Total Amount</td>
                            <td>Image</td>
                            <td>2011/04/25</td>
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                  <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                  <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                  <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Total</th>
                            <th>152 (pc)</th>
                            <th>158704.00 ৳</th>
                            <th colspan="2"  class="bg-primary">
                                <a href="" class="text-white text-center"> Download Report </a>
                            </th>

                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
  </main>
<!--end page main-->
@endsection


@section('script')
 <!-- Bootstrap bundle JS -->
 <script src="{{ asset('/') }}admin/assets/js/bootstrap.bundle.min.js"></script>
 <!--plugins-->
 <script src="{{ asset('/') }}admin/assets/js/jquery.min.js"></script>
 <script src="{{ asset('/') }}admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
 <script src="{{ asset('/') }}admin/assets/plugins/metismenu/js/metisMenu.min.js"></script>
 <script src="{{ asset('/') }}admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
 <script src="{{ asset('/') }}admin/assets/js/pace.min.js"></script>
 <script src="{{ asset('/') }}admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
 <script src="{{ asset('/') }}admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
 <script src="{{ asset('/') }}admin/assets/js/table-datatable.js"></script>

 <!--app-->
 <script src="{{ asset('/') }}admin/assets/js/app.js"></script>
@endsection

