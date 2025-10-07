<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- box icon -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.boxicons.com/fonts/basic/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css"
      rel="stylesheet"
    />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <!-- bootsrap icoon -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    />
    <style>
      .sidebar.sidebar-closed .relative:hover .sidebar-tooltip {
        opacity: 1;
        visibility: visible;
      }

      .sidebar-tooltip {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.2s ease, visibility 0.2s ease;
      }
    </style>

    <link href="../dist/output.css" rel="stylesheet" />
  </head>

  <body class="bg-primary flex">
    <!-- sidebar menu -->
    <div
      id="sidebar"
      class="sidebar fixed top top-0 bottom-0 lg:left-0 p-2 w-[250px] text-center bg-[#F9FBFF] transition-all duration-500 ease-in-out"
    >
      <div class="text-xl font-bold">
        <div class="relative p-2.5 mt-1 flex items-center">
          <!-- Logo -->
          <span
            id="logo-text"
            class="text-2xl font-bold text-blue-600 opacity-100 translate-x-0 transition-all duration-500 ease-in-out"
          >
            E-Sensus
          </span>

          <!-- Tombol toggle -->
          <button
            id="btn-sidebar"
            class="absolute right-2 top-1/2 -translate-y-1/2 cursor-pointer rounded-full bg-blue-200 text-blue-800 p-2 hover:bg-blue-300 active:scale-95 transition-all duration-500 ease-in-out"
          >
            <i class="bx bx-arrow-from-right text-xl"></i>
          </button>
        </div>

        <hr class="my-0.5 text-gray-600" />
      </div>

      <!-- menu -->
      <div class="flex flex-col gap-2">
        <!-- Dashboard -->
         <a href="./?p=dashboard" id="menu-side" class="relative flex items-center gap-2.5 p-2.5 mt-3 rounded-md cursor-pointer font-semibold hover:bg-blue-200">
           <i class="fa-solid fa-house hover:scale-110"></i>
             <h2
               class="nama-menu font-medium text-lg text-gray-800 transition-opacity"
             >
               Dashboard
             </h2>
 
           <!-- Tooltip dashboard -->
           <span
             class="sidebar-tooltip absolute top-1/2 -translate-y-1/2 left-full ml-3 bg-gray-800 text-white text-sm px-2 py-1 rounded whitespace-nowrap opacity-0 invisible transition-opacity duration-200 z-50"
           >
             Dashboard
           </span>
         </a>
        

        <!-- Data Keluarga -->
         <a href="./?p=data" id="menu-side" class="relative flex items-center gap-2.5 p-2.5 rounded-md cursor-pointer font-semibold hover:bg-blue-200">
          <i class="fa-solid fa-people-roof hover:scale-110 transition-all"></i>
          <h2
              class="nama-menu font-medium text-lg text-gray-800 transition-opacity"
            >
              Data Keluarga
            </h2>
            
            <!-- Tooltip data keluarga -->
            <span
            class="sidebar-tooltip absolute top-1/2 -translate-y-1/2 left-full ml-3 bg-gray-800 text-white text-sm px-2 py-1 rounded whitespace-nowrap opacity-0 invisible transition-opacity duration-200 z-50"
            >
            Data Keluarga
          </span>
        </a>
       

        <!-- Layanan -->
        <div class="text-lg flex flex-col">
          <div
            id="toggle-layanan"
            id="menu-side" class="relative flex items-center gap-2.5 p-2.5 rounded-md cursor-pointer font-semibold hover:bg-blue-200"
          >
            <i
              class="fa-solid fa-hand-holding-hand hover:scale-110 transition-all"
            ></i>
            <h2
              class="nama-menu font-medium text-lg text-gray-800 transition-opacity"
            >
              Layanan
            </h2>
            <i
              class="nav-arrow bi bi-chevron-right absolute right-2 top-1/2 -translate-y-1/2 cursor-pointer"
              id="btn-layanan"
            ></i>
            <!-- Tooltip layanan-->
            <div
              class="sidebar-tooltip absolute left-full ml-3 flex flex-col gap-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50"
            >
              <span
                class="bg-gray-800 text-white text-sm px-2 py-1 rounded whitespace-nowrap"
              >
                Laporan Kelahiran
              </span>
              <span
                class="bg-gray-800 text-white text-sm px-2 py-1 rounded whitespace-nowrap"
              >
                Laporan Kematian
              </span>
              <span
                class="bg-gray-800 text-white text-sm px-2 py-1 rounded whitespace-nowrap"
              >
                Pengajuan Surat
              </span>
              <span
                class="bg-gray-800 text-white text-sm px-2 py-1 rounded whitespace-nowrap"
              >
                Ajukan Pindah Alamat
              </span>
            </div>
          </div>

          <!-- dropdown layanan -->
          <div
            id="menu-layanan"
            class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out flex flex-col pl-12 text-center gap-2"
          >
            <a
              href="./?p=laporan_kelahiran"
              class="text-base font-medium text-gray-800 py-2 mt-2 hover:bg-blue-200 rounded-md"
              >Laporan Kelahiran</a
            >
            <a
              href="./?p=laporan_kematian"
              class="text-base font-medium text-gray-800 py-2 hover:bg-blue-200 rounded-md"
              >Laporan Kematian</a
            >
            <a
              href="./?p=surat_pengajuan"
              class="text-base font-medium text-gray-800 py-2 hover:bg-blue-200 rounded-md"
              >Surat Pengajuan</a
            >
            <a
              href="./?p=pindah_alamat"
              class="text-base font-medium text-gray-800 py-2 hover:bg-blue-200 rounded-md"
              >Ajukan Pindah Alamat</a
            >
          </div>
        </div>

        <!-- Bantuan -->
         <a href="./?p=bantuan" id="menu-side" class="relative flex items-center gap-2.5 p-2.5 rounded-md cursor-pointer font-semibold hover:bg-blue-200 ml-1">
          <i
            class="fa-solid fa-question hover:scale-110 transition-all text-lg"
          ></i>

          <h2
              class="nama-menu font-medium text-lg text-gray-800 transition-opacity pl-1.5"
            >
              Bantuan
            </h2>
            <!-- Tooltip bantuan -->
            <span
            class="sidebar-tooltip absolute top-1/2 -translate-y-1/2 left-full ml-3 bg-gray-800 text-white text-sm px-2 py-1 rounded whitespace-nowrap opacity-0 invisible transition-opacity duration-200 z-50"
            >
            Bantuan
          </span>
        </a>
        </div>

        <!-- logOut -->
        <div
        id="menu-side"
          class=" fixed flex items-center gap-2.5 p-2.5 rounded-md cursor-pointer font-semibold ml-1 bottom-1"
        >
          <i
            class="fa-solid fa-right-from-bracket hover:scale-110 transition-all text-lg"
          ></i>

          <a href="./?p=logOut">
            <h2
              class="nama-menu font-medium text-lg text-gray-800 transition-opacity pl-1.5"
            >
              LogOut
            </h2>
          </a>
        </div>
      </div>
    </div>

      <!-- konten-->
      <?php require_once('route.php') ?>
      </div>

    <script src="../index.js"></script>
  </body>
</html>
