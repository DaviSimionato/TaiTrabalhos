<header class="border-[#C4C7CC] border-b-[1px]">
    @if (request()->user() == null || request()->user()->type != "company")
    <div class="container h-[80px] grid grid-cols-3 items-center justify-between">
    @else
    <div class="container h-[80px] flex items-center justify-between">
    @endif
        <div class="logo select-none">
            <a href="/">
                <img 
                src="{{asset("imagens/logo-215.png")}}" 
                alt="logo" 
                class="h-[60px] pointer-events-none">
            </a>
        </div>
        <div class="modalities font-semibold text-sm h-[100%] flex items-center select-none justify-center">
            @if (request()->user() == null || request()->user()->type != "company")

                <a href="/vagas" class="mx-5 h-[100%] flex items-center 
                hover:border-b-4 border-tt">
                    Vagas
                </a>
                <a href="/empresas" class="mx-5 h-[100%] flex items-center 
                hover:border-b-4 border-tt">
                    Empresas
                </a>
                <a href="/salarios" class="mx-5 h-[100%] flex items-center 
                hover:border-b-4 border-tt">
                    Salários
                </a>
            
            @else

                <a href="/vagas" class="mx-5 h-[100%] flex items-center 
                hover:border-b-4 border-tt">
                    Vagas
                </a>
                <a href="/cadastrar-vaga" class="mx-5 h-[100%] flex items-center 
                hover:border-b-4 border-tt">
                    Cadastrar uma vaga
                </a>
                <a href="/empresas" class="mx-5 h-[100%] flex items-center 
                hover:border-b-4 border-tt">
                    Vagas cadastradas
                </a>
                <a href="/empresas" class="mx-5 h-[100%] flex items-center 
                hover:border-b-4 border-tt">
                    Empresas
                </a>
                <a href="/salarios" class="mx-5 h-[100%] flex items-center 
                hover:border-b-4 border-tt">
                    Salários
                </a>
                
            @endif
            @guest
            <a href="/para-empresas" class="mx-5 h-[100%] flex items-center 
            hover:border-b-4 border-tt">
                Para empresas
            </a>
            @endguest
        </div>
        <div class="font-semibold text-sm p-2 justify-self-end user">
            @guest
            <a href="/login" class="flex items-center p-2 border-[2px] justify-center rounded
            border-black">
                <span class="material-symbols-outlined px-1">
                    login
                </span>
                Entrar
            </a>
            @else
            <div class="text-xl flex items-center">
                <div class="search px-3 cursor-pointer flex items-center">
                    <input type="text" class="border-2 border-black outline-none rounded
                    text-sm font-medium pl-1 hidden">
                    <span class="material-symbols-outlined hover:bg-gray-200 rounded-full p-1
                    ml-3">
                        search
                    </span>
                </div>
                <div class="notifications px-3 cursor-pointer relative flex justify-end">
                    <span class="material-symbols-outlined hover:bg-gray-200 rounded-full p-1">
                        notifications
                    </span>
                    <div class="absolute notifications-hub bg-white border border-[#C4C7CC] px-6 
                    py-3 mt-10 rounded text-sm hidden w-[600px]">
                        <div class="flex flex-col">
                            {{-- <a href="/user/profile" class="py-1 border-b border-[#C4C7CC] 
                            hover:bg-gray-50 rounded">
                                Meu perfil
                            </a>
                            <a href="/user/profile/settings" class="py-1 border-b border-[#C4C7CC] 
                            hover:bg-gray-50 rounded">
                                Configurações
                            </a>
                            <a href="/logout" class="py-1 hover:bg-gray-50 rounded">
                                Sair
                            </a> --}}
                            <div class="flex justify-center items-center">
                                <h2 class="font-semibold text-xl opacity-75">
                                    Nenhuma notificação
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-3 acc relative cursor-pointer flex justify-center">
                    <span class="material-symbols-outlined hover:bg-gray-200 rounded-full p-1 h-[32px]">
                        account_circle
                    </span>
                    <div class="absolute acc-opt hidden bg-white border border-[#C4C7CC] px-6 
                    py-3 mt-10 rounded text-sm ">
                        <div class="flex flex-col">
                            <a href="/user/profile" class="py-1 border-b border-[#C4C7CC] 
                            hover:bg-gray-100 rounded">
                                Meu perfil
                            </a>
                            <a href="/user/profile/favorite-listings" class="py-1 border-b border-[#C4C7CC] 
                            hover:bg-gray-100 rounded">
                                Vagas salvas
                            </a>
                            <a href="/user/profile/applied-listings" class="py-1 border-b border-[#C4C7CC] 
                            hover:bg-gray-100 rounded">
                                Candidaturas
                            </a>
                            <a href="/user/profile/settings" class="py-1 border-b border-[#C4C7CC] 
                            hover:bg-gray-100 rounded">
                                Configurações
                            </a>
                            <a href="/logout" class="py-1 hover:bg-gray-100 rounded">
                                Sair
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endguest
        </div>
    </div>
    @auth
    @if ((request()->user()->name == null || request()->user()->user_name == null) && request()->user()->type != "company")
        <div class="flex items-center justify-center bg-tt border-t finalizarConta">
            <a href="/user/profile" class="text-base font-semibold p-2 text-white select-none hover:underline">
                Finalize a configuração da sua conta 
            </a>
        </div>
    @endif
    @if (request()->user()->name != null && request()->user()->user_name != null && !request()->user()->email_verified)
        <div class="flex items-center justify-center bg-tt border-t">
            <a href="/user/config/confirmar-email" class="text-base font-semibold p-2 text-white select-none hover:underline">
                Confirme seu e-mail
            </a>
        </div>
    @endif
    @endauth
</header>
<script src="{{asset("js/header.js")}}"></script>