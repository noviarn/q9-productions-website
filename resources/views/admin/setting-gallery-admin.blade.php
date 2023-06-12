@extends('layout.admin-layout')
@section('aside')
@section('main')
<div class="report-container">
  <div class="report-header">
      <h1 class="recent-Articles">Settings</h1>
  </div>
  <div class="grid-container">
      <div class="menu-setting item1">
        <ul>
          <li><a href="/setting-home-admin" >Home Setting</a></li>
          <li><a href="/setting-about-admin" >About Setting</a></li>
          <li><a href="/setting-gallery-admin" style="background-color: lightgray;">Galery Setting</a></li>
          <li><a href="/setting-contact-us-admin">Contact Us Setting</a></li>
        </ul>

      </div>
      <div class="container-form item2">
        <h1>Gallery Setting</h1>
        <form method="post" action="{{ route('gallery.post', $gallery->id)}}" enctype="multipart/form-data">
        {{csrf_field()}} 


          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Input the title" value="{{$gallery->title}}" required>
          </div>
          <div class="upload-files-container" style="display: flex;">
              <div class="image-upload">
                <label for="image" id="image-upload-label">Select Image</label>
                <input type="file" name="img_gallery" id="image" onchange="previewImage(event)">
              </div>
              <div id="image-preview-container"></div>
          </div>
          <div style="display: inline-block;">Selected image: {{$gallery->img_gallery}}</div>
          <div class="form-group" style="text-align:center">
            <button type="submit" style="background-color:">Submit</button>
          </div>
        </form>
      </div>
  </div>
</div>

@stop
<script>
  function previewImage(event) {
    var imageInput = event.target;
    var imagePreviewContainer = document.getElementById('image-preview-container');
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
</script>