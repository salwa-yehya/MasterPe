@extends('user.layouts.Master')

@section('title')
     Checkout
@endsection


@section ('css')

 <!-- Link Checkout CSS -->
 <link rel="stylesheet" href="{{asset('css/checkout.css')}}">

@endsection


@section('pages')
<div class="pages-title">
    <h1>Check Out </h1>
</div>

<!-- ======= Check Out Section ======= -->

<div class="row pay">
    <div class="col-75">
        <div class="check-container">
            <form>
                <div class="pay">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <hr>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Mohammad M">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="Name@example.com">
                        <label for="adr"><i class="fa-solid fa-location-dot"></i> Address</label>{{--************ --}}
                        <input type="text" id="adr" name="address" placeholder="5th Erea">
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="Amman">

                        <div class="pay">
                            <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="JO">
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="10001">
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <hr>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <a href="#"><i class="fab fa-cc-visa" style="color:navy;"></i></a>
                            <a href="#"><i class="fab fa-cc-amex" style="color:blue;"></i></a>
                            <a href="#"><i class="fab fa-cc-mastercard" style="color:red;"></i></a>
                            <a href="#"><i class="fab fa-cc-discover" style="color:orange;"></i></a>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September">
                        <div class="pay">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2018">
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352">
                            </div>
                        </div>
                    </div>

                </div>
                <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                <input type="submit" value="Continue to checkout" class="btn">
            </form>
        </div>
    </div>
</div>


@endsection