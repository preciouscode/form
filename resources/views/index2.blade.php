@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
    <form action="">
        <div class="mb-4">
            <label for="FirstName" class="sr-only">FirstName</label>
            <input type="text" name="firstname" id="firstname" placeholder="Firstname" class="bg-gray-50 border-2 w-full p-3 rounded lg">
        </div>
        <div class="mb-4">
            <label for="Lastname" class="sr-only">LastName</label>
            <input type="text" name="lastname" id="firstname" placeholder="Lastname" class="bg-gray-50 border-2 w-full p-3 rounded lg">
        </div>
        <div class="mb-4">
            <label for="email" class="sr-only">Email</label>
            <input type="text" name="Email" id="firstname" placeholder="Email" class="bg-gray-50 border-2 w-full p-3 rounded lg">
        </div>
        <div class="mb-4">
            <label for="password" class="sr-only">Password</label>
            <input type="text" name="password" id="firstname" placeholder="Password" class="bg-gray-50 border-2 w-full p-3 rounded lg">
        </div>
        <div class="mb-4">
           
            <button type="submit" class="bg-blue-500 text-white px-4 py-3 border-2 w-full font-meduim rounded ">REGISTER</button>
        </div>
        </div>
</div>

{{--    
    <input type="text" name="fname" placeholder="FirstName" style="border: 1px solid black">
</form>
    <input type="text" name="lname" placeholder="LastName"><br>
    <input type="email" name="email" placeholder="Email"><br> 
    <input type="submit" value="submit">
</form> --}}
@endsection