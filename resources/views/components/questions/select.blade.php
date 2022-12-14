<div class="w-full p-3">
    <x-form-label :for="$name" :value="__($label)" :tooltip="$tooltip ?? null" :class="$errors->has($name) ? 'text-red-600' : ''"></x-form-label>

    <x-form-select :id="$name" :name="$name" :class="$errors->has($name)?' text-red-600 border-red-600':''">
        <option value="">Choose ...</option>
        @foreach($options as $val => $label)
            <option {{ $val === $value ? 'selected="selected"' : '' }} value="{{ $val }}">
                {{ $label }}
            </option>
        @endforeach
    </x-form-select>
    @if($errors->has($name))
        @foreach($errors->get($name) as $error)
            <div class="text-sm text-red-600">{{ $error }}</div>
        @endforeach
    @endif
</div>