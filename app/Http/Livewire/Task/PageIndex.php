<?php

namespace App\Http\Livewire\Task;

use App\Models\Task;
use Livewire\Component;

use function GuzzleHttp\Promise\task;

class PageIndex extends Component
{
    public $title = '';
    public $description = '';

    protected $rules = [
        'title' => 'required|min:6',
        'description' => 'required|min:6',
    ];

    protected $messages = [
        'title.min' => 'Title min invalid',
        'title.required' => 'Title invalid',
        'description.min' => 'Description min invalid',
        'description.required' => 'Description invalid',
    ];

    public function submit() {
        $data = $this->validate();
        Task::create($data);
        $this->reset('title');
        $this->reset('description');
        $this->dispatchBrowserEvent('show-message', ['message' => 'Task successfully created.']);
    }

    public function render()
    {
        $model = Task::select('id','title','description')->orderBy('id', 'desc')->get();
        return view('livewire.task.page-index', ['model' => $model]);
    }
}
