@props(['options' => '', 'name' => '', 'label' => ''])
<div class="mb-3">
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label> <br>
    @endisset

    @foreach ($options as $op)
        <label><input type="radio" name="{{ $name }}" value="{{ $op }}"> {{ $op }}</label>
    @endforeach
</div>
