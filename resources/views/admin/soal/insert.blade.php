@extends('layout.instruktur')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Tambah Kisi Kisi</div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('soals.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="materi_siswa_id" class="form-label">Materi</label>
                        <select id="materi_siswa_id" name="materi_siswa_id" class="form-control" value="{{old('materi_siswa_id')}}">
                         @foreach ($DataMateri as $DM)
                         <option value="0">Pilih Materi</option>
                         <option value="{{$DM->id}}">{{$DM->namamateri}}</option>
                         @endforeach
                        </select>
                        <div style="color:red">
                            @error('materi_siswa_id')
                              {{$message}}
                            @enderror
                        </div>
                      </div>
                        <div>
                            <label for="kisikisi" class="form-label">Kisi Kisi</label>
                                <textarea name="kisikisi"  id="kisikisi" cols="30" rows="10" class="form-control" value="{{ old('kisikisi') }}"></textarea>
                            <div style="color: red">
                                @error('kisikisi')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-dark">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
