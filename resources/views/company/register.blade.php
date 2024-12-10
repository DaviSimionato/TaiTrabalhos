<x-layout title="Cadastro - Empresa" column="true">
    <div class="flex justify-between items-center container">
        <img 
        src="{{ asset('imagens/_bfa0f7d1-57af-4382-a6da-9d5b22a3c2ff.jfif') }}" 
        alt="img/tt1"
        class="select-none pointer-events-none max-w-[450px] opacity-0">
        
        <div class="register mx-4 rounded-md bg-[#F9F9F9] w-full flex flex-col items-center 
        min-h-[350px] mt-10">
            <h1 class="my-5 pt-3 font-semibold text-xl">
                Cadastro para Empresas
            </h1>
            <p class="text-justify max-w-[345px] font-semibold register-text mb-4 min-h-[100px]">
                Preencha as informações abaixo para registrar sua empresa. 
                Ao continuar, você indica que concorda com os 
                <a class="text-tt underline" href="https://google.com" target="_blank">
                    Termos de Uso
                </a> 
                e a 
                <a class="text-tt underline" href="https://google.com" target="_blank">
                    Política de Privacidade 
                </a>.
            </p>
            <form action="/company/register" method="post" enctype="multipart/form-data"
            class="w-full flex justify-center">
                @csrf
                @method("POST")
                <div class="max-w-[375px] w-full flex flex-col register-inputs">
                    
                    <label for="name" class="text-sm my-2">Nome da Empresa</label>
                    <input type="text" name="name" id="name"
                        class="border-[#D7D7D7] border-2 rounded p-2.5 text-base">
                    @error('name')
                        <span class="text-sm mx-1 my-2 text-red-600">{{ $message }}</span>
                    @enderror
                    <div class="border my-2 mt-4 w-[80%] mx-auto"></div>

                    <label for="cnpj" class="text-sm my-2">CNPJ</label>
                    <input type="text" name="cnpj" id="cnpj" maxlength="18"
                        class="border-[#D7D7D7] border-2 rounded p-2.5 text-base">
                    @error('cnpj')
                        <span class="text-sm mx-1 my-2 text-red-600">{{ $message }}</span>
                    @enderror
                    <div class="border my-2 w-[80%] mx-auto"></div>

                    <label for="email" class="text-sm my-2">E-mail</label>
                    <input type="email" name="email" id="email"
                        class="border-[#D7D7D7] border-2 rounded p-2.5 text-base">
                    @error('email')
                        <span class="text-sm mx-1 my-2 text-red-600">{{ $message }}</span>
                    @enderror
                    <div class="border my-2 w-[80%] mx-auto"></div>

                    <label for="address" class="text-sm my-2">Endereço</label>
                    <input type="text" name="address" id="address"
                        class="border-[#D7D7D7] border-2 rounded p-2.5 text-base">
                    @error('address')
                        <span class="text-sm mx-1 my-2 text-red-600">{{ $message }}</span>
                    @enderror
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
                    <div class="border my-2 w-[80%] mx-auto"></div>

                    <label for="sector" class="text-sm my-2">Setor</label>
                    <input type="text" name="sector" id="sector"
                        class="border-[#D7D7D7] border-2 rounded p-2.5 text-base">
                    @error('sector')
                        <span class="text-sm mx-1 my-2 text-red-600">{{ $message }}</span>
                    @enderror
                    <div class="border my-2 w-[80%] mx-auto"></div>
                    <label for="logo" class="text-sm my-2">Logo da Empresa</label>
                    <input type="file" name="logo" id="logo"
                        class="border-[#D7D7D7] border-2 rounded p-2.5 text-base">
                    @error('logo')
                        <span class="text-sm mx-1 my-2 text-red-600">{{ $message }}</span>
                    @enderror
                    <div class="border my-2 w-[80%] mx-auto"></div>

                    <label for="password" class="text-sm my-2">Senha</label>
                    <input type="password" name="password" id="password"
                        class="border-[#D7D7D7] border-2 rounded p-2.5 text-base">
                    @error('password')
                        <span class="text-sm mx-1 my-2 text-red-600">{{ $message }}</span>
                    @enderror
                    <div class="border my-2 w-[80%] mx-auto"></div>

                    <label for="password_confirmation" class="text-sm my-2">Confirme sua senha</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="border-[#D7D7D7] border-2 rounded p-2.5 text-base">
                    @error('password_confirmation')
                        <span class="text-sm mx-1 my-2 text-red-600">{{ $message }}</span>
                    @enderror
                    <div class="border my-2 w-[80%] mx-auto"></div>

                    <button type="submit" class="btnRegistrar my-5 mb-2 border-2 border-black rounded py-2 h-[45px] flex 
                    justify-center items-center hover:bg-slate-100 active:bg-slate-200">
                        Registrar
                    </button>

                    <div class="flex text-sm">
                        <p>
                            Já possui uma conta? - 
                        </p>
                        <a href="/para-empresas" class="text-tt underline ml-1 pb-6">
                            Fazer Login
                        </a>
                    </div>
                </div>
            </form>
        </div>
        
        <img 
        src="{{ asset('imagens/_357184ce-3e77-4721-8c73-b37f7213ef5a.jfif') }}" 
        alt="img/tt2"
        class="select-none pointer-events-none max-w-[420px] opacity-0">
    </div>
</x-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cnpjInput = document.getElementById('cnpj');

        cnpjInput.addEventListener('input', function(event) {
            let value = event.target.value.replace(/\D/g, ''); // Remove caracteres não numéricos
            value = value.replace(/^(\d{2})(\d)/, '$1.$2');
            value = value.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
            value = value.replace(/\.(\d{3})(\d)/, '.$1/$2');
            value = value.replace(/(\d{4})(\d)/, '$1-$2');
            event.target.value = value;
        });
    });
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