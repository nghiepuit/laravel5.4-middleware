<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class AjaxController extends Controller
{
    public function getDataIndex($skip){
    	$phantubatdau = ($skip-1)*3;
    	$post = Post::skip($phantubatdau)->take(3)->get()->toArray();
    	$xhtml = '';
    	foreach ($post as $key => $value) {
    		$xhtml .= '<div>
				            <h2>
				                <a href="#">'.$value['video'].'</a>
				            </h2>
				            <p class="lead">
				                Đăng bởi : <a href="index.php">'.$value['name'].'</a>
				            </p>
				            <p><span class="glyphicon glyphicon-time"></span> Đăng bài lúc : '.$value['created_at'].'</p>
				            <hr>
				            <div class="video-container">
				                <iframe width="100%" height="400" src="'.$value['link'].'" frameborder="0" allowfullscreen></iframe>
				            </div>
				            <hr>
				            <p>
				                
				            </p>
				            <a class="btn btn-primary" href="#">Xem Chi Tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
				            <hr>
				        </div>';
    	}
    	return $xhtml;
    }

    public function addComment(Request $request){
    	$content = $request->content;
    	$comment = new Comment;
    	$comment->title = 'abc';
    	$comment->content = $content;
    	$comment->created_at = new \DateTime();
    	$comment->save();
    	return $content;
    }

}
