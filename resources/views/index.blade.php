<x-layout title="Taí Trabalhos">
    <main class="">
        <section class="container">
            <h2 class="my-10 font-semibold text-tt text-5xl text-center select-none">
                Seu próximo emprego está aqui!
            </h2>
            @guest
                <x-login-form/>
            @else
                <x-job-search-bar/>
            @endguest
        </section>
        <div class="border my-10"></div>
        <section class="container">
            <h2 class="mt-3 font-medium text-2xl text-center max-w-[260px] mb-4 mx-auto">
                Aproveite o processo e não se estresse 
            </h2>
            <p class="text-base max-w-[360px] text-center mx-auto">
                Fornecemos um processo rápido e simples
                tanto para você que está aplicando
                quanto para quem está recebendo 
                sua aplicação
            </p>
            <div class="mt-14 mb-16 flex justify-around mx-7">
                <div class="flex items-center justify-center flex-col">
                    <span class="material-symbols-outlined text-4xl p-3
                    w-[65px] h-[65px] border-[3px] border-black rounded-full mb-2">
                        mobile_friendly
                    </span>
                    <p class="text-center max-w-[180px] h-[100px]">
                        Encontre e candidate-se a vagas
                    </p>
                </div>
                <div class="flex items-center justify-center flex-col">
                    <span class="material-symbols-outlined text-4xl p-3
                    w-[65px] h-[65px] border-[3px] border-black rounded-full mb-2">
                        notifications
                    </span>
                    <p class="text-center max-w-[180px] h-[100px]">
                        Seja notificado quando 
                        novas vagas surgirem
                    </p>
                </div>
                <div class="flex items-center justify-center flex-col">
                    <span class="material-symbols-outlined text-4xl p-3
                    w-[65px] h-[65px] border-[3px] border-black rounded-full mb-2">
                        location_on
                    </span>
                    <p class="text-center max-w-[180px] h-[100px]">
                        Encontre empresas 
                        próximas a você 
                    </p>
                </div>
                <div class="flex items-center justify-center flex-col">
                    <span class="material-symbols-outlined text-4xl p-3
                    w-[65px] h-[65px] border-[3px] border-black rounded-full mb-2">
                        star
                    </span>
                    <p class="text-center max-w-[180px] h-[100px]">
                        Avalie empresas que você 
                        já trabalhou
                    </p>
                </div>
            </div>
            <h2 class="font-medium text-2xl text-center mb-2 mx-auto">
                Veja as vagas mais procuradas
            </h2>
            <div class="vagasMaisProcuradas flex flex-col items-center">
                <div class="mt-4 loading">
                    {{-- <x-loading-wheel size="32"/>  --}}
                    <p class="font-medium text-xl py-2 text-center cidade">
                        Desenvolvedor FrontEnd
                    </p>
                    <p class="font-medium text-xl py-2 text-center cidade">
                        Desenvolvedor BackEnd
                    </p>
                    <p class="font-medium text-xl py-2 text-center cidade">
                        Engenheiro de Software
                    </p>
                    <p class="font-medium text-xl py-2 text-center cidade">
                        Arquiteto de Software
                    </p>
                    <p class="font-medium text-xl py-2 text-center cidade">
                        Adestrador de ovelha
                    </p>
                </div>
            </div>
        </section>
    </main>
</x-layout>
<script src={{asset("js/index.js")}}></script>