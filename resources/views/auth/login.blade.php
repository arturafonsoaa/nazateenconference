<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nazateen Conference - Entrar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="w-screen h-screen flex bg-neutral-black bg-center bg-cover bg-fixed bg-no-repeat"
        style="background-image: url('{{ Vite::asset('resources/img/background3.png') }}')">
        <div class="lg:max-w-md m-auto w-full self-center sm:px-6">
            <figure class="lg:w-80 m-auto mb-4">
                <img src="{{ Vite::asset('resources/img/logo-nazateen-conference.png') }}" class="w-full" />
            </figure>
            <p class="text-center text-white">
                Por favor, digite seu login e senha para acompanhar a sua inscrição
            </p>

            <form action="{{ route('login') }}" class="py-8" method="post">
                @csrf

                <div class="mb-4">
                    <input type="text" placeholder="E-mail" name="email" value="{{ old('email') }}"
                        class="w-full bg-neutral-gray p-4 placeholder-gray-200 text-white focus:ring-0 focus:border focus:border-neon-blue border-transparent @error('email') border border-red-500 @enderror">
                    @error('email')
                        <p class="text-sm text-red-500 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-2">
                    <input type="password" placeholder="Senha" name="password"
                        class="w-full bg-neutral-gray p-4 placeholder-gray-200 text-white focus:ring-0 focus:border focus:border-neon-blue border-transparent @error('email') border border-red-500 @enderror">
                    @error('password')
                        <p class="text-sm text-red-500 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <p class="text-right mb-4">
                    <a href="" class="text-white">Esqueceu sua senha?</a>
                </p>

                <button
                    class="uppercase w-full text-center py-4 bg-neutral-black text-neon-blue border border-neon-blue"
                    type="submit">
                    Entrar
                </button>
            </form>

            <p class="text-white text-center">
                <a href="{{ route('website.index') }}#section-register-now">
                    Não é cadastrado ainda?
                </a>
            </p>

        </div>
    </div>

</body>

</html>
