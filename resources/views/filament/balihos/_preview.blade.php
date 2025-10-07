@php
    $url = \Illuminate\Support\Facades\Storage::disk('public')->url($record->foto_baliho);
@endphp

<div style="display:flex; align-items:center; gap:20px; text-align:left;">
    <!-- Foto di kiri -->
    <div style="flex:0 0 40%; text-align:center;">
        <img src="{{ $url }}"
             alt="Foto Baliho"
             style="max-width:100%; height:auto; border-radius:8px;">
    </div>

    <!-- Caption di kanan -->
    <div style="flex:1;">
        @if($record->nama_baliho)
            <div style="font-weight:600; font-size:18px;">{{ $record->nama_baliho }}</div>
        @endif

        @if($record->lokasi_baliho)
            <div style="color:#6b7280; margin-top:4px;">Lokasi: {{ $record->lokasi_baliho }}</div>
        @endif

        @if($record->ukuran_baliho)
            <div style="margin-top:4px;">Ukuran: {{ $record->ukuran_baliho }}</div>
        @endif

        @if($record->layout_baliho)
            <div style="margin-top:4px;">Layout: {{ $record->layout_baliho }}</div>
        @endif
    </div>
</div>
