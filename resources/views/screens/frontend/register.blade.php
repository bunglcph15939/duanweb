@extends('layouts.frontend.auth')

@section('title', 'Đăng ký')

@section('content')
    <!-- Content-->
    <div>
        <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
            <form class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md">
                <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Register </h1>

                <div class="grid lg:grid-cols-2 gap-3">
                    <div>
                        <label class="mb-0" for="first-name"> First Name </label>
                        <input type="text" placeholder="Your Name"  id="first-name" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    </div>
                    <div>
                        <label class="mb-0" for="last-name"> Last  Name </label>
                        <input type="text" placeholder="Last  Name"  id="last-name" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    </div>
                </div>
                <div>
                    <label class="mb-0" for="username"> Username </label>
                    <input type="text" placeholder="Username" id="username" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>
                <div>
                    <label class="mb-0" for="email"> Email Address </label>
                    <input type="email" placeholder="Info@example.com" id="email" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>
                <div>
                    <label class="mb-0" for="password"> Password </label>
                    <input type="password" placeholder="******" id="password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>
                <div class="grid lg:grid-cols-2 gap-3">
                    <div>
                        <label class="mb-0"> Gender </label>
                        <select class="selectpicker mt-2">
                            <option>Male</option>
                            <option>Female</option>
                        </select>

                    </div>
                    <div>
                        <label class="mb-0"> Phone: optional  </label>
                        <input type="text" placeholder="+543 5445 0543" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    </div>
                </div>

                <div class="checkbox">
                    <input type="checkbox" id="chekcbox1" checked="">
                    <label for="chekcbox1"><span class="checkbox-icon"></span> I agree to the <a href="pages-terms.html" target="_blank" class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
                    </label>
                </div>

                <div>
                    <button type="button" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                        Get Started</button>
                </div>
            </form>


        </div>
    </div>
@endsection