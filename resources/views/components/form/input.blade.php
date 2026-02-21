<div class="mb-3">
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endisset

    <input type="{{ $type ?? 'text' }}" id="{{ $name }}" placeholder="{{ $placeholder ?? '' }}" class="form-control"
        name="{{ $name }}" {{ $attributes->except('label') }}>
</div>
