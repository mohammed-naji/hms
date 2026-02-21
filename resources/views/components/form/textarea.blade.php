<div class="mb-3">
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endisset

    <textarea id="{{ $name }}" placeholder="{{ $placeholder ?? '' }}" class="form-control" name="{{ $name }}"
        rows="{{ $rows ?? 4 }}"></textarea>
</div>
