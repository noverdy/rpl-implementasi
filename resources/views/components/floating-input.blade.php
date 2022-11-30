<div class="form-floating mb-3">
    @if ($type == 'textarea')
        <textarea name="{{ $name }}" class="form-control" placeholder="{{ $label }}" id="{{ $id }}"
            style="height: 200px" required></textarea>
    @else
        <input name="{{ $name }}" type="{{ $type }}" class="form-control" id="{{ $id }}"
            placeholder="{{ $label }}" required>
    @endif
    <label for="{{ $id }}">{{ $label }}</label>
</div>
