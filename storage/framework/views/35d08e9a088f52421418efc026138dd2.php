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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-purple-900 light:text-purple-100 h1 bg-light text-center">
                    <i class="bi bi-person-circle mr-3" style="width: 50px"></i><?php echo e(Auth::user()->name); ?>

                </div>
            </div>
        </div>
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
                        <form action="<?php echo e(route('categories.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group text-center">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control " id="name" name="name" required>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($category->name); ?></td>
                        <td>
                            <button type="button" class="btn" data-toggle="modal"
                                data-target="#editCategoryModal<?php echo e($category->id); ?>">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="btn " data-toggle="modal"
                                data-target="#deleteCategoryModal<?php echo e($category->id); ?>">
                                <i class="bi bi-trash3-fill"></i> 
                            </button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="2">No Category</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table> 
          <div class="text-center text-light mx-auto" >
   <h1> <?php echo e($categories->links()); ?> </h1>
</div>
        </div>
     
        <!-- Edit Category Modal -->
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal fade" id="editCategoryModal<?php echo e($category->id); ?>" tabindex="-1" role="dialog"
                aria-labelledby="editCategoryModalLabel<?php echo e($category->id); ?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editCategoryModalLabel<?php echo e($category->id); ?>">Edit Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <form action="<?php echo e(route('categories.update', $category->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="form-group text-center">
                                    <label for="name">Category Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="<?php echo e($category->name); ?>" required>
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="text-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <button type="submit" class="btn text-center rounded btn-warning bg-warning mt-2">Update Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

        <!-- Delete Category Modal -->
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal fade" id="deleteCategoryModal<?php echo e($category->id); ?>" tabindex="-1" role="dialog"
                aria-labelledby="deleteCategoryModalLabel<?php echo e($category->id); ?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content text-center">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteCategoryModalLabel<?php echo e($category->id); ?>">Delete
                                Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text- center">
                            <p>Are you sure you want to delete this category?</p>
                            <form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn text-center rounded btn-danger bg-danger mt-2">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__empty_1 = true; $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($client->id); ?></td>
                   <td><?php echo e($client->user->name); ?></td>
                   <td><?php echo e($client->user->email); ?></td>
                   <td><form action="<?php echo e(route('clients.destroy', $client->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn bg-danger"><i class="bi bi-person-x" style="font-size: 20px"></i></button>
                </form></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="2">No Clients</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table> 
      <div class="text-center text-light mx-auto" >
<h1> <?php echo e($clients->links()); ?> </h1>
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
                        <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            
                    
                        <div class="upcoming-events-list">
                            <div class="upcoming-event-wrap flex flex-wrap justify-content-between align-items-center">
                                <figure class="events-thumbnail">
                                    <a href="#"><img src="images/upcoming-1.jpg" alt=""></a>
                                </figure>
    
                                <div class="entry-meta">
                                    <div class="event-date">
                                        <?php echo e($event->duration); ?>

                                    </div>
                                </div>
    
                                <header class="entry-header">
                                    <h3 class="entry-title"><a href="#">  <?php echo e($event->title); ?></a></h3>
    
                                    <div class="event-date-time">  <?php echo e($event->time); ?></div>
    
                                    <div class="event-speaker"><?php echo e($event->location); ?></div>
                                    <div class="event-speaker"><?php echo e($event->organizer->user->name); ?></div>
                                </header>
    
                                <footer class="entry-footer">
                                    <form action="<?php echo e(route('admin.event.update', ['id' => $event->id])); ?>" method="POST" style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            
    <?php endif; ?>
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
<?php /**PATH C:\Users\AMD\Evento\resources\views/adminDashboard.blade.php ENDPATH**/ ?>