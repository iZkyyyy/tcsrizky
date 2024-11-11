@extends('layout.instruktur')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">UPLOAD MATERI</div>
                <div class="card-body">
                    <form class="row g-3" action="{{ route('materis.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="materi" class="form-label">POST MATERI</label>
                        <input type="file" id="materi" name="materi" placeholder="INPUT MATERI DISINI" class="form-control" value="{{old('materi')}}">
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