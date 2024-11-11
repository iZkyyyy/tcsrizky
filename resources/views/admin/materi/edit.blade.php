@extends('layout.instruktur')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDIT MATERI</div>
                <div class="card-body">
                    <form class="row g-3" action="/materi/update/{{$materi->id}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                    @csrf
                    <div>
                        <label for="materi" class="form-label">POST MATERI</label>
                        <input type="file" id="materi" name="materi" class="form-control" value="{{$materi->word}}">
                        <div style="color: red">
                            @error('materi')
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
