<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post">
                        @csrf
                        Title: <input type="text" name="title" class="form-control"><br><br>
                        Description: <textarea name="desc" class="form-control"></textarea><br><br>
                        Title: <input type="checkbox" name="status"><br><br>
                        <input type="submit" name="add-post" value="Add Post" class="btn btn-success"><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
