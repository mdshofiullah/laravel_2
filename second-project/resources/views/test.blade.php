@extends('master')

@section('title')
    Home Page
@endsection

@section('body')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-warning font-weight-bold text-white text-center">Full Name</div>
                        <div class="card-body">
                            <form action="{{ route('full-name') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="first_name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="last_name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="" value="{{ isset($result) ? $result : '' }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-block btn-outline-success" name="" value="Submit" />
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
