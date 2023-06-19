@extends('layout.admin-layout')
@section('main')
<div class="report-container">
  <div class="report-header">
      <h1 class="recent-Articles text-menu">Our Client</h1>
      <a href="/our-client" style="background-color: #D9D9D9; height: 40px !important; border-style:none; border-radius:8px; padding: 10px; display: inline-flex; align-items: center; text-decoration: none;">
        <img src="{{ asset('/img/icon-multiply.png') }}" style="margin-right: 5px;" width="20" height="20">
        <span style="color: black; font-size: 14px;"><strong>Cancel</strong></span>
      </a>
  </div>
  <div class="report-body">
      <div class="container">
        <h2>Create a New Client</h2>
        <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-field">
          <div class="label">
            <label for="nama_client">Nama client:</label>
          </div>
          <div class="input">
            <input type="text" name="nama_client" id="nama_client">
          </div>
        </div>
        <div class="form-field">
          <div class="label">
            <label for="image">Image:</label>
          </div>
          <div class="upload-files-container form-field">
              <div class="image-upload">
                <label for="image" id="image-upload-label" style="width:500px !important;">Select Image</label>
                <input type="file" name="img_logo" id="image" onchange="previewImage(event, 'image-preview-container')">
                
              </div>
              <div id="image-preview-container"></div>
          </div>
        </div>

          <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">

          <div style="display: flex; justify-content: center;">
            <button type="submit" style="background-color: #4582F8; height: 35px; width: 140px; border-style: none; border-radius: 10px; color: white;">Submit</button>
          </div>
        </form>
      </div>
  </div>
 
</div>

@stop
<script>

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
        imagePreview.style.maxWidth = '500px';
        imagePreview.style.minHeight = '500px';
        imagePreview.style.margin = '0px 20px 20px 20px';
        imagePreview.style.objectFit = 'contain';
        imagePreviewContainer.appendChild(imagePreview);
      };

      reader.readAsDataURL(imageInput.files[0]);
    }
  }
</script>