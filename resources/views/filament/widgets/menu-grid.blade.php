@php
    use App\Filament\Resources\BalihoResource;
    use App\Filament\Resources\PpidResource;
    use App\Filament\Resources\RunningTextResource;
    use App\Filament\Resources\SiaranRadioKonataResource;
    use App\Filament\Resources\CetakMmtResource;
    use App\Filament\Resources\KimResource;
    use App\Filament\Resources\SoberResource;
    use App\Filament\Resources\SiberResource;
    use App\Filament\Resources\SirkelResource;
    use App\Filament\Resources\MedsosResource;

    $menus = [
        ['title' => 'Baliho', 'route' => BalihoResource::getUrl()],
        ['title' => 'PPID', 'route' => PpidResource::getUrl()],
        ['title' => 'Running Text', 'route' => RunningTextResource::getUrl()],
        ['title' => 'Siaran Radio Konata', 'route' => SiaranRadioKonataResource::getUrl()],
        ['title' => 'Cetak MMT', 'route' => CetakMmtResource::getUrl()],
        ['title' => 'KIM', 'route' => KimResource::getUrl()],
        ['title' => 'SOBER', 'route' => SoberResource::getUrl()],
        ['title' => 'SIBER', 'route' => SiberResource::getUrl()],
        ['title' => 'SIRKEL', 'route' => SirkelResource::getUrl()],
        ['title' => 'MEDSOS', 'route' => MedsosResource::getUrl()],
    ];
@endphp

<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach ($menus as $menu)
        <a href="{{ $menu['route'] }}"
            class="flex items-center justify-center h-32 rounded-2xl bg-black text-white text-xl font-bold hover:bg-gray-800 transition">
            {{ strtoupper($menu['title']) }}
        </a>
    @endforeach
</div>
