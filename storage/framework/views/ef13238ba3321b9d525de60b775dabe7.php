<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container mt-5">
        <div class="text-center text-white h1">
            <h1><i class="bi bi-plus "></i> Create Event <i class="bi bi-plus "></i></h1>
        </div>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <strong> Validation Error!</strong>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success mt-4">
                <?php echo e(session()->get('success')); ?>

            </div>
        <?php endif; ?>
        <?php if(session()->has('error')): ?>
            <div class="alert alert-danger mt-4">
                <?php echo e(session()->get('error')); ?>

            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('organizer.event.store')); ?>" method="POST" enctype="multipart/form-data"
              class="card w-75 mx-auto mt-4 p-4">
            <?php echo csrf_field(); ?>
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
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?> </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <?php $__currentLoopData = $event->getMedia(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mediaItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img src="<?php echo e($mediaItem->getUrl()); ?>" class="card-img-top" alt="Event Image">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($event->title); ?></h5>
                                <p class="card-text"><?php echo e($event->time); ?></p>
                                <p class="card-text"><?php echo e($event->disponible_tickets); ?> Tickets Available</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <div class="d-flex">
                                        <a href="<?php echo e(route('organizer.event.edit', ['id' => $event->id])); ?>" class="btn btn-warning mr-2">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="<?php echo e(route('organizer.event.destroy', ['id' => $event->id])); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                        
                                            <button type="submit" class="btn bg-danger" onclick="return confirm('Are you sure you want to delete this event?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-md-12">
                        <h1>No Events Yet.</h1>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\AMD\Evento\resources\views/organizerevents.blade.php ENDPATH**/ ?>