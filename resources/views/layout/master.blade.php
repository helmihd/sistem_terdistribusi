<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sister Ui</title>

  <style>
    /* Custom styling to hide non-active tables */
    .hidden { display: none; }
</style>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="bg-gray-100 dark:bg-gray-900 dark:text-white text-gray-600 h-screen flex overflow-hidden text-sm">

  <div class="flex-grow overflow-hidden h-full flex flex-col">
    <div class="flex-grow flex overflow-x-hidden">
      <div class="flex-grow bg-white dark:bg-gray-900 overflow-y-auto">
        <div class="sm:px-7 sm:pt-7 px-4 pt-4 flex flex-col w-full border-b border-gray-200 bg-white dark:bg-gray-900 dark:text-white dark:border-gray-800 sticky top-0">
          <div class="flex w-full items-center">
            <div class="flex items-center text-3xl text-gray-900 dark:text-white">
              Tugas Sistem Terdistribusi
            </div>
          </div>
          <div class="flex items-center space-x-3 sm:mt-7 mt-4">
            <a href="#" id="tab-mahasiswa" class="tab-link px-3 border-b-2 border-blue-500 text-blue-500 dark:text-white dark:border-white pb-1.5" onclick="switchTab('mahasiswa')">Mahasiswa</a>
            <a href="#" id="tab-mata-kuliah" class="tab-link px-3 border-b-2 border-transparent text-gray-600 dark:text-gray-400 pb-1.5" onclick="switchTab('mata-kuliah')">Mata Kuliah</a>
            <a href="#" id="tab-dosen" class="tab-link px-3 border-b-2 border-transparent text-gray-600 dark:text-gray-400 pb-1.5 sm:block hidden" onclick="switchTab('dosen')">Dosen</a>
            <a href="#" id="tab-perkuliahan" class="tab-link px-3 border-b-2 border-transparent text-gray-600 dark:text-gray-400 pb-1.5 sm:block hidden" onclick="switchTab('perkuliahan')">Perkuliahan</a>
        </div>
        </div>
        @yield('content')
      </div>
    </div>
  </div>
</div>
<!-- partial -->
<script>
  // Function to switch tabs and display corresponding table
  function switchTab(tabName) {
      // Hide all tables
      const tables = document.querySelectorAll('table');
      tables.forEach(table => table.classList.add('hidden'));

      // Remove active styles from all tab links
      const tabLinks = document.querySelectorAll('.tab-link');
      tabLinks.forEach(link => {
          link.classList.remove('border-blue-500', 'text-blue-500', 'dark:text-white', 'dark:border-white');
          link.classList.add('text-gray-600', 'dark:text-gray-400', 'border-transparent');
      });

      // Show the selected table
      document.getElementById(`table-${tabName}`).classList.remove('hidden');

      // Add active styles to the selected tab
      document.getElementById(`tab-${tabName}`).classList.remove('text-gray-600', 'border-transparent');
      document.getElementById(`tab-${tabName}`).classList.add('border-blue-500', 'text-blue-500', 'dark:text-white', 'dark:border-white');
  }

  // Set default active tab and table
  switchTab('mahasiswa');
</script>

@stack('page-script')
<script src="
https://cdn.jsdelivr.net/npm/lucide@0.446.0/dist/cjs/lucide.min.js
"></script>

</body>
</html>
