@extends('layout.instruktur')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">UPLOAD MATERI</div>
                <div class="card-body">
                    <form class="row g-3" action="{{ route('dmateris.update', $DataMateri->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div>
                        <label for="file" class="form-label">File</label>
                        <input type="file" id="file" name="file" placeholder="INPUT MATERI DISINI" class="form-control" value="{{$DataMateri->file}}">
                        <div style="color: red">
                            @error('file')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="namamateri" class="form-label">Nama Materi</label>
                        <input type="text" id="namamateri" name="namamateri" placeholder="INPUT namamateri DISINI" class="form-control" value="{{$DataMateri->namamateri}}">
                        <div style="color: red">
                            @error('namamateri')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" id="deskripsi" name="deskripsi" placeholder="INPUT DESKRIPSI DISINI" class="form-control" value="{{$DataMateri->deskripsi}}">
                        <div style="color: red">
                            @error('deskripsi')
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
