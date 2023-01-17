@extends('layouts.admin')

@section('content')
    <main id="main" class="main">

      <div class="row">
        <div class="col-md-12">

            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <form action="{{ url('/admin/settings') }}" method="POST">

                @csrf

                <div class="card mb-3">
                    <div class="card-header bg-primary">
                        <h3 class="text-white mb-0">Website</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 my-3 input-group">
                                <span class="input-group-text">Website name</span>
                                <input type="text" name="website_name" value="{{  }}" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3 input-group">
                                <span class="input-group-text">Website url</span>
                                <input type="text" name="website_url" class="form-control">
                            </div>

                            <div class="col-md-12 mb-3 input-group">
                                <span class="input-group-text">Page title</span>
                                <input type="text" name="page_title" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3 input-group">
                                <textarea name="meta_keyvords" rows="3" class="form-control" placeholder="Meta keyvord"></textarea>
                            </div>

                            <div class="col-md-6 mb-3 input-group">
                                <textarea name="meta_description" rows="3" class="form-control" placeholder="Meta description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-primary">
                        <h3 class="text-white mb-0">Website Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12 my-3 input-group">
                                <textarea name="address" rows="3" class="form-control" placeholder="Address"></textarea>
                            </div>

                            <div class="col-md-6 mb-3 input-group">
                                <span class="input-group-text">Phone 1</span>
                                <input type="text" name="phone1" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3 input-group">
                                <span class="input-group-text">Phone No 2</span>
                                <input type="text" name="phone2" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3 input-group">
                                <span class="input-group-text">Email 1</span>
                                <input type="text" name="email1" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3 input-group">
                                <span class="input-group-text">Email Id 2</span>
                                <input type="text" name="email2" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-primary">
                        <h3 class="text-white mb-0">Website Social Media</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6 my-3 input-group">
                                <span class="input-group-text"><i class="bi bi-facebook fs-5"></i></span>
                                <input type="text" name="facebook" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3 input-group">
                                <span class="input-group-text"><i class="bi bi-telegram fs-5"></i></span>
                                <input type="text" name="telegram" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3 input-group">
                                <span class="input-group-text"><i class="bi bi-instagram fs-5"></i></span>
                                <input type="text" name="instagram" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3 input-group">
                                <span class="input-group-text"><i class="bi bi-youtube fs-5"></i></span>
                                <input type="text" name="youtube" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-start">
                    <button type="submit" class="btn btn-primary text-white">Save settings</button>
                </div>

            </form>

        </div>
      </div>

    </main>
@endsection
