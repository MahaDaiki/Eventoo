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
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong> Validation Error!</strong>
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session()->has('success'))
    <div class="alert alert-success mt-4">
        {{ session()->get('success') }}
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger mt-4">
        {{ session()->get('error') }}
    </div>
@endif
<div class="container  mt-3">
    <div class="btn-group">
        <button type="button" class="btn text-light ml-5 mb-2 " style=" border: solid; border-color: rebeccapurple;" onclick="showClientsTable()">Show Clients</button>
        <button type="button" class="btn text-light  mb-2 active-button"  style=" border: solid; border-color: rebeccapurple; "  onclick="showCategoriesTable()">Show Categories</button>
    </div>

     
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

        <div  id="categoriesSection" class="container text-center ">
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
          <div class="text-center text-light mx-auto" >
   <h1> {{ $categories->links() }} </h1>
</div>
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

    <div id="clientsSection" class="container text-center mt-5 hidden">
        <table class="card bg-light mx-auto table table-sm w-75 rounded">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Restrict</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                   <td>{{ $client->user->name }}</td>
                   <td>{{ $client->user->email }}</td>
                   <td><form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn bg-danger"><i class="bi bi-person-x" style="font-size: 20px"></i></button>
                </form></td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">No Clients</td>
                </tr>
            @endforelse
        </tbody>
    </table> 
      <div class="text-center text-light mx-auto" >
<h1> {{ $clients->links() }} </h1>
</div>
    </div>
</div>
    <div class="upcoming-events-outer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="upcoming-events">
                        <div class="upcoming-events-header">
                            <h4>Events</h4>
                        </div>
                        @forelse ($events as $event)
                            
                    
                        <div class="upcoming-events-list">
                            <div class="upcoming-event-wrap flex flex-wrap justify-content-between align-items-center">
                                <figure class="events-thumbnail">
                                    <a href="#"><img src="images/upcoming-1.jpg" alt=""></a>
                                </figure>
    
                                <div class="entry-meta">
                                    <div class="event-date">
                                        {{ $event->duration }}
                                    </div>
                                </div>
    
                                <header class="entry-header">
                                    <h3 class="entry-title"><a href="#">  {{ $event->title }}</a></h3>
    
                                    <div class="event-date-time">  {{ $event->time }}</div>
    
                                    <div class="event-speaker">{{ $event->location }}</div>
                                    <div class="event-speaker">{{ $event->organizer->user->name }}</div>
                                </header>
    
                                <footer class="entry-footer">
                                    <form action="{{ route('admin.event.update', ['id' => $event->id]) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn "><i class="bi bi-check-all " style="font-size: 50px"></i></button>
                                    </form>
                                </footer>
                            </div>
    
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
                            
    @endforelse
    <script>
        function showClientsTable() {
            document.getElementById('clientsSection').style.display = 'block';
            document.getElementById('categoriesSection').style.display = 'none';

            document.querySelector('.active-button').classList.remove('active-button');
            document.querySelector('.btn[text="Show Clients"]').classList.add('active-button');
        }

        function showCategoriesTable() {
            document.getElementById('clientsSection').style.display = 'none';
            document.getElementById('categoriesSection').style.display = 'block';

            document.querySelector('.active-button').classList.remove('active-button');
            document.querySelector('.btn[text="Show Categories"]').classList.add('active-button');
        }
    </script>
</x-app-layout>
