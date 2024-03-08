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

     
        <!-- Add Category Modal -->
        <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCategoryModalLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="form-group text-center">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control " id="name" name="name" required>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn text-center rounded btn-primary bg-dark mt-2">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <table class="card bg-light mx-auto table table-sm w-75 rounded">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>
                            <button type="button" class="btn  btn-sm rounded" data-toggle="modal" data-target="#addCategoryModal">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
</svg>
                    </button>
            </th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <button type="button" class="btn" data-toggle="modal"
                                data-target="#editCategoryModal{{ $category->id }}">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="btn " data-toggle="modal"
                                data-target="#deleteCategoryModal{{ $category->id }}">
                                <i class="bi bi-trash3-fill"></i> 
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">No Category</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        </div>
        


        <!-- Edit Category Modal -->
        @foreach($categories as $category)
            <div class="modal fade" id="editCategoryModal{{ $category->id }}" tabindex="-1" role="dialog"
                aria-labelledby="editCategoryModalLabel{{ $category->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editCategoryModalLabel{{ $category->id }}">Edit Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group text-center">
                                    <label for="name">Category Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $category->name }}" required>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn text-center rounded btn-warning bg-warning mt-2">Update Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Delete Category Modal -->
        @foreach($categories as $category)
            <div class="modal fade" id="deleteCategoryModal{{ $category->id }}" tabindex="-1" role="dialog"
                aria-labelledby="deleteCategoryModalLabel{{ $category->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content text-center">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteCategoryModalLabel{{ $category->id }}">Delete
                                Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text- center">
                            <p>Are you sure you want to delete this category?</p>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn text-center rounded btn-danger bg-danger mt-2">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</x-app-layout>
