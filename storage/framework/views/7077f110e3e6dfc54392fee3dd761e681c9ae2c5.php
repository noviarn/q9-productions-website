
<?php $__env->startSection('main'); ?>
      <main>
        <div class="container">
            <h2>About Page Settings</h2>
            <form>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="Our Story">
                <label for="content">Content</label>
                <textarea id="content" name="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit augue eu ante fermentum laoreet. Duis malesuada sem et purus mollis hendrerit. Sed eget ligula at eros consequat facilisis. Nam quis elit euismod, semper nunc non, efficitur risus. Aenean volutpat risus vitae mi elementum malesuada. Donec viverra nisi et urna malesuada, non posuere eros interdum. Praesent vel tellus quis dolor faucibus blandit at sit amet leo. Sed pellentesque libero ac tellus convallis, nec gravida elit varius.</textarea>
                <input type="submit" value="Save Changes">
            </form>
        </div>
      </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\q9production-project\resources\views/admin/setting-about.blade.php ENDPATH**/ ?>