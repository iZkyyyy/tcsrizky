@extends('layout.instruktur')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Tambah Kisi Kisi</div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('soals.update', $Soalsiswa->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    @if ($Soalsiswa->materi_siswa_id != '0')
                                <div>
                                    <label for="materi_siswa_id" class="form-label">Materi</label>
                                    <select id="materi_siswa_id" name="materi_siswa_id" class="form-control"
                                        value="{{ old('materi_siswa_id') }}">
                                        @foreach ($DataMateri as $DM)
                                            <option value="{{ $DM->id }}">{{ $DM->namamateri }}</option>
                                        @endforeach
                                    </select>
                                    <div style="color:red">
                                        @error('materi_siswa_id')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            @else
                                <input type="hidden" name="materi_siswa_id" value="{{ $Soalsiswa->materi_siswa_id }}">
                            @endif
                            <div>
                                <label for="kisikisi" class="form-label">Kisi Kisi</label>
                                    <textarea name="kisikisi"  id="kisikisi" cols="30" rows="10" class="form-control" value="{{ old('kisikisi') }}"></textarea>
                                <div style="color: red">
                                    @error('kisikisi')
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
