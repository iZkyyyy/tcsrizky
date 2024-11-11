@extends('layout.instruktur')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">UPLOAD SOAL</div>
                <div class="card-body">
                    <form class="row g-3" action="{{ route('soals.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="soal" class="form-label">POST SOAL</label>
                        <input type="file" id="soal" name="soal" placeholder="INPUT soal DISINI" class="form-control" value="{{old('soal')}}">
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
