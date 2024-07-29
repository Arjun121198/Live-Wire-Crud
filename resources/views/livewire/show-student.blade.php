<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Student Details</h2>
        <button data-modal-target="{{ $updateMode ? 'default-modal' . $student_id : 'default-modal' }}"
            data-modal-toggle="{{ $updateMode ? 'default-modal' . $student_id : 'default-modal' }}"
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            Add
        </button>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Edit
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $student->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $student->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $student->phone }}
                    </td>
                    {{-- <td class="px-6 py-4 text-right">
                        <button wire:click="edit('{{ $student->_id }}')"
                            data-modal-target="default-modal_{{ $student->_id }}"
                            data-modal-toggle="default-modal_{{ $student->_id }}" class="btn btn-danger">Edit</button>
                    </td> --}}

                    <td class="px-6 py-4 text-right">
                        <button wire:click="delete('{{ $student->_id }}')" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<br>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Student Details</h2>
    </div>

    <div id="accordion-collapse" data-accordion="collapse">
        @foreach ($students as $key => $student)
            <h2 id="accordion-collapse-heading-{{ $key }}">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-collapse-body-{{ $key }}" aria-expanded="false"
                    aria-controls="accordion-collapse-body-{{ $key }}">
                    <span>{{ $student->name }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-{{ $key }}" class="hidden"
                aria-labelledby="accordion-collapse-heading-{{ $key }}">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">{{ $student->email }}</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">{{ $student->phone }}</p>
                </div>
            </div>
        @endforeach
    </div>

</div>
@include('livewire.store-student')
