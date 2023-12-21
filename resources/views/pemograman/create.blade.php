@extends('layout.master')
@section('content')

   
    <div class="container">
        <h1>Create Data</h1>
        <form action="/pemograman/store" method="POST">
          @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mata kuliah</label>
                <input type="text" name="mata_kuliah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jumlah sks</label>
                <input type="text" name="jumlah_sks" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Dosen pengampu</label>
                <input type="text" name="dosen_pengampu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

           
            <input type="submit" name="submit" class="btn btn-success"  value="save">
        </form>
    </div>
@endsection
