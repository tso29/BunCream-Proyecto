<div class="navbar bg-pink-600 text-white flex justify-between items-center border-b-2 border-pink-700">
  {{-- logo --}}
  <div class="mx-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.871c1.355 0 2.697.056 4.024.166C17.155 8.51 18 9.473 18 10.608v2.513M15 8.25v-1.5m-6 1.5v-1.5m12 9.75-1.5.75a3.354 3.354 0 0 1-3 0 3.354 3.354 0 0 0-3 0 3.354 3.354 0 0 1-3 0 3.354 3.354 0 0 0-3 0 3.354 3.354 0 0 1-3 0L3 16.5m15-3.379a48.474 48.474 0 0 0-6-.371c-2.032 0-4.034.126-6 .371m12 0c.39.049.777.102 1.163.16 1.07.16 1.837 1.094 1.837 2.175v5.169c0 .621-.504 1.125-1.125 1.125H4.125A1.125 1.125 0 0 1 3 20.625v-5.17c0-1.08.768-2.014 1.837-2.174A47.78 47.78 0 0 1 6 13.12M12.265 3.11a.375.375 0 1 1-.53 0L12 2.845l.265.265Zm-3 0a.375.375 0 1 1-.53 0L9 2.845l.265.265Zm6 0a.375.375 0 1 1-.53 0L15 2.845l.265.265Z" />
    </svg>    
  </div>
  
  {{-- menu móvil --}}
  <div class="flex-1 md:hidden">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>               
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-pink-600 rounded-box w-52">
        <li><a class="text-white" href="{{ route('home') }}">BunCream</a></li>
        <li><a class="text-white" href="{{ route('home') }}">Servicios</a></li>
        <li><a class="text-white" href="{{ route('productos.index') }}">Productos</a></li>
        <li><a class="text-white" href="{{ route('home') }}">Acerca de nosotros</a></li>
      </ul>
    </div>
  </div>

  {{-- menu desktop --}}
  <div class="flex-1 hidden md:flex space-x-4">
    <a href="{{ route('home') }}" class="btn btn-ghost btn-sm text-white text-base">Buncream</a>
    <a href="{{ route('home') }}" class="btn btn-ghost btn-sm text-white">Servicios</a>
    <a href="{{ route('productos.index') }}" class="btn btn-ghost btn-sm text-white">Productos</a>
    <a href="{{ route('home') }}" class="btn btn-ghost btn-sm text-white">Acerca de nosotros</a>
  </div>

  {{-- Si esta autenticado muestra menu de usuario, sino muestra botones de login y registro --}}
  @auth
      <h3 class="mr-2 font-semibold text-sm text-white">Hola, {{ auth()->user()->name }}</h3>
      <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar mr-4">
          <div class="w-10 rounded-full">
            <img alt="photo user" src="https://picsum.photos/id/35/50" />
          </div>
        </div>
        <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-pink-600 rounded-box w-52">
          <li><a class="text-white" href="{{ route('dashboard') }}">Dashboard</a></li>
          <li><a class="text-white" href="{{ route('profile.edit') }}">Mi perfil</a></li>
          <li>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a class="text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
            </form>
          </li>
        </ul>
      </div>
  @else
      <div class="mx-4 space-x-4">
        <a href="{{ route('login') }}" class="btn btn-outline btn-sm text-white border-white">Ingresar</a>
        <a href="{{ route('register') }}" class="btn btn-outline btn-sm text-white border-white">Registrarse</a>
      </div>
  @endauth
</div>
