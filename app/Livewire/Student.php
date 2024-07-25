<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student as ModelStudent;

class Student extends Component
{
    public $name, $email, $phone, $student_id, $students;
    public $updateMode = false;

    public function render()
    {
        $this->students = ModelStudent::get();
        $this->resetInputFields();
        return view('livewire.student');
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->student_id = '';
        $this->updateMode = false;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        ModelStudent::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone
        ]);
    }

    public function edit($id)
    {
        $student = ModelStudent::findOrFail($id);
        $this->student_id = $id;
        $this->name = $student->name;
        $this->email = $student->email;
        $this->phone = $student->phone;
        $this->updateMode = true;
    }

    public function delete($id)
    {
        ModelStudent::findOrFail($id)->delete();
    }
}
