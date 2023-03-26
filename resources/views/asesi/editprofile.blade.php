@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg"
                                alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                        <p class="text-muted text-center">{{ Auth::user()->nik }}</p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Nomor Hp</b> <a class="float-right">{{ Auth::user()->hp }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b> <a class="float-right">{{ Auth::user()->email }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Status</b> <a class="float-right">Kompeten</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal" method="POST" action="{{route('asesi.update.profile')}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" class="form-control" id="inputName"
                                                    placeholder="Name" value="{{$profile->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jeniskelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" {{ old('jenis_kelamin', $profile->jenis_kelamin) == 'Laki-Laki' ? 'selected' : '' }} value="Laki-Laki" name="jenis_kelamin">
                                                    <label class="form-check-label">Laki-Laki</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" {{ old('jenis_kelamin', $profile->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }} value="perempuan" type="radio" name="jenis_kelamin">
                                                    <label class="form-check-label">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-3 col-form-label">Nomor Hp</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="hp" class="form-control" id="inputEmail"
                                                    placeholder="Nomor Hp" value="{{$profile->hp}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="tempat_lahir" class="form-control" id="inputName2"
                                                    placeholder="Tempat Lahir" value="{{$profile->tempat_lahir}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-3 col-form-label">Tanggal
                                                Lahir</label>
                                            <div class="col-sm-9">
                                                <div class="input-group date" id="reservationdate"
                                                    data-target-input="nearest">
                                                    <input type="date" class="form-control datetimepicker-input"
                                                        name="tanggal_lahir" value="{{$profile->tanggal_lahir}}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <textarea name="alamat" id="" class="form-control" cols="3" value="{{$profile->alamat}}" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputJurusan" class="col-sm-3 col-form-label">Jurusan</label>
                                            <div class="col-sm-9">
                                                <select name="jurusan" id="jurusan" class="form-control">
                                                    <option value="" class="text-grey">Jurusan</option>
                                                    <option value="Teknik Kimia industri">1. Teknik Kimia industri</option>
                                                    <option value="Analis Pengujian Laboratorium">2. Analis Pengujian Laboratorium</option>
                                                    <option value="Teknik Mekanik Industri">3. Teknik Mekanik Industri</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="skemaUji" class="col-sm-3 col-form-label">Skema Uji</label>
                                            <div class="col-sm-9">
                                                <select name="skema" id="skema" class="form-control">
                                                    <option value="{{$profile->skema}}">Skema Uji</option>
                                                <option value="Pengoperasian Peralatan HE">1. Pengoperasian Peralatan HE</option>
                                                <option value="Pengoperasian Refining">2. Pengoperasian Refining</option>
                                                <option value="Pengoperasian Fraksionasi">3. Pengoperasian Fraksionasi</option>
                                                <option value="Pengoperasian Esterifikasi">4. Pengoperasian Esterifikasi</option>
                                                <option value="KKNI Level II pada Kompetensi Keahlian Kimia Industri">6. KKNI Level II pada Kompetensi Keahlian Kimia Industri</option>
                                                <option value="KKNI Level II pada Kompetensi Keahlian Analis Pengujian Laboratorium">6. KKNI Level II pada Kompetensi Keahlian Analis Pengujian Laboratorium</option>
                                                <option value="KKNI Level II pada Kompetensi Keahlian Teknik Mekanik Industri">7. KKNI Level II pada Kompetensi Keahlian Teknik Mekanik Industri</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-3 col-sm-10">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
