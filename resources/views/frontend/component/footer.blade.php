<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p><i class="fa fa-copyright"></i> {{ now()->format('Y') }} by {{ $about->name }} University

                    | Email: {{ $about->email }}</a><br>
                    {{ $about->address }}

                </p>
            </div>
        </div>
    </div>
</footer>
