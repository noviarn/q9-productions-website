<form action="<?php echo e(route('kontens.update', $selected_konten->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>   
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label for="img_konten">Image:<input type="text" name="img_konten" id="img_konten" value="<?php echo e($selected_konten->img_konten); ?>" readonly> </label><input type="file" name="image" id="image">
    

    <label for="judul_konten">Title:</label>
    <input type="text" name="judul_konten" id="judul_konten" value="<?php echo e($selected_konten->judul_konten); ?>"> 

    <label for="Author">Author:</label>
    <input type="text" name="Author" id="Author" value="<?php echo e($selected_konten->Author); ?>">

    <label for="isi_konten">Content:</label>
    <textarea name="isi_konten" id="isi_konten" value="$selected_konten->isi_konten }}"> <?php echo e($selected_konten->isi_konten); ?></textarea>

    <label for="sumber">Source:</label>
    <input type="text" name="sumber" id="sumber" value="<?php echo e($selected_konten->sumber); ?>">


    <input type="hidden" name="user_id" id="user_id" value="<?php echo e($selected_konten->user_id); ?>">

    <button type="submit">Update Konten</button>
  </form><?php /**PATH C:\xampp\htdocs\q9production-project\resources\views/admin/konten-Edit.blade.php ENDPATH**/ ?>