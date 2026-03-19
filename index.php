<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" href="./public/src/css/output.css" />
</head>

<body class="font-inter">
  <div class="flex min-h-screen">
    <aside class="bg-white border-r border-gray-200 ">
      <nav class="min-h-screen p-4 flex flex-col justify-between">
        <div>
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
        <div class="flex items-center gap-4 p-2 rounded-md hover:bg-gray-200 cursor-pointer group">
            <img src="./public/src/images/image.png" alt="Profile Image" class="w-15 h-15 rounded-full">
            <h1 class="text-gray-600 font-bold group-hover:text-blue-600">John Doe</h1>
        </div>
      </nav>
    </aside>
    <main class="flex-1 p-4">
      <h1>Hello, Admin!</h1>
    </main>
  </div>

  <script src="https://unpkg.com/lucide@latest"></script>
  <script>
    lucide.createIcons();
  </script>
</body>

</html>