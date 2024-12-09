<x-layout title="Vagas cadastradas" column="true">
    <div class="flex container mt-4 justify-center">
        <div class="w-[75%] border rounded-[10px] border-[#D7D7D7]">
            <div class="p-6">
                <h1 class="text-2xl font-medium my-6">
                    Vagas cadastradas
                </h1>
                @if (empty($vagas))
                    <h2 class="opacity-80 text-xl font-medium pt-8 text-center">
                        Você não tem nenhuma vaga cadastrada
                    </h2>
                @endif
                <div class="rounded border-[#7777] border p-3 flex items-center my-2">
                    <img src="{{asset($company->logo)}}" width="32" class="rounded">
                    <p class="ml-2 text-lg font-medium">
                        {{$company->name}}
                    </p>
                </div>
                @foreach ($vagas as $vaga)
                <div class="border-[#D7D7D7] border min-w-[300px] mb-4 
                min-h-[80px] rounded-lg p-4 vaga-card">
                    <div class="flex items-center justify-between">
                        <div class="w-[550px]">
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
                            <div class="">
                                <div class="flex items-center justify-between">
                                    <p class="titulo font-semibold text-xl">
                                        {{ $vaga->title }}
                                    </p>
                                    <p>
                                        {{ $vaga->releaseDate }}
                                    </p>
                                </div>
                                <p>
                                    <b class="font-medium">Modalidade:</b> <ablueblue class="mx-0.5"/>
                                    {{ $vaga->modality }}
                                </p>
                                <p>
                                    <b class="font-medium">Forma de contratação:</b> <ablueblue class="mx-0.5"/>
                                    {{ strtoupper($vaga->type) }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-center w-[220px] mx-3 mr-6">
                            <h2 class="text-base font-medium">
                                Salário
                            </h2>
                            <div class="flex items-center">
                                <p class="text-[#00a264] text-lg font-semibold">
                                    {{ $vaga->salary}}
                                </p>
                                <p class="text-sm font-medium ml-0.5">
                                    /mês
                                </p>
                            </div>
                            <p class="text-[#647380] text-sm font-semibold">
                                {{ $vaga->city->name}}, 
                                {{ $vaga->state->state}}
                            </p>
                        </div>
                    </div>
                    <p class="mt-1">
                        <b class="font-medium">Descrição:</b>
                    </p>
                    <div class="px-2 line-clamp-3">
                        <p class="opacity-80">
                            {{ $vaga->description }}
                        </p>
                    </div>
                    <div class="border border-[#D7D7D7] my-4"></div>
                    <p class="text-center text-sm font-medium">
                        Número de candidatos: {{ $vaga->candidate_count }}
                    </p>
                    <div class="border border-[#D7D7D7] my-4"></div>
                    <div class="w-[60%] flex justify-between my-4 mt-8 mx-auto">
                        <small class="small_Small__0Prbr">
                            <a href="{{ Storage::url($vaga->resume) }}" target="_blank" 
                                class="bg-blue-500 text-white p-3 rounded font-medium
                                hover:bg-blue-400">
                                Ver candidatos
                            </a>
                        </small>
                        <small class="small_Small__0Prbr">
                            <a href="/vaga/{{$vaga->id}}" target="_blank" 
                                class="bg-green-500 text-white p-3 rounded font-medium
                                hover:bg-green-400">
                                Ver detalhes da vaga
                            </a>
                        </small>
                        <small class="small_Small__0Prbr">
                            <a href="/vaga/{{$vaga->id}}" target="_blank" 
                                class="bg-orange-500 text-white p-3 rounded font-medium
                                hover:bg-orange-400">
                                Editar vaga
                            </a>
                        </small>
                        <small class="btnExcluir">
                            <a class="bg-red-500 text-white p-3 rounded font-medium 
                            hover:bg-red-400 cursor-pointer select-none">
                                Excluir vaga
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
