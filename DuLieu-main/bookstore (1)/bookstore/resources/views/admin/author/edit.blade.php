@extends('admin.layout.master')
@section('title','Edit')

@section('body')
<div class="app-main__inner">

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Author
                    <div class="page-title-subheading">
                        View, create, update, delete and manage.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="/admin/author/{{$author->id}}">
                        @csrf
                        @method('PUT')
                        @include('admin.components.notification')
                        <div class="position-relative row form-group">
                            <label for="image"
                                   class="col-md-3 text-md-right col-form-label">Avatar</label>
                            <div class="col-md-9 col-xl-8">
                                <img style="height: 200px; cursor: pointer;"
                                     class="thumbnail rounded-circle" data-toggle="tooltip"
                                     title="Click to change the image" data-placement="bottom"
                                     src="front/imgs/authors/{{$author->avatar ?? 'default-avatar.png'}}" alt="Avatar">
                                <input name="image" type="file" onchange="changeImg(this)"
                                       class="image form-control-file" style="display: none;" value="">
                                <input type="hidden" name="image_old" value="{{$author->avatar}}">
                                <small class="form-text text-muted">
                                    Click on the image to change (required)
                                </small>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="name" class="col-md-3 text-md-right col-form-label">Name</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="name" id="name" placeholder="Name" type="text"
                                       class="form-control" value="{{$author->name}}">
                            </div>
                        </div>
                        <div class="position-relative row form-group mb-1">
                            <div class="col-md-9 col-xl-8 offset-md-2">
                                <a href="./admin/author/{{$author->id}}" class="border-0 btn btn-outline-danger mr-1">
                                                    <span class="btn-icon-wrapper pr-1 opacity-8">
                                                        <i class="fa fa-times fa-w-20"></i>
                                                    </span>
                                    <span>Cancel</span>
                                </a>

                                <button type="submit"
                                        class="btn-shadow btn-hover-shine btn btn-primary">
                                                    <span class="btn-icon-wrapper pr-2 opacity-8">
                                                        <i class="fa fa-download fa-w-20"></i>
                                                    </span>
                                    <span>Save</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
