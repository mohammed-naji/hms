<div class="mb-3">
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endisset


    <select id="{{ $name }}" class="form-select" name="{{ $name }}">
        {{ $slot }}
    </select>
</div>
