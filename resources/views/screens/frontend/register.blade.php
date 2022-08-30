@extends('layouts.frontend.auth')

@section('title', 'Đăng ký')

@section('content')
    <!-- Content-->
        
        <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
            {{-- @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif --}}
            <form action="{{route('auth.processRegister')}}" method="POST" class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" enctype="multipart/form-data">
                @csrf 
                @method('POST')
                <h1 class="lg:text-2xl  text-xl font-semibold mb-6"> Register </h1>
                
                {{-- <div class="grid lg:grid-cols-2 gap-3">
                    <div>
                        <label class="mb-0" for="first-name"> First Name </label>
                        <input type="text" placeholder="Your Name"  id="first-name" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    </div>
                    <div>
                        <label class="mb-0" for="last-name"> Last  Name </label>
                        <input type="text" placeholder="Last  Name"  id="last-name" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    </div>
                </div> --}}
                <div>
                    <label class="mb-0 " for="username"> Username </label>
                    <input  type="text" name="name" placeholder="Username" id="username" value="{{old('name')}}" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    @error('name')
                        <div id="emailHelp" style="color: red" class="form-text">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label class="mb-0" for="email"> Email Address </label>
                    <input type="email" name="email" placeholder="Info@example.com" value="{{old('email')}}" id="email" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    @error('email')
                        <div id="emailHelp" style="color: red" class="form-text">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label class="mb-0" for="password"> Password </label>
                    <input type="password" name="password" placeholder="******" id="password" value="{{old('password')}}" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    @error('password')
                        <div id="emailHelp" style="color: red" class="form-text">{{$message}}</div>
                    @enderror
                </div>

                <div>
                    <label class="mb-0" for="password"> Password Confirm </label>
                    <input type="password" name="password_confirm" placeholder="******" id="password" value="{{old('password_confirm')}}" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    @error('password_confirm')
                        <div id="emailHelp" style="color: red" class="form-text">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label class="mb-0" for="password"> Avatar </label>
                    <input type="file" name="avatar"  class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    @error('avatar')
                        <div id="emailHelp" style="color: red" class="form-text">{{$message}}</div>
                    @enderror
                </div>
                {{-- <div class="checkbox">
                    <input type="checkbox" id="chekcbox1" checked="">
                    <label for="chekcbox1"><span class="checkbox-icon"></span> I agree to the <a href="pages-terms.html" target="_blank" class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
                    </label>
                </div> --}}
                
                <div>
                    <button type="submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                        Get Started</button>
                </div>
            </form>


        </div>
    </div>
@endsection