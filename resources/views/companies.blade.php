<x-layout title="Empresas" column="true">
    <section class="container">
        <div class="">
            <h2 class="font-semibold text-2xl text-center my-6 mb-2">
                Empresas
            </h2>
        </div>
        <div class="w-full flex">
            <div class="rounded w-[20%] my-10 p-6 bg-gray-50 border-2 border-gray-100 flex 
            flex-col align-center h-[200px] sticky top-4 bottom-4">
                <div class="">
                    <p class="font-medium text-lg">
                        Pesquisar uma empresa:
                    </p>
                    <input type="text" class="w-full my-3 border-2 p-1.5" id="inputPesquisa">
                </div>
                <button class="pesquisar bg-tt text-white font-medium rounded text-center 
                p-3 mx-auto w-[80%] btnPesquisar">
                        Pesquisar
                </button>
            </div>
            <div class="rounded p-6 w-[80%]">
                @foreach ($companies as $comp)
                <div class="my-6 bg-gray-50 border-2 border-gray-100 rounded p-6">
                    <div class="flex">
                        <img src="{{ asset($comp->logo) }}" alt="logo" 
                        width="160" class="rounded mb-6 border-gray-100">
                        <div class="flex ml-4 flex-col w-[50%]">
                            <p class="font-medium text-lg mt-2">
                                {{ $comp->name }}
                            </p>
                            <p class="text-base my-0.5">
                                <b class="font-medium">Funcionários ativos:</b>
                                {{ $comp->employees_count }}
                            </p>
                            <p class="text-base my-0.5">
                                <b class="font-medium">Vagas cadastradas:</b>
                                {{ $comp->listing_count }}
                            </p>
                            <p class="text-base my-0.5">
                                <b class="font-medium">Setor:</b>
                                {{ $comp->sector }}
                            </p>
                            <p class="text-base my-0.5">
                                <b class="font-medium">Média salarial das vagas:</b>
                                {{ $comp->avgSalary }}
                            </p>
                        </div>
                        @if ($comp->listing_count > 0)
                        <div class="flex mx-5 items-center">
                            <a href="/empresa/{{$comp->id}}/vagas" class="text-white font-medium 
                            bg-tt rounded p-2 px-4 hover:bg-ttLight">
                                Ver vagas
                            </a>
                        </div>
                        @else
                        <div class="flex mx-5 items-center">
                            <button class="text-white font-medium 
                            bg-gray-300 rounded p-2 px-4 hover:">
                                Ver vagas
                            </button>
                        </div>
                        @endif
                    </div>
                    <div class="grid grid-cols-3 gap-2">
                        <div class="">
                            <p class="ml-2 font-medium">
                                Localização:
                            </p>
                            <p class="ml-2">
                                {{ $comp->address }},
                                {{ $comp->city->name }},
                                {{ $comp->state->state }},
                                Brasil
                            </p>
                        </div>
                        <div class="">
                            <p class="ml-2 font-medium">
                                Contato:
                            </p>
                            <p class="ml-2">
                                {{ $comp->email }}
                            </p>
                        </div>
                        <div class="">
                            <p class="ml-2 font-medium">
                                Registrado em:
                            </p>
                            <p class="ml-2">
                                {{ $comp->member_since }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
<script>
    $("#inputPesquisa").on("keypress", function(e) {
        if(e.key == "Enter") {
            window.location.href = `/empresas/${this.value.replace(/\s/g, '-')}`;
        }
    });
    $(".btnPesquisar").on("click", ()=> {
        if($("#inputPesquisa").val().trim() != "") {
            window.location.href = `/empresas/${$("#inputPesquisa").val().replace(/\s/g, '-')}`;
        }
    });
</script>
