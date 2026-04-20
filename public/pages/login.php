<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dataUser = [
        "username" => htmlspecialchars($_POST["username"]),
        "password" => htmlspecialchars($_POST["password"]),
        "rememberme" => $_POST["rememberme"],
    ];

    login($pdo, $dataUser);
} ?>


<main action="" class="w-full flex justify-center items-center">
    <div class="flex w-full max-w-sm flex-col justify-center items-center">
        <div class="mb-8 text-center">

        <h1 class="text-2xl font-bold text-gray-800 tracking-wide">Data Mahasiswa</h1>
        <p class="text-sm text-gray-400 mt-1">Silakan masuk ke akun Anda</p>
        </div>
    
        <div class="w-full bg-white rounded-xl border border-gray-100 shadow-sm px-8 py-8">
    
        <form action="" method="POST">
            <div class="mb-5">
                <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Username</label>
                <div class="relative">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/>
                    </svg>
                    <input
                    type="text"
                    placeholder="Masukkan username"
                    name="username"
                    required
                    class="w-full pl-9 pr-4 py-2.5 text-sm border border-gray-200 rounded-lg bg-white text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition"
                    />
                </div>
            </div>
    
            <div class="mb-6">
                <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Password</label>
                <div class="relative">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/>
                    </svg>
                    <input
                    type="password"
                    name="password"
                    placeholder="Masukkan password"
                    require
                    class="w-full pl-9 pr-4 py-2.5 text-sm border border-gray-200 rounded-lg bg-white text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition"
                    />
                </div>
            </div>

            <div class="mb-6">
                <div class="flex gap-2 items-center">
                    <input type="checkbox" name="rememberme" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-lg  ">
                    <p class=" text-xs font-semibold text-gray-400">Remember me</p>
                </div>
            </div>
    
            <button
            type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2.5 rounded-lg transition-colors shadow-sm"
            >
            Masuk
            </button>
        </form>
    
        </div>
    
        <p class="mt-6 text-xs text-gray-400">&copy; 2024 Data Mahasiswa. All rights reserved.</p>
    </div>
</main>
