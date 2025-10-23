<x-filament-panels::page>
    <div class="space-y-6">
        <form wire:submit.prevent="submit">
            {{ $this->form }}
        </form>

        <div class="flex items-center justify-between">
            @if($step > 1)
                <x-filament::button color="gray" wire:click="prevStep">
                    ← Kembali
                </x-filament::button>
            @endif

            <div class="flex gap-2">
                @if($step < 3)
                    <x-filament::button color="info" wire:click="nextStep">
                        Simpan & Lanjut →
                    </x-filament::button>
                @else
                    <x-filament::button color="success" wire:click="submit">
                        Simpan Final
                    </x-filament::button>
                @endif
            </div>
        </div>
    </div>
</x-filament-panels::page>
