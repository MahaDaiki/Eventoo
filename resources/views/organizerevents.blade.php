<x-app-layout>
    <div class="container mt-5">
        <div class="text-center text-white h1">
            <h1><i class="bi bi-plus "></i> Create Event <i class="bi bi-plus "></i></h1>
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
        <form action="{{ route('organizer.event.store') }}" method="POST" enctype="multipart/form-data"
              class="card w-75 mx-auto mt-4 p-4">
            @csrf
            <div class="form-group">
                <label for="title"><i class="bi bi-card-heading"></i> Title:</label>
                <input type="text" name="title" id="title" class="form-control rounded">
            </div>
            <div class="form-group">
                <label for="media"><i class="bi bi-file-earmark-image"></i> Upload Media:</label>
                <input type="file" name="media" id="media" class="form-control-file">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="category"><i class="bi bi-tags"></i> Category:</label>
                    <select name="category_id" id="category" class="form-control" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="disponible_tickets"><i class="bi bi-ticket"></i> Available Tickets:</label>
                    <input type="number" name="disponible_tickets" id="disponible_tickets" class="form-control"
                           required>
                </div>
            </div>
            <div class="form-group">
                <label for="description"><i class="bi bi-file-text"></i> Description:</label>
                <textarea name="description" id="description" class="form-control rounded" required></textarea>
            </div>
            <div class="form-group">
                <label for="location"><i class="bi bi-geo-alt"></i> Location:</label>
                <input type="text" name="location" id="location" class="form-control" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="time"><i class="bi bi-clock"></i> Event Time:</label>
                    <input type="datetime-local" name="time" id="time" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="duration"><i class="bi bi-hourglass"></i> Duration:</label>
                    <input type="time" name="duration" id="duration" class="form-control" required>
                </div>
            </div>
            <div class="form-row align-items-center">
                <div class="form-group col-md-6">
                    <label for="is_automatic"><i class="bi bi-gear"></i> Reservation</label>
                    <select class="form-control" name="is_automatic" id="is_automatic">
                        <option value="0">Automatique</option>
                        <option value="1">Manuel</option>
                    </select>
                </div>
                <div class="form-group col-md-6 text-right">
                    <button type="submit" class="btn bg-primary"><i class="bi bi-calendar-plus"></i> Create Event
                    </button>
                </div>
            </div>
        </form>
    </div>



    <section class="mt-5 container">
        <h1 class="h1 text-center text-light"> My Events</h1>
        <div class="container mx-auto mt-4">
            <div class="row">
                @forelse ($events as $event)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            @foreach ($event->getMedia() as $mediaItem)
                                <img src="{{ $mediaItem->getUrl() }}" class="card-img-top" alt="Event Image">
                            @endforeach
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p class="card-text">{{ $event->time }}</p>
                                <p class="card-text">{{ $event->disponible_tickets }} Tickets Available</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    {{-- <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary"> --}}
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <div class="d-flex">
                                        <a href="{{ route('organizer.event.edit', ['id' => $event->id]) }}" class="btn btn-warning mr-2">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('organizer.event.destroy', ['id' => $event->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        
                                            <button type="submit" class="btn bg-danger" onclick="return confirm('Are you sure you want to delete this event?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <h1>No Events Yet.</h1>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    
</x-app-layout>
