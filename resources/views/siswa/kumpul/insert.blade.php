@extends('layout.instruktur')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">KUMPUL TUGAS</div>
                <div class="card-body">
                    <form class="row g-3" action="{{ route('kumpuls.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="tugas" class="form-label">KUMPUL TUGAS</label>
                        <input type="file" id="tugas" name="tugas" placeholder="KUMPUL TUGAS" class="form-control" value="{{old('tugas')}}">
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
