<x-layout title="Perfil | Empresa" column="true">
    <div class="flex container mt-4">
        <div class="w-[25%] sticky h-[350px] top-2 mb-6 select-none">
            <div class="flex flex-col">
                <div class="flex">
                    @if ($company->logo == null)

                    <svg class="icon_Icon__ptI3R" width="80" height="80" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" aria-live="polite" aria-hidden="false"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.8 28.8c0 13.255 10.745 24 24 24s24-10.745 24-24-10.745-24-24-24-24 10.745-24 24zm24 4.8a9.6 9.6 0 0 1-9.6-9.6 9.6 9.6 0 0 1 9.6-9.6 9.6 9.6 0 0 1 9.6 9.6 9.6 9.6 0 0 1-9.6 9.6zm15.252 12.147A22.716 22.716 0 0 1 28.8 51.6a22.715 22.715 0 0 1-15.252-5.853C16.213 39.992 22.04 36 28.8 36s12.587 3.992 15.252 9.747z" fill="#C4C7CC"></path></svg>
                    @else
                    <img src="{{asset($company->logo)}}" alt="logo" width="80" class="rounded-full">
                    @endif

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
                    <div class="mx-4 mb-5 flex">
                        <div class="border-4 rounded-sm mr-2 border-[#D7D7D7]"></div>
                        <p>
                            Perfil
                    </div>
                    <div class="mb-5 group">
                        <a href="/user/profile/favorite-listings" class="mx-4 flex">
                            <div class="border-4 rounded-sm mr-2 border-[#D7D7D7] invisible
                            group-hover:visible animate-pulse"></div>
                            <p>
                                Vagas cadastradas
                            </p>
                        </a>
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
            <div class="flex items-center justify-between p-6">
                <p class="mb-3 text-2xl font-semibold">
                    Perfil - Empresa
                </p>
                @if ($company->logo == null)
                <img src="{{asset("imagens/profile-display.png")}}" alt="profile display" 
                width="300" class="rounded">
                @else
                <img src="{{asset($company->logo)}}" alt="profile display" 
                width="300" class="rounded">
                @endif
            </div>
            <div class="border border-[#D7D7D7]"></div>
            <div class="mt-6 pl-6">
                <div class="flex items-center">
                    <h2 class="font-semibold text-lg">
                        Informações da empresa
                    </h2>
                    <span class="btnEditar p-0.5 rounded-full cursor-pointer 
                    hover:bg-gray-200" title="Editar informações">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="m15.129 7.715 1.594-1.594 1.473 1.473-1.594 1.594-1.473-1.473Zm-1.06 1.06L6.523 16.32l-.235 1.55 1.756-.124 7.496-7.497-1.473-1.473Zm-9.028 7.32a1.5 1.5 0 0 1 .422-.835l10.2-10.2a1.5 1.5 0 0 1 2.12 0l1.474 1.474a1.5 1.5 0 0 1 0 2.12L9.105 18.807a1.5 1.5 0 0 1-.955.436l-3.001.211a.5.5 0 0 1-.53-.573l.422-2.784Z" fill="#00060C"></path></svg>
                    </span>
                </div>
                <div class="userData block">
                    <p class="font-semibold mt-3">
                        Nome:
                    </p>
                    <span class="font-normal mb-3 ml-2">
                        {{ $company->name ?? "Nome não definido" }}
                    </span>
                    <p class="font-semibold mt-3">
                        E-mail:
                    </p>
                    <span class="font-normal mb-3 ml-2">
                        {{ $company->email ?? "Nome não definido" }}
                    </span>
                    <p class="font-semibold mt-3">
                        Cnpj:
                    </p>
                    <span class="font-norma mb-3 ml-2">
                        {{ $company->cnpj ?? "Não definido" }}
                    </span>
                    <p class="font-semibold mt-3">
                        Setor de atuação:
                    </p>
                    <span class="font-normal mb-3 ml-2">
                        {{ $company->sector ?? "Não definido" }}
                    </span>
                    <p class="font-semibold mt-3">
                        Quantidade de funcionários:
                    </p>
                    <span class="font-normal mb-3 ml-2">
                        {{ $company->employees_count ?? "Não definido" }}
                    </span>
                    <p class="font-semibold mt-3">
                        Local:
                    </p>
                    <span class="font-norma mb-3 ml-2">
                        {{ $company->address }}
                        ,{{ $company->city->name ?? "Não definido" }}
                        , {{ $company->state->state  ?? "Não definido" }}
                        , Brasil
                    </span>
                    <p class="font-semibold mt-3">
                        Quantidade de currículos registrados:
                    </p>
                    <span class="font-normal mb-3 ml-2">
                        {{ $company->full_candidate_count ?? "Não definido" }}
                    </span>
                    <p class="font-semibold mt-3">
                        Média salarial das vagas anúnciadas:
                    </p>
                    <span class="font-normal mb-3 ml-2">
                        {{ $company->avgSalary ?? "Não definido" }}
                    </span>
                    <div class="mb-5">

                    </div>
                </div>
                <form action="/user/config/update-user-data" method="post"
                class="userDataUpdate hidden">
                    @csrf
                    @method("POST")
                    <p class="font-semibold my-4">
                        Nome de exibição:
                        <input type="text" name="user_name" id="user_name" 
                        class="font-normal border border-black p-1 pl-4 outline-none rounded"
                        value="{{ $user->user_name ?? "Nome não definido" }}">
                    </p>
                    <p class="font-semibold my-4">
                        Nome completo:
                        <input type="text" name="name" id="name" 
                        class="font-normal border border-black p-1 pl-4 outline-none rounded"
                        value="{{ $user->name ?? "Nome não definido" }}">
                    </p>
                    <p class="font-semibold my-4">
                        Preferência de vaga:
                        <input type="text" name="job_preference" id="job_preference" 
                        class="font-normal border border-black p-1 pl-4 outline-none rounded"
                        value="{{ $user->job_preference ?? "Não definido" }}">
                    </p>
                    <p class="font-semibold my-4">
                        Situação empregatícia:
                        <select name="current_situation" id="current_situation" 
                        class="font-normal border border-black p-1 outline-none rounded">
                            <option value="{{ $user->current_situation }}" selected>
                                {{ $user->current_situation }}
                            </option>
                            <option value="Trabalhando">
                                Trabalhando
                            </option>
                            <option value="Buscando emprego">
                                Buscando emprego
                            </option>
                        </select>
                    </p>
                    <p class="font-semibold my-4">
                        Cargo:
                        <input type="text" name="current_position" id="current_position" 
                        class="font-normal border border-black p-1 pl-4 outline-none rounded"
                        value="{{ $user->current_position ?? "Não definido" }}">
                    </p>
                    <p class="font-semibold my-4 mb-0">
                        Local:
                    </p>
                    <p class="ml-2 my-1 font-medium">
                        Estado:
                    </p>
                    <select id="state" name="state"
                    class="font-normal border border-black p-1 outline-none rounded ml-2">
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
                    <p class="ml-2 my-1 font-medium">
                        Cidade:
                    </p>
                    <select id="city" name="city" disabled
                    class="font-normal border border-black p-1 outline-none rounded ml-2">
                        <option value="{{ $user->city->id ?? "" }}" class="default">
                            {{ $user->city->name ?? "Selecione uma cidade" }}
                        </option>
                    </select>
                    <p class="font-semibold my-4">
                        Empresa:
                        <input type="text" name="company" id="company" 
                        class="font-normal border border-black p-1 pl-4 outline-none rounded"
                        value="{{ $user->company ?? "Não definido" }}">
                    </p>
                    <div class="flex select-none">
                        <div class="btnCancelar p-6 bg-red-600 text-white font-semibold mx-1
                        py-4 my-3 rounded cursor-pointer hover:bg-red-500">
                            Cancelar
                        </div>
                        <button type="submit" class="btnSalvar p-6 bg-tt text-white font-semibold 
                        mx-1 py-4 my-3 rounded hover:bg-ttLight">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
<script>
    if(document.querySelector(".finalizarConta")) {
        document.querySelector(".finalizarConta").remove();
    }
    userData = document.querySelector(".userData");
    userDataUpdate = document.querySelector(".userDataUpdate");
    editUserData = document.querySelector(".btnEditar");
    btnCancelar = document.querySelector(".btnCancelar");
    btnEnviarCurriculo = document.querySelector(".enviarCurriculo");
    btnEnviarCurriculoForm = document.querySelector(".update-resume");
    inputEnviarCurriculo = document.getElementById("upload-resume");
    editUserData.addEventListener("click", ()=> {
        if(userData.classList.contains("block")) {
            userData.classList.replace("block", "hidden");
            userDataUpdate.classList.replace("hidden", "block");
            editUserData.classList.add("bg-gray-300");
        }else {
            userData.classList.replace("hidden", "block");
            userDataUpdate.classList.replace("block", "hidden");
            editUserData.classList.remove("bg-gray-300");
        }
    });
    btnCancelar.addEventListener("click", ()=> {
        if(!userData.classList.contains("block")) {
            userData.classList.replace("hidden", "block");
            userDataUpdate.classList.replace("block", "hidden");
            editUserData.classList.remove("bg-gray-300");
        }
    })
    btnEnviarCurriculo.addEventListener("click", ()=> {
        inputEnviarCurriculo.click();
    });
    function updateResume() {
        setTimeout(() => {
            btnEnviarCurriculoForm.click();
        }, 100);
    }
    document.getElementById('state').addEventListener('change', function () {
        const state = this.value;
        const citiesSelect = document.getElementById('city');

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
@dd(json_encode($company))