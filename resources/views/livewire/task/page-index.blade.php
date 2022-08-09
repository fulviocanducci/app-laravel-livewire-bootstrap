<div>
    <livewire:header :title="'Task'"/>
    <form wire:submit.prevent="submit">
        <div class="row mb-3">
            <div class="col-md-12 mt-2">
                <div class="form-group">
                    <label>Description @error('title') <span class="text-danger">({{ $message }})</span> @enderror </label>
                    <input type="text" wire:model.defer="title" class="form-control form-control-sm" placeholder="Title"/>

                </div>
            </div>
            <div class="col-md-12 mt-2">
                <div class="form-group">
                    <label>Description @error('description') <span class="text-danger">({{ $message }})</span> @enderror </label>
                    <textarea wire:model.defer="description" class="form-control form-control-sm" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <span wire:loading.remove>Send</span> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:loading></span>
                        <span class="visually-hidden" wire:loading>Loading...</span>
                    </button>
                </div>
            </div>
        </div>
    </form>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                </tr>
            </thead>
            @if (isset($model) && $model->count() > 0)
            @foreach($model as $field)
            <tr>
                <td class="text-truncate">{{$field->id}}</td>
                <td class="text-truncate">{{$field->title}}</td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="2" class="text-center">
                    <b>Nothing Task ...</b>
                </td>
            </tr>
            @endif
        </table>
    </div>
</div>
