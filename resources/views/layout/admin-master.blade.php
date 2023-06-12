<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style-admin.css')}}">
    <title>Admin Dashboard</title>
    <style>
      @yield('style')
      </style>
  </head>
  <body>
    <header>
      <h1>Admin Dashboard</h1>
    </header>
    <nav>
      <ul>
        <li><a href="/dashboard-admin">Home</a></li>
        <li><a href="/manage-post-page">Manage Post</a></li>
        <li><a href="/setting">Settings</a></li>
        <li><a href="/logout">Logout</a></li>
      </ul>
    </nav>
    <main>
      @yield('main')
    </main>
    <footer>
      <p>&copy; 2023 Admin Dashboard</p>
    </footer>
  </body>
</html>
<script>
// Get all the anchor elements inside the navbar
const navLinks = document.querySelectorAll('nav a');
const logoutLink = document.querySelector('a[href="/logout"]');

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

// Add click event listener to the logout anchor element
logoutLink.addEventListener('click', () => {
  // Remove the selected anchor from localStorage
  localStorage.removeItem('selectedAnchor');
});
@yield('script2')
</script>