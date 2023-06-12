
<?php $__env->startSection('aside'); ?>
<?php $__env->startSection('main'); ?>
<div class="report-container">
  <div class="report-header">
      <h1 class="recent-Articles">Settings</h1>
  </div>
  <div class="report-body">
    <div class="grid-container">
        <div class="menu-setting item1">
          <ul>
            <li><a href="/setting-home-admin" >Home Setting</a></li>
            <li><a href="/setting-about-admin" style="background-color: lightgray;">About Setting</a></li>
            <li><a href="/setting-gallery-admin">Galery Setting</a></li>
            <li><a href="/setting-contact-us-admin">Contact Us Setting</a></li>
          </ul>

        </div>
        <form method="post" action="<?php echo e(route('about.post', $about->id)); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?> 
          <div class="item2">
            <h1>About Setting</h1>
            
              <div class="section">
                <h3>Section 1</h3>
                <div class="form-group">
                  <label for="sec1_title">Title</label>
                  <input type="text" id="sec1_title" name="sec1_title" placeholder="input title..." value="<?php echo e($about->sec1_title); ?>" required>
                </div>
                <div class="form-group">
                  <label for="sec1_subtitle">Subtitle</label>
                  <input type="text" id="sec1_subtitle" name="sec1_subtitle" placeholder="input subtitle..."  value="<?php echo e($about->sec1_subtitle); ?>" required>
                </div>
                <div class="form-group">
                  <label for="sec1_isi_konten">Detail Content</label>
                  <input type="text" id="sec1_isi_konten" name="sec1_isi_konten" placeholder="input detail content..."   value="<?php echo e($about->sec1_isi_konten); ?>"required>
                </div>
                <div class="form-group">
                  <div div class="label">
                    <label for="image">Image:</label>
                  </div>
                  <div class="input">
                    <input type="file" name="sec1_img"   >
                  </div>
                  <div>Selected image: <?php echo e($about->sec1_img); ?></div>
                  
                </div>
              </div>
              <div class="section">
                <h3>Section 2</h3>
                  <div class="form-group">
                    <label for="sec2_title">Title</label>
                    <input type="text" id="sec2_title" name="sec2_title" placeholder="input title..." 
                    value="<?php echo e($about->sec2_title); ?>" required>
                  </div> 
                  <div class="form-group">
                    <div div class="label">
                      <label for="image">Image:</label>
                    </div>
                    <div class="input">
                      <input type="file" name="sec2_img1"   >
                    </div>
                    <div>Selected image: <?php echo e($about->sec2_img1); ?></div>
                    
                  </div>
                  <div class="form-group">
                    <div div class="label">
                      <label for="image">Image:</label>
                    </div>
                    <div class="input">
                      <input type="file" name="sec2_img2"   >
                    </div>
                    <div>Selected image: <?php echo e($about->sec2_img2); ?></div>
                    
                  </div>
              </div>  
              <div class="section">
                <h3>Section 3</h3>
                  <div class="form-group">
                    <label for="sec3_title">Title</label>
                    <input type="text" id="sec3_title" name="sec3_title" placeholder="input title..." 
                    value="<?php echo e($about->sec3_title); ?>"
                    required>
                  </div> 
                  <div class="form-group">
                    <label for="sec3_subtitle">Subtitle</label>
                    <input type="text" id="sec3_subtitle" name="sec3_subtitle" placeholder="input subtitle..." 
                    value="<?php echo e($about->sec3_subtitle); ?>"
                    required>
                  </div>
              </div>
              <div class="form-group" style="text-align:center">
                <button type="submit" style="background-color:">Submit</button>
              </div>
          </div>
        </form>
    </div>
  </div>
    
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\q9production-project\resources\views/admin/setting-about-admin.blade.php ENDPATH**/ ?>