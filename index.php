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
    <?php include './public/components/Sidebar.php' ?>
    <main class="flex-1 p-4">
      <h1 class="text-2xl mt-2 mb-4 font-semibold">Manajemen Mahasiswa</h1>
      
      <div class="flex items-center gap-3 mb-6">
          <div class="relative flex-1 max-w-sm">
            <i data-lucide="search" class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 w-4 h-4" stroke-width="1.5"></i>
            <input
              type="text"
              id="searchInput"
              placeholder="Cari mahasiswa..."
              class="w-full pl-9 pr-4 py-2 text-sm border border-gray-200 rounded-lg outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
            />
          </div>
          <button class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded-lg cursor-pointer">
            <i data-lucide="plus" class="w-4 h-4" stroke-width="2"></i>
            Tambah Mahasiswa
          </button>
        </div>
 

        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">
          <table class="w-full text-sm">
            <thead class="bg-gray-50 border-b border-gray-200 text-gray-500 uppercase text-xs">
              <tr>
                <th class="text-left px-4 py-3 font-medium">No</th>
                <th class="text-left px-4 py-3 font-medium">NPM</th>
                <th class="text-left px-4 py-3 font-medium">Nama</th>
                <th class="text-left px-4 py-3 font-medium">Jurusan</th>
                <th class="text-left px-4 py-3 font-medium">No. Telp</th>
                <th class="text-left px-4 py-3 font-medium">Aksi</th>
              </tr>
            </thead>
            <tbody id="tableBody" class="divide-y divide-gray-100">
              <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 text-gray-500">1</td>
                <td class="px-4 py-3 font-medium text-gray-800">2210101001</td>
                <td class="px-4 py-3 text-gray-800">Andi Pratama</td>
                <td class="px-4 py-3 text-gray-600">Teknik Informatika</td>
                <td class="px-4 py-3 text-gray-600">081234567890</td>
                <td class="px-4 py-3">
                  <div class="flex items-center gap-2">
                    <button class="text-blue-600 hover:text-blue-800"><i data-lucide="pencil" class="w-4 h-4" stroke-width="1.5"></i></button>
                    <button class="text-red-500 hover:text-red-700"><i data-lucide="trash-2" class="w-4 h-4" stroke-width="1.5"></i></button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
 

          <!-- <div id="emptyState" class="hidden py-12 text-center text-gray-400">
            <i data-lucide="search-x" class="w-8 h-8 mx-auto mb-2" stroke-width="1.5"></i>
            <p class="text-sm">Mahasiswa tidak ditemukan</p>
          </div> -->
        </div>
    </main>
  </div>

  <script src="https://unpkg.com/lucide@latest"></script>
  <script>
    lucide.createIcons();
  </script>
</body>

</html>