@php
    $type ??= 'text';
    $name ??= '';
    $class ??= null;
    $value ??= '';
    $label ??= ucfirst($name);

@endphp

<div @class(['input-group my-3', $class]) >
    <label for="{{ $name }}" class="input-group-text">{{ $label }}</label>

    @if ($type === 'textarea')
        <textarea class="form-control @error($name) is-invalid @enderror " id="{{ $name }}" name="{{ $name }}">{{old($name, $value)}}</textarea>
    @else
        <input class="form-control @error($name) is-invalid @enderror " type="{{$type}}" id="{{ $name }}" name="{{ $name }}" value="{{old($name, $value)}}" />
    @endif
    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
        
    @enderror
</div>