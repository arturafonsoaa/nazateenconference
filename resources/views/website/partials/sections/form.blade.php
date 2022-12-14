<section id="section-register-now" class="py-20">
    <div class="container m-auto sm:px-4" data-aos="fade-up">
        <div class="text-center mb-16">
            <h2 class="text-4xl text-white font-bold">Se Cadastre Para Comprar</h2>
            <div class="separator">
                <span>
                    <i class="fa fa-square text-neon-blue"></i>
                </span>
            </div>
        </div>
        <div class="max-w-4xl m-auto ">
            <form action="{{ route('registerParticipant') }}" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-4 mb-8 sm:grid-cols-1 ">
                    <div>
                        <div class="mb-4">
                            <label for="name" class="text-white mb-1 block">
                                Qual o seu nome?
                            </label>
                            <input type="text" placeholder="Nome completo*" name="name"
                                value="{{ old('name') }}"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus:border focus:border-neon-blue border-transparent @error('name') border-red-600 @enderror">
                            @error('name')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="registration_type" class="text-white mb-1 block">
                                Você é:
                            </label>
                            <select id="registration-type" name="registration_type"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus-border focus:border-neon-blue border-transparent @error('registration_type') border-red-600 @enderror">
                                @foreach ($registrationTypes as $registrationTypeKey => $registrationType)
                                    <option value="{{ $registrationTypeKey }}">
                                        {{ $registrationType }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div id="age-field-container" class="mb-4">
                            <label for="age" class="text-white mb-1 block">
                                Qual a sua idade?
                            </label>
                            <input type="number" placeholder="Idade*" name="age" value="{{ old('age') }}"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus:border focus:border-neon-blue border-transparent @error('age') border-red-600 @enderror">
                            @error('age')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="text-white mb-1 block">
                                Qual o seu whatsapp?
                            </label>
                            <input id="phone" type="text" placeholder="Whatsapp*" name="phone"
                                value="{{ old('phone') }}"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus:border focus:border-neon-blue border-transparent @error('phone') border-red-600 @enderror">
                            @error('phone')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="text-white mb-1 block">
                                Qual seu e-mail?
                            </label>
                            <input type="text" placeholder="E-mail*" name="email" value="{{ old('email') }}"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus:border focus:border-neon-blue border-transparent @error('email') border-red-600 @enderror">
                            @error('email')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <div class="mb-4">
                            <label for="church" class="text-white mb-1 block">
                                De qual igreja você é?
                            </label>
                            <select id="church-select" name="church"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus-border focus:border-neon-blue border-transparent @error('church') border-red-600 @enderror">
                                    <option value="Igreja do Nazareno Central de Mossoró">Igreja do Nazareno Central de Mossoró</option>
                                    <option value="Outra">Outra</option>
                                    <option value="Nenhuma">Nenhuma</option>
                            </select>
                        </div>
                        <div id="church-description-container" class="hidden mt-4">
                            <input id="church-description" type="text" placeholder="Qual igreja?*" name="church_description"
                                value="{{ old('church_description') }}"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus:border focus:border-neon-blue border-transparent @error('church_description') border-red-600 @enderror">
                            @error('church_description')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="message" class="text-white mb-1 block">
                                Quais suas expectativas para o Nazateen Conference?
                            </label>
                            <textarea placeholder="Quais suas expectativas para o Nazateen Conference?" name="message" rows="8"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus:border focus:border-neon-blue border-transparent @error('message') border-red-600 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="text-center mb-4">
                    <button class="uppercase py-2 px-8 bg-neon-blue rounded-lg">Cadastrar</button>
                </div>
                <div class="text-center">
                    <a href="{{ route('login') }}" class="text-neon-pink">Já se inscreveu? Clique aqui para acompanhar sua inscrição.</a>
                </div>
            </form>
        </div>
    </div>
</section>

@section('js')
    @parent
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let phoneField = document.getElementById("phone")
            let phoneMask = new Inputmask("(99) 99999-9999")
            phoneMask.mask(phoneField)

            document.getElementById('registration-type').addEventListener('change', function() {
                document.getElementById('age-field-container').classList.remove('hidden')

                if (this.value != 'participant') {
                    document.getElementById('age-field-container').classList.add('hidden')
                }
            })

            document.getElementById('church-select').addEventListener('change', function() {
                document.getElementById('church-description-container').classList.add('hidden')

                if (this.value == 'Outra') {
                    document.getElementById('church-description-container').classList.remove('hidden')
                }
            })
        })
    </script>
@endsection
