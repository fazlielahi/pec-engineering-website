<div class="brand-section section-padding section-bg fix" id="clients">
    <div class="container">
        <div class="brand-wrapper">
            <div class="swiper brand-slider">
                <div class="swiper-wrapper">
                    @for ($i = 1; $i <= 27; $i++)
                        <div class="swiper-slide">
                            <div class="brand-image">
                                @if ($i == 18)
                                    {{-- Suliman Alhabib logo need extra width --}}
                                    <img src="{{ asset('client/c' . $i . '.png') }}" style="width: 150px; height: 127px;"
                                        alt="img">
                                @elseif($i == 1)
                                <img src="{{ asset('client/c' . $i . '.png') }}"
                                        style="width: 200px; height: 127px;" alt="img">
                                @else
                                    <img src="{{ asset('client/c' . $i . '.png') }}"
                                        style="width: 127px; height: 127px;" alt="img">
                                @endif
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
</div>
