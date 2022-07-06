@extends('main')

@section('content')
<div class="card mt-5 shadow">
            <div class="card-body">
                
                        <div class="card-title ">
                                <h5><b>Create Data Laptop</b></h5>
                                <hr>
                        </div>
                       
                        <div class="form-group mt-2">
                            <p>Merek Laptop</p>
                             @csrf
                            <input type="text" class="form-control" id ="merek_laptop" name ="merek_laptop" placeholder="Masukan merek laptop . . . ." required>
                        </div>
                        <div class="form-group mt-2">
                            <p>Seri Laptop</p>
                             @csrf
                            <input type="text" class="form-control" id ="seri_laptop" name ="seri_laptop" placeholder="Masukan seri laptop . . . ." required>
                        </div>
                        <div class="form-group mt-2">
                            <p>Tahun Produksi</p>
                             @csrf
                            <input type="text" class="form-control" id ="tahun" name ="tahun" placeholder="Masukan tahun produksi . . . ." required>
                        </div>

                        <div class="text-center mt-5">
                            <Button id ="submit" name="submit" class="btn" style="background-color: #00dbde; color: aliceblue;" onclick="return confirm('Are you sure ?')">Save</Button>
                        </div>
                        @include('ajax/setup')
                        
                    </div>
                   
            </div>
          </div>
@endsection