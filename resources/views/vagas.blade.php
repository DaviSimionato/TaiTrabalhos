<x-layout title="Vagas {{ $search }}" column="true">
    <div class="pesquisa py-4">
        <div class="flex justify-center">
            <input type="text" class="border-[#D7D7D7] border-2 rounded-l p-1 pl-2 text-base w-[40%]
            placeholder:pl-2 outline-none focus:border-tt border-r-0 font-medium"
            placeholder="Encontre sua vaga" id="inputPesquisa">
            <div class="flex items-center justify-center bg-tt text-white rounded-r 
            hover:bg-blue-400 cursor-pointer active:bg-tt btnPesquisar">
                <span class="material-symbols-outlined text-white p-2">
                    search
                </span>
            </div>
        </div>
    </div>
    <div class="container vagas pb-5">
        <div class="flex border-[#D7D7D7] justify-center bg-white">
            <div class="border-[#D7D7D7] max-h-[70vh] 
            overflow-y-scroll mr-4">
                @foreach ($vagas as $vaga)
                <div class="border-[#D7D7D7] border-b-2 min-w-[300px] mb-4 
                min-h-[80px] rounded-lg cursor-pointer hover:bg-gray-100 p-2
                vaga-card id-{{$vaga->id}}">
                    <div class="flex items-center">
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
                @endforeach
            </div>
            <div class="border-[#D7D7D7] border-2 max-w-[60%] min-w-[60%] min-h-[70vh] 
            rounded-lg max-h-[70vh] overflow-y-scroll vagaContainer text-[#222]">
                {{-- <div class="w-full h-full flex items-center justify-center loading">
                    <x-loading-wheel size="100"/>
                </div> --}}
                <div class="w-full p-6 vaga">
                    @foreach ($vagas as $vaga)
                    <div class="vagaDescription">
                        <div class="flex items-center">
                            <img src="{{asset($vaga->company->logo)}}" alt="logo" 
                            width="40" class="rounded-lg">
                            <p class="ml-1.5 text-lg font-medium">
                                {{ $vaga->company->name }}
                            </p>
                            <span class="mx-2">
                                -
                            </span>
                            <p>
                                {{ $vaga->releaseDate }}
                            </p>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="">
                                <p class="titulo font-semibold text-2xl mt-5">
                                    {{ $vaga->title }}
                                </p>
                                <p>
                                    <b class="font-medium">Modalidade:</b> <ablueblue class="mx-0.5"/>
                                    {{ $vaga->modality }}
                                </p>
                                <p>
                                    <b class="font-medium">Forma de contratação:</b> <ablueblue class="mx-0.5"/>
                                    {{ strtoupper($vaga->type) }}
                                </p>
                            </div>
                            <div class="flex items-center">
                                @if ($vaga->isFavorite)
                                <div class="removeFavoriteListing ml-5 p-2 mt-2 bg-red-500 rounded
                                cursor-pointer hover:bg-red-600 text-white" title="Remover dos favoritos">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffffff"><path fill="#ffffff" fill-rule="evenodd" d="M19 21.315V3.591C19 2.72 18.306 2 17.469 2H6.53C5.694 2 5 2.721 5 3.59v17.725c0 .17.06.335.17.461a.638.638 0 0 0 .862.1L12 17.601l5.968 4.275a.64.64 0 0 0 .938-.206.703.703 0 0 0 .094-.355ZM6.5 19.696l4.627-3.314a1.5 1.5 0 0 1 1.746 0l4.627 3.314V3.591a.117.117 0 0 0-.043-.091H6.543a.117.117 0 0 0-.043.09v16.106Z" clip-rule="evenodd"></path></svg>
                                    <a href="/user/remove-favorite-listing/{{$vaga->id}}" class="hidden"></a>
                                </div>    
                                @else
                                <div class="ml-5 p-2 mt-2 bg-gray-100 rounded
                                cursor-pointer hover:bg-gray-200 favoriteListing" title="Adicionar aos favoritos">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="#000" fill-rule="evenodd" d="M19 21.315V3.591C19 2.72 18.306 2 17.469 2H6.53C5.694 2 5 2.721 5 3.59v17.725c0 .17.06.335.17.461a.638.638 0 0 0 .862.1L12 17.601l5.968 4.275a.64.64 0 0 0 .938-.206.703.703 0 0 0 .094-.355ZM6.5 19.696l4.627-3.314a1.5 1.5 0 0 1 1.746 0l4.627 3.314V3.591a.117.117 0 0 0-.043-.091H6.543a.117.117 0 0 0-.043.09v16.106Z" clip-rule="evenodd"></path></svg>
                                    <a href="/user/favorite-listing/{{$vaga->id}}" class="hidden"></a>
                                </div>
                                @endif
                                @if (request()->user()->type != "company")

                                @if ($vaga->isApplied)
                                <div class="mt-2 p-4 py-2.5 ml-5 text-white bg-tt 
                                rounded font-medium flex items-center
                                quickApply">
                                    <svg viewBox="0 0 24 24" width="24" height="24" fill="#fff" class="EasyApplyButton_bolt__6VJWS"><path fill="currentColor" d="M6.049 13.945 14.69 2.104c.16-.219.505-.063.447.2l-1.678 7.639h5.008a.25.25 0 0 1 .202.397l-8.642 11.841c-.16.219-.505.064-.447-.2l1.678-7.638H6.25a.25.25 0 0 1-.201-.398Z"></path></svg>
                                    <a href="#" 
                                    class="pointer-events-none select-none">
                                        Usuário já candidatado
                                    </a>
                                </div>    
                                @else
                                <div class="mt-2 p-4 py-2.5 ml-5 text-white bg-tt 
                                rounded font-medium hover:bg-ttLight flex items-center
                                quickApply cursor-pointer">
                                    <svg viewBox="0 0 24 24" width="24" height="24" fill="ffffff" class="text-white"><path fill="currentColor" d="M6.049 13.945 14.69 2.104c.16-.219.505-.063.447.2l-1.678 7.639h5.008a.25.25 0 0 1 .202.397l-8.642 11.841c-.16.219-.505.064-.447-.2l1.678-7.638H6.25a.25.25 0 0 1-.201-.398Z"></path></svg>
                                    <a href="/listing/apply/{{$vaga->id}}" 
                                    class="pointer-events-none select-none">
                                        Candidatura rápida
                                    </a>
                                </div>    
                                @endif

                                @endif
                            </div>
                        </div>
                        <div class="mt-8">
                            <h2 class="my-2 font-semibold">
                                Descrição da vaga:
                            </h2>
                            <p>
                                {{ $vaga->description }}
                            </p>
                        </div>
                        <div class="mt-8">
                            <h2 class="my-2 font-semibold">
                                Benefícios:
                            </h2>
                            @foreach ($vaga->benefits as $benefit)
                                <p class="pl-5 my-1 font-medium">
                                    • {{ $benefit }}
                                </p>
                            @endforeach
                        </div>
                        <div class="my-8 border border-[#D7D7D7]"></div>
                        <div class="">
                            <h2 class="text-xl font-semibold">
                                Salário divulgado
                            </h2>
                            <div class="border border-[#D7D7D7] rounded my-4
                            p-6 bg-gray-50">
                                <div class="flex items-center">
                                    <p class="text-[#00a264] text-3xl font-semibold">
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
                        <div class="my-8 border border-[#D7D7D7]"></div>
                        <h2 class="text-xl font-semibold">
                            Tags: 
                        </h2>
                        <div class="flex items-center justify-start mt-4 select-none">
                        @foreach ($vaga->tags as $tag)
                        @if (!empty(trim($tag)))
                            <p class="p-1 px-3 ml-5 my-1 font-medium text-white 
                            bg-tt rounded text-center">
                                {{ $tag }}
                            </p>
                        @endif
                        @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>
<script>
    $("footer").remove();
    $("#inputPesquisa").on("keypress", function(e) {
        if(e.key == "Enter") {
            window.location.href = `/vagas/${this.value.replace(/\s/g, '-')}`;
        }
    });
    $(".btnPesquisar").on("click", ()=> {
        if($("#inputPesquisa").val().trim() != "") {
            window.location.href = `/vagas/${$("#inputPesquisa").val().replace(/\s/g, '-')}`;
        }
    });
    const vagas = document.querySelectorAll(".vagas .vaga-card");
    const vagasDescription = document.querySelectorAll(".vagas .vagaDescription");
    if(document.querySelectorAll(".favoriteListing")) {
        let favoriteListing = document.querySelectorAll(".favoriteListing");
        let favoriteListingLink = document.querySelectorAll(".favoriteListing a");
        favoriteListing.forEach((fav, i)=> {
            fav.addEventListener("click", ()=> {
                favoriteListingLink[i].click();
            });
        });
    }
    if(document.querySelectorAll(".removeFavoriteListing")) {
        let favoriteListing = document.querySelectorAll(".removeFavoriteListing");
        let favoriteListingLink = document.querySelectorAll(".removeFavoriteListing a");
        favoriteListing.forEach((fav, i)=> {
            fav.addEventListener("click", ()=> {
                favoriteListingLink[i].click();
            });
        });
    }    

    vagas.forEach((vaga, i)=> {
        vagasDescription[i].classList.add("hidden");
        vaga.addEventListener("click", ()=> {
            vagasDescription.forEach((vagaDescription, i)=> {
                vagaDescription.classList.replace("block", "hidden");
                vagas[i].classList.remove("border-2", "bg-gray-50");
            });
            vagas[i].classList.add("border-2", "bg-gray-50");
            // if(loading.classList.contains("hidden")) {
                // loading.classList.replace("hidden", "flex");
                // setTimeout(() => {
                //     loading.classList.replace("flex", "hidden");
                    vagasDescription[i].classList.replace("hidden", "block");
                // }, 150);
            // }
        });
    });
    vagas[0].classList.add("border-2", "bg-gray-50");
    vagas[0].click();

    quickApply = document.querySelectorAll(".quickApply");
    quickApplyBtn = document.querySelectorAll(".quickApply a");
    quickApply.forEach((div, i)=> {
        div.addEventListener("click", ()=> {
            quickApplyBtn[i].click();
        });
    });
</script>
@if (session()->has("vagaSelected"))
<script>
    setTimeout(() => {
        let vagaSelected = document.querySelector(".id-{{session(('vagaSelected'))}}");
        vagaSelected.click();
    }, 50);
</script>
@endif