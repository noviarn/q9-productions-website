
<?php $__env->startSection('main'); ?>
<div class="report-container">
  <div class="report-header">
      <h1 class="recent-Articles">Post Content</h1>
      <img class="add-show" onclick="addcontent()" width="150" height="45" src="<?php echo e(asset('/img/button-addcontent.png')); ?>">
  </div>
  <div class="report-body" style="display: none;">
      <div class="container">
        <h2>Create a New Content</h2>
        <form action="<?php echo e(route('kontens.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="form-field">
          <div class="label">
            <label for="judul_konten">Title:</label>
          </div>
          <div class="input">
            <input type="text" name="judul_konten" id="judul_konten">
          </div>
        </div>

        <div class="form-field">
          <div class="label">
            <label for="Author">Author:</label>
          </div>
          <div class="input">
            <input type="text" name="Author" id="Author">
          </div>
        </div>

        <div class="form-field">
          <div class="label">
            <label for="isi_konten">Content:</label>
          </div>
          <div class="input">
            <textarea name="isi_konten" id="isi_konten"></textarea>
          </div>
        </div>

        <div class="form-field">
          <div class="label">
            <label for="sumber">Source:</label>
          </div>
          <div class="input">
            <input type="text" name="sumber" id="sumber">
          </div>
        </div>
        <div class="form-field">
          <div class="label">
            <label for="image">Image:</label>
          </div>
          <div class="upload-files-container form-field">
              <div class="image-upload">
                <label for="image" id="image-upload-label">Select Image</label>
                <input type="file" name="image" id="image" onchange="previewImage(event, 'image-preview-container')">
                
              </div>
              <div id="image-preview-container"></div>
          </div>
        </div>

          <input type="hidden" name="user_id" id="user_id" value="<?php echo e(auth()->user()->id); ?>">

          <div style="display: flex; justify-content: center;">
            <button type="submit" style="background-color: #4582F8; height: 35px; width: 140px; border-style: none; border-radius: 10px; color: white;">Submit</button>
          </div>
        </form>
      </div>
  </div>
</div>
<div class="report-container" >
    <table>
      <tr class="report-header report-topic-heading">
        <th class="t-op">Judul</th>
        <th class="t-op">Author</th>
        <th class="t-op">Image</th>
        <th class="t-op">Status</th>
        <th class="t-op">Action</th>
      </tr>
      <?php $__currentLoopData = $kontens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $konten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td class="t-op-nextlvl"><?php echo e($konten->judul_konten); ?></td>
        <td class="t-op-nextlvl"><?php echo e($konten->Author); ?></td>
        <td class="t-op-nextlvl"><img src="<?php echo e(asset('/images/'.$konten->img_konten.'')); ?>" style="width: 80px; height: 50px; object-fit: cover;"></td>
        <td class="t-op-nextlvl">Publish</td>
        <td class="t-op-nextlvl">
          <a href="/manage-post-page/<?php echo e($konten->id); ?>/edit" style="background-color: #F0C965; height: 30px !important; width: 40px !important; border-style:none; border-radius:8px; display: inline-flex;">
            <img src="<?php echo e(asset('/img/icon-edit.png')); ?>" style="margin:auto;" width="20" height="20">
          </a>
          <a href="/manage-post-page/<?php echo e($konten->id); ?>/delete" style="background-color: #F24949;height: 30px !important; width: 40px !important; border-style:none; border-radius:8px; display: inline-flex;" onclick="return confirm('Apakah yakin data akan dihapus?')">
            <img src="<?php echo e(asset('/img/icon-remove.png')); ?>" style="margin:auto;" width="20" height="20">
          </a>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>


</div>

<?php $__env->stopSection(); ?>
<script>
  function editKonten(){
    var container = document.getElementsByClassName('report-container');
    var content = contentElements[0];
    if (content.classList.contains('hide')) {}
  }
  function addcontent() {
      var contentElements = document.getElementsByClassName('report-container');
      var contentElements2 = document.getElementsByClassName('report-header');
      
    if (contentElements.length > 0) {
      
      var content = contentElements[0];
      var container = document.getElementsByClassName('report-container');
      var containerbody = document.getElementsByClassName('report-body');
      var containerheader = document.getElementsByClassName('report-header');
      if (content.classList.contains('hide')) {
        content.classList.remove('hide');
        containerbody[0].style.display = '';
        containerbody[0].style.height = '';
        containerheader[0].querySelector('.add-show').src = '<?php echo e(asset("/img/button-closecontent.png")); ?>';
        containerheader[0].querySelector('.add-show').width = '100';
        container[0].style.height = 'auto'; // Change the height to your desired value
      } else {
        content.classList.add('hide');
        containerbody[0].style.display = 'none';
        containerbody[0].style.height = '';
        
        containerheader[0].querySelector('.add-show').src = '<?php echo e(asset("/img/button-addcontent.png")); ?>';
        containerheader[0].querySelector('.add-show').width = '150';
        container[0].style.height = ''; // Remove the height style
      }
    }

  }
  function previewImage(event, previewContainerId) {
    var imageInput = event.target;
    var imagePreviewContainer = document.getElementById(previewContainerId);
    imagePreviewContainer.innerHTML = '';

    if (imageInput.files && imageInput.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        var imagePreview = document.createElement('img');
        imagePreview.src = e.target.result;
        imagePreview.alt = 'Image Preview';
        imagePreview.style.maxWidth = '230px';
        imagePreview.style.height = '90%';
        imagePreview.style.margin = '0px 20px 20px 20px';
        imagePreview.style.objectFit = 'cover';
        imagePreviewContainer.appendChild(imagePreview);
      };

      reader.readAsDataURL(imageInput.files[0]);
    }
  }
  // function previewImage(event) {
  //   var imageInput = event.target;
  //   var imagePreviewContainer = document.getElementById('image-preview-container');
  //   imagePreviewContainer.innerHTML = '';

  //   if (imageInput.files && imageInput.files[0]) {
  //     var reader = new FileReader();

  //     reader.onload = function(e) {
  //       var imagePreview = document.createElement('img');
  //       imagePreview.src = e.target.result;
  //       imagePreview.alt = 'Image Preview';
  //       imagePreview.style.maxWidth = '230px'; 
  //       imagePreview.style.height = '90%';
  //       imagePreview.style.margin = '0px 20px 20px 20px';
  //       imagePreview.style.objectFit = 'cover';
  //       imagePreviewContainer.appendChild(imagePreview);
  //     };

  //     reader.readAsDataURL(imageInput.files[0]);
  //   }
  // }

  function editKonten(){

  }
  function openModal(kontenId) {
    var form = document.getElementById('modal-form');
  form.action = "<?php echo e(route('kontens.update', '')); ?>" + "/" + kontenId;

  // Display the modal
  document.getElementById('zoomModal').style.display = 'block';
  }
  
  function closeModal() {
    var modal = document.getElementById('zoomModal');
    modal.style.display = 'none';
  }
</script>
<?php echo $__env->make('layout.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\q9production-project\resources\views/admin/managepost.blade.php ENDPATH**/ ?>