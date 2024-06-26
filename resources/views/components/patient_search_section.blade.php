<div>
    <section class="looking-section-four">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header-four text-center aos" data-aos="fade-up">
                        <h2>{{ __('patient.What are you') }} <span class="color-primary">{{ __('patient.looking') }} </span>{{ __('patient.for?') }} </h2>
                    </div>
                </div>
            </div>
            <div class="row looking-row justify-content-center aos" data-aos="fade-up">
                <div class="col-lg-4 col-md-6 looking-col d-flex">
                    <div class="looking-grid-four w-100">
                        <div class="looking-box-four">
                            <div class="looking-inner-box">
                                <div class="looking-info-four">
                                    <a href="{{ route('search_doctor_index') }}">
                                        <i class="fas fa-user-md me-2"></i> {{ __('patient.Visit a Doctor') }}
                                    </a>
                                    <p>{{ __('patient.We hire the best specialists to deliver top-notch diagnostic services for you diagnostic services for you.') }}</p>
                                </div>
                                <div class="looking-four-btn">
                                    <a href="{{ route('search_doctor_index') }}">
                                        {{ __('patient.Book Now') }} <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex looking-col">
                    <div class="looking-grid-four w-100">
                        <div class="looking-box-four">
                            <div class="looking-inner-box">
                                <div class="looking-info-four">
                                    <a href="{{ route('search_pharmacy') }}">
                                        <i class="fas fa-tablets me-2"></i> {{ __('patient.Find a Pharmacy') }}
                                    </a>
                                    <p>{{ __('patient.We provide the a wide range of medical services, so every person could have the opportunity.') }}</p>
                                </div>
                                <div class="looking-four-btn">
                                    <a href="{{ route('search_pharmacy') }}">
                                        {{ __('patient.Find Now') }} <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex looking-col">
                    <div class="looking-grid-four w-100">
                        <div class="looking-box-four">
                            <div class="looking-inner-box">
                                <div class="looking-info-four">
                                    <a href="#">
                                        <i class="fas fa-vial me-2"></i> {{ __('patient.Find a Lab') }}
                                    </a>
                                    <p>{{ __('patient.We use the first-class medical equipment for timely diagnostics of various diseases.') }}</p>
                                </div>
                                <div class="looking-four-btn">
                                    <a href="#">
                                        {{ __('patient.Book Now') }}<i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
