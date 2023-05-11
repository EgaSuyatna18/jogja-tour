@extends('layouts.DashboardMaster')
@section('content')

<link rel="stylesheet" type="text/css" href="/assets/trix-editor/trix.css">
<script type="text/javascript" src="/assets/trix-editor/trix.umd.min.js"></script>
<style>
    trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
    }
</style>

    <div class="container border border-1 shadow shadow-lg rounded p-4">
        <form action="/artikel" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Foto</label>
                <input type="file" class="form-control" name="photo">
            </div>
            <div class="mb-3">
                <label>Judul</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <input id="body" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
            </div>
            <div class="mb-3 text-end">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>

<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection