<!DOCTYPE html>
<html>
<head>
    <title>Livewire CRUD</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
    <style>

    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-10">
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('student')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>
