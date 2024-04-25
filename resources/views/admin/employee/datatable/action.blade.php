<!-- Edit Button -->
<a href="{{ route('admin.employee.edit', $id) }}" class="btn btn-icon btn-primary">
    <i class="ti ti-pencil"></i>
</a>
<x-button.modal-delete class="btn-icon" data-route="{{ route('admin.employee.delete', $id) }}">
    <i class="ti ti-trash"></i>
</x-button.modal-delete>
