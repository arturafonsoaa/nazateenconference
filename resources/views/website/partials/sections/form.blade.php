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
                            <input type="text" placeholder="Nome completo*" name="name"
                                value="{{ old('name') }}"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus:border focus:border-neon-blue border-transparent @error('name') border-red-600 @enderror">
                            @error('name')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
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
                            <input type="number" placeholder="Idade*" name="age" value="{{ old('age') }}"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus:border focus:border-neon-blue border-transparent @error('age') border-red-600 @enderror">
                            @error('age')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <input id="phone" type="text" placeholder="Whatsapp*" name="phone"
                                value="{{ old('phone') }}"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus:border focus:border-neon-blue border-transparent @error('phone') border-red-600 @enderror">
                            @error('phone')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <input type="text" placeholder="E-mail*" name="email" value="{{ old('email') }}"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus:border focus:border-neon-blue border-transparent @error('email') border-red-600 @enderror">
                            @error('email')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="h-full">
                        <div class="h-full">
                            <textarea placeholder="Quais suas expectativas para o Nazateen Conference?" name="message"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus:border focus:border-neon-blue border-transparent h-full @error('message') border-red-600 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="uppercase py-2 px-8 bg-neon-blue rounded-lg">Cadastrar</button>
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
        })
    </script>
@endsection
