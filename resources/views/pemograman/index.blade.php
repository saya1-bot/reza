   @extends('layout.master')
   @section('content')
       

        <div class="container"> 
            <a class="btn btn-primary" href="/pemograman/create">Add data</a>
            <table  class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>MATA KULIAH</th>
                    <th>JUMLAH SKS</th>
                    <th>DOSEN PENGAMPU</th>
                    <th>AKSI</th>
                </tr>
                @foreach($pemograman as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->mata_kuliah}}</td>
                    <td>{{$p->jumlah_sks}}</td>
                    <td>{{$p->dosen_pengampu}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a  class="btn btn-link" href="/pemograman/{{$p->id}}/edit">Edit</a>
                        <form action="/pemograman/{{$p->id}}" method="POST">
                            @csrf
                            @method('delete')
                        <input class="btn btn-danger"  type="submit" value="delete">
                        </form>
                        </div>
                    </td>
                </tr>
                @endforeach
        </table>
        </div>
    @endsection

       
   
   
    