<!DOCTYPE html>
<html>
  <head>
    <title>Home Settings | Your Website Name</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style-admin.css')); ?>">
  </head>
  <body>
  <header>
      <h1>Admin Dashboard</h1>
    </header>
    <nav>
      <ul>
        <li><a href="/dashboard-admin">Home</a></li>
        <li><a href="/manage-post-page">Manage Content</a></li>
        <li><a href="/setting" style=" color: lightskyblue;">Settings</a></li>
        <li><a href="/logout">Logout</a></li>
      </ul>
    </nav>
    <div class="admin-container">
      <?php echo $__env->yieldContent('aside'); ?>
      <aside>
        <ul>
          <li><a href="/setting">Dashboard Home</a></li>
          <li><a href="/about-page-setting" style="background-color:lightgray;">About Pages</a></li>
          <li><a href="/galery-setting">Galery Pages</a></li>
          <li><a href="/contact-us-setting">Contact Us Pages</a></li>
          
        </ul>
      </aside>
      <main>
          <?php echo $__env->yieldContent('main'); ?>
      </main>
    </div>

    <footer>
      <div class="container">
        <p>&copy; Your Website Name 2023. All rights reserved.</p>
      </div>
    </footer>

  </body>
</html>

<script>
// Get all the anchor elements inside the navbar
const navLinks = document.querySelectorAll('nav a');

// Check if a selected anchor is stored in localStorage
const storedAnchor = localStorage.getItem('selectedAnchor');

// Add font color class to the stored selected anchor, if any
if (storedAnchor) {
  const selectedAnchor = document.querySelector(storedAnchor);
  if (selectedAnchor) {
    selectedAnchor.classList.add('selected', 'font-color');
  }
}

// Add click event listener to each anchor element
navLinks.forEach((link) => {
  link.addEventListener('click', (event) => {
    // Remove selected class from all anchor elements
    navLinks.forEach((link) => {
      link.classList.remove('selected');
    });

    // Add selected class to the clicked anchor element
    event.target.classList.add('selected');

    // Remove font color class from all anchor elements
    navLinks.forEach((link) => {
      link.classList.remove('font-color');
    });

    // Add font color class to the clicked anchor element
    event.target.classList.add('font-color');

    // Store the selected anchor in localStorage
    localStorage.setItem('selectedAnchor', `nav a[href="${event.target.getAttribute('href')}"]`);
  });
});

</script><?php /**PATH C:\xampp\htdocs\q9production-project\resources\views/layout/admin-setting-master.blade.php ENDPATH**/ ?>