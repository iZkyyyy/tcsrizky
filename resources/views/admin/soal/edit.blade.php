@extends('layout.instruktur')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDIT MATERI</div>
                <div class="card-body">
                    <form class="row g-3" action="/soal/update/{{$Soalsiswa->id}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div>
                        <label for="soal" class="form-label">POST MATERI</label>
                        <input type="file" id="soal" name="soal" class="form-control" value="{{$Soalsiswa->soal}}">
                        <div style="color: red">
                            @error('soal')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-dark">Save</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
