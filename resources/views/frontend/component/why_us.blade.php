<section class="section why-us" data-section="section2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>WHY CHOOSE SARAGIH SIDABALOK UNIVERSITY</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div id='tabs'>
                    <ul>
                        @foreach ($reasons as $item)
                            <li><a href='#tabs-{{ $item->reason_id }}'>{{ $item->the_reason }}</a></li>
                        @endforeach
                    </ul>
                    <section class='tabs-content'>
                        @foreach ($reasons as $item)
                            <article id='tabs-{{ $item->reason_id }}'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ Storage::url($item->reason_photo) }}" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>{{ $item->the_reason }}</h4>
                                        <p>{{ $item->reason_description }}</p>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                        {{-- <article id='tabs-2'>
                                <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('saragih_campus')}}/assets/images/choose-us-image-02.png" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h4>Top Level</h4>
                                    <p>You can modify this HTML layout by editing contents and adding more pages as you needed. Since this template has options to add dropdown menus, you can put many HTML pages.</p>
                                    <p>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis non ante.</p>
                                </div>
                                </div>
                            </article>
                            <article id='tabs-3'>
                                <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('saragih_campus')}}/assets/images/choose-us-image-03.png" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h4>Quality Meeting</h4>
                                    <p>You are NOT allowed to redistribute this template ZIP file on any template collection website. However, you can use this template to convert into a specific theme for any kind of CMS platform such as WordPress. For more information, you shall <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a> now.</p>
                                </div>
                                </div>
                            </article> --}}
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
