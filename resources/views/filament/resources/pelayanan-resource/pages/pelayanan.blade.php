<x-filament::page>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Baliho -->
        <x-filament::card class="cursor-pointer hover:shadow-lg transition"
            x-on:click="window.location='{{ route('filament.admin.pages.baliho-form') }}'">
            <div class="text-center">
                <x-heroicon-o-rectangle-group class="w-10 h-10 mx-auto text-primary-500" />
                <h3 class="mt-2 font-semibold text-lg">Baliho</h3>
                <p class="text-sm text-gray-500">Form layanan baliho</p>
            </div>
        </x-filament::card>

        <!-- PPID -->
        <x-filament::card class="cursor-pointer hover:shadow-lg transition"
            x-on:click="window.location='{{ route('filament.admin.pages.ppid-form') }}'">
            <div class="text-center">
                <x-heroicon-o-document-text class="w-10 h-10 mx-auto text-primary-500" />
                <h3 class="mt-2 font-semibold text-lg">PPID</h3>
                <p class="text-sm text-gray-500">Form layanan PPID</p>
            </div>
        </x-filament::card>

        <!-- PID -->
        <x-filament::card class="cursor-pointer hover:shadow-lg transition"
            x-on:click="window.location='{{ route('filament.admin.pages.pid-form') }}'">
            <div class="text-center">
                <x-heroicon-o-information-circle class="w-10 h-10 mx-auto text-primary-500" />
                <h3 class="mt-2 font-semibold text-lg">PID</h3>
                <p class="text-sm text-gray-500">Form layanan PID</p>
            </div>
        </x-filament::card>

        <!-- Running Text -->
        <x-filament::card class="cursor-pointer hover:shadow-lg transition"
            x-on:click="window.location='{{ route('filament.admin.pages.running-text-form') }}'">
            <div class="text-center">
                <x-heroicon-o-play class="w-10 h-10 mx-auto text-primary-500" />
                <h3 class="mt-2 font-semibold text-lg">Running Text</h3>
                <p class="text-sm text-gray-500">Form layanan Running Text</p>
            </div>
        </x-filament::card>
    </div>
</x-filament::page>
