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
          <li><a href="/setting-about-admin">About Setting</a></li>
          <li><a href="/setting-gallery-admin">Galery Setting</a></li>
          <li><a href="/setting-contact-us-admin" style="background-color: lightgray;">Contact Us Setting</a></li>
        </ul>

      </div>
      <div class="container-form item2">
        <h1>Contact Us Setting</h1>
        <form method="post" action="{{ route('contact-us.post', $contact->id)}}" enctype="multipart/form-data">
        {{csrf_field()}} 
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Input title..." value="{{$contact->title}}" required>
          </div>
          <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <textarea type="text" id="subtitle" name="subtitle" placeholder="Input subtitle..." required>{{$contact->subtitle}}</textarea>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email" value="{{$contact->email}}"required>
          </div>
          <div class="form-group">
            <label for="whatsapp">Whatsapp</label>
            <input type="text" id="whatsapp" name="whatsapp" placeholder="input whatsapp number" value="{{$contact->whatsapp}}" required></input>
          </div>
          <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" id="instagram" name="instagram" placeholder="input instagram account" value="{{$contact->instagram}}" required></input>
          </div>
          <div class="form-group">
            <label for="instagram">Facebook</label>
            <input type="text" id="facebook" name="facebook" placeholder="input facebook account" value="{{$contact->facebook}}" required></input>
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="input address" value="{{$contact->address}}" required></input>
          </div>
          <div class="form-group" style="text-align:center">
            <button type="submit" style="background-color:">Submit</button>
          </div>
        </form>
      </div>
  </div>
</div>

@stop
