<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>MiniBlog</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
         <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="text-gray-700 bg-white" style="font-family: 'Source Sans Pro', sans-serif">
        <nav class="bg-slate-900 text-white">
                <div class="container mx-auto px-6 py-2 flex justify-between items-center">
                  <a class="font-bold text-2xl lg:text-4xl" href="#">
                    MiniBlog
                  </a>
                  <div class="block lg:hidden">
                    <button class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
                      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                      </svg>
                    </button>
                  </div>
                  <div class="hidden lg:block">
                    <ul class="inline-flex">
                      <li><a class="px-4 font-bold" href="/">Home</a></li>
                      <li><a class="px-4 hover:text-gray-800" href="#">About</a></li>
                      <li><a class="px-4 hover:text-gray-800" href="#">Contact</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li><a href="{{ url('/dashboard') }}" class="px-4 hover:text-gray-800 bg-gray-500 rounded p-2 text-white">Dashboard</a></li>
                            @else
                                <li><a href="{{ route('login') }}" class="px-4 hover:text-gray-800 bg-gray-500 rounded p-2 text-white">Log in</a></li>

                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}" class="px-4 hover:text-gray-800  bg-gray-500 rounded p-2 m-2 text-white">Register</a></li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                  </div>
                </div>
            </nav>
            <section style="background-color: #667eea">
                <div class="container mx-auto px-6 text-center py-20">
                  <h2 class="mb-6 text-4xl font-bold text-center text-white">
                    WEEKLY ARTICLES WITH INSIGHT INTO THE WEEKEND'S MESSAGE
                  </h2>
                  <h3 class="my-4 text-2xl text-white">
                    Our blog takes the message from the weekend and lays out next right steps, so you can hear a message and do a message in practical ways.
                  </h3>
                  <button
                    class="bg-white font-bold rounded-full mt-6 py-4 px-8 shadow-lg uppercase tracking-wider"
                  >
                    Be a Member
                  </button>
                </div>
            </section>
            <section class="bg-gray-100">
                <div class="container mx-auto px-6 py-20">
                  <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">
                    Posts
                  </h2>
                  <div class="flex flex-wrap">
                    @foreach ($posts as $post)
                        <div class="w-full md:w-1/3 px-2 mb-4">
                            <div class="bg-white rounded shadow py-2">
                                <p class="text-gray-500 text-xl md:text-sm px-6">{{ $post->title }}</p>
                                <p class="text-gray-800 text-base px-6 mb-5">{{ $post->body }}</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="flex md:flex md:flex-grow flex-row justify-end space-x-1">
                        <div class="py-4 px-2 text-teal-500 border-b-4 border-teal-300 font-semibold">{{ $posts->links() }}</div>
                    </div>
                  </div>
                </div>
              </section>
            <footer class="fixed bottom-0 bg-emerald-300" style="width: 100vw">
            <div class="container mx-auto  p-2">
                <div class="flex flex-wrap">
                <div class="w-full text-center md:text-center">
                    <h5 class="font-bold">&copy; Copyright 2023 miniBlog
                    </h5>
                </div>
                </div>
            </div>
            </footer>
    </body>
</html>
