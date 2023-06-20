@extends('layouts.app')

@section('custom-css')
<style>
    *{
        line-height: 150% !important;
    }

    body{
        font-size: 14px;
        color: #333333;
    }

    .bg-success{
        background-color: #019147 !important;
    }
    .card{
        padding: 48px;
        border-radius: 24px;
    }
    .button{
        border-radius: 12px;
        font-size: 14px;
        font-weight: 600;
        padding: 16px 24px;
    }
    .btn-warning{
        background-color: #FF9823 !important;
        color: #ffffff !important;
    }
    .hero{
        background: url("{{ asset('./img/bg-pattern.svg') }}");
        background-repeat: no-repeat;
        background-size: 58%;
        background-position: top -256px right -256px;
    }
    table{
        border: 0.2px solid #333333 !important;
        padding: 8px;
    }
    .sp-input{
        padding: 8px 16px;
        border-radius: 6px;
        border: .2px solid #333333 !important;
        outline: none;
    }
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }
</style>
@endsection

@section('content')
<div class="container">
    <!-- Hero -->
    <div class="card bg-success hero">
        <div class="row d-flex align-items-center">
            <div class="col-6 text-white">
                <h2 class="font-weight-bold">Start managing Zakat Al-Fitr Collection without any hassle!</h2>
                <p class="text-justify" style="margin: 24px 0px;">Welcome to our Zakat Management System, a comprehensive and user-friendly platform designed to revolutionize the way you manage your Zakat contributions. Our system provides a convenient and efficient way to calculate, track, and distribute your Zakat, empowering you to make a meaningful impact on the lives of those in need.</p>
                <a href="#about" class="button btn btn-warning text-white">Check Out MyZakat</a>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('./img/hero-illustration.svg') }}" style="width: 80%;" alt="">
            </div>
        </div>
    </div>

    <!-- Zakat Detail -->
    <div class="card" style="margin: 48px 0px;">
        <div class="row" style="margin-bottom: 24px;">
            <div class="col-6 pl-0">
                <h2 class="font-weight-bold">Haven't heard about Zakat Al-Fitr?</h2>
                <p class="text-justify" style="margin-bottom: 16px;">"Those who believe, do righteous deeds, establish prayer, and give zakah, will have their reward with their Lord; and they will have no fear, nor will they grieve." <br>Al-Baqarah : 277.</p>
                <p class="text-justify" style="margin-bottom: 16px;">As one of the Five Pillars of Islam, zakat is a religious duty for all Muslims who meet the necessary criteria of wealth to help the needy. It is a mandatory charitable contribution, often considered to be a tax. The payment and disputes on zakat have played a major role in the history of Islam, notably during the Ridda wars. Zakat on wealth is based on the value of all of one's possessions. It is customarily 2.5% (or 1/4) of a Muslim's total savings and wealth above a minimum amount known as nisab each lunar year, but Islamic scholars differ on how much nisab is and other aspects of zakat. According to Islamic doctrine, the collected amount should be paid to the poor and the needy, Zakat collectors, orphans, widows, those to be freed from slavery, old-aged peoples who can't work to feed themselves, those in debt, in the cause of Allah and to benefit the stranded traveller.</p>
                <a href="https://baznas.go.id/zakat" class="button btn btn-warning">Read More</a>
            </div>
            <div class="col-6 pr-0">
                <div class="card w-100 h-100 p-4">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="font-weight-bold">Zakat Calculator🧮</h5>
                            <p>If my condition is ...</p>
                        </div>
                    </div>
                    <div class="row w-100 mb-3">
                        <div class="col-6">
                            <input class="sp-input w-100" type="number" min="0" placeholder="Number of Person" id="nopInput">
                        </div>
                        <div class="col-6">
                            <input class="sp-input w-100" type="number" min="0" placeholder="My rice price in rupiah" id="ricePriceInput">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>then i should pay ...</p>
                        </div>
                    </div>
                    <div class="row w-100 mb-3">
                        <div class="col-6">
                            <input class="sp-input w-100" type="text" min="0" placeholder="Money to pay" id="moneyInput" disabled>
                        </div>
                        <div class="col-6">
                            <input class="sp-input w-100" type="text" min="0" placeholder="Rice to give" id="riceInput" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <small>P.s. You don't have to pay BOTH in money and in rice. You should consider choosing one.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About MyZakat -->
    <div class="card bg-success" style="margin-bottom: 48px;" id="about">
        <div class="row d-flex align-items-center">
            <div class="col-6 text-white">
                <h2 class="font-weight-bold">What MyZakat really is?</h2>
                <p class="text-justify" style="margin: 24px 0px;">As we mentioned earlier, MyZakat is a comprehensive and user-friendly platform designed to revolutionize the way you manage your Zakat contributions. Our system provides a convenient and efficient way to calculate, track, and distribute your Zakat, empowering you to make a meaningful impact on the lives of those in need.</p>
                <p class="text-justify" style="margin: 24px 0px;">Our goal is to do the hard and complicated works behind Zakat collection and distribution, so the amil can focus more on the technicality of the collection and distribution rather than do everything manually by themselves. If you're interested in using our system, let's get in touch and discuss more about your needs, shall we?</p>
                <a target="_blank" href="mailto:jaleisme.id@gmail.com" class="button btn btn-warning text-white">Get In Touch</a>
            </div>
            <div class="col-6">
                <div class="row mb-4 w-100 text-white">
                    <div class="col-6">
                        <div class="card bg-success border-white">
                            <span class="font-weight-bold text-center" style="font-size: 16px;">📊<br>Statistics Report</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card bg-success border-white">
                            <span class="font-weight-bold text-center" style="font-size: 16px;">🧮<br>Zakat Calculator</span>
                        </div>
                    </div>
                </div>
                <div class="row w-100 text-white">
                    <div class="col-6">
                        <div class="card bg-success border-white">
                            <span class="font-weight-bold text-center" style="font-size: 16px;">👥<br>Mustahik Management</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card bg-success border-white">
                            <span class="font-weight-bold text-center" style="font-size: 16px;">💰<br>Payment Management</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(() => {
        let nop = 0, ricePrice = 0, money = 0, rice = 0
        function calculate(nop, ricePrice){
            if(nop > 0 && ricePrice > 0){
                money = nop*(ricePrice*2.5)
                rice = nop*2.5
                $('#moneyInput').val('Rp.'+money)
                $('#riceInput').val(rice+' Kg')
            }
        }

        $('#nopInput').on('input', () => {
            nop = $('#nopInput').val()
            calculate(nop, ricePrice)
        })

        $('#ricePriceInput').on('input', () => {
            ricePrice = $('#ricePriceInput').val()
            calculate(nop, ricePrice)
        })

    })
</script>
@endsection
