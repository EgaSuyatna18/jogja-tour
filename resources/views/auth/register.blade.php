@extends('layouts.AuthMaster')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
            <div class="card-body">
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nama_lengkap" name="name" type="text" placeholder="Nama Lengkap" />
                        <label for="nama_lengkap">Nama Lengkap</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" />
                        <label for="inputEmail">Email address</label>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Create a password" />
                                <label for="inputPassword">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputPasswordConfirm" name="password_confirmation" type="password" placeholder="Confirm password" />
                                <label for="inputPasswordConfirm">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="role" class="form-control">
                            <option value="tourist">Tourist</option>
                            <option value="tour-guide">Tour Guide</option>
                        </select>
                        <label for="nama_lengkap">Daftar Sebagai</label>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Daftar</button></div>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="/login">Sudah Punya Akun?</a></div>
            </div>
        </div>
    </div>
</div>
@endsection