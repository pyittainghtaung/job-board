{{--
First Style --}}
{{-- <div {{ $attributes->merge(['class' => 'rounded-md border border-slate-300 bg-white p-4 shadow-sm']) }}>
    {{ $slot }}
</div> --}}

{{-- This is second Style --}}
<article
     {{ $attributes->class(['rounded-md border border-slate-300 bg-white p-4 shadow-sm']) }}>
    {{ $slot }}
</article>
