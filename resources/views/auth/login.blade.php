@extends('layouts.app')

@section('content')
<!-- main -->
<section class="bg-image bg-image-sm">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-4 mx-auto">
                <div class="card m-b-0">
                    <div class="card-header">
                        <h4 class="card-title"><i class="fa fa-sign-in"></i> Login to your account</h4>
                    </div>
                    <div class="card-block">
                        <login-form></login-form>
                        <div class="divider">
                            <span>Don't have an account?</span>
                        </div>
                        <a class="btn btn-secondary btn-block" href="{{route('register')}}" role="button">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /main -->
@endsection
