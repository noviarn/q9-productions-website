
<?php $__env->startSection('main'); ?>
<div class="report-container"  style="display: flex; justify-content: center; width: 650px;">
    
    <div class="report-body" >
        <a class="zoom-modal-close" >
            <a href="/manage-post-page" class="close" style="display: flex;">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="40" viewBox="0 0 43 54" fill="none">
                    <rect width="43" height="54" fill="url(#pattern0)"/>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_237_149" transform="matrix(0.0111111 0 0 0.00884774 0 0.101852)"/>
                    </pattern>
                    <image  style="color: #1A5AA0" id="image0_237_149" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB7UlEQVR4nO2cQU7DMBBFZzXh5DTnYRHlQlBuMVVRkFBVBG3i8f/j/yRvWKDnp9ZtqRkzIYQQQgghhBBCCHGPycxmMztva95+xgKFv5vZm5nFzVrN7MXwofD/TRJSltX/L0koWVb//0oGgiyr/6OSARabwv/6Srw8IRnbWjq/mtP4zzsko3PsvZG/1ylD9nyAaHQ4Rp49Lu6tT6bQkRj7yMjX9Z7g/PW0OUo4Eo6Ro46Ln+u1oW9T8aVRbCbXlKdiNDhGGBzpN+LAbmU25IBOh4C0MQdyaQLCBh3AIYWeG/VRIvfcsI8WucfGfdTImQF89MgZIVyRcz4CLw1+J9w33o/iDR59wx8XbLFXxjOZLfZaMTJa7NKRUWIPEbl37KEi94o9ZOTs2ENHzoqtyAmxFfkGhU7AdXTwRw4dIaa3dxm4PrDUjRwjHSOuPyqNEzkqP7IdLHLJ2A4auVRsfTmbgK4bJKALNAnoSlgCuuSYgK7tJoBwF84BHJqCtEEHcjkUxI05oNMukDfkwG7lNuIEjmX+7Xcicm0yryMSxVvEpprXEcRjJKjmdazEg1Fo5nUs5KN+KOZ1LBpeVWycWRV/igF9VfwpRk5W8acYolrFn2IscBX/aXvr97GtE9m//U7k/kIIIYQQQgghhBCWxQVCVmav1FT2GAAAAABJRU5ErkJggg=="/>
                    </defs>
                </svg>
            close</a>
        </a>
        <form method="post" style="width:auto !important" action="<?php echo e(route('kontens.update', $kontens->id )); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?> 
            <h2>Update Content</h2>
            <div class="form-group">
            <div class="label">
                <label for="judul_konten">Title:</label>
            </div>
            <div class="input">
                <input type="text" name="judul_konten" id="judul_konten" value="<?php echo e($kontens->judul_konten); ?>">
            </div>
            </div> 
            <div class="form-group">
            <div class="label">
                <label for="Author">Author:</label>
            </div>
            <div class="input">
                <input type="text" name="Author" id="Author" value="<?php echo e($kontens->Author); ?>">
            </div>
            </div>
            <div class="form-group">
            <div class="label">
                <label for="isi_konten">Content:</label>
            </div>
            <div class="input">
                <textarea name="isi_konten" id="isi_konten"><?php echo e($kontens->isi_konten); ?></textarea>
            </div>
            </div>
            <div class="form-group">
            <div class="label">
                <label for="sumber">Source:</label>
            </div>
            <div class="input">
                <input type="text" name="sumber" id="sumber" value="<?php echo e($kontens->sumber); ?>">
            </div>
            </div>
            <div class="form-group">
            <div div class="label">
                <label for="image">Image:</label>
            </div>
            <div class="input">
                <input type="file" name="img_konten"  id="image-modal" >
            </div>
            <div>Selected image: <?php echo e($kontens->img_konten); ?></div>
            
            </div>
            
            <input type="hidden" name="user_id" id="user_id" value="<?php echo e($kontens->user_id); ?>">
            <div style="display: flex; justify-content: center;">
            <button type="submit" style="background-color: #4582F8; height: 35px; width: 140px; border-style: none; border-radius: 10px; color: white;">Submit</button>
            </div>
        </form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\q9production-project\resources\views/admin/managepostEdit.blade.php ENDPATH**/ ?>