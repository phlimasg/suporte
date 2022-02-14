<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.tailwindcss.com"></script>
      <title>{{env('APP_NAME')}}</title>
  </head>
  <body>
    
        <div class="h-full bg-gradient-to-tl from-green-400 to-indigo-900 w-full py-16 px-4">
            <div class="flex flex-col items-center justify-center py-0">
               <img src="https://engeman.com.br/wp-content/uploads/2020/01/imagemSuporte.png" alt="logo" width="250" style="/*position: absolute; top: -15px*/ ">

                <div class="bg-white shadow rounded lg:w-1/3  md:w-1/2 w-full p-10 mt-16">
                    <p tabindex="0" class="focus:outline-none text-2xl font-extrabold leading-6 text-gray-800">Login</p>
                    <!--
                    <p tabindex="0" class="focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500">Dont have account? <a href="javascript:void(0)"   class="hover:text-gray-500 focus:text-gray-500 focus:outline-none focus:underline hover:underline text-sm font-medium leading-none  text-gray-800 cursor-pointer"> Sign up here</a></p>
                    <button aria-label="Continue with google" role="button" class="focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-gray-700 py-3.5 px-4 border rounded-lg border-gray-700 flex items-center w-full mt-10">
                       <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in-svg2.svg" alt="google">
                        <p class="text-base font-medium ml-4 text-gray-700">Continue with Google</p>
                    </button>
                    <button aria-label="Continue with github" role="button" class="focus:outline-none  focus:ring-2 focus:ring-offset-1 focus:ring-gray-700 py-3.5 px-4 border rounded-lg border-gray-700 flex items-center w-full mt-4">
                       <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in-svg3.svg" alt="github">                            
                        <p class="text-base font-medium ml-4 text-gray-700">Continue with Github</p>
                    </button>
                    <button aria-label="Continue with twitter" role="button" class="focus:outline-none  focus:ring-2 focus:ring-offset-1 focus:ring-gray-700 py-3.5 px-4 border rounded-lg border-gray-700 flex items-center w-full mt-4">
                       <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in-svg4.svg" alt="twitter">                            
                        <p class="text-base font-medium ml-4 text-gray-700">Continue with Twitter</p>
                    </button>
                -->
                    <div class="w-full flex items-center justify-between py-5">
                         
                         
                         <hr class="w-full bg-gray-400  ">
                        </div>
                        <form action="save_user" method="post">
                        <div>
                            <label id="name" class="text-sm font-medium leading-none text-gray-800">
                                Nome
                            </label>
                            <input aria-labelledby="name" name="name" type="text" class="bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"/>
                        </div>
                        <div>
                            <label id="email" class="text-sm font-medium leading-none text-gray-800">
                                Email
                            </label>
                            <input aria-labelledby="email" name="email" type="email" class="bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"/>
                        </div>
                        <div class="mt-6  w-full">
                            <label for="pass" class="text-sm font-medium leading-none text-gray-800">
                                Password
                            </label>
                           <div class="relative flex items-center justify-center">
                            <input id="pass" name="password" type="password" class="bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"/>
                            <div class="absolute right-0 mt-2 mr-3 cursor-pointer">
                              <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in-svg5.svg" alt="viewport">                                    
                            </div>
                           </div>
                        </div>
                        <div class="mt-8">
                            <button role="button" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-sm font-semibold leading-none text-white focus:outline-none bg-indigo-700 border rounded hover:bg-indigo-600 py-4 w-full">Criar minha conta</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        @if(Session::has('user'))
        <script>
            alert('Usuário {{Session::get("user")->name}} criado com sucesso!');
        </script>   
        @php
            Session::forget('user');
        @endphp
        @else
            <script></script>
        @endif
  </body>
</html>