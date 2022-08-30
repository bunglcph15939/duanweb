@extends('layouts.frontend.auth')

@section('title', 'Đăng nhập')

@section('content')
    <!-- Content-->
    <div>
        
        <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if (session('msg'))
            <div class="alert alert-danger" style="color: red">
                {{ session('msg') }}
            </div>
        @endif
            <form action="" method="POST" class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md">
                @csrf
                @method('POST')
                <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Email </h1>
                <div>
                    <label class="mb-0" for="email"> Email Address </label>
                    <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Info@example.com" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full border-transparent">
                    @error('email')
                        <div id="emailHelp" style="color: red" class="form-text">{{$message}}</div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-600 font-semibold p-2.5 mt-5 rounded-md text-center text-white w-full">
                        Get</button>
                </div>

            
                <div class="flex items-center space-x-2 justify-center">
                    <a href="#">
                        <ion-icon name="logo-facebook" class="p-2 rounded-full text-2xl bg-gray-100 text-blue-600"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-twitter" class="p-2 rounded-full text-2xl bg-gray-100 text-indigo-500"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-github" class="p-2 rounded-full text-2xl bg-gray-100"></ion-icon>
                    </a>
                </div>

            </form>

        </div>
    
      </div>
@endsection