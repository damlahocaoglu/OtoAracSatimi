@extends('base')
<section class="page-title text-center">
    <div class="container">
        <div class="page-title__holder">
            <h1 class="page-title__title">İletişim</h1>
            <p class="page-title__subtitle">Bize ulaşabilirsiniz </p>
        </div>
    </div>
</section>
<section class="section-wrap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
<div class="contact box-shadow-large offset-top-171">
    <ul class="contact__items">
        <li class="contact__item">
            <address>İstanbul/Maltepe</address>
        </li>
        <li class="contact__item">
            <span class="contact__item-label">Phone: </span>
            <a href="tel:+1-800-1554-456-123">+09 534 854 69 25</a>
        </li>
        <li class="contact__item">
            <span class="contact__item-label">Email: </span>
            <a href="mailto:themesupport@gmail.com">info@araba.com</a>
        </li>
    </ul>

    <!-- Contact Form -->
    <form id="contact-form" action="{{route('iletisimform')}}" class="contact-form mt-30 mb-30" method="post" action="#">
        {{csrf_field()}}
        <div class="row row-30">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">İsim <abbr title="required" class="required">*</abbr></label>
                    <input name="name" id="name" type="text">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="email">Email <abbr title="required" class="required">*</abbr></label>
                    <input name="email" id="email" type="email">
                </div>
            </div>
        </div>

        <div class="contact-message">
            <label for="message">Mesajınız <abbr title="required" class="required">*</abbr></label>
            <textarea id="message" name="message" rows="7" required="required"></textarea>
        </div>

        <input type="submit" class="btn btn--lg btn--color btn--wide btn--button" value="Mesajı Gönder" id="submit-message">
        <div id="msg" class="message"></div>
    </form>
    @if(session()->has('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
</div>
</div>
</div>
</div>
</section>
