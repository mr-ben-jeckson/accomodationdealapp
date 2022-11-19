@extends('layouts.app')
@section('title', 'User Chat Room')
@section('content')
<div class="lg:w-3/12 md:w-8/12 sm:w-10/12 w-full p-6 bg-white mx-4 rounded shadow-2xl">
    <div class="flex sm:items-center justify-between py-3 border-b-2 border-gray-200">
       <div class="flex items-center px-3 py-3">
          <div class="flex flex-col leading-tight">
             <div class="text-2xl mt-1 flex items-center">
                <span class="text-gray-700 mr-3">Chat room</span>
             </div>
             <span class="text-lg text-gray-600">Let's deal or talk | Username - {{ auth()->user()->username }}</span>
          </div>
       </div>
    </div>
    <form id="message_form">
         <div id="messages" class="overflow-y-auto max-h-screen px-5">
            
         </div>
        <div class="border-t-2 border-gray-200 px-4 pt-4 mb-2 sm:mb-0">
           <div class="relative flex">
              <input type="text" id="message_input" placeholder="Write Something" class="w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-12 bg-gray-200 rounded-full py-3">
              <div class="absolute right-0 items-center inset-y-0 hidden sm:flex">
                 <button type="submit" class="inline-flex items-center justify-center rounded-full h-12 w-12 transition duration-500 ease-in-out text-white bg-blue-500 hover:bg-blue-400 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6 transform rotate-90">
                       <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                    </svg>
                 </button>
              </div>
           </div>
        </div>
    </form>
 </div>
 <script src="./js/app.js"></script>
@endsection