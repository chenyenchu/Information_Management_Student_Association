<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>輔仁大學資管系學會</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer ></script>
    <script src="./assets/js/init-alpine.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer ></script>
    <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script>
    
  </head>
  <body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
      <!-- Desktop sidebar -->
      <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a class="ml-5 text-lg font-bold text-gray-800 dark:text-gray-200" href="index.php"><img src="assets/img/logo.png" width="200"></a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" 
                href="index.php">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                <span class="ml-4">最新消息</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
              <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="modals.php">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
                <span class="ml-4">活動介紹</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" 
                href="forms_2.php">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                <span class="ml-4">活動報名</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="cards.php">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                  <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>
                <span class="ml-4">報名回覆</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="tables.php">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
                <span class="ml-4">會員管理</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="profile.php">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                <span class="ml-4">個人檔案</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
          <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
            <!-- Mobile hamburger -->
            <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="toggleSideMenu" aria-label="Menu">
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"></path>
              </svg>
            </button>
            <!-- Search input -->
            <?php
              $searchtxt = $_POST['searchtxt'];
            ?>
                <form action="index.php" method="post">
                <!-- <input type="hidden" name="method" value="index"> -->
                    <div class="flex justify-center flex-1 lg:mr-32">
                    <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                        <div class="absolute inset-y-0 flex items-center pl-2">
                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                        </svg>
                        </div>
                        <input class="w-full pl-10 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                        type="text" placeholder="搜尋" aria-label="Search" name="searchtxt" value="<?php echo $searchtxt; ?>">
                    </div>
                    </div>
                </form>
            <ul class="flex items-center flex-shrink-0 space-x-6">
              <!-- Profile menu -->
              <li class="relative">
                <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none" @click="toggleProfileMenu"
                  @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                  <img class="object-cover w-8 h-8 rounded-full" src="assets/img/1457773.jpg" alt="profile" aria-hidden="true">
                </button>
                <template x-if="isProfileMenuOpen">
                  <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                    aria-label="submenu">
                    <li class="flex">
                      <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="profile.php">
                        <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                          <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span>個人檔案</span>
                      </a>
                    </li>
                    <li class="flex">
                      <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="login.html">
                        <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                          <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                        <span>登出</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
            </ul>
          </div>
        </header>
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">活動介紹</h2>
            <!-- CTA -->
            <div class="max-w-2xl px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" id="party">
              <p class="mb-4 text-xl text-gray-600 dark:text-gray-400">
                <b>《耶誕晚會》</b>
                  
              </p>
              <img src="assets/img/005432.png" width="350">
              <p class="mb-4 text-sm text-gray-600 dark:text-gray-400"></p>
                今年耶誕節還沒想到要跟誰過？<br>
                去哪裡過嗎？<br>
                煩惱這些問題前，不如來參加今年的耶誕舞會吧！<br>
                相揪親朋好友一起來十一系一會聯合舞會吧！<br>
                在冷冷的耶誕夜晚裡，與舞會中心儀的對象來一場邂逅吧～<br><br>
                <b>《Met You That Night 邂逅》</b><br>
                法律x財法x醫資x資管x廣告x電機<br>
                生科x宗教x社會x織品x會計x中友<br><br>
                時間：2022/12/10(六)&nbsp;18:00～21:20(17:30開放進場)<br>
                地點：新莊典華會館<br>
                費用：500元/人
                <div>
                  <button class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <a href="forms_2.php">前往報名</a>
                  </button>
                </div>
              </p>
            </div>

            <div class="max-w-2xl px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" id="camp">
              <p class="mb-4 text-xl text-gray-600 dark:text-gray-400">
                <b>《宿營》</b>
                
              </p>
              <img src="assets/img/215451.png" width="400">
              <p class="mb-4 text-sm text-gray-600 dark:text-gray-400"></p>
                想在大學期間留下美好回憶嗎？<br>
                想更加認識同屆的同學嗎？<br>
                想認識學長姐找不到機會嗎？<br>
                想體驗在三天兩夜內瘋狂嗨翻天嗎？<br>
                來參加宿營就對了！！<br>
                我們準備了許多豐富有趣的活動<br>
                快來報名吧～～<br><br>
                報名時間到10/17(一)截止(*°▽°*)<br>
                時間：11/11～11/13<br>
                地點：新竹萬瑞森林園區<br>
                費用：3500元/人<br>
                <div>
                  <button class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <a href="forms_2.php">前往報名</a>
                  </button>
                </div>
              </p>
            </div>

            <div class="max-w-2xl px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" id="uniform">
              <p class="mb-4 text-xl text-gray-600 dark:text-gray-400">
                <b>《制服趴》</b>
                
              </p>
              <img src="assets/img/004529.png" width="350">
              <p class="mb-4 text-sm text-gray-600 dark:text-gray-400"></p>
                萬眾期待的制服趴來啦！<br>
                目標是清醒的離開活動，誰醉誰就輸了～<br>
                對自己酒量很有自信的一定要來！絕對夠你爆喝一波(/≧▽≦)/<br>
                不太能喝酒的同學沒有關係！我們也有準備無酒精飲料<br>
                你們可以在旁邊看喝醉的同學發酒瘋發爆他們限動('▽')<br><br>
                我們精心準備了很多的<b>團康遊戲</b>&nbsp;還有很多精彩的<b>表演</b>(～￣▽￣)～<br>
                快點拉著你的朋友手牽手一起來報名這場制服轟趴！！<br><br>
                <b>！注意事項！</b><br>
                參加活動當天務必要穿著<b>「高中制服」</b><br>
                來之前怕吃不飽的可以先吃一點東西墊肚子<br>
                想要喝水要自己帶水<br><br>
                時間：9/30(五)&nbsp;18:00～21:30&nbsp;(17:30開放入場)<br>
                地點：潛水艇的天空<br>
                費用：200元/人<br>
                (繳系費不用交錢)<br>
                (活動當天帶著錢來活動地點)
                <div>
                  <button class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <a href="forms_2.php">前往報名</a>
                  </button>
                </div>
              </p>
            </div>

            <div class="max-w-2xl px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" id="locker">
              <p class="mb-4 text-xl text-gray-600 dark:text-gray-400">
                <b>《抽系櫃》</b>
                
              </p>
              <p class="mb-4 text-sm text-gray-600 dark:text-gray-400"></p>
                覺得上學書包很重嗎？<br>
                想要輕盈的走在風華廣場嗎？<br>
                快來報名抽系櫃！<br><br>
                <b>！注意事項！</b><br>
                有繳系費的人才有報名資格<br>
                還沒繳的也可以在每個星期四中午去系學會繳錢<br><br>
                記得觀看9/16(五)&nbsp;12:30的線上直播<br>
                看看你是不是幸運的朋朋喔！<br>
                <div>
                  <button class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <a href="forms_2.php">前往報名</a>
                  </button>
                </div>
              </p>
            </div>

            <div class="max-w-2xl px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" id="imCamp">
              <p class="mb-4 text-xl text-gray-600 dark:text-gray-400">
                <b>《資管營》</b>
                
              </p>
              <img src="assets/img/003541.png" width="350">
              <p class="mb-4 text-sm text-gray-600 dark:text-gray-400"></p>
                歡迎加入資管大家庭～<br>
                剛進入大學懵懂的你<br>
                是否想搶先了解大學的生活同學呢？<br>
                是否會害怕一開始就跟不上別人呢？<br>
                是否想要有個已經了解大學的學長姐呢？<br>
                是否想交到一個大學很好的閨蜜或兄弟呢？<br><br>
                期待已久的第一個活動要開始報名囉！<br>
                只要來資管營...保證讓你...搶先認識班上同學～<br>
                認識很多很帥很美的學長姐<br>
                體驗學長姐精心策劃的遊戲<br>
                嗨翻天的緊張感<br>
                了解學校的校園環境！<br><br>
                時間：9/1(四)&nbsp;9:00～17:00<br>
                地點：輔大潛水艇的天空<br>
                費用：100元/人(有繳系費不用錢！)
                <div>
                  <button class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <a href="forms_2.php">前往報名</a>
                  </button>
                </div>
              </p>
            </div>

            <div class="max-w-2xl px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" id="semesterStart">
              <p class="mb-4 text-xl text-gray-600 dark:text-gray-400">
                <b>《新訓的資訊快報》</b>
                
              </p>
              <p class="mb-4 text-sm text-gray-600 dark:text-gray-400"></p>
                時間：9:00<br>
                地點：LM503(利瑪竇大樓)<br>
                有抽<b>直屬活動</b>跟<b>開學典禮</b>！
              </p>
            </div>

            <div class="max-w-2xl px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" id="bed2">
              <p class="mb-4 text-xl text-gray-600 dark:text-gray-400">
                <b>《新生入學寢具領取》</b>
                
              </p>
              <img src="assets/img/225854.png" width="350">
              <p class="mb-4 text-sm text-gray-600 dark:text-gray-400"></p>
                哇勒！快開學了？！<br>
                床墊準備了嗎？<br>
                學校領！免運費Free！<br>
                免大包小包入宿！優雅華麗進校園～<br><br>
                領取時間：2022/8/28(日)～30(二)&nbsp;11:00～14:00<br>
                領取地點：朝橒樓(織品學院)一樓109教室<br><br>
                *網購專區：<a href="https://www.dizhi-omg.com/collections/wibbybedding" target="_blank">https://www.dizhi-omg.com/collections/wibbybedding</a><br>
                *客服平台：<a href="https://lin.ee/lAeebvX" target="_blank">https://lin.ee/lAeebvX </a>或「LINE@ ID：@wibbybedding」
              </p>
            </div>

            <div class="max-w-2xl px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" id="bed">
              <p class="mb-4 text-xl text-gray-600 dark:text-gray-400">
                <b>《新生入學寢具選購》</b>
                
              </p>
              <img src="assets/img/225741.png" width="350">
              <p class="mb-4 text-sm text-gray-600 dark:text-gray-400"></p>
                睡眠佔據了大學三分之一的時間zzz 甚至更久(？<br>
                為何不大一就買品質最好的台灣製寢具<br>
                更重要的是！「到校領取」不用搬到揮汗如雨<br>
                選用紮實內材、專利結構，具備各項無毒認證～此外「款式多又便宜」<br>
                錢錢沒有變不見 只是變成每晚的愛(^3^)<br><br>
                *網購專區：<a href="https://www.dizhi-omg.com/collections/wibbybedding" target="_blank">https://www.dizhi-omg.com/collections/wibbybedding</a><br>
                *客服平台：<a href="https://lin.ee/lAeebvX" target="_blank">https://lin.ee/lAeebvX </a>或「LINE@ ID：@wibbybedding」
              </p>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
