@props(['name', 'component', 'target'])
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $target }}">
    <i class="border ti ti-plus rounded p-1 me-1"></i>
    {{ $name }}
</button>
@livewire($component)
