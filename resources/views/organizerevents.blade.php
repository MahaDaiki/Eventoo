<x-app-layout>
    <div class="container mt-5">
        <div class="text-center text-white h1">
            <h1><i class="bi bi-plus "></i> Create Event <i class="bi bi-plus "></i></h1>
        </div>
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
        <form action="{{ route('organizer.event.store') }}" method="POST" enctype="multipart/form-data" class="card w-75 mx-auto mt-4 p-4">
            @csrf
            <div class="form-group">
                <label for="title"><i class="bi bi-card-heading"></i> Title:</label>
                <input type="text" name="title" id="title" class="form-control rounded" required>
            </div>
            <div class="d-flex">
            <div class="form-group">
                <label for="media"><i class="bi bi-file-earmark-image"></i> Upload Media:</label>
                <input type="file" name="media" id="media" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label for="category"><i class="bi bi-tags"></i> Category:</label>
                <select name="Category_id" id="category" class="form-control" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }} </option>
                    @endforeach
                    
                </select>
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
                    <label for="disponible_tickets"><i class="bi bi-ticket"></i> Available Tickets:</label>
                    <input type="number" name="disponible_tickets" id="disponible_tickets" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <div class="form-check ml-5 mt-4">
                        <input type="checkbox" class="form-check-input" name="is_automatic" id="is_automatic">
                        <label class="form-check-label" for="is_automatic"><i class="bi bi-gear"></i> Automatic Reservation</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn bg-primary mx-auto"><i class="bi bi-calendar-plus"></i> Create Event</button>
        </form>
    </div>
</x-app-layout>
