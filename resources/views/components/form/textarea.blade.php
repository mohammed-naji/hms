<div class="mb-3">
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endisset

    <textarea id="{{ $name }}" placeholder="{{ $placeholder ?? '' }}"
        class="form-control  @error($name) is-invalid @enderror" name="{{ $name }}" rows="{{ $rows ?? 4 }}">{{ $slot }}</textarea>
    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
