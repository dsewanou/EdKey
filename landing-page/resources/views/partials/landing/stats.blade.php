<section class="stats js-stats-counter mega-section">
    <div class="overlay-photo-image-bg" data-bg-img="{{ asset('assets/images/sections-bg-images/pattern-bg-3.jpg') }}"
        data-bg-opacity=".2"></div>
    <div class="container">
        <div class="stats-inner">
            <div class="row ">
                @foreach($stats as $stat)
                    <div class="col-12 col-md-6 col-lg-3 stat-box ">
                        <div class="stat-box-inner  " data-tilt="data-tilt"><i class="{{ $stat['icon'] }} stat-icon"></i>
                            <p class="stat-num "><span class="counter" data-from="0" data-to="{{ $stat['number'] }}"
                                    data-speed="3000" data-refresh-interval="50"></span><span class="sign">+</span></p><span
                                class="stat-desc">{{ $stat['label'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>