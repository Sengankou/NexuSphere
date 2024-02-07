<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-top bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <p class="font-eczar text-9xl text-shadow-top">
                        NexuSphere
                    </p>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://genshin.hoyoverse.com/ja/character/liyue?char=16" target="_blank" class="scale-100 p-6 bg-gray-800/50 bg-gradient-to-bl from-gray-700/50 via-transparent ring-1 ring-inset ring-white/5 rounded-lg shadow-gray-500/20 shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>


                                <h2 class="mt-6 text-xl font-semibold text-white">夜蘭
                                </h2>

                                <p class="mt-4 text-gray-300 text-sm leading-relaxed">
                                    情報に関する仕事で最も禁忌なのが、当事者からしか情報を得ないことよ。真実の外側には、常に霧がかかっている。だから、様々な情報を集めないといけないの。
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://dic.nicovideo.jp/a/%E3%81%99%E3%81%94%E3%81%8F%E3%83%BB%E3%83%BB%E3%83%BB%E5%A4%A7%E3%81%8D%E3%81%84%E3%81%A7%E3%81%99%E3%83%BB%E3%83%BB%E3%83%BB" target="_blank" class="scale-100 p-6 bg-gray-800/50 bg-gradient-to-bl from-gray-700/50 via-transparent ring-1 ring-inset ring-white/5 rounded-lg shadow-gray-500/20 shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>

                                <h2 class="mt-6 text-xl font-semibold text-white">すごく・・・</h2>

                                <p class="mt-4 text-gray-300 text-sm leading-relaxed">
                                    「ところで　俺のキンタマを見てくれ　こいつをどう思う？」<br>
                                    「すごく・・・大きいです・・・」
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" target="_blank" class="scale-100 p-6 bg-gray-800/50 bg-gradient-to-bl from-gray-700/50 via-transparent ring-1 ring-inset ring-white/5 rounded-lg shadow-gray-500/20 shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>

                                <h2 class="mt-6 text-xl font-semibold text-white">EMT</h2>

                                <p class="mt-4 text-gray-300 text-sm leading-relaxed">
                                    転ぶとわかってても、転んだら痛いし血も出るもんだよ。
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://dic.pixiv.net/a/%E8%A6%9A%E6%82%9F%E3%81%AF%E3%81%84%E3%81%84%E3%81%8B%3F%E3%82%AA%E3%83%AC%E3%81%AF%E3%81%A7%E3%81%8D%E3%81%A6%E3%82%8B" target="_blank" class="scale-100 p-6 bg-gray-800/50 bg-gradient-to-bl from-gray-700/50 via-transparent ring-1 ring-inset ring-white/5 rounded-lg shadow-gray-500/20 shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>

                                <h2 class="mt-6 text-xl font-semibold text-white">第4部</h2>

                                <p class="mt-4 text-gray-300 text-sm leading-relaxed">
                                    覚悟はいいか?オレはできてる
                                </p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-start">
                        <div class="flex items-center gap-4">
                        </div>
                    </div>

                    <div class="ms-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-end sm:ms-0">
                        {{-- Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) --}}
                        by Sengankou
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
