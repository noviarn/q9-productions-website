@extends('layout.admin-layout')
@section('main')
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
                    @foreach($kontens as $konten)
                    <tr>
                        <td class="t-op-nextlvl">{{ $konten->judul_konten }}</td>
                        <td class="t-op-nextlvl">{{ $konten->Author }}</td>
                        <td class="t-op-nextlvl"><img src="{{ asset('/images/'.$konten->img_konten.'') }}" style="width: 80px; height: 50px; object-fit: cover;"></td>
                        <td class="t-op-nextlvl">Publish</td>
                        <td class="t-op-nextlvl"><a href="/manage-post-page/{{$konten->id}}/edit" style="background-color: #F0C965; height: 30px !important; width: 40px !important; border-style:none; border-radius:8px; "><img src="{{ asset('/img/icon-edit.png') }}" style="margin:auto;" width="20" height="20"></a><button style="background-color: #F24949; height: 30px; width: 40px; border-style:none; border-radius:10px; "><img src="{{ asset('/img/icon-remove.png') }}" style="margin:auto;" width="20" height="20"></button></td>
                    </tr>
                    @endforeach
                    </table>


                </div>
@stop