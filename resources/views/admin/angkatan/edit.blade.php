@extends('layout.app')
@section('title')
 Angkatan
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Edit ANGKATAN</div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('angkatans.update', $Angkatan->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="angkatan" class="form-label">ANGKATAN</label>
                        <input type="string" id="angkatan" name="angkatan" placeholder="INPUT angkatan DISINI"
                            class="form-control" value="{{$Angkatan->angkatan}}">
                        <div style="color: red">
                            @error('angkatan')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="kodekelas" class="form-label">Kode Kelas</label>
                        <input type="text" id="kodekelas" name="kodekelas" placeholder="INPUT kodekelas DISINI"
                            class="form-control" value="{{ $Angkatan->kodekelas }}">
                        <div style="color: red">
                            @error('kodekelas')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="mbdate" class="form-label">Mulai Belajar</label>
                        <input type="date" id="mbdate" name="mbdate" placeholder="INPUT mbdate DISINI"
                            class="form-control" value="{{ $Angkatan->mbdate }}">
                        <div style="color: red">
                            @error('mbdate')
                                {{ $message }}
                            @enderror
                        </div>
                        <div>
                            <label for="periode" class="form-label">Periode</label>
                            <input type="text" id="periode" name="periode" placeholder="INPUT periode DISINI"
                                class="form-control" value="{{ $Angkatan->periode }}">
                            <div style="color: red">
                                @error('periode')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-dark">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
