<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-purple-900 light:text-purple-100 h1 bg-light text-center">
                    <i class="bi bi-person-circle mr-3" style="width: 50px"></i>{{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>

    <section class="container">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif




</x-app-layout>