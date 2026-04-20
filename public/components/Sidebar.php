<?php

if (isset($_POST["logout"])) {
    logout();
} ?>


<aside class="bg-white border-r border-gray-200 ">
      <nav class="min-h-screen flex flex-col justify-between">
        <div class="p-4">
            <div>
              <h1 class="mb-8 text-xl font-bold">Data Mahasiswa</h1>
            </div>
            <ul class="flex flex-col gap-4 [&>li]:flex [&>li]:flex-col [&>li>a]:flex [&>li>a]:items-center [&>li>a]:gap-4 text-sm font-light">
              <!-- <li>
                <a href=""><i data-lucide="home" stroke-width="1.5"></i> Dashboard</a>
              </li> -->
              <li class="bg-gray-200 p-2 rounded-md">
                <a href="" class="text-blue-600"><i data-lucide="book-user" stroke-width="1.5"></i>Manajemen
                  Mahasiswa</a>
              </li>
              <li class="p-2">
                <a href=""><i data-lucide="book-type" stroke-width="1.5" class="text-gray-400"></i><span class="text-gray-600">Manajemen Dosen</span></a>
              </li>
            </ul>
        </div>
        <div class="flex items-center gap-4 p-2 hover:bg-gray-200 cursor-pointer">
            <img src="/public/assets/images/image.png" alt="Profile Image" class="w-15 h-15 rounded-full objcet-cover">
            <h1 class="text-gray-600 font-bold ">John Doe</h1>
            <form action="" method="POST" class="flex">
              <button type="submit" name="logout">
                <i data-lucide="log-out" class="w-4 h-4 cursor-pointer hover:text-red-500" stroke-width="1.5"></i>
              </button>
            </form>
        </div>
      </nav>
</aside>