@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
	<div class="card card-blue">
              <div class="card-header">
                <h3 class="card-title">Create Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="{{url('/pertanyaan')}}" method="POST">
                	@csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" placeholder="judul pertanyaan" name="judul-pertanyaan">
                        @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Isi Pertanyaan</label>
                        <textarea class="form-control" rows="3" placeholder="isi Pertanyaan" name="isi-pertanyaan"></textarea>
                        @error('isi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
	                  <button type="submit" class="btn btn-primary">Submit</button>
	               </div>
                 
                </form>
              </div>
              <!-- /.card-body -->
    </div>
</div>
@endsection