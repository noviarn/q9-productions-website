@extends('layout.admin-layout')
@section('main')
<div class="report-container">
  <div class="report-header">
      <h1 class="recent-Articles text-menu">Our Client</h1>
      <img class="add-show" onclick="addclient()" width="150" height="45" src="{{ asset('/img/button-addcontent.png') }}">
  </div>
  <div class="report-body" style="display: none;">
      <div class="container">
        <h2>Create a New Content</h2>
        <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-field">
          <div class="label">
            <label for="nama_client">Nama client:</label>
          </div>
          <div class="input">
            <input type="text" name="judul_konten" id="judul_konten">
          </div>
        </div>
        <div class="form-field">
          <div class="label">
            <label for="image">Image:</label>
          </div>
          <div class="upload-files-container form-field">
              <div class="image-upload">
                <label for="image" id="image-upload-label">Select Image</label>
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
 function addclient() {
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
        containerheader[0].querySelector('.add-show').src = '{{ asset("/img/button-closecontent.png") }}';
        containerheader[0].querySelector('.add-show').width = '100';
        container[0].style.height = 'auto'; // Change the height to your desired value
      } else {
        content.classList.add('hide');
        containerbody[0].style.display = 'none';
        containerbody[0].style.height = '';
        
        containerheader[0].querySelector('.add-show').src = '{{ asset("/img/button-addcontent.png") }}';
        containerheader[0].querySelector('.add-show').width = '150';
        container[0].style.height = ''; // Remove the height style
      }
    }

  }
</script>