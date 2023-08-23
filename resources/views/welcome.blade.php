<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Livewire Project</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <div class="flex flex-col items-center w-full h-[50vh] z-10 fixed p-3 md:justify-center">
        <strong class="container w-full text-4xl md:text-4xl lg:text-6xl text-white font-extrabold mb-4">Every home is a
            destination</strong>
        <p class="container font-light text-white mb-6 text-xl">The best of Luxury Retreats is now Flowbite Luxe—offering
            the world's most extraordinary homes with the highest standard of service.</p>
        <div class="container bg-white w-full rounded p-3">
            <div class="grid gap-3">

                <div>
                    <div class="fixed m-3 text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input
                        class="w-full p-2.5 pl-10 bg-slate-50 outline-none rounded-lg border-2 border-slate-300 focus:border-2 focus:border-sky-500"
                        type="text" name="estado" id="estado" placeholder="Estado">
                </div>

                <div>
                    <div class="fixed m-3 text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input
                        class="w-full p-2.5 pl-10 bg-slate-50 outline-none rounded-lg border-2 border-slate-300 focus:border-2 focus:border-sky-500"
                        type="text" name="cidade" id="cidade" placeholder="Cidade">
                </div>

                <div>
                    <div class="fixed m-3 text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input
                        class="w-full p-2.5 pl-10 bg-slate-50 outline-none rounded-lg border-2 border-slate-300 focus:border-2 focus:border-sky-500"
                        type="text" name="bairro" id="bairro" placeholder="Bairro">
                </div>

            </div>

            <div class="w-full grid grid-rows-3 gap-3 mt-3">

                <div>
                    <div class="fixed m-3 text-slate-400">
                        <svg class="h-8 w-8 text-gray-500" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M3 7v11m0 -4h18m0 4v-8a2 2 0 0 0 -2 -2h-8v6" />
                            <circle cx="7" cy="10" r="1" />
                        </svg>
                    </div>
                    <input
                        class="w-full p-2.5 pl-10 bg-slate-50 outline-none rounded-lg border-2 border-slate-300 focus:border-2 focus:border-sky-500"
                        type="text" name="quartos" id="quartos" placeholder="Quartos">
                </div>

                <div>
                    <div class="fixed m-3 text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input
                        class="w-full p-2.5 pl-10 bg-slate-50 outline-none rounded-lg border-2 border-slate-300 focus:border-2 focus:border-sky-500"
                        type="text" name="suites" id="suites" placeholder="Suites">
                </div>

                <div>
                    <div class="fixed m-3 text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input
                        class="w-full p-2.5 pl-10 bg-slate-50 outline-none rounded-lg border-2 border-slate-300 focus:border-2 focus:border-sky-500"
                        type="text" name="banheiros" id="banheiros" placeholder="Banheiros">
                </div>
            </div>
            <div>
                <div>Novo</div>
                <div>Lançamento</div>
                <div>Usado</div>
            </div>
        </div>
    </div>
    <div class="bg-[url('/public/storage/hero.jpg')] bg-cover bg-no-repeat bg-center h-[50vh] brightness-[0.3]"></div>


    @livewireScripts
</body>

</html>
