@props(['component', 'target', 'data'])
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $target }}">
    <i class="ti ti-pencil rounded"></i>
</button>
@livewire($component, ['id' => $data->id], key($data->id))
