@extends('dashboard.layout.master_layout')

@section('title')
    @lang('coupon.create.add_new')
@endsection

@section('subtitle')
    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
        <li class="m-nav__item m-nav__item--home"><a href="{{ route('dashboard.index') }}" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li>
        <li class="m-nav__separator">-</li>
        <li class="m-nav__item"><a href="{{ route('coupon.index') }}" class="m-nav__link"><span class="m-nav__link-text">@lang('coupon.create.coupons')</span></a></li>
        <li class="m-nav__separator">-</li>
        <li class="m-nav__item"><a href="" class="m-nav__link"><span class="m-nav__link-text">@lang('coupon.create.add_new')</span></a></li>
    </ul>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide">
                                <i class="la la-gear"></i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                @lang('coupon.create.add_new')
                            </h3>
                        </div>
                    </div>
                </div>

                <form action="{{ route('coupon.store') }}" method="POST" class="m-form m-form--label-align-right">
                    @csrf
                    <div class="m-portlet__body">
                        <div class="m-form__section m-form__section--first">

                            <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">@lang('coupon.create.code'):</label>
                                <div class="col-lg-6">
                                    <input type="text" name="code" id="code" value="{{ old('code') }}" class="form-control m-input m-input--air m-input--pill" placeholder=@lang('coupon.create.code')>
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label for="type" class="col-lg-2 col-form-label">@lang('coupon.create.type'):</label>
                                <select class="col-lg-6 form-control m-input m-input--air m-input--pill" name="type" id="type">
                                        <option value="" disabled selected>Type</option>
                                        <option value="value">Value</option>
                                        <option value="percent_off">Percent Off</option>
                                </select>
                            </div>

                            <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">@lang('coupon.create.value'):</label>
                                <div class="col-lg-6">
                                    <input type="text" name="value" id="value" value="{{ old('value') }}" class="form-control m-input m-input--air m-input--pill" placeholder=@lang('coupon.create.value')>
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">@lang('coupon.create.percent_off'):</label>
                                <div class="col-lg-6">
                                    <input type="text" name="percent_off" id="percent_off" value="{{ old('percent_off') }}" class="form-control m-input m-input--air m-input--pill" placeholder=@lang('coupon.create.percent_off')>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary">@lang('coupon.create.save')</button>
                                    <a href="{{ route('coupon.index') }}" class="btn btn-secondary">@lang('coupon.create.back')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
