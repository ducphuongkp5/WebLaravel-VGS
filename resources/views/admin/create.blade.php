@extends('layout')

<h1 style="padding-top: 117px;">Create</h1>

@if(session('msg')){
    <div class="alert alert-success">{{session('msg')}}</div>
}
@endif

<!-- @if($errors->any())
    <div class="alert alert-danger">Du lieu khong hop le</div>
@endif -->
<form action="" method="GET">
    <div class="mb-3">
        <label for="">Ten truyen</label>
        <input type="text" class="form-control" name="tentruyen" placeholder="Ten truyen">
    </div>
    <!-- @error('tentruyen')
        <span></span>
    @enderror -->
    <div class="mb-3">
        <label for="">Anh truyen</label>
        <input type="file" class="form-control" name="anhtruyen" placeholder="Anh truyen">
    </div>
    <div class="mb-3">
        <label for="">The loai truyen</label>
        <input type="text" class="form-control" name="theloai" placeholder="The loai truyen">
    </div>
    <div class="mb-3">
        <label for="">Gioi thieu truyen</label>
        <input type="text" class="form-control" name="gioithieu" placeholder="Gioi thieu">
    </div>
    <div class="mb-3">
        <label for="">Tac gia</label>
        <input type="text" class="form-control" name="tacgia" placeholder="Tac gia">
    </div>
    <div class="mb-3">
        <label for="">Ten khac</label>
        <input type="text" class="form-control" name="tenkhac" placeholder="Ten khac">
    </div>

    <button type="submit" class="btn btn-primary">Them</button>
    <a href="{{route('admin.index')}}">Quay lai</a>
    
</form>