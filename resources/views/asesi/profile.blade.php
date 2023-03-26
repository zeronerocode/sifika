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
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control form-control-border"
                                                    id="inputName" placeholder="{{ $profile->name }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jeniskelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="{{ $profile->jenis_kelamin }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-3 col-form-label">Nomor Hp</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control form-control-border"
                                                    id="inputEmail" placeholder="{{ $profile->hp }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-3 col-form-label">Tempat / Tanggal
                                                Lahir</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control form-control-border"
                                                    id="inputName2"
                                                    placeholder="{{ $profile->tempat_lahir }} / {{ $profile->tanggal_lahir }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <textarea name="" id="" class="form-control" cols="3" rows="5" placeholder="{{$profile->alamat}}" disabled></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputJurusan" class="col-sm-3 col-form-label">Jurusan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control form-control-border" placeholder="{{$profile->jurusan}}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="skemaUji" class="col-sm-3 col-form-label">Skema Uji</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputJurusan"
                                                    name="skema_uji" placeholder="{{$profile->skema}}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-3 col-sm-10">
                                                <a href="{{route('asesi.edit.profile')}}" class="btn btn-success">Edit</a>
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
