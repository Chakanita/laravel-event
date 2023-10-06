<!-- Display posts section -->
<section id="posts" class="posts">
<div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-3">
    <div class="card-body p-0 d-flex">
        @foreach ($posts as $index => $post)
        <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-0">
            <div class="card-body p-0 d-flex">
                <figure class="avatar me-3"><img src="images/user-8.png" alt="image" class="shadow-sm rounded-circle w45"></figure>
                <h4 class="fw-700 text-grey-900 font-xssss mt-1">{{ $post->customer ? $post->customer->first_name : '' }} {{ $post->customer ? $post->customer->last_name : '' }}<span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">{{ $post->created_at->diffForHumans() }}</span></h4>
                <a href="#" class="ms-auto"><i class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i></a>
            </div>

            <div class="card-body p-0 me-lg-5">
                <p class="fw-500 text-grey-500 lh-26 font-xssss w-100">{{ $post->body }} <a href="#" class="fw-600 text-primary ms-2">See more</a></p>
            </div>
            <div class="card-body d-block p-0 mb-3">
                <div class="row ps-2 pe-2">
                    <div class="col-xs-6 col-sm-6 p-1"><a href="images/t-36.jpg" data-lightbox="roadtri"><img src="images/t-21.jpg" class="rounded-3 w-100" alt="image"></a></div>
                    <div class="col-xs-6 col-sm-6 p-1"><a href="images/t-32.jpg" data-lightbox="roadtri"><img src="images/t-22.jpg" class="rounded-3 w-100" alt="image"></a></div>
                </div>
                <div class="row ps-2 pe-2">
                    <div class="col-xs-4 col-sm-4 p-1"><a href="images/t-33.jpg" data-lightbox="roadtri"><img src="images/t-23.jpg" class="rounded-3 w-100" alt="image"></a></div>
                    <div class="col-xs-4 col-sm-4 p-1"><a href="images/t-34.jpg" data-lightbox="roadtri"><img src="images/t-24.jpg" class="rounded-3 w-100" alt="image"></a></div>
                    <div class="col-xs-4 col-sm-4 p-1"><a href="images/t-35.jpg" data-lightbox="roadtri" class="position-relative d-block"><img src="images/t-25.jpg" class="rounded-3 w-100" alt="image"><span class="img-count font-sm text-white ls-3 fw-600"><b>+2</b></span></a></div>
                </div>
            </div>
            <div class="card-body d-flex p-0">
                <a href="#" class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i> <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K Like</a>
                <div class="emoji-wrap">
                    <ul class="emojis list-inline mb-0">
                        <li class="emoji list-inline-item"><i class="em em---1"></i> </li>
                        <li class="emoji list-inline-item"><i class="em em-angry"></i></li>
                        <li class="emoji list-inline-item"><i class="em em-anguished"></i> </li>
                        <li class="emoji list-inline-item"><i class="em em-astonished"></i> </li>
                        <li class="emoji list-inline-item"><i class="em em-blush"></i></li>
                        <li class="emoji list-inline-item"><i class="em em-clap"></i></li>
                        <li class="emoji list-inline-item"><i class="em em-cry"></i></li>
                        <li class="emoji list-inline-item"><i class="em em-full_moon_with_face"></i></li>
                    </ul>
                </div>
                <a href="#" class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i><span class="d-none-xss">22 Comment</span></a>
                <a href="#" class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span class="d-none-xs">Share</span></a>
            </div>
        </div>
        @endforeach
    </div>
</div>
</section>

<!--end of Display posts section -->





<section id="posts" class="posts">
                                
                             <div class="container">
                             <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    @foreach ($posts as $index => $post)
                                    
                                    <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-4">
                                        
                                        <div class="card-body p-0 d-flex">
                                            <figure class="avatar me-3">
                                                <img src="images/user-8.png" alt="image" class="shadow-sm rounded-circle w45">
                                            </figure>
                                            <h4 class="fw-700 text-grey-900 font-xssss mt-1">
                                                {{ $post->customer ? $post->customer->first_name : '' }} {{ $post->customer ? $post->customer->last_name : '' }}
                                                <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">
                                                    {{ $post->created_at->diffForHumans() }}
                                                </span>
                                            </h4>
                                            <a href="#" class="ms-auto">
                                                <i class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i>
                                            </a>
                                        </div>

                                        <div class="card-body p-0 me-lg-5">
                                            <p class="fw-500 text-grey-500 lh-26 font-xssss w-100">
                                                {{ $post->body }}
                                                
                                            </p>
                                        </div>

                                        <div class="card-body d-block p-0 mb-3">
                                            <!--<div class="row ps-2 pe-2">
                                                @foreach ($post->images as $image)
                                                <div class="col-xs-6 col-sm-6 p-1">
                                                    <a href="{{ asset('storage/' . $image->path) }}" data-lightbox="roadtri">
                                                        <img src="{{ asset('storage/' . $image->path) }}" class="rounded-3 w-100" alt="image">
                                                    </a>
                                                </div>
                                            </div>-->
                                                
                                        </div>
                                    </div>

                                    <div class="card-body d-flex p-0">
                                        <a href="#" class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2">
                                            <i class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i> 
                                            <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>
                                            {{ $post->likes_count }} Like
                                        </a>

                                        <a href="#" class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss">
                                            <i class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i>
                                            <span class="d-none-xss">{{ $post->comments->count() }} Comment</span>
                                        </a>
                                        <a href="#" class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss">
                                            <i class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i>
                                            <span class="d-none-xs">Share</span>
                                        </a>
                                        
                                    </div>
                                    @endforeach
                                    
                                </div>
                             </div>
                            </div>
                            </section>