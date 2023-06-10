@extends('layouts.app')

@section('custom-css')
<style>
    body{
        line-height: 150%;
        font-size: 14px;
    }

    .jumbotron{
        background:
        /* top, transparent black, faked with gradient */
        linear-gradient(
          rgba(0, 0, 0, 0.5),
          rgba(0, 0, 0, 0.5)
        ),
        /* bottom, image */
        url('/bg-landing.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        color: #ffffff;
        height: 70vh;
        margin-top: -48px;
    }
</style>
@endsection

@section('content')
<div class="jumbotron d-flex align-items-center">
    <div class="container">
        <h1 class="display-5 font-weight-bold">Manage Zakat Collection without any hassle!</h1>
        <p>Having a hard time managing zakat collection? Let MyZakat handle that.</p>
        <a class="btn btn-primary btn-lg mt-3" style="font-size: 14px;" href="#about" role="button">Learn More</a>
    </div>
</div>
<div class="container">
    <div class="row my-5">
        <div class="col-12">
            <h3 class="font-weight-bold">Zakat Fitrah</h3>
            <p class="text-justify">"Those who believe, do righteous deeds, establish prayer, and give zakah, will have their reward with their Lord; and they will have no fear, nor will they grieve." <br>Al-Baqarah : 277.</p>
            <p class="text-justify">As one of the Five Pillars of Islam, zakat is a religious duty for all Muslims who meet the necessary criteria of wealth to help the needy. It is a mandatory charitable contribution, often considered to be a tax. The payment and disputes on zakat have played a major role in the history of Islam, notably during the Ridda wars. Zakat on wealth is based on the value of all of one's possessions. It is customarily 2.5% (or 1/4) of a Muslim's total savings and wealth above a minimum amount known as nisab each lunar year, but Islamic scholars differ on how much nisab is and other aspects of zakat. According to Islamic doctrine, the collected amount should be paid to the poor and the needy, Zakat collectors, orphans, widows, those to be freed from slavery, old-aged peoples who can't work to feed themselves, those in debt, in the cause of Allah and to benefit the stranded traveller.</p>
        </div>
    </div>
    <div class="row my-5" id="about">
        <div class="col-12 text-justify">
            <h3 class="font-weight-bold">What is <span>My</span><span class="text-success">Zakat</span>?</h3>
            <p class="text-justify">MyZakat is a system designed to manage zakat fitrah collection and distribution. Our goal is to help make <a>Amil's</a> work easier by remodelling zakat activities in a more simple way. Just register to access our feature, and you're good to go!</p>
        </div>
    </div>
</div>
@endsection
