<section class="features">
    <div class="container">
        <div class="row">
            @foreach ($services as $item)
                <div class="col-lg-4 col-12">
                    <div class="features-post">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa {{ $item->service_icon }}"></i>{{ $item->service_name }}</h4>
                            </div>
                            <div class="content-hide">
                                <p>{{ $item->service_description }}</p>
                                <p class="hidden-sm">{{ $item->service_description }}</p>
                                <div class="scroll-to-section"><a href="#section2">More Info.</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-lg-4 col-12">
            <div class="features-post second-features">
                <div class="features-content">
                <div class="content-show">
                    <h4><i class="fa fa-graduation-cap"></i>Virtual Class</h4>
                </div>
                <div class="content-hide">
                    <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                    <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                    <div class="scroll-to-section"><a href="#section3">Details</a></div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-12">
            <div class="features-post third-features">
                <div class="features-content">
                <div class="content-show">
                    <h4><i class="fa fa-book"></i>Real Meeting</h4>
                </div>
                <div class="content-hide">
                    <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                    <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                    <div class="scroll-to-section"><a href="#section4">Read More</a></div>
                </div>
                </div>
            </div>
            </div> --}}
        </div>
    </div>
</section>
