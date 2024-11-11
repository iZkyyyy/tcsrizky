@extends('layout.instruktur')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDIT TUGAS</div>
                <div class="card-body">
                    <form class="row g-3" action="/update/{{$kumpul->$id}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                    @csrf
                    <div>
                        <label for="tugas" class="form-label">EDIT TUGAS</label>
                        <input type="file" id="tugas" name="tugas" placeholder="KUMPUL TUGAS" class="form-control" value="{{$kumpul->tugas}}">
                        <div style="color: red">
                            @error('tugas')
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
