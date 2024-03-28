<section class="section courses" data-section="section4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Choose Your Course</h2>
                </div>
            </div>
            <div class="owl-carousel owl-theme">
                @foreach ($majors as $item)
                    <div class="item">
                        <img src="{{ Storage::url($item->major_logo) }}" style="height: 150px; object-fit:contain"
                            alt="Course #1">
                        <div class="down-content" style="height: 350px">
                            <h4>{{ $item->major_name }}</h4>
                            <p>{{ $item->major_description }}</p>
                            <div class="author-image">
                                <img src="{{ Storage::url($item->dean_photo) }}" alt="Author 1">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">{{ $item->dean_name }} <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="item">
                    <img src="{{ asset('saragih_campus') }}/assets/images/courses-02.jpg" alt="Course #2">
                    <div class="down-content">
                        <h4>Business World</h4>
                        <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum
                            porta.</p>
                        <div class="author-image">
                            <img src="{{ asset('saragih_campus') }}/assets/images/author-02.png" alt="Author 2">
                        </div>
                        <div class="text-button-free">
                            <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('saragih_campus') }}/assets/images/courses-03.jpg" alt="Course #3">
                    <div class="down-content">
                        <h4>Media Technology</h4>
                        <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                            lobortis enim.</p>
                        <div class="author-image">
                            <img src="{{ asset('saragih_campus') }}/assets/images/author-03.png" alt="Author 3">
                        </div>
                        <div class="text-button-pay">
                            <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('saragih_campus') }}/assets/images/courses-04.jpg" alt="Course #4">
                    <div class="down-content">
                        <h4>Communications</h4>
                        <p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.
                        </p>
                        <div class="author-image">
                            <img src="{{ asset('saragih_campus') }}/assets/images/author-04.png" alt="Author 4">
                        </div>
                        <div class="text-button-free">
                            <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('saragih_campus') }}/assets/images/courses-05.jpg" alt="">
                    <div class="down-content">
                        <h4>Business Ethics</h4>
                        <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                            lobortis enim.</p>
                        <div class="author-image">
                            <img src="{{ asset('saragih_campus') }}/assets/images/author-05.png" alt="">
                        </div>
                        <div class="text-button-pay">
                            <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('saragih_campus') }}/assets/images/courses-01.jpg" alt="">
                    <div class="down-content">
                        <h4>Photography</h4>
                        <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum
                            porta.</p>
                        <div class="author-image">
                            <img src="{{ asset('saragih_campus') }}/assets/images/author-01.png" alt="">
                        </div>
                        <div class="text-button-free">
                            <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('saragih_campus') }}/assets/images/courses-02.jpg" alt="">
                    <div class="down-content">
                        <h4>Web Development</h4>
                        <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                            lobortis enim.</p>
                        <div class="author-image">
                            <img src="{{ asset('saragih_campus') }}/assets/images/author-02.png" alt="">
                        </div>
                        <div class="text-button-free">
                            <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('saragih_campus') }}/assets/images/courses-03.jpg" alt="">
                    <div class="down-content">
                        <h4>Learn HTML CSS</h4>
                        <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and
                            Pexels.</p>
                        <div class="author-image">
                            <img src="{{ asset('saragih_campus') }}/assets/images/author-03.png" alt="">
                        </div>
                        <div class="text-button-pay">
                            <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('saragih_campus') }}/assets/images/courses-04.jpg" alt="">
                    <div class="down-content">
                        <h4>Social Media</h4>
                        <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                            lobortis enim.</p>
                        <div class="author-image">
                            <img src="{{ asset('saragih_campus') }}/assets/images/author-04.png" alt="">
                        </div>
                        <div class="text-button-pay">
                            <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('saragih_campus') }}/assets/images/courses-05.jpg" alt="">
                    <div class="down-content">
                        <h4>Digital Arts</h4>
                        <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum
                            porta.</p>
                        <div class="author-image">
                            <img src="{{ asset('saragih_campus') }}/assets/images/author-05.png" alt="">
                        </div>
                        <div class="text-button-free">
                            <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('saragih_campus') }}/assets/images/courses-01.jpg" alt="">
                    <div class="down-content">
                        <h4>Media Streaming</h4>
                        <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                            lobortis enim.</p>
                        <div class="author-image">
                            <img src="{{ asset('saragih_campus') }}/assets/images/author-01.png" alt="">
                        </div>
                        <div class="text-button-pay">
                            <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
