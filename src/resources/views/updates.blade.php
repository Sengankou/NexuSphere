<x-app-layout>
    <x-slot name="header">
        <h2 class="font-medium text-2xl text-white leading-tight">
            {{ __('Updates') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800/50 overflow-hidden shadow-none sm:rounded-lg bg-gradient-to-bl from-slate-700/50 ring-1 ring-inset p-4 mb-6">
                <h3 class="text-2xl px-3 py-2 text-white">
                    {{ __("Updates Infomation") }}
                </h3>

                {{-- English --}}
                {{-- <p class="text-gray-300 text-base leading-relaxed px-10 py-2">
                    {{ __("This page is for the latest updates and news about NexuSphere.") }}
                </p>

                <h2 class="text-xl px-10 py-2 text-white">
                    {{ __("Ver 0.1.0 (2024/02/18)") }}
                </h2>
                <p class="text-gray-300 text-lg leading-relaxed px-14 py-2">
                    {{ __("This is the first version of NexuSphere. It is a simple website that uses Laravel and Livewire.") }}
                    <br>
                    {{ __("The website is still under development, so there may be some bugs and issues. Please report any bugs or issues to the developer from the ")}}
                    <a href="{{ route('feedbacks')}}" class="underline hover:text-red-400">Feedbacks</a>
                    {{ __(" page.") }}
                </p> --}}

                {{-- 日本語 --}}
                <p class="text-gray-300 text-base leading-relaxed px-10 py-2">
                    {{ __("このページはNexuSphereの最新のアップデートやニュースを掲載しています。") }}
                </p>

                <h2 class="text-xl px-10 py-2 text-white">
                    {{ __("Ver 0.1.0 (2024/02/18)") }}
                </h2>
                <p class="text-gray-300 text-lg leading-relaxed px-14 py-2">
                    {{ __("NexuSphereの最初のバージョンです。LaravelとLivewireを使用したシンプルなウェブアプリケーションです。") }}
                    <br>
                    {{ __("当ウェブアプリケーションはまだ開発中ですので、いくつかのバグや問題があるかもしれません。バグや問題があれば、開発者に") }}
                    <a href="{{ route('feedbacks')}}" class="underline hover:text-red-400">Feedbacks</a>
                    {{ __("ページから報告してください。") }}
                </p>
                <p class="text-gray-300 text-lg  leading-relaxed px-14">
                    {{ __("機能") }}
                </p>
                    <ul class="list-disc text-gray-300 text-lg leading-relaxed px-28 py-2">
                        <li>
                            <p class="">
                                {{ __("アクセスリンクの追加と削除") }}
                            </p>
                        </li>
                        <li>
                            <p class="">
                                {{ __("開発者へのFeedbackページ") }}
                            </p>
                        </li>
                    </ul>
            </div>
        </div>
    </div>

</x-app-layout>
