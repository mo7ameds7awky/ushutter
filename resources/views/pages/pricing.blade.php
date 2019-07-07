@extends('app')

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('public/css/all.css') }}"> --}}
@endsection

@section('content')

    <div class="pricing-wrapper">
        <div class="container">
            <h3 class="h3">Plans For Individuals</h3>
            <div class="row price-table">
                <div class="pricing-left col-md-8 col-xs-12">
                    <div class="pricing-left-heading">
                        <h4 class="h4 text-center">Value-priced Annual Plans</h4>
                        <p class="text-center">Save up to 40% with annual plan, charged monthly.</p>
                        <p class="text-center">Early cancelation fee may apply.</p>
                    </div>
                    <div class="row">
                        <div class="left-content col-md-7 col-xs-12">
                            <div class="feature row">
                                <div class="col-md-2 col-sm-12 text-center">
                                    <i class="fas fa-gift"></i>
                                </div>
                                <div class="col-md-10 col-sm-12 float-md-right">
                                    Includes Shutterstock Editor Pro<br>
                                    Annual value of 120
                                </div>
                            </div>

                            <div class="feature row">
                                <div class="col-md-2 col-sm-12 text-center">
                                    <i class="fas fa-crop-alt"></i>
                                </div>
                                <div class="col-md-10 float-md-right">
                                    Create social media posts, promotions, and more in minutes
                                </div>
                            </div>

                            <div class="feature row">
                                <div class="col-md-2 col-sm-12 text-center">
                                    <i class="fas fa-layer-group"></i>
                                </div>
                                <div class="col-md-10 float-md-right">
                                    Choose from hundreds of templates or customize your image
                                </div>
                            </div>

                            <div class="feature row">
                                <div class="col-md-2 col-sm-12 text-center">
                                    <i class="fab fa-black-tie"></i>
                                </div>
                                <div class="col-md-10 float-md-right">
                                    Access professional design elements and time-saving features
                                </div>
                            </div>

                            <div class="text-center">
                                <a href="">Learn More</a>
                            </div>
                        </div>
                        <div class="right-content col-md-5 col-xs-12">
                            <form action="" method="get">
                                <div class="plan form-group row">    
                                    <div class="check-mark col-xs-1">
                                        <input class="form-check-input" type="radio" name="plan-one" id="plan-one" value="option1">
                                    </div>
                                    <div class="plan-data col-xs-11">
                                        <label class="form-check-label col-xs-12" for="plan-one">
                                            <div class="row">
                                                <div class="info col-xs-6">
                                                    750 images/mo<br>
                                                    <span style="font-weight: bolder;">199$</span>/mo
                                                </div>
                                                <div class="price col-xs-6 text-right">
                                                    <span style="font-weight: bolder; font-size: 20px;">0.27$</span><br>
                                                    per image
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="plan pop-plan form-group row">    
                                    <div class="check-mark col-xs-1">
                                        <input class="form-check-input" type="radio" name="plan-two" id="plan-two" value="option2">
                                    </div>
                                    <div class="plan-data col-xs-11">
                                        <label class="form-check-label col-xs-12" for="plan-two">
                                            <div class="row">
                                                <div class="info col-xs-6">
                                                    <span style="font-weight: bold; color: red;">MOST POPULAR</span><br>
                                                    750 images/mo<br>
                                                    <span style="font-weight: bolder;">199$</span>/mo
                                                </div>
                                                <div class="price col-xs-6 text-right">
                                                    <span style="font-weight: bolder; font-size: 20px;">0.27$</span><br>
                                                    per image
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="plan form-group row">    
                                    <div class="check-mark col-xs-1">
                                        <input class="form-check-input" type="radio" name="plan-three" id="plan-three" value="option3">
                                    </div>
                                    <div class="plan-data col-xs-11">
                                        <label class="form-check-label col-xs-12" for="plan-three">
                                            <div class="row">
                                                <div class="info col-xs-6">
                                                    750 images/mo<br>
                                                    <span style="font-weight: bolder;">199$</span>/mo
                                                </div>
                                                <div class="price col-xs-6 text-right">
                                                    <span style="font-weight: bolder; font-size: 20px;">0.27$</span><br>
                                                    per image
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="plan form-group row">    
                                    <div class="check-mark col-xs-1">
                                        <input class="form-check-input" type="radio" name="plan-four" id="plan-four" value="option4">
                                    </div>
                                    <div class="plan-data col-xs-11">
                                        <label class="form-check-label col-xs-12" for="plan-four">
                                            <div class="row">
                                                <div class="info col-xs-6">
                                                    750 images/mo<br>
                                                    <span style="font-weight: bolder;">199$</span>/mo
                                                </div>
                                                <div class="price col-xs-6 text-right">
                                                    <span style="font-weight: bolder; font-size: 20px;">0.27$</span><br>
                                                    per image
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" style="background-color: red; border-color: red;" class="btn btn-primary btn-lg btn-block">
                                        Buy Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="pricing-right col-md-3 col-xs-12 pull-right">
                    <div class="pricing-right-heading">
                        <h4 class="h4 text-center">Prepaid Image Packs</h4>
                        <p class="text-center">Get image on demand.</p>
                        <p class="text-center">Download within a year.</p>
                    </div>
                    <form action="" method="get">
                        <div class="plan form-group row">    
                            <div class="check-mark col-xs-1">
                                <input class="form-check-input" type="radio" name="plan-one-prepaid" id="plan-one-prepaid" value="option1">
                            </div>
                            <div class="plan-data col-xs-11">
                                <label class="form-check-label col-xs-12" for="plan-one-prepaid">
                                    <div class="row">
                                        <div class="info col-xs-6">
                                            25 images<br>
                                            <span style="font-weight: bolder;">229$</span>
                                        </div>
                                        <div class="price col-xs-6 text-right">
                                            <span style="font-weight: bolder; font-size: 20px;">9.16$</span><br>
                                            per image
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="plan pop-plan form-group row">    
                            <div class="check-mark col-xs-1">
                                <input class="form-check-input" type="radio" name="plan-two-prepaid" id="plan-two-prepaid" value="option2">
                            </div>
                            <div class="plan-data col-xs-11">
                                <label class="form-check-label col-xs-12" for="plan-two-prepaid">
                                    <div class="row">
                                        <div class="info col-xs-6">
                                            <span style="font-weight: bold; color: red;">MOST POPULAR</span><br>
                                            5 images<br>
                                            <span style="font-weight: bolder;">49$</span>
                                        </div>
                                        <div class="price col-xs-6 text-right">
                                            <span style="font-weight: bolder; font-size: 20px;">9.80$</span><br>
                                            per image
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" style="background-color: red; border-color: red;" class="btn btn-primary btn-lg btn-block">
                                Buy Now
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection