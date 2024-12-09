<x-layout title="Cadastrar uma vaga" column="true">
    <h1 class="text-xl font-medium text-center my-2 mt-8">
        Cadastrar uma vaga
    </h1>
    <div class="container">
        <p class="text-lg font-medium">
            Empresa:
        </p>
        <div class="mb-4 flex">
            <div class="rounded border-[#7777] border-2 p-3 flex items-center">
                <img src="{{asset($company->logo)}}" width="32" class="rounded">
                <p class="ml-2 text-lg font-medium">
                    {{$company->name}}
                </p>
            </div>
        </div>
        <div class="border-2 border-[#7777] p-6 rounded w-[60%]">
            <h2 class="font-medium text-lg">
                Vaga:
            </h2>
            <form action="/cadastrar-vaga" method="post">
                @csrf
                @method("POST")
                <div class="flex flex-col my-2">
                    <label for="title" class="text-base font-medium">
                        Título:
                    </label>
                    <input type="text" class="border border-[#7777] rounded
                    p-1 outline-none w-[100%]" name="title">
                </div>
                <div class="border my-3"></div>
                <div class="flex flex-col my-2">
                    <label for="modality" class="text-base font-medium">
                        Modalidade:
                    </label>
                    <select name="modality" id="modality" 
                    class="border border-[#7777] rounded p-1 outline-none w-[100%]">
                        <option value="Presencial">
                            Presencial
                        </option>
                        <option value="Remoto">
                            Remoto
                        </option>
                        <option value="Híbrido">
                            Híbrido
                        </option>
                    </select>
                </div>
                <div class="border my-3"></div>
                <div class="flex flex-col my-2">
                    <label for="type" class="text-base font-medium">
                        Forma de contratação:
                    </label>
                    <select name="type" id="type" 
                    class="border border-[#7777] rounded p-1 outline-none w-[100%]">
                        <option value="clt">
                            Clt
                        </option>
                        <option value="pj">
                            Pj
                        </option>
                    </select>
                </div>
                <div class="border my-3"></div>
                <div class="flex flex-col my-2">
                    <label for="description" class="text-base font-medium">
                        Descrição:
                    </label>
                    <textarea class="border border-[#7777] rounded p-1 outline-none 
                    w-[100%] h-[225px]" 
                    name="description" 
                    id="description" 
                    maxlength="500"
                    oninput="updateCharCount()"
                    ></textarea>
                    <span id="charCount" class="text-sm text-gray-500">
                        0/500 caracteres
                    </span>
                </div>
                <div class="border my-3"></div>
                <div class="flex flex-col my-2">
                    <label for="benefits" class="text-base font-medium">
                        Benefícios: ( Separar por vírgula ',' )
                    </label>
                    <textarea class="border border-[#7777] rounded p-1 outline-none 
                    w-[100%] h-[225px]" 
                    name="benefits" 
                    id="benefits" 
                    maxlength="500"
                    oninput="updateCharCount2()"
                    ></textarea>
                    <span id="charCount2" class="text-sm text-gray-500">
                        0/500 caracteres
                    </span>
                </div>
                <div class="border my-3"></div>
                <div class="flex flex-col my-2">
                    <label for="salary" class="text-base font-medium">
                        Salário:
                    </label>
                    <div class="flex items-center">
                        <p class="font-medium border border-[#7777] rounded
                        p-1 px-2 mr-1">
                            R$
                        </p>
                        <input type="text" class="border border-[#7777] rounded
                        p-1 outline-none w-[100%]" name="salary">
                    </div>
                </div>
                <div class="border my-3"></div>
                <div class="flex flex-col my-2">
                    <label for="local" class="text-base font-medium my-2">
                        Local:
                    </label>
                    <label for="modality" class="text-base font-medium">
                        Estado:
                    </label>
                    <select name="state" id="state" 
                    class="border border-[#7777] rounded p-1 outline-none w-[100%]">
                        <option value="{{ $user->state->acronym ?? "" }}" class="default">
                            {{ $user->state->state ?? "Selecione um estado" }}
                        </option>
                        <option value="AC">Acre (AC)</option>
                        <option value="AL">Alagoas (AL)</option>
                        <option value="AP">Amapá (AP)</option>
                        <option value="AM">Amazonas (AM)</option>
                        <option value="BA">Bahia (BA)</option>
                        <option value="CE">Ceará (CE)</option>
                        <option value="DF">Distrito Federal (DF)</option>
                        <option value="ES">Espírito Santo (ES)</option>
                        <option value="GO">Goiás (GO)</option>
                        <option value="MA">Maranhão (MA)</option>
                        <option value="MT">Mato Grosso (MT)</option>
                        <option value="MS">Mato Grosso do Sul (MS)</option>
                        <option value="MG">Minas Gerais (MG)</option>
                        <option value="PA">Pará (PA)</option>
                        <option value="PB">Paraíba (PB)</option>
                        <option value="PR">Paraná (PR)</option>
                        <option value="PE">Pernambuco (PE)</option>
                        <option value="PI">Piauí (PI)</option>
                        <option value="RJ">Rio de Janeiro (RJ)</option>
                        <option value="RN">Rio Grande do Norte (RN)</option>
                        <option value="RS">Rio Grande do Sul (RS)</option>
                        <option value="RO">Rondônia (RO)</option>
                        <option value="RR">Roraima (RR)</option>
                        <option value="SC">Santa Catarina (SC)</option>
                        <option value="SP">São Paulo (SP)</option>
                        <option value="SE">Sergipe (SE)</option>
                        <option value="TO">Tocantins (TO)</option>
                    </select>
                </div>
                <div class="flex flex-col my-2">
                    <label for="city_id" class="text-base font-medium">
                        Cidade:
                    </label>
                    <select id="city_id" name="city_id"
                    class="border border-[#7777] rounded p-1 outline-none w-[100%]">
                        <option value="{{ $user->city->id ?? "" }}" class="default">
                            {{ $user->city->name ?? "Selecione uma cidade" }}
                        </option>
                    </select>
                </div>
                <div class="border my-3"></div>
                <div class="flex flex-col my-2">
                    <label for="tags" class="text-base font-medium">
                        Tags: ( Separar por vírgula ',' )
                    </label>
                    <textarea class="border border-[#7777] rounded p-1 outline-none 
                    w-[100%] h-[225px]" 
                    name="tags" 
                    id="tags" 
                    maxlength="500"
                    oninput="updateCharCount3()"
                    ></textarea>
                    <span id="charCount3" class="text-sm text-gray-500">
                        0/500 caracteres
                    </span>
                </div>
                <div class="flex w-full justify-center">
                    <button type="submit" class="my-4 p-4 bg-tt text-white 
                    rounded w-[80%] hover:bg-ttLight">
                    Cadastrar vaga
                </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
<script>
    function updateCharCount() {
        const textarea = document.getElementById("description");
        const charCount = textarea.value.length;
        const maxLength = textarea.getAttribute("maxlength");
        const charCountSpan = document.getElementById("charCount");

        charCountSpan.textContent = `${charCount}/${maxLength} caracteres`;
    }
    function updateCharCount2() {
        const textarea = document.getElementById("benefits");
        const charCount = textarea.value.length;
        const maxLength = textarea.getAttribute("maxlength");
        const charCountSpan = document.getElementById("charCount2");

        charCountSpan.textContent = `${charCount}/${maxLength} caracteres`;
    }
    function updateCharCount3() {
        const textarea = document.getElementById("tags");
        const charCount = textarea.value.length;
        const maxLength = textarea.getAttribute("maxlength");
        const charCountSpan = document.getElementById("charCount3");

        charCountSpan.textContent = `${charCount}/${maxLength} caracteres`;
    }

    document.getElementById('state').addEventListener('change', function () {
        const state = this.value;
        const citiesSelect = document.getElementById('city_id');

        // Reset cities select
        citiesSelect.innerHTML = '<option value="">Selecione uma cidade</option>';
        citiesSelect.disabled = true;

        if (!state) return;

        // Fetch cities from the API
        fetch(`/api/cidades/${state}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erro ao buscar cidades.', response);
                }
                return response.json();
            })
            .then(data => {
                const { cidades } = data;
                if (cidades && cidades.length > 0) {
                    cidades.forEach(cidade => {
                        const option = document.createElement('option');
                        option.value = cidade.id; // O ID da cidade
                        option.textContent = cidade.name; // O nome da cidade
                        citiesSelect.appendChild(option);
                    });

                    citiesSelect.disabled = false;
                }
            })
            .catch(error => {
                console.error('Erro ao buscar cidades:', error);
            }
        );
    });
</script>