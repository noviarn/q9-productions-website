@extends('layout.admin-layout')
@section('main')
<div class="report-container">
  <div class="report-header">
      <h1 class="recent-Articles text-menu">Our Client</h1>
      <a href="/our-client/add" style="background-color: #11D900; height: 40px !important; border-style:none; border-radius:8px; padding: 10px; display: inline-flex; align-items: center; text-decoration: none;">
        <img src="{{ asset('/img/icon-plus.png') }}" style="margin-right: 5px;" width="20" height="20">
        <span style="color: black; font-size: 14px;"><strong>Add Client</strong></span>
      </a>
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
            <input type="text" name="nama_client" id="nama_client">
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
  <table>
    <thead>
      <tr class="">
        <th class="column1">Logo</th>
        <th class="column2">Nama Client</th>
        <th class="column3">show</th>
        <th class="column4">action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($clients as $client)
      <tr>
        <td class="column1-client t-op-nextlvl"><img src="{{ asset('/images/'.$client->img_logo.'') }}" style="width: 80px; height: 50px; object-fit: cover;"></td>
        <td class="column2-client t-op-nextlvl">{{ $client->nama_client }}</td>
        <td class="column3-client t-op-nextlvl">
          <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
          </label>
        </td>
        <td class="column4-client t-op-nextlvl">
          <a href="/manage-post-page/{{$client->id}}/edit" style="background-color: #e7e7e7; height: 30px !important; width: 40px !important; border-style:none; border-radius:8px; display: inline-flex;">
            <img src="{{ asset('/img/icon-edit.png') }}" style="margin:auto;" width="20" height="20">
          </a>
          <a href="/manage-post-page/{{$client->id}}/delete" style="background-color: #e7e7e7;height: 30px !important; width: 40px !important; border-style:none; border-radius:8px; display: inline-flex;" onclick="return confirm('Apakah yakin data akan dihapus?')">
            <img src="{{ asset('/img/icon-remove.png') }}" style="margin:auto;" width="20" height="20">
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
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
        imagePreview.style.minheight = '500px';
        imagePreview.style.margin = '0px 20px 20px 20px';
        imagePreview.style.objectFit = 'cover';
        imagePreviewContainer.appendChild(imagePreview);
      };

      reader.readAsDataURL(imageInput.files[0]);
    }
  }
</script>