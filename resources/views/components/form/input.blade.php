<div class="mb-3">
    @isset($label)
        <label for="{{ $name }}">{{ $label }}

            @if (isset($req) && $req)
                <sup class="text-danger">*</sup>
            @endif

        </label>
    @endisset


    <input type="{{ $type ?? 'text' }}" id="{{ $name }}" placeholder="{{ $placeholder ?? '' }}"
        class="form-control @error($name) is-invalid @enderror " name="{{ $name }}"
        {{ $attributes->except('label') }}>

    @if (isset($type) && $type == 'file' && isset($value))
        <img width="80" src="{{ asset($value) }}" alt="">
    @endif

    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
