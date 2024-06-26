<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>輔仁大學資管系學會-登入</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/tailwind.output.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="assets/js/init-alpine.js"></script>
  </head>
  <body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="assets/img/689355_n.jpg" alt="Office">
            <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="assets/img/689355_n.jpg" alt="Office">
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                登入
              </h1>
              <!-- <form method="post" action="logincheck.php"> -->
              <form method="post" action="logincheck.php">
                <div>
                  <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">帳號/學號</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                      placeholder="123456789" name="ID" required="required">
                  </label>
                </div>
                <div>
                  <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">密碼</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                      placeholder="**********" type="password" name="pword" required="required">
                  </label>
                </div>
                <br>
                <div class="ml-5">
                  <button class="w-full px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent 
                  rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple disabled">登入
                </div>
            <!-- </form> -->
              </form>
              <hr class="my-8" />
              <a href="https://www.instagram.com/fjuim/">
                <button class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                  Instagram
                </button>
              </a>
              <a href="http://www.im.fju.edu.tw/">
                <button class="flex items-center justify-center w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                  輔大資管系網站
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
