<section class="section coming-soon" data-section="section3">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <div class="continer centerIt">
                    <div>
                        <h4>New <em>Intake</em> Countdown</h4>
                        <div class="counter">

                            <div class="days">
                                <div class="value">00</div>
                                <span>Days</span>
                            </div>

                            <div class="hours">
                                <div class="value">00</div>
                                <span>Hours</span>
                            </div>

                            <div class="minutes">
                                <div class="value">00</div>
                                <span>Minutes</span>
                            </div>

                            <div class="seconds">
                                <div class="value">00</div>
                                <span>Seconds</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="right-content">
                    <div class="top-content">
                        <h6>REGISTER <em>YOURSELF</em> BEFORE JULY 10, 2024</h6>
                    </div>
                    <form id="contact" action="/registration/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Your Name" required="" value="{{ old('name') }}">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="birth" type="text" class="form-control" id="birth_id"
                                        onfocus="(this,type='date')" placeholder="Your Birth" required=""
                                        value="{{ old('birth') }}">
                                </fieldset>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="d-flex">
                                    <fieldset>
                                        <input name="gender" type="radio" id="gender_id1" style="height: 15px"
                                            required="" value="male">
                                        <label for="gender_id1" style="color: white;">Male</label>
                                    </fieldset>
                                    <fieldset>
                                        <input name="gender" type="radio" id="gender_id2" style="height: 15px"
                                            required="" value="female">
                                        <label for="gender_id2" style="color: white;">Female</label>
                                    </fieldset>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                        placeholder="Your Email" required="" value="{{ old('email') }}">
                                </fieldset>
                            </div>
                            <div class="col-md-12 mb-4">
                                <fieldset>
                                    <select name="major" id="major_form" class="form-control">
                                        <option value="">Select Major</option>
                                        @foreach ($majors as $item)
                                            <option value="{{ $item->major_name }}" @selected(old('major') == $item->major_name)>
                                                {{ $item->major_name }}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col-md-12">
                                <fieldset>
                                    <input name="phone" type="text" class="form-control" id="phone"
                                        placeholder="Your Phone Number" required="" value="{{ old('phone') }}">
                                </fieldset>
                            </div>
                            <div class="col-md-12 mb-4">
                                <fieldset>
                                    <textarea name="address" id="address-form" rows="3" class="form-control" placeholder="Your Address">{{ old('address') }}</textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12 mb-4">
                                <fieldset>
                                    <input name="file" type="file" class="form-control" id="file-form"
                                        placeholder="Your File" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="button">Get it now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
