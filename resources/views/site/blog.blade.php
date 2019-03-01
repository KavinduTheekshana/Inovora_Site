@extends('site.layouts.menu')


@section('content')
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">Blog</div>
                    <div class="page-subtitle">Awward winning hosting in 2018</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post-box summary">
                    <div class="post-photo">
                        <img src="images/post-photo1.jpg" alt="">
                    </div>
                    <div class="post-title">Lorem ipsum dolor sit amet</div>
                    <div class="post-summary">Consectetur adipiscing elit. Nulla tortor eros, bibendum nec mauris id, mattis vulputate enim. Fusce ut urna lectus. Vestibulum posuere tristique neque, eu pellentesque velit luctus a. Ut convallis, ex at congue ultricies, augue felis pulvinar neque, ut faucibus nunc est sit amet ex.</div>
                    <div class="post-link">
                        <a href="post.html" class="hbtn hbtn-blue hbtn-lg">Know more</a>
                    </div>
                </div>
                <div class="post-box summary">
                    <div class="post-photo">
                        <img src="images/post-photo2.jpg" alt="">
                    </div>
                    <div class="post-title">Duis accumsan enim orci</div>
                    <div class="post-summary">In feugiat neque egestas gravida. Ut eu nunc sollicitudin diam blandit hendrerit ut ac augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin, tortor id mollis cursus, enim quam tincidunt mauris, non rutrum quam ex eget sapien. Morbi rutrum ultrices nunc.</div>
                    <div class="post-link">
                        <a href="post.html" class="hbtn hbtn-blue hbtn-lg">Know more</a>
                    </div>
                </div>
                <nav class="paging">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link prev" href="#" aria-label="Previous">
                                <i class="hstb hstb-down-arrow"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link next" href="#" aria-label="Next">
                                <i class="hstb hstb-down-arrow"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection