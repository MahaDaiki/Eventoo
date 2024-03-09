<x-app-layout>
    <div class="container mt-5">
        <div class="text-center text-white h1">
            <h1><i class="bi bi-pencil"></i> Edit Event <i class="bi bi-pencil"></i></h1>
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
        <form action="{{ route('organizer.event.update', $event->id) }}" method="POST" enctype="multipart/form-data"
              class="card w-75 mx-auto mt-4 p-4">
            @csrf
            @method('PUT') <!-- Use the PUT method for updates -->

            <div class="form-group">
                <label for="title"><i class="bi bi-card-heading"></i> Title:</label>
                <input type="text" name="title" id="title" class="form-control rounded" value="{{ old('title', $event->title) }}">
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="category"><i class="bi bi-tags"></i> Category:</label>
                    <select name="category_id" id="category" class="form-control" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $event->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="disponible_tickets"><i class="bi bi-ticket"></i> Available Tickets:</label>
                    <input type="number" name="disponible_tickets" id="disponible_tickets" class="form-control"
                           value="{{ old('disponible_tickets', $event->disponible_tickets) }}" required>
                </div>
            </div>

            <div class="form-group">
                <label for="media"><i class="bi bi-file-earmark-image"></i> Upload Media:</label>
                <input type="file" name="media" id="media" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="description"><i class="bi bi-file-text"></i> Description:</label>
                <textarea name="description" id="description" class="form-control rounded" required>{{ old('description', $event->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="location"><i class="bi bi-geo-alt"></i> Location:</label>
                <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $event->location) }}" required>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="time"><i class="bi bi-clock"></i> Event Time:</label>
                    <input type="datetime-local" name="time" id="time" class="form-control" value="{{ old('time', \Carbon\Carbon::parse($event->time)->format('Y-m-d\TH:i')) }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="duration"><i class="bi bi-hourglass"></i> Duration:</label>
                    <input type="time" name="duration" id="duration" class="form-control" value="{{ old('duration', $event->duration) }}" required>
                </div>
            </div>

            <div class="form-row align-items-center">
                <div class="form-group col-md-6">
                    <label for="is_automatic"><i class="bi bi-gear"></i> Reservation</label>
                    <select class="form-control" name="is_automatic" id="is_automatic" required>
                        <option value="0" {{ $event->is_automatic == 0 ? 'selected' : '' }}>Automatique</option>
                        <option value="1" {{ $event->is_automatic == 1 ? 'selected' : '' }}>Manuel</option>
                    </select>
                </div>
              

            </div>

            <button type="submit" class="btn bg-primary mx-auto"><i class="bi bi-check-circle"></i> Update Event</button>
        </form>
    </div>
</x-app-layout>
