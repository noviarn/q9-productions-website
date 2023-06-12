
<?php $__env->startSection('aside'); ?>
<?php $__env->startSection('main'); ?>
<div class="report-container">
  <div class="report-header">
      <h1 class="recent-Articles">Settings</h1>
  </div>
  <div class="grid-container">
      <div class="menu-setting item1">
        <ul>
          <li><a href="/setting-home-admin" style="background-color: lightgray;">Home Setting</a></li>
          <li><a href="/setting-about-admin">About Setting</a></li>
          <li><a href="/setting-gallery-admin">Galery Setting</a></li>
          <li><a href="/setting-contact-us-admin">Contact Us Setting</a></li>
        </ul>

      </div>
      <div class="container-form item2">
        <h1>Home Setting</h1>
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name"  required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" placeholder="Your message" required></textarea>
          </div>
          <div class="form-group" style="text-align:center">
            <button type="submit" style="background-color:">Submit</button>
          </div>
        </form>
      </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\q9production-project\resources\views/admin/setting-home-admin.blade.php ENDPATH**/ ?>