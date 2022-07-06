@extends('main')


@section('content')
        <div class="card p-3 mt-3 shadow">
            <div class="card-body p-3">
              <div class="card-title ">
                <div class="row justify-content-between">
                  <div class="col-md-4 col-sm4 col-4">
                     <h5 class="mt-5"><b>List Data Laptop</b></h5>
                  </div>
                <div class="alert col-md-5 col-sm-5 col-5 text-center">
                    <!-- set Alert -->
                </div>
              </div>
                  <hr>
              </div>
              <div class="container mt-4 px-2">
                  <div class="table-responsive">
                      <table id ="table-data" class="table table-responsive table-borderless table-hover table-striped">
                          <thead>
                              <tr class="bg-light">
                                  <th scope="col" width="10%">No</th>
                                  <th scope="col" width="30%">Merek Laptop</th>
                                  <th scope="col" width="20%%">Seri Laptop</th>
                                  <th scope="col" width="30%">Tahun Produksi</th>
                                  <th scope="col" width="20%">Aksi</th>
                              </tr>
                          </thead>
                          <tbody id="isi">
                              @include('ajax/setup')
                              
                          
                          </tbody>
                      </table>
                      @include('partials/modal')
                  </div>
              </div>
            </div>
          </div>
@endsection






