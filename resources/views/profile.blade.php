@extends('layouts.app')
@section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-white rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <h4 class="fw-bold">My Profile</h4>
                    <div class="border-radius-sm">
                        <img class="img-fluid rounded-circle w-50"
                            src="{{ Vite::asset('resources/images/dina.jpeg') }}"alt="image">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName" class="form-label">First
                            Name</label>
                        <h5>Dina Avifa</h5>
                    </div>
                    <hr>

                    <div class="col-md-12 mb-3">
                        <label for="lastName" class="form-label">Last
                            Name</label>
                        <h5>Aulia</h5>
                    </div>
                    <hr>

                    <div class="col-md-12 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <h5>dinaviva19@gmail.com</h5>
                    </div>
                    <hr>

                    <div class="col-md-12 mb-3">
                        <label for="age" class="form-label">Age</label>
                        <h5>22</h5>
                    </div>
                    <hr>
                </div>

                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ url('/') }}" class="btn btn-outline-dark btn-lg mt-3">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
