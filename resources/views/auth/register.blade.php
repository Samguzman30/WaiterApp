@extends('layouts.apps')

@section('title', 'Register')
    
@section('content')

<section class=" antialiased w-full h-full   text-gray-600 min-h-screen p-4"> 
    <div class="h-full"> 
      
        <!-- Pay component -->
        <div>
            
            <!-- Card body -->
            <div class="relative px-4 sm:px-6 lg:px-8 pb-8 max-w-lg mx-auto" x-data="{ card: true }">
                <div class="bg-white mt-10 mb-5 ml-8 mr-7 px-8 pb-6 rounded-3xl shadow-lg">
  
                    <!-- Card header -->
                    <div class="text-center  mb-6">
                        <div class="mb-2">
                            <img class="-mt-8 inline-flex rounded-full" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" width="110" height="70" alt="User"/>
                        </div>
                       
                    </div>
  
                    <!-- Toggle -->
                    <div class="flex  justify-center mb-6">
                        <div class="relative flex w-full p-1 transition duration-150  border-purple-10 hover:transparent    rounded">
                          
                            <span class="absolute inset-0 m-1 pointer-events-none" aria-hidden="true">
                                <span class="absolute inset-0 w-1/2  transform transition duration-150 ease-in-out" :class="card ? 'translate-x-0' : 'translate-x-full'"></span>
                            </span>
                            <a href="{{ route('login.index') }}" class=" relative text-center flex-1 text-lg  border-b-4 border-b-gray-200  font-medium text-gray-600/50 p-1 transition duration-150 ease-in-out focus:outline-none  focus-visible:ring-2" @click.prevent="card = false" onclick="redirect()">Ingresar</a>
                            <a class="relative text-center flex-1 text-lg  border-b-4  border-[#3da496]  font-medium  p-1 transition duration-150 ease-in-out focus:outline-none  focus-visible:ring-2" @click.prevent="card = false">Registrarse</a>
                        </div>
                    </div>
  
                    <!-- Card form -->
                    <form action="" method="post">   
                        @csrf 
                   <div class="font-['Montserrat'] space-y-4">
                            <!-- Card Number -->
                            <div>
                                <label class="block text-sm font-medium mb-1" for="card-nr">Nombre<span class="text-red-500"></span></label>
                                <input name="name" id="nombre" class="text-sm text-gray-800 bg-gray-200   border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="Ingresa el nombre de tu local" />
                            </div>
                            <!-- Expiry and CVC -->
                            <div class="flex space-x-4">
                                
                                <div class="flex-1">
                                    <label class="block text-sm font-medium mb-1" for="card-cvc">Email<span class="text-red-500"></span></label>
                                    <input name="email" id="email" class="text-sm text-gray-800 bg-gray-200 border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="email" placeholder="Ingresa tu email" />
                                </div>
                            </div>

                            <div class="flex space-x-4">
                                
                                <div class="flex-1">
                                    <label class="block text-sm font-medium mb-1" for="card-cvc">Contraseña<span class="text-red-500"></span></label>
                                    <input name="password" id="password" class="text-sm text-gray-800 bg-gray-200 border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="password" placeholder="Ingresa tu contraseña" />
                                </div>
                            </div>

                            <div class="flex space-x-4">
                                
                                <div class="flex-1">
                                    <label class="block text-sm font-medium mb-1" for="card-cvc">Contraseña<span class="text-red-500"></span></label>
                                    <input name="password_confirmation" id="password_confirmation" class="text-sm text-gray-800 bg-gray-200 border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="password" placeholder="Ingresa nuevamente tu contraseña" />
                                </div>
                            </div>
                            <!-- Name on Card -->
                          
                        </div>
                        <!-- Form footer -->
                        <div class="mt-6">
                            <div class="mb-4">
                                <button type="submit" class="font-medium text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out w-full bg-[#3da496] hover:bg-[#73cbbf] text-white focus:outline-none focus-visible:ring-2">Ingresar</button>
                            </div>
                        </div>
                    </div>
  
                
  
                </form> 
            </div>
        </div>
    </div>
  </section>
  
@endsection