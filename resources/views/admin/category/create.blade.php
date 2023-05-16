@extends('admin.master')
category add
<?php
    $pageTitle = 'Category Add';
    $role = 'Admin';
?>
@section('title')
    category add
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
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-xl-6 mx-auto">

              <div class="card">
      <div class="card-body">
        <div class="border p-3 rounded">
        <h6 class="mb-0 text-uppercase">Basic Form</h6>
        <hr/>
        <form class="row g-3">
          <div class="col-12">
            <label class="form-label">Email ID</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Password</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-6">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Check me out
              </label>
            </div>
          </div>
          <div class="col-6 text-end">
            <a href="javascript:;">Forgot Password?</a>
          </div>
          <div class="col-12">
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </div>
        </form>
      </div>
      </div>
    </div>


    <div class="card">
      <div class="card-body">
        <div class="border p-3 rounded">
        <h6 class="mb-0 text-uppercase">Login form</h6>
         <hr/>
        <form class="row g-3">
          <div class="col-12">
            <label class="form-label">Email ID</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Password</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-6">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck2">
              <label class="form-check-label" for="gridCheck2">
                Check me out
              </label>
            </div>
          </div>
          <div class="col-6 text-end">
            <a href="javascript:;">Forgot Password?</a>
          </div>
          <div class="col-12">
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </div>
          <div class="col-12 text-center">
            <p class="mb-0">Not a member? <a href="javascript:;">Register</a></p>
          </div>
          <div class="col-12 text-center">
            <p class="mb-0">or sign up with:</p>
          </div>
          <div class="col-12 text-center">
            <div class="error-social">
              <a href="javascript:;" class="bg-facebook"><i class="bx bxl-facebook"></i></a>
              <a href="javascript:;" class="bg-twitter"><i class="bx bxl-twitter"></i></a>
              <a href="javascript:;" class="bg-google"><i class="bx bxl-google"></i></a>
              <a href="javascript:;" class="bg-linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </form>
      </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="border p-3 rounded">
        <h6 class="mb-0 text-uppercase">Register form</h6>
         <hr/>
        <form class="row g-3">
          <div class="col-6">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-6">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Email ID</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Password</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-6">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck3-a" checked>
              <label class="form-check-label" for="gridCheck3-a">
                Subscribe to our newsletter
              </label>
            </div>
          </div>
          <div class="col-6 text-end">
            <a href="javascript:;">Forgot Password?</a>
          </div>
          <div class="col-12">
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </div>
          <div class="col-12 text-center">
            <p class="mb-0">Not a member? <a href="javascript:;">Register</a></p>
          </div>
          <div class="col-12 text-center">
            <p class="mb-0">or sign up with:</p>
          </div>
          <div class="col-12 text-center">
            <div class="error-social">
              <a href="javascript:;" class="bg-facebook"><i class="bx bxl-facebook"></i></a>
              <a href="javascript:;" class="bg-twitter"><i class="bx bxl-twitter"></i></a>
              <a href="javascript:;" class="bg-google"><i class="bx bxl-google"></i></a>
              <a href="javascript:;" class="bg-linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </form>
      </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="border p-3 rounded">
        <h6 class="mb-0 text-uppercase">Contact Form</h6>
        <hr/>
        <form class="row g-3">
          <div class="col-12">
            <label class="form-label">Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Email ID</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Message</label>
            <textarea class="form-control" rows="4" cols="4"></textarea>
          </div>
          <div class="col-12">
            <div class="form-check d-flex justify-content-center gap-2">
              <input class="form-check-input" type="checkbox" id="gridCheck3-b" checked>
              <label class="form-check-label" for="gridCheck3-b">
                Subscribe to our newsletter
              </label>
            </div>
          </div>
          <div class="col-12">
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </div>
        </form>
      </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="border p-3 rounded">
        <h6 class="mb-0 text-uppercase">Checkout Form</h6>
        <hr/>
        <form class="row g-3">
          <div class="col-12">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Company Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Address</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Email</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Additional Information</label>
            <textarea class="form-control" rows="4" cols="4"></textarea>
          </div>
          <div class="col-12">
            <div class="form-check d-flex justify-content-center gap-2">
              <input class="form-check-input" type="checkbox" id="gridCheck3-c" checked>
              <label class="form-check-label" for="gridCheck3-c">
                Create an account?
              </label>
            </div>
          </div>
          <div class="col-12">
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Place Order</button>
            </div>
          </div>
        </form>
      </div>
      </div>
    </div>

            </div>
        </div>
        <!--end row-->


        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Horizontal Form</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">User Registration</h5>
                            </div>
                            <hr/>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Your Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Phone No</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPhoneNo2" placeholder="Phone No">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmailAddress2" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Choose Password</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputChoosePassword2" placeholder="Choose Password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputConfirmPassword2" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputAddress4" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="inputAddress4" rows="3" placeholder="Address"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputAddress4" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck4">
                                        <label class="form-check-label" for="gridCheck4">Check me out</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </main>
<!--end page main-->
@endsection
