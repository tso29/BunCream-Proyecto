<div class="navbar bg-pink-600 text-white flex justify-between items-center border-b-2 border-pink-700">
  <!-- Logo y Título -->
  <a class="btn btn-ghost font-semibold text-2xl">
    <i class="fas fa-ice-cream mr-2"></i> BunCream
  </a>
  
  <!-- Menú de navegación (visible en pantallas grandes) -->
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal font-semibold text-xl px-1">
      <li><a>Inicio</a></li>
      <li>
        <details class="relative">
          <summary class="cursor-pointer text-xl">Menú</summary>
          <ul class="absolute left-0 mt-2 bg-white border border-gray-300 shadow-lg z-50">
            <li><a class="block px-4 py-2 text-base text-black hover:bg-gray-100">Bebidas</a></li>
            <li><a class="block px-4 py-2 text-base text-black hover:bg-gray-100">Postres</a></li>
          </ul>
        </details>
      </li>
      <li><a>Contacto</a></li>
    </ul>
  </div>

  <!-- Buscar y Avatar -->
  <div class="flex-none gap-2">
    <div class="form-control">
      <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
    </div>
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img
            alt="Tailwind CSS Navbar component"
            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
        </div>
      </div>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
        <li>
          <a class="justify-between text-black">
            Perfil
            <span class="badge">New</span>
          </a>
        </li>
        <li><a class="text-black">Configuración</a></li>
        <li><a class="text-black">Cerrar sesión</a></li>
      </ul>
    </div>
  </div>
</div>