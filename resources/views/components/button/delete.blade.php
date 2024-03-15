@props(['action', 'id'])
<button class="btn btn-danger" wire:click.prevent='{{ $action }}("{{ $id }}")'><i
        class="ti ti-trash"></i></button>
