<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Style.css') }}">
    <title>Form</title>
</head>
<body>
    @if(Session::has('success'))
    <div class="alert alert-success" id="successAlert">
        {{ Session::get('success') }}
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var successAlert = document.getElementById('successAlert');
                successAlert.style.display = 'none';
            }, 2000); 
        });
    </script>
@endif
    @include('header')
    
    <section>
    <div class="head">OUR FORM</div>
    <div class="container">
        <form method="post" id="frm" action="{{ url('add') }}">
            @csrf
            <div>
                <center><span>*</span> means that this field (required).</center>
            </div><br>
            <div class="parent parent2">
                <div>
                    <label>FULL NAME <span>*</span></label><br>
                    <input type="text" placeholder="Full name" id="full" name="fname" value="<?php echo isset($form_data['fname']) ? $form_data['fname'] : ''; ?>">
                    <span id="req1">required</span>
                    @error('fname')
                        <span id="req1">first name shouldn't be more than 50 characters</span>
                    @enderror
                </div>
                <div>
                    <label>USERNAME <span>*</span></label><br>
                    <input type="text" placeholder="Username" id="usr" name="uname" value="<?php echo isset($form_data['uname']) ? $form_data['uname'] : ''; ?>">
                    <span id="req2">required</span>
                    @error('uname')
                        <span id="req1">user name shouldn't be more than 50 characters</span>
                    @enderror
                </div>
            </div>
            <div class="parent">
                <label>EMAIL <span>*</span></label><br>
                <input type="text" class="full" placeholder="Email" id="mail" name="mail">
                <span id="req3">required</span>
                <span id="formula">Please enter valid email.</span>
                @error('Email')
                    <span id="req1">Email shouldn't be more than 50 characters</span>
                @enderror
            </div>
            <div class="parent">
                <label>PASSWORD <span>*</span></label><br>
                <input type="password" class="full" placeholder="Password" id="pass" name="password">
                <span id="req4">required</span>
                <span id="weak">Please enter valid password.</span>
                <p class="note">Hint: <br> password must contain at least one uppercase letter, special character, number and his length must be greater than 8 characters</p>
                @error('password')
                    <span id="req1">password shouldn't be more than 50 characters</span>
                @enderror
            </div>
            <div class="parent">
                <label>CONFIRM PASSWORD <span>*</span></label><br>
                <input type="password" class="full" placeholder="Confirm password" id="cpass">
                <span id="req5">required</span>
                <span id="match">Please enter valid confirm password.</span>
                <p class="note">Hint: <br> this field must be matching with password field</p>
            </div>
            <div class="parent">
                <label>PHONE NUMBER <span>*</span></label><br>
                <input type="text" class="full" placeholder="Phone" id="num" name="phone">
                <span id="req6">required</span>
                @error('phone')
                    <span id="req1">address shouldn't be more than 100 characters</span>
                @enderror

            </div>
            <div class="parent">
                <label>ADDRESS <span>*</span></label><br>
                <input type="text" class="full" placeholder="Street Address" id="adrs" name="address">
                <span id="req7">required</span>
                @error('address')
                    <span id="req1">phone number shouldn't be more than 20 characters</span>
                @enderror
            </div>
            <div class="parent" id="actorss">
                <label>DATE OF BIRTH <span>*</span></label><button class="actors" id="actorBtn">Show actors</button><br>
                <input type="date" class="full" id="dte" name="birth">
                <span id="req8">required</span>
            </div>
            <div class="parent">
                <label>UPLOAD IMAGE <span>*</span></label><br>
                <input type="file" class="image" id="img" name="imagge"><br>
                <span id="req10">required</span>
                @error('imagge')
                    <span id="req1">image name shouldn't be more than 100 characters</span>
                @enderror
            </div>
            <center>
                <div class="parent">
                    <input type="submit" value="SUBMIT" class="full" id="sub">
                </div>    
            </center>
        </form>
    </div>    
    </section>
    @include('footer')
    <script src="{{ asset('js/Action.js') }}"></script>
    <script src="{{ asset('js/API_Ops.js') }}"></script>
    <script src="{{ asset('js/LangSwitcher.js') }}"></script>

</body>
</html>