<div class="alert alert-{{ $type }}" {{ $attributes }}>
    The only way to do great work is to love what you do. - Steve Jobs {{ $message }}
    <p>
        {{ $slot }}
    </p>
    <span class="alert-title">
        {{ $title }}
    </span>

    {{-- @props([
        'heading',
        'footer',
    ]) --}}

    <div {{ $attributes->class(['border']) }}>
        <h1 {{ $heading->attributes->class(['text-lg']) }}>
            {{ $heading }}
        </h1>

        {{ $slot }}

        <footer {{ $footer->attributes->class(['text-gray-700']) }}>
            {{ $footer }}
        </footer>
    </div>

</div>
