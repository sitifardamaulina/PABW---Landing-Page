<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp">
        </script>
        <style type="text/tailwindcss">
            @layer utilities {
              .container {
                @apply max-w-[90%] mx-auto;
              }
        
              .btn {
                @apply bg-[#212121] text-white px-5 py-3 text-center;
              }  
        
              .btn.rounded {
                @apply rounded-full;
              }
        
              .home::before {
                /* content: url("./assets/scratch.svg");
                position: absolute;
                bottom: -18px; */
              }
        
              .active {
                @apply block;
              }
            }
          </style>

        <title>Mang Resto</title>
        <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            {{-- <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div> --}}


        </div>
        <header class="">
            <nav class="container relative flex py-5 items-center justify-between">
              <a href="">
                <img src="./assets/Group 1.png" alt="">
              </a>
        
              <div class="space-x-4 flex-1 ml-12 hidden md:block">
                <a href="" class="text-[#74A512] font-bold">
                  Home
                </a>
                <a href="">
                  About Us
                </a>
                <a href="">
                  Shop
                </a>
                <a href="">
                  Contact
                </a>
                <a href="">
                  Blog
                </a>
              </div>
        
              <div class="flex items-center space-x-3 hidden md:flex">
                <a href="">
                  <img src="./assets/cart.png" alt="">
                </a>
                <a href="">
                  <img src="./assets/cart (1).png" alt="">
                </a>
                <a href="">
                  <img src="./assets/search.svg" alt="">
                </a>
               
                <a href="" class="flex">
                  <img src="./assets/UK.png" alt="">
                  <a href="" class="flex">
                    <img src="./assets/En.png" alt="">
                    <img src="./assets/bawah.svg" alt="">
                  </a>
                </a>
                @if (Route::has('login'))
                <div class=" px-6 py-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
              </div>
        
              <a href="#" class="hamburger md:hidden">
                <img src="./assets/hamburger.svg" alt="">
              </a>
        
              <div
                class="popup absolute inset-x-0 top-10 border border-gray-300 bg-white shadow-lg right-12 rounded-lg p-4 hidden md:hidden z-40">
                <div class="flex space-x-5">
                  <div class="flex h-full items-center space-x-1 w-full mb-4 border border-gray-400 px-3 rounded-full">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="8.36556" cy="8.36458" r="7.03353" stroke="#070D13" stroke-width="2" />
                      <rect x="13.8848" y="13" width="6.56463" height="1.25023" rx="0.625113" transform="rotate(45 13.8848 13)"
                        fill="#070D13" />
                    </svg>
                    <input type="text" class="w-full border-none" placeholder="Search ..." />
                  </div>
                  <a href="">
                    <img src="./assets/cart.svg" alt="">
                  </a>
                </div>
        
                <div class="space-y-4 flex flex-col">
                  <a href="">Home</a>
                  <a href="">About Us</a>
                  <a href="">Shop</a>
                  <a href="">Contact</a>
                </div>
        
                <div class="flex flex-col mt-4">
                  <a href="" class="btn">Registration</a>
                </div>
              </div>
            </nav>
          </header>
        
          <section class="container pt-8 pb-28 flex flex-col items-center lg:flex-row">
            <div class="space-y-8 flex-1">
              <button class="bg-[#F5FCE8] px-8 py-2 text-[#74A512] rounded-full">Sall Top 20% Off</button>
              <h1 class="text-7xl font-bold leading-none relative">
                <span class="text-[#74A512]">Will</span>
                Give You
                <span class="text-[#74A512]">Satisfation</span>
                in
                <span class="relative home">Food</span>
              </h1>
              <p class="text-xl text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget gravida leo, nec iaculis diam.
              </p>
              <div class="flex items-center gap-x-5">
                <button class="bg-[#74A512] py-3 px-8 text-white">Shop Now</button>
                <p class="font-semibold text-lg text-[#74A512] flex gap-x-3">Explore Our Blog <img src="./assets/panah.svg" alt=""></p>
              </div>
            </div>
        
            <div class="flex space-x-4 flex-1 hidden lg:flex bg-[#EAF9CE] w-[486px] h-[590px] items-center justify-center">
              <img class="w-[424px] h-[422px]" src="./assets/pngwing 1.png" alt="">
            </div>
          </section>
          <section class="">
            <div class="container flex flex-col space-y-5 lg:space-y-0 lg:space-x-5 lg:flex-row">
              <p class="flex items-center justify-center text-gray-400 text-4xl">Company Partner</p>
              <div class="border-2 border-white flex flex-1 items-center justify-center py-6 px-3 space-x-6 ">
                <img src="./assets/RestaurantBrands-logo logo.png" alt="">
                <div class="text-white space-y-1">
                  <img src="./assets/foodxp.default logo.png">
                </div>
                <div class="text-white space-y-1">
                  <img src="./assets/Google logo.png">
                </div>
                <div class="text-white space-y-1">
                  <img src="./assets/foodxp.default logo.png">
                </div>
                <div class="text-white space-y-1">
                  <img src="./assets/RestaurantBrands-logo logo.png">
                </div>
                <div class="text-white space-y-1">
                  <img src="./assets/Google logo.png">
                </div>
              </div>
            </section>
        
          <section class="">
            <div class="container flex flex-col space-y-5 lg:space-y-0 lg:space-x-5 lg:flex-row">
              <div class="border-2 border-white flex flex-1 items-center justify-center py-6 px-3 space-x-6 ">
                <img src="./assets/Ellipse 66.png" alt="">
                <div class="text-white space-y-1">
                  <img src="./assets/Ellipse 67.png">
                </div>
                <div class="text-white space-y-1">
                  <img src="./assets/Ellipse 68.png">
                </div>
              </div>
          </section>
        
          <div class="container py-20">
            <div class="mt-8 flex flex-col space-y-5 lg:flex-row lg:space-x-5 lg:space-y-0">
              <div class="bg-[#EAF9CE] flex-1 flex space-x-8 relative rounded">
                <img src="./assets/pngwing 3.png" class="self-end hidden md:block" alt="">
        
                <div class="max-w-[387px] space-y-4 py-8">
                  <h3 class="font-bold text-4xl">Fast Food</h3>
                  <p class="text-xl text-gray-500">
                    Lörem ipsum nyn fahasm. Jyr epiception tavis. Berade pubel. Nysm anasilår dera jerat. 
                  </p>
                    <button class="bg-[#74A512] py-3 px-10 text-white">Shop Now</button>
                </div>
              </div>
        
              <div class="bg-[#FFF7E2] flex-1 flex space-x-8 relative rounded">
                <img src="./assets/pngwing 2.png" class="self-end hidden md:block" alt="">
        
                <div class="max-w-[387px] space-y-4 py-8">
                  <h3 class="font-bold text-4xl">Organic Food</h3>
                  <p class="text-xl text-gray-500">
                    Lörem ipsum nyn fahasm. Jyr epiception tavis. Berade pubel. Nysm anasilår dera jerat. 
                  </p>
                  <button class="bg-[#74A512] py-3 px-8 text-white">Shop Now</button>
                </div>
              </div>
            </div>
          </div>
        
          
          <section class="container py-20 flex flex-col space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0 items-center">
            
            <div class="flex-1 space-y-6">
              <span class="text-yellow-500 text-md font-semibold">About Us</span>
              <h2 class="text-6xl font-bold">MangResto</h2>
              <p class="text-gray-500">
                we are a fast food company and we make everyone enjoy any food we serve them because we serve the best for them all.
              </p>
        
              <div>
                <button class="bg-[#74A512] py-3 px-8 text-white">Shop Now</button>
              </div>
            </div>
            <img src="./assets/Group 2076.png" class="w-full flex-1" alt="">
          </section>
        
          <div class="container py-20">
            <div class="flex justify-between items-center w-full mb-5">
              <h3 class="text-5xl font-bold">
                Food MangResto
              </h3>
              <a href="" class="btn inline-block">See More</a>
            </div>
            <span class="text-[#74A512] text-md font-semibold">Post List</span>
        
            <div class=" relative flex py-1 items-center justify-between">
              <p class="text-center"></p>
              <div class="flex gap-10">
                <p class="text-[#74A512] font-semibold underline underline-offset-8">All Product</p>
                <p class="text-gray-500">Fast Food</p>
                <p class="text-gray-500">Healty Food</p>
              </div>
              <p class="text-center"></p>
            </div>
        
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-28 gap-x-10 mt-10">
              <div class="relative">
                <img src="./assets/menu1.png" class="h-full w-full" alt="">
                <div class="mt-3">
                  <div class="flex justify-between">
                    <p class="font-bold text-xl">Cucumber</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-md text-gray-500">Lörem ipsum nyn fahasm. Jyr epiception tavis. </p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">$25</span>
                  </div>
                </div>
              </div>
        
              <div class="relative">
                <img src="./assets/menu2.png" class="h-full w-full" alt="">
                <div class="mt-3">
                  <div class="flex justify-between">
                    <p class="font-bold text-xl">Swede</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-md text-gray-500">Lörem ipsum nyn fahasm. Jyr epiception tavis. </p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">$32</span>
                  </div>
                </div>
              </div>
        
              <div class="">
                <img src="./assets/menu3.png" class="h-full w-full" alt="">
                <div class="mt-3">
                  <div class="flex justify-between">
                    <p class="font-bold text-xl">Chinese cinnamon</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-md text-gray-500">Lörem ipsum nyn fahasm. Jyr epiception tavis. </p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">$35</span>
                  </div>
                </div>
              </div>
        
              <div class="">
                <img src="./assets/menu4.png" class="h-full w-full" alt="">
                <div class="mt-3">
                  <div class="flex justify-between">
                    <p class="font-bold text-xl">Pepper (C. annuum)</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-md text-gray-500">Lörem ipsum nyn fahasm. Jyr epiception tavis. </p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">35</span>
                  </div>
                </div>
              </div>
        
        
              <div class="">
                <img src="./assets/menu1.png" class="h-full w-full" alt="">
                <div class="mt-3">
                  <div class="flex justify-between">
                    <p class="font-bold text-xl">Cucumber</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-md text-gray-500">Lörem ipsum nyn fahasm. Jyr epiception tavis. </p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">$38</span>
                  </div>
                </div>
              </div>
        
              <div class="">
                <img src="./assets/menu2.png" class="h-full w-full" alt="">
                <div class="mt-3">
                  <div class="flex justify-between">
                    <p class="font-bold text-xl">Swede</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-md text-gray-500">Lörem ipsum nyn fahasm. Jyr epiception tavis. </p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">$40</span>
                  </div>
                </div>
              </div>
        
              <div class="">
                <img src="./assets/menu3.png" class="h-full w-full" alt="">
                <div class="mt-3">
                  <div class="flex justify-between">
                    <p class="font-bold text-xl">Chinese cinnamon</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-md text-gray-500">Lörem ipsum nyn fahasm. Jyr epiception tavis. </p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">$30</span>
                  </div>
                </div>
              </div>
        
              <div class="">
                <img src="./assets/menu4.png" class="h-full w-full" alt="">
                <div class="mt-3">
                  <div class="flex justify-between">
                    <p class="font-bold text-xl">Pepper (C. annuum)</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-md text-gray-500">Lörem ipsum nyn fahasm. Jyr epiception tavis. </p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">$25</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <section class="flex items-center justify-center p-6 mt-20">
            <button class="bg-[#74A512] py-3 px-10 text-white">View More</button>
          </section>
          
          <section class="container py-20">
            
            <div class="flex flex-col space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0 items-center bg-[#FFF7E2] pl-10">
              <div class="flex-1 space-y-6">
              <span class="text-[#74A512] text-md font-semibold">Healty Food</span>
              <h2 class="text-6xl font-bold">Healthy And you Can Enjoy in The Morning</h2>
              <p class="text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget gravida leo, nec iaculis diam. 
              </p>
        
              <div>
                <button class="bg-[#74A512] py-3 px-8 text-white">Shop Now</button>
              </div>
            </div>
            <img src="./assets/pngwing 4.png" class="w-full flex-1" alt="">
            </div>
          </section>
        
          <section class="bg-[#1F2F00] text-white py-14">
            <div
              class="container flex flex-col space-y-5 md:flex-row md:space-y-0 items-center md:items-start md:justify-center space-x-12">
              <div class="flex flex-col">
                <div class="flex items-center gap-5 mb-5">
                  <img src="./assets/Logo.svg" alt="" width="40">
                  <p class="font-bold">Mangcoding Store</p>
                </div>
        
                <p class="max-w-[380px]">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor, erat sapien
                  faucibus lectus, vel tempor dolor augue et lectus.
                </p>
                <ul class="flex gap-5 mt-5">
                  <li>
                    <img src="./assets/Frame 1597882717.png" alt="">
                  </li>
                  <li>
                    <img src="./assets/Frame 1597882718.png" alt="">
                  </li>
                  <li>
                    <img src="./assets/Frame 1597882719.png" alt="">
                  </li>
                  <li>
                    <img src="./assets/Frame 1597882720.png" alt="">
                  </li>
                </ul>
              </div>
        
              <div class="grid grid-cols-2 md:grid-cols-3 gap-3 gap-y-8">
                <div>
                  <p class="font-bold py-2">Navigation</p>
                  <ul class="flex flex-col gap-2 space-y-1 mt-3">
                    <li>Categories</li>
                    <li>Best Product</li>
                    <li>Cart</li>
                    <li>Wishlist</li>
                    <li>Contact</li>
                  </ul>
                </div>
        
                <div>
                  <p class="font-bold py-2">Navigation</p>
                  <ul class="flex flex-col gap-2 space-y-1 mt-3">
                    <li>Ruang Tamu</li>
                    <li>Ruang Makan</li>
                    <li>Ruang Kerja</li>
                    <li>Ruang Tidur</li>
                    <li>Furniture</li>
                  </ul>
                </div>
        
                <div>
                  <p class="font-bold py-2">Product</p>
                  <ul class="flex flex-col gap-2 space-y-1 mt-3">
                    <li>Chair</li>
                    <li>Table</li>
                    <li>Wardrobe</li>
                  </ul>
                </div>
        
                <div>
                  <p class="font-bold py-2">Payment Method</p>
                  <ul class="flex flex-col gap-2 space-y-1 mt-3">
                    <li>Credit Card</li>
                    <li>Paypal</li>
                  </ul>
                </div>
        
                <div>
                  <p class="font-bold py-2">Setting</p>
                  <ul class="flex flex-col gap-2 space-y-1 mt-3">
                    <li>My Account</li>
                    <li>Order</li>
                    <li>Address</li>
                    <li>Password</li>
                  </ul>
                </div>
        
                <div>
                  <p class="font-bold py-2">Contact</p>
                  <ul class="flex flex-col gap-2 space-y-1 mt-3">
                    <li>Lokasimu di Jakarta Barat</li>
                    <li>furniture@gmail.com</li>
                    <li>0897 8908 8976</li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        
          <footer class="bg-[#1F2F00] py-5">
            <p class="text-center text-white ">© 2022 Mangcoding. All rights reserved.</p>
          </footer>
    </body>
</html>
