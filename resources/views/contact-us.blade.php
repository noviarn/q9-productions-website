<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Q9 Productions | Contact Us</title>
    <link href="img/favicon.png" rel="shortcut icon" type="image/png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="css/contact-us.css" />
  </head>
  <body>
    <!-- navbar -->
    <header class="navbar">
      <i class="menu-btn fa-solid fa-bars"></i>
      <a href="home.html" class="logo"
        ><img src="{{asset('img/q9-logo-without-text-new.png')}}" alt="Q9 Productions logo"
      /></a>
      <nav class="nav-links">
        <a href="/">Home</a>
        <a href="/about" >About</a>
        <a href="/gallery">Gallery</a>
        <a href="/contact-us" class="active">Contact Us</a>
      </nav>
      <img
        class="menu-btn"
        src="img/icons/dashicons_menu-alt.svg"
        alt="Menu icon"
      />
    </header>
    <!-- navbar -->

    <!--contact us -->
    <section class="contact-us">
      <h1>Contact Us</h1>
      <div class="container">
        <div class="left-row">
          <div class="contact-info">
            <div class="box">
              <div class="icon">
                <img
                  class="img"
                  src="{{asset('img/icons/white/ic_sharp-phone.svg')}}"
                  alt="Phone contact icon"
                />
              </div>
              <div class="text">
                <a href="tel:+628119847234"> <p>+62 811 9847 234</p></a>
              </div>
            </div>
            <div class="box">
              <div class="icon">
                <img
                  class="img"
                  src="{{asset('img/icons/white/ic_sharp-email.svg')}}"
                  alt="Email contact icon"
                />
              </div>
              <div class="text">
                <a href="mailto:ops.q9p@gmail.com"> <p>ops.q9p@gmail.com</p></a>
              </div>
            </div>
            <div class="box">
              <div class="icon">
                <img
                  class="img"
                  src="{{asset('img/icons/white/ri_instagram-fill.svg')}}"
                  alt="Instagram contact icon"
                />
              </div>
              <div class="text">
                <a
                  href="https://www.instagram.com/q9productions"
                  target="”_blank"
                  ><p>@q9productions</p></a
                >
              </div>
            </div>
            <div class="box">
              <div class="icon">
                <img
                  class="img"
                  src="{{asset('img/icons/white/uil_facebook-f.svg')}}"
                  alt="Facebook contact icon"
                />
              </div>
              <div class="text">
                <a
                  href="https://www.facebook.com/q9productions"
                  target="”_blank"
                >
                  <p>Q9 Productions</p></a
                >
              </div>
            </div>
          </div>
          <iframe
            class="maps"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8607227868424!2d106.72269017423399!3d-6.282033661489884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f169283b25eb%3A0x3db19a86a717eba3!2sQ9%20Productions!5e0!3m2!1sen!2sid!4v1686486442801!5m2!1sen!2sid"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <div class="right-row">
          <div class="contact-form">
            <form action="/contact-us/sendWa" method="post"  >
              {{csrf_field()}}
              <h2>Send Message</h2>
              <div class="input-box">
                <input ype="text" name="fullname" required="" required />
                <span>Full Name</span>
              </div>
              <div class="input-box">
                <input type="number" name="noHp" required="" required />
                <span>Phone Number</span>
              </div>
              <div class="input-box">
                <input type="email" name="email" required="" required  />
                <span>Email</span>
              </div>
              <div class="input-box">
                <textarea rows="4" name="message"required></textarea>
                <span>Type your message...</span>
              </div>
              <input type="hidden" name="noWa" value="6282122614248">
              <div class="input-box">
                <input
                  type="submit"
                  name=""
                  value="Submit"
                  id="open-modal-btn"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-container" id="modal-container">
        <div class="modal">
          <h2>Message Sent Successfully!</h2>
          <p>
            Thank you for contacting us. Your message has been successfully
            submitted. We will get back to you as soon as possible.
          </p>
          <button class="close-btn" id="close-btn">Close</button>
        </div>
      </div>
    </section>
    <!-- contact us temp -->

    <!-- footer -->
    <footer>
      <p>
        &copy <span class="current-year"></span> Q9 Productions. All rights
        reserved
      </p>
    </footer>
    <!-- footer -->
  </body>
  <script src="{{asset('js/script.js')}}"></script>
</html>
