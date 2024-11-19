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
                                Vagas salvas
                            </p>
                        </a>
                    </div>
                    <div class="mb-5 group">
                        <a href="/user/profile/applied-listings" class="mx-4 flex">
                            <div class="border-4 rounded-sm mr-2 border-[#D7D7D7] invisible
                            group-hover:visible animate-pulse"></div>
                            <p>
                                Vagas que participo
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
                    Perfil
                </p>
                <img src="{{asset("imagens/profile-display.png")}}" alt="profile display" 
                width="300" class="rounded">
            </div>
            <div class="border border-[#D7D7D7]"></div>
            <div class="mt-6 pl-6">
                <div class="flex items-center">
                    <h2 class="font-semibold text-lg">
                        Minhas informações
                    </h2>
                    <span class="btnEditar p-0.5 rounded-full cursor-pointer 
                    hover:bg-gray-200" title="Editar informações">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="m15.129 7.715 1.594-1.594 1.473 1.473-1.594 1.594-1.473-1.473Zm-1.06 1.06L6.523 16.32l-.235 1.55 1.756-.124 7.496-7.497-1.473-1.473Zm-9.028 7.32a1.5 1.5 0 0 1 .422-.835l10.2-10.2a1.5 1.5 0 0 1 2.12 0l1.474 1.474a1.5 1.5 0 0 1 0 2.12L9.105 18.807a1.5 1.5 0 0 1-.955.436l-3.001.211a.5.5 0 0 1-.53-.573l.422-2.784Z" fill="#00060C"></path></svg>
                    </span>
                </div>
                <div class="userData block">
                    <p class="font-semibold my-4">
                        Nome de exibição:
                        <span class="font-normal">
                            {{ $user->user_name ?? "Nome não definido" }}
                        </span>
                    </p>
                    <p class="font-semibold my-4">
                        Nome completo:
                        <span class="font-normal">
                            {{ $user->name ?? "Nome não definido" }}
                        </span>
                    </p>
                    <p class="font-semibold my-4">
                        Situação empregatícia:
                        <span class="font-normal">
                            {{ $user->current_situation ?? "Não definido" }}
                        </span>
                    </p>
                    <p class="font-semibold my-4">
                        Cargo:
                        <span class="font-normal">
                            {{ $user->current_position ?? "Não definido" }}
                        </span>
                    </p>
                    <p class="font-semibold my-4">
                        Local:
                        <span class="font-normal">
                            {{ $user->city->name ?? "Não definido" }}
                            , {{ $user->state->state  ?? "Não definido" }}
                            , {{ $user->country ?? "Não definido"}}
                        </span>
                    </p>
                    <p class="font-semibold my-4">
                        Empresa:
                        <span class="font-normal">
                            {{ $user->company ?? "Não definido" }}
                        </span>
                    </p>
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
            <div class="border border-[#D7D7D7] my-6"></div>
            <div class="">
                <div class="pl-6">
                    <h2 class="font-semibold text-lg">
                        Currículo
                    </h2>
                    @if ($user->resume == null)
                    <p class="text-sm p-3">
                        Adicione um currículo para preencher candidaturas a 
                        vagas de forma rápida.
                    </p>
                    @else
                    <p class="text-sm p-3">
                        Este é o currículo ao qual você pode utilizar para se candidatar a vagas
                        de forma rápida.
                    </p>
                    @endif
                </div>
                @if ($user->resume == null)
                <div class="flex items-center p-6 justify-center border-2 w-[90%] 
                border-dashed border-[#222] rounded-md mx-auto my-4 mb-8 enviarCurriculo
                hover:bg-slate-100 cursor-pointer">
                    <span class="ResumefileUploader_svgContainer__NPJgc">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg" data-test="resume-section-upload-svg"><g id="Upload"><path id="download-24-solid" fill-rule="currentColor" clip-rule="currentColor" d="M28 21.334c.736 0 1.333.597 1.333 1.333V28c0 .737-.597 1.334-1.333 1.334H4A1.333 1.333 0 0 1 2.667 28v-5.333a1.333 1.333 0 1 1 2.666 0v4h21.334v-4c0-.736.596-1.333 1.333-1.333Zm-12 2.652c.736 0 1.333-.597 1.333-1.333V7.203l5.707 5.707a1.333 1.333 0 1 0 1.886-1.886l-7.967-7.966a1.33 1.33 0 0 0-.96-.39 1.33 1.33 0 0 0-.959.39l-7.966 7.966a1.333 1.333 0 1 0 1.885 1.886l5.707-5.707v15.45c0 .736.598 1.333 1.334 1.333Z" fill="currentColor"></path></g></svg></span>
                        <div class="ml-3">
                        <h3 class="heading_Heading__BqX5J heading_Level3__X81KK" aria-live="polite" aria-hidden="false" data-test="resume-section-filename" id="curriculo">
                            Carregar currículo
                        </h3>
                        <small class="small_Small__0Prbr" aria-live="polite" 
                        aria-hidden="false" data-test="resume-section-file-types">
                            Use um arquivo PDF, PNG, JPG ou TXT.
                        </small>
                    </div>
                </div>
                <form action="/user/update-resume" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("POST")
                    <input accept=".pdf,.png,.jpg,.jpeg,.webp,.txt" 
                    class="invisible" id="upload-resume" type="file" name="resume"
                    onchange="updateResume()">
                    <button type="submit" class="hidden update-resume"></button>
                </form>
                @else
                <div class="flex items-center p-6 border-2 w-[90%] select-none
                border-[#222] rounded-md mx-auto my-4 mb-8 enviarCurriculo">
                    <svg fill="#000000" width="62" height="72" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 490 490" xml:space="preserve"
                    class="">
                        <g>
                            <path d="M245,169.144c27.118,0,49.1-21.984,49.1-49.102S272.118,70.94,245,70.94c-27.118,0-49.104,21.984-49.104,49.102
                                S217.882,169.144,245,169.144z M245,86.252c18.632,0,33.788,15.157,33.788,33.79c0,18.632-15.156,33.789-33.788,33.789
                                s-33.791-15.157-33.791-33.789C211.208,101.41,226.368,86.252,245,86.252z"/>
                            <path d="M195.234,180.425c0,0-49.766,0.664-49.766,46.448c0,45.784,0,56.401,0,56.401s96.873,0,97.206,0L195.234,180.425z
                                    M160.781,226.873c0-20.502,14.669-27.52,25.216-29.915l32.752,71.003h-57.968V226.873z"/>
                            <path d="M344.531,283.274c0,0,0-10.617,0-56.401c0-45.784-49.766-46.448-49.766-46.448l-47.444,102.849H344.531z M304.003,196.958
                                c10.546,2.395,25.216,9.411,25.216,29.915v41.089h-57.971L304.003,196.958z"/>
                            <polygon points="210.826,180.425 244.999,256.068 279.171,180.425 244.999,180.425 	"/>
                            <path d="M367.5,0H53.594v490h382.813V76.563L367.5,0z M367.818,23.242l48.85,54.277h-48.85V23.242z M68.906,474.688V15.313h283.599
                                v77.52h68.589v381.855H68.906z"/>
                            <rect x="130.16" y="336.307" width="229.687" height="15.312"/>
                            <rect x="130.16" y="375.44" width="229.687" height="15.313"/>
                            <rect x="130.16" y="414.574" width="229.687" height="15.313"/>
                        </g>
                    </svg>
                    <div class="mx-3 w-full">
                        <h3 class="font-medium">
                            Currículo cadastrado
                        </h3>
                        <div class="w-[50%] flex justify-between my-3">
                            <small class="small_Small__0Prbr">
                                <a href="{{ Storage::url($user->resume) }}" target="_blank" 
                                    class="bg-blue-500 text-white p-1.5 rounded font-medium
                                    hover:bg-blue-400">
                                    Visualizar ou baixar
                                </a>
                            </small>
                            <small class="small_Small__0Prbr">
                                <a href="/user/profile/delete-resume"
                                    class="bg-red-500 text-white p-1.5 rounded font-medium
                                    hover:bg-red-400">
                                    Excluir Currículo
                                </a>
                            </small>
                        </div>
                    </div>
                </div>
                @endif
                
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