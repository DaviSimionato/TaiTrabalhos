<x-layout title="Perfil | {{$user->name ?? 'Usuário'}}" column="true">
    <div class="flex container mt-4">
        <div class="w-[25%] sticky h-[350px] top-2 mb-6 select-none">
            <div class="flex flex-col">
                <div class="flex">
                    <svg class="icon_Icon__ptI3R" width="80" height="80" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" aria-live="polite" aria-hidden="false"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.8 28.8c0 13.255 10.745 24 24 24s24-10.745 24-24-10.745-24-24-24-24 10.745-24 24zm24 4.8a9.6 9.6 0 0 1-9.6-9.6 9.6 9.6 0 0 1 9.6-9.6 9.6 9.6 0 0 1 9.6 9.6 9.6 9.6 0 0 1-9.6 9.6zm15.252 12.147A22.716 22.716 0 0 1 28.8 51.6a22.715 22.715 0 0 1-15.252-5.853C16.213 39.992 22.04 36 28.8 36s12.587 3.992 15.252 9.747z" fill="#C4C7CC"></path></svg>
                    <div class="flex flex-col justify-center">
                        <h2 class="mx-2 font-medium text-lg">
                            {{ $user->user_name ?? "Usuário"}}
                        </h2>
                        <h3 class="mx-2 text-base">
                            {{ $user->email ?? "email"}}
                        </h3>
                    </div>
                </div>
                <div class="border border-[#D7D7D7] rounded w-[80%] block
                mx-auto mt-8 mb-6"></div>
                <div class="flex flex-col">
                    <div class="mb-5 group">
                        <a href="/user/profile" class="mx-4 flex">
                            <div class="border-4 rounded-sm mr-2 border-[#D7D7D7] invisible
                            group-hover:visible animate-pulse"></div>
                            <p>
                                Perfil
                            </p>
                        </a>
                    </div>
                    <div class="mb-5 group">
                        <a href="/user/profile/favorite-listings" class="mx-4 flex">
                            <div class="border-4 rounded-sm mr-2 border-[#D7D7D7] invisible
                            group-hover:visible animate-pulse"></div>
                            <p>
                                Vagas salvas
                            </p>
                        </a>
                    </div>
                    <div class="mx-4 mb-5 flex">
                        <div class="border-4 rounded-sm mr-2 border-[#D7D7D7]"></div>
                        <p>
                            Vagas que participo
                        </p>
                    </div>
                    <div class="mb-5 group">
                        <a href="/user/profile/settings" class="mx-4 flex">
                            <div class="border-4 rounded-sm mr-2 border-[#D7D7D7] invisible
                            group-hover:visible animate-pulse"></div>
                            <p>
                                Configurações da conta
                            </p>
                        </a>
                    </div>
                    <div class="border border-[#D7D7D7] rounded w-[80%] block
                    mx-auto mt-6 mb-8"></div>
                    <a href="/logout" class="mx-auto text-center border border-black
                    w-[80%] rouded p-2 rounded font-medium flex justify-center">
                        Sair
                        <span class="ml-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="m12.02 6.981 4.687 4.664a.5.5 0 0 1 0 .708l-4.686 4.687-1.06-1.06 3.228-3.23H2v-1.5h12.184l-3.222-3.206 1.059-1.063Z" fill="#000"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 4.5c-.69 0-1.25.56-1.25 1.25v3.393H6V5.75A2.75 2.75 0 0 1 8.75 3h9.5A2.75 2.75 0 0 1 21 5.75v11.995a2.75 2.75 0 0 1-2.757 2.75l-9.5-.026A2.75 2.75 0 0 1 6 17.72v-2.535h1.5v2.535a1.25 1.25 0 0 0 1.247 1.25l9.5.026a1.25 1.25 0 0 0 1.253-1.25V5.75c0-.69-.56-1.25-1.25-1.25h-9.5Z" fill="#000"></path></svg>  
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-[55%] border rounded-[10px] border-[#D7D7D7]">
            <div class="p-6">
                <h1 class="text-2xl font-medium my-6">
                    Vagas que participo
                </h1>
                @if (empty($vagas))
                    <h2 class="opacity-80 text-xl font-medium pt-8 text-center">
                        Você não está concorrendo a nenhuma vaga
                    </h2>
                @endif
                @foreach ($vagas as $vaga)
                <div class="border-[#D7D7D7] border min-w-[300px] mb-4 
                min-h-[80px] rounded-lg p-4 vaga-card">
                    <div class="flex items-center justify-between">
                        <div class="w-[350px]">
                            <p class="p-2 pb-0 font-medium">
                                {{ $vaga->title }}
                            </p>
                            <p class="pl-4 text-sm">
                                {{ $vaga->city->name}}, 
                                {{ $vaga->state->state}}
                            </p>
                            <div class="flex justify-between text-sm px-4">
                                <p class="font-medium">
                                    {{ $vaga->salary}}
                                </p>
                                <p class="">
                                    {{ $vaga->releaseDate }}
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center w-[220px] mx-3">
                            <img src="{{ asset($vaga->company->logo) }}" alt="logo" 
                            width="32" class="rounded">
                            <p class="ml-2">
                                {{ $vaga->company->name }}
                            </p>
                            <span class="mx-2">
                                -
                            </span>
                            <p>
                                {{ $vaga->modality }}
    
                            </p>
                        </div>
                    </div>
                    <div class="border border-[#D7D7D7] my-4"></div>
                    <p class="text-center text-sm font-medium">
                        Número de candidatos: {{ $vaga->candidate_count }}
                    </p>
                    <div class="border border-[#D7D7D7] my-4"></div>
                    <div class="w-[90%] flex justify-between my-4 mt-8 mx-auto">
                        <small class="small_Small__0Prbr">
                            <a href="/vaga/{{$vaga->id}}" target="_blank" 
                                class="bg-orange-500 text-white p-3 rounded font-medium
                                hover:bg-orange-400">
                                Ver detalhes da vaga
                            </a>
                        </small>
                        <small class="small_Small__0Prbr">
                            <a href="{{ Storage::url($vaga->resume) }}" target="_blank" 
                                class="bg-blue-500 text-white p-3 rounded font-medium
                                hover:bg-blue-400">
                                Visualizar cúrriculo enviado
                            </a>
                        </small>
                        <small class="btnExcluir">
                            <a class="bg-red-500 text-white p-3 rounded font-medium 
                            hover:bg-red-400 cursor-pointer select-none">
                                Excluir participação
                            </a>
                            <a href="/user/profile/delete-application/{{ $vaga->id }}" 
                            class="hidden excluir"></a>
                        </small>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="fixed w-[100vw] h-[100vh] overflow-hidden bg-black bg-opacity-60 hidden items-center 
    justify-center overlay z-50">
        <div class="bg-white rounded p-8 max-w-[400px]">
            <p class="font-semibold my-3 text-center">
                Tem certeza que deseja remover sua participação desta vaga?
            </p>
            <div class="flex my-6 justify-around max-w-[230px] mx-auto">
                <p class="cancel p-3 text-white bg-blue-500 hover:bg-blue-400 cursor-pointer 
                rounded select-none">
                    Cancelar
                </p>
                <p class="remove p-3 text-white bg-red-500 hover:bg-red-400 cursor-pointer 
                rounded select-none">
                    Remover
                </p>
            </div>
            <p class="text-center text-sm">
                Isto não garante que a empresa deixe de entrar em contato caso já tenha visto seu cúrriculo
            </p>
        </div>
    </div>
</x-layout>
<script>
    if(document.querySelector(".finalizarConta")) {
        document.querySelector(".finalizarConta").remove();
    }
    let id = null;
    let btnExcluir = document.querySelectorAll(".btnExcluir");
    let btnExcluirLink = document.querySelectorAll(".btnExcluir .excluir");
    let overlay = document.querySelector(".overlay");
    let btnCancelar = document.querySelector(".cancel");
    let btnConfirmar = document.querySelector(".remove");
    btnExcluir.forEach((btn, i)=> {
        btn.addEventListener("click", ()=> {
            id = i;
            overlay.classList.replace("hidden", "flex");
        });
    })
    btnCancelar.addEventListener("click", ()=> {
        id = null;
        overlay.classList.replace("flex", "hidden");
    });
    btnConfirmar.addEventListener("click", ()=> {
        if(id != null) {
            btnExcluirLink[id].click();
        }
    });
    // let vagas = document.querySelectorAll(".vaga-card");
    // let vagasLinks = document.querySelectorAll(".vaga-card a");
    // vagas.forEach((vaga, i)=> {
    //     vaga.addEventListener("click", ()=> {
    //         vagasLinks[i].click();
    //     });
    // });
</script>