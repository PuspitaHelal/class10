<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('heading', null, []); ?> 
        Create
     <?php $__env->endSlot(); ?>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg p-6">
            <!-- Heading -->
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Create</h1>
            <!-- Form -->
            <form class="space-y-6" method="POST">
                <!-- Title Input -->
                <?php echo csrf_field(); ?>
                
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input 
                        type="text" 
                        id="title" 
                        name="title" 
                        class="mt-1 w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                        placeholder="Enter the title"
                    />
                </div>
                <!-- Body Textarea -->
                <div>
                    <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                    <textarea 
                        id="body" 
                        name="body" 
                        rows="5" 
                        class="mt-1 w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                        placeholder="Enter the content"
                    ></textarea>
                </div>
                <!-- Submit Button -->
                <button 
    type="submit" 
    class="bg-blue-600 text-white py-1 px-3 text-sm rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
>
    Submit
</button>
                </div>
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\cse\Herd\class10\resources\views/create.blade.php ENDPATH**/ ?>