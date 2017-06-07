@extends('layout')
@section('content')
<!-- Blog Post Content Column -->
<div class="col-lg-8">
    <!-- Blog Post -->
    <!-- Title -->
    <h1>{{ $post['video'] }}</h1>
    <!-- Author -->
    <p class="lead">
        Đăng bởi : <a href="">{{ $post['name'] }}</a>
    </p>
    <hr>
    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Đăng bài lúc : {{ $post['created_at'] }}</p>
    <hr>
    <!-- Preview Image -->
    <div class="video-container">
        <iframe width="100%" height="400" src="{{ $post['link'] }}" frameborder="0" allowfullscreen></iframe>
    </div>
    <hr>
    <!-- Post Content -->
    <p class="lead">
        {!! $post['content'] !!}
    </p>
    <hr>
    <!-- Comment Facebook -->
    <!-- Comment Facebook -->
</div>
<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">
    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Liên hệ</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <li>Điện Thoại : 0933.649.647
                    </li>
                    <li>Email : contact.quoctuan@gmail.com
                    </li>
                    <li>Skype : online.quoctuan
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- Side Widget Well -->
    <div class="well">
        <h4>Thông tin khóa học</h4>
        <p align="justify">Chào mừng các bạn đến với khóa học lập trình NodeJS tại QuocTuan.Info.Đây là một Project thực tế trong khóa học lập trình NodeJS tại QuocTuan.Info.Hy vọng các thể vận dụng được toàn bộ kiến thực để làm Project này.</p>
    </div>
</div>
<form method="POST" role="form" action="/comment">
    {{ csrf_field() }}
    <legend>Bình Luận</legend>

    <div class="form-group">
        <label for="">Tiêu Đề</label>
        <input type="text" class="form-control" name="txtTitle" id="txtTitle">
    </div>
    
    <div class="form-group">
        <label>Mô Tả</label>
        <textarea name="" id="txtContent" class="form-control" rows="3" required="required" name="txtContent" >
            
        </textarea>
    </div>

    <button type="submit" class="btn btn-primary" id="btnGui">Gửi</button>
</form>
<ul id="list"></ul>
@endsection