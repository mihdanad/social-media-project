@extends('profil.profilemaster')

@section('content')
                    <div class="feeds">
                        <div class="feed">
                                <div class="user">
                                    <div class="ingo mb-2">
                                        @auth
                                        <h2>Profil {{ Auth::user()->name }}</h2>
                                        @endauth
                                        @auth
                                        <p><b>Nama</b> : {{ Auth::user()->name }} </p>
                                        @endauth
                                        <p><b>Alamat</b> : {{$profile->alamat}}</p>
                                        <p><b>Umur</b> : {{$profile->umur}}</p>
                                        <p><b>Bio</b> : {{$profile->bio}}</p>
                                        <p><b>Email</b> : {{$profile->user->email}}</p>
                                    </div>
                            </div>
                        </div>
                    </div>


                    <form action="/postingan" class="create-post"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="profile-photo">
                            <img src="{{ Auth::user()->gravatar()}}" alt="{{Auth::user()->name}}">
                        </div>
                            <input type="text" placeholder="What's on your mind,  {{ Auth::user()->name }}?" name="isi" id="isi">
                            <input type="file" class="form-control" name="gambar" id="gambar">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>



                    <div class="feeds">
                    <!------------------- FEED 1 --------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="">
                                </div>
                                <div class="ingo">
                                    <h3>DIana Ayi</h3>
                                    <small>Dubai, 15 MINUTES AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="{{asset('sosmed/images/feed-1.jpg')}}">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="{{asset('sosmed/images/profile-10.jpg')}}"></span>
                            <span><img src="{{asset('sosmed/images/profile-4.jpg')}}"></span>
                            <span><img src="{{asset('sosmed/images/profile-15.jpg')}}"></span>
                            <p>Liked by <b>Ernest Achiever</b> and <b>2,323 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Diana Ayi</b> Lorem ipsum dolor sit quisquam eius. <span class="harsh-tag">#lifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 277 comments</div>
                    </div>
@endsection
