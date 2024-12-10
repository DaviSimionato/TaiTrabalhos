<x-layout title="Vagas cadastradas" column="true">
    <div class="flex container mt-4 justify-center">
        <div class="w-[75%] border rounded-[10px] border-[#D7D7D7]">
            <div class="p-6">
                <h1 class="text-2xl font-medium my-6">
                    Candidatos a vaga: {{ $vaga->title }}
                </h1>
                @if (empty($candidates))
                    <h2 class="opacity-80 text-xl font-medium pt-8 text-center">
                        Nenhum candidato cadastrado
                    </h2>
                @endif
                <div class="rounded border-[#7777] border p-3 flex items-center my-2">
                    <img src="{{asset($company->logo)}}" width="32" class="rounded">
                    <p class="ml-2 text-lg font-medium">
                        {{$company->name}}
                    </p>
                </div>
                @foreach ($candidates as $candidate)
                <div class="border-[#D7D7D7] border min-w-[300px] mb-4 
                min-h-[80px] rounded-lg p-4 vaga-card">
                    <div class="flex items-center justify-between">
                        <div class="w-[750px]">
                            {{-- <p class="p-2 pb-0 font-medium text-lg">
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
                            </div> --}}
                            <div class="flex items-center">
                                <svg class="icon_Icon__ptI3R" width="80" height="80" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" aria-live="polite" aria-hidden="false"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.8 28.8c0 13.255 10.745 24 24 24s24-10.745 24-24-10.745-24-24-24-24 10.745-24 24zm24 4.8a9.6 9.6 0 0 1-9.6-9.6 9.6 9.6 0 0 1 9.6-9.6 9.6 9.6 0 0 1 9.6 9.6 9.6 9.6 0 0 1-9.6 9.6zm15.252 12.147A22.716 22.716 0 0 1 28.8 51.6a22.715 22.715 0 0 1-15.252-5.853C16.213 39.992 22.04 36 28.8 36s12.587 3.992 15.252 9.747z" fill="#C4C7CC"></path></svg>
                                <div class="mx-3">
                                    <div class="flex items-center justify-between">
                                        <p class="titulo font-semibold text-xl">
                                            Nome:
                                            <b class="text-lg font-medium">
                                                {{ $candidate->name }}
                                            </b>
                                        </p>
                                    </div>
                                    <p class="my-1">
                                        <b class="font-medium">contato:</b> <ablueblue class="mx-0.5"/>
                                        {{ $candidate->email }}
                                    </p>
                                    <p class="my-1">
                                        <b class="font-medium">Local:</b> <ablueblue class="mx-0.5"/>
                                        {{ $candidate->city->name ?? "Não definido" }},
                                        {{ $candidate->state->state ?? "Não definido" }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex flex-col items-center justify-center w-[220px] mx-3 mr-6">
                            <div class="flex items-center">
                                @if ($candidate->resume != null)
                                <small class="small_Small__0Prbr">
                                    <a href="{{ Storage::url($candidate->resume) }}" target="_blank"  
                                        class="bg-blue-500 text-white p-3 rounded font-medium
                                        hover:bg-blue-400">
                                        Ver currículo
                                    </a>
                                </small>
                                @else
                                <small class="small_Small__0Prbr">
                                    <button  
                                        class="bg-gray-400 text-white p-3 rounded font-medium">
                                        Ver currículo
                                    </button>
                                </small>
                                @endif
                            </div>
                            <p class="text-[#647380] text-sm font-semibold">
                                
                            </p>
                        </div>
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
                Tem certeza que deseja remover esta vaga?
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
                Todos os dados desta vaga serão permanentemente apagados.
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