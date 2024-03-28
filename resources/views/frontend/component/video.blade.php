<section class="section video" data-section="section5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="left-content">
                    <span>our presentation is for you</span>
                    <h4><em>{{ $presentation->presentation_title }}</em></h4>
                    <p>{{ $presentation->presentation_description }}</p>
                    <div class="main-button"><a rel="nofollow" href="{{ $presentation->presentation_url }}" target="_blank">External
                            URL</a></div>
                </div>
            </div>
            <div class="col-md-6">
                <article class="video-item">
                    <div class="video-caption">
                        <h4>By {{ $about->name }}</h4>
                    </div>
                    <figure>
                        <a href="{{ Storage::url($presentation->presentation_image) }}" class="play"><img
                                src="{{ Storage::url($presentation->presentation_image) }}"></a>
                    </figure>
                </article>
            </div>
        </div>
    </div>
</section>
