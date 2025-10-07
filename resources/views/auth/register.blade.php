<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- Telepon --}}
        <div class="mt-4">
            <x-input-label for="telepon" :value="__('Telepon')" />
            <x-text-input id="telepon" class="block mt-1 w-full" type="text" name="telepon"
                :value="old('telepon')" required autocomplete="tel" />
            <x-input-error :messages="$errors->get('telepon')" class="mt-2" />
        </div>

        {{-- instansi --}}
        <div class="mt-4">
            <x-input-label for="instansi_id" :value="__('Instansi')" />
            <select id="instansi_id" name="instansi_id" class="block mt-1 w-full select2" required>
                <option value="">-- Pilih Instansi --</option>
                @foreach (\App\Models\Instansi::all() as $instansi)
                    <option value="{{ $instansi->id }}" {{ old('instansi_id') == $instansi->id ? 'selected' : '' }}>
                        {{ $instansi->nama_instansi }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('instansi_id')" class="mt-2" />
        </div>

        <!-- Foto Profil -->
        <div class="mt-4">
            <x-input-label for="foto_profil" :value="__('Foto Profil')" />
            <input id="foto_profil" class="block mt-1 w-full" type="file" name="foto_profil"
                accept="image/*" />
            <x-input-error :messages="$errors->get('foto_profil')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        // Select2
        $(document).ready(function() {
            $('.select2').select2();
        });

        // Show/hide password
        document.getElementById('toggle-password').onclick = function() {
            const pwd = document.getElementById('password');
            pwd.type = pwd.type === 'password' ? 'text' : 'password';
        };
        document.getElementById('toggle-password-confirm').onclick = function() {
            const pwd = document.getElementById('password_confirmation');
            pwd.type = pwd.type === 'password' ? 'text' : 'password';
        };
    </script>
</x-guest-layout>
