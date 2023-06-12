
<?php $__env->startSection('main'); ?>
<div class="searchbar2">
                <input type="text"
                       name=""
                       id=""
                       placeholder="Search">
                <div class="searchbtn">
                  <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn"
                        alt="search-button">
                  </div>
            </div>
 
            <div class="box-container">
 
                <div class="box box1">
                    <div class="text">
                        <h2 class="topic-heading">60.5k</h2>
                        <h2 class="topic">Article Views</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
                        alt="Views">
                </div>
 
                <div class="box box2">
                    <div class="text">
                        <h2 class="topic-heading">150</h2>
                        <h2 class="topic">Likes</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png"
                         alt="likes">
                </div>
 
                <div class="box box3">
                    <div class="text">
                        <h2 class="topic-heading">320</h2>
                        <h2 class="topic">Comments</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
                        alt="comments">
                </div>
 
                <div class="box box4">
                    <div class="text">
                        <h2 class="topic-heading">70</h2>
                        <h2 class="topic">Published</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
                </div>
            </div>
 
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Recent Articles</h1>
                    <button class="view">View All</button>
                </div>
 
                <div class="" >
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
                        <td class="t-op-nextlvl"><a href="/manage-post-page/<?php echo e($konten->id); ?>/edit" style="background-color: #F0C965; height: 30px !important; width: 40px !important; border-style:none; border-radius:8px; "><img src="<?php echo e(asset('/img/icon-edit.png')); ?>" style="margin:auto;" width="20" height="20"></a><button style="background-color: #F24949; height: 30px; width: 40px; border-style:none; border-radius:10px; "><img src="<?php echo e(asset('/img/icon-remove.png')); ?>" style="margin:auto;" width="20" height="20"></button></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>


                </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\q9production-project\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>