<?php 

$npm = $_GET["npm"];
$mahasiswa = getDataMahasiswaByNPM($pdo, $npm);



?>

<main class="flex-1 p-4">
  <h1 class="text-2xl mt-2 mb-4 font-semibold">Update Data Mahasiswa</h1>

  <form action="" method="POST" class="bg-white border border-gray-200 rounded-xl p-6 ">
    <div class="grid grid-cols-2 gap-4">

      <div class="flex flex-col gap-1">
        <label for="npm" class="text-sm font-medium text-gray-700">NPM*</label>
        <input type="text" id="npm" name="npm" placeholder="Masukkan NPM" value="<?= $mahasiswa["NPM"] ?>"
          class="border border-gray-200 rounded-lg px-3 py-2 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100" required/>
      </div>

      <div class="flex flex-col gap-1">
        <label for="nama" class="text-sm font-medium text-gray-700">Nama*</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama" value="<?= $mahasiswa["nama"] ?>"
          class="border border-gray-200 rounded-lg px-3 py-2 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100" required/>
      </div>

      <div class="flex flex-col gap-1">
        <label for="jurusan" class="text-sm font-medium text-gray-700">Jurusan*</label>
        <input type="text" id="jurusan" name="jurusan" placeholder="Masukkan jurusan" value="<?= $mahasiswa["jurusan"] ?>"
          class="border border-gray-200 rounded-lg px-3 py-2 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100" required/>
      </div>

      <div class="flex flex-col gap-1">
        <label for="no_telp" class="text-sm font-medium text-gray-700">No. Telp*</label>
        <input type="text" id="no_telp" name="no_telp" placeholder="Masukkan no. telp" value="<?= $mahasiswa["no_telp"] ?>"
          class="border border-gray-200 rounded-lg px-3 py-2 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100" required/>
      </div>

    </div>

    <div class="flex justify-end mt-6">
      <button type="submit" name="submit"
        class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-5 py-2 rounded-lg cursor-pointer">
        <i data-lucide="plus" class="w-4 h-4" stroke-width="2"></i>
        Edit Data Mahasiswa
      </button>
    </div>
  </form>
</main>