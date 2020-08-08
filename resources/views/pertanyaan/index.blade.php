@extends('adminlte.master')

@section('content')

<div class="row">
          <div class="col-12 mt-3 ml-3">
            <div class="card" style="width: 97%;">

              <div class="card-header">
                <h3 class="card-title">ISI TABEL PERTANYAAN</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul</th>
                      <th>Pertanyaan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($questions as $key=> $question)
                    	<tr>
                    		<td>{{$question->id}}</td>
                    		<td>{{$question->judul}}</td>
                    		<td>{{$question->isi}}</td>
                    		<td style="display: flex;">
                    			<a href="/blog/public/pertanyaan/{{$question->id}}" class="btn btn-info btn-sm">Show</a>
                    			<a href="/blog/public/pertanyaan/{{$question->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                          <form action="/blog/public/pertanyaan/{{$question->id}}" method="post"> 
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" name="delete" class="btn btn-danger btn-sm"></form>
                    		</td>
                    	</tr>
                    	@empty
                    	<tr>
                    		<td colspan="4" align="center">No Post</td>
                    	</tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection