@extends('layouts.sidebar')

@section('content')
<div class="board_area w-100 border m-auto d-flex">
  <div class="post_view w-75 mt-5">
    <p class="w-75 m-auto">投稿一覧</p>
    @foreach($posts as $post)
    <div class="post_area border w-75 m-auto p-3">
      <p><span>{{ $post->user->over_name }}</span><span class="ml-3">{{ $post->user->under_name }}</span>さん</p>
      <p><a href="{{ route('post.detail', ['id' => $post->id]) }}">{{ $post->post_title }}</a></p>
      @foreach($post->subCategories as $sub_category)
        <span class="post-subCategories">{{ $sub_category->sub_category }}</span></li>
        @endforeach
      <div class="post_bottom_area d-flex">
        <div class="d-flex post_status">
          <div class="mr-5">
            <i class="fa fa-comment">{{ $post->commentCounts($post->id)->count() }}</i><span class=""></span>
          </div>
          <div>
            @if(Auth::user()->is_Like($post->id))
            <p class="m-0"><i class="fas fa-heart un_like_btn" post_id="{{ $post->id }}"></i><span class="like_counts{{ $post->id }}">{{ $like->likeCounts($post->id) }}</span></p>
            @else
            <p class="m-0"><i class="fas fa-heart like_btn" post_id="{{ $post->id }}"></i><span class="like_counts{{ $post->id }}">{{ $like->likeCounts($post->id) }}</span></p>
            @endif
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="other_area border w-25">
  <div class="m-4">
  <div class="post-text"><a href="{{ route('post.input') }}" style="color:white;">投稿</a></div>
  <div class="d-flex">
  <input type="text" placeholder="キーワードを検索" name="keyword" class="post-search" form="postSearchRequest">
  <input type="submit" class="post-search-button" value="検索" form="postSearchRequest">
  </div>
  <div class="d-flex">
  <div class="like_posts">
  <input type="submit" name="like_posts" class="like_posts" value="いいねした投稿" form="postSearchRequest">
  </div>
  <div class="my_posts">
  <input type="submit" name="my_posts" class="my_posts" value="自分の投稿" form="postSearchRequest">
  </div>
  </div>

  <p>カテゴリー検索</p>
  <!-- アコーディオンメニュー -->
  <div id="accordion" class="accordion-container">
  <ul class="menu">
  @foreach($categories as $category)
  <div class="accordion-title js-accordion-title">
  <li class="main_categories" category_id="{{ $category->id }}"><span>{{ $category->main_category }}</span></li>
</div>
  @foreach($category->subCategories as $sub_category)
  <li><input type="submit" name="category_word" class="category_btn btn-secondary" value="{{ $sub_category->sub_category }}" form="postSearchRequest"></li>
  @endforeach
  @endforeach
  </ul>
  </div>
  </div>
  </div>
  <form action="{{ route('post.show') }}" method="get" id="postSearchRequest"></form>
  </div>
@endsection
