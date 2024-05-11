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
    <div class="head">مدونتنا</div>
    <div class="container">
        <form method="post" id="frm" action="{{ url('add') }}">
            @csrf
            <div>
                <center><span>*</span> تعني ان الحقل مطلوب</center>
            </div><br>
            <div class="parent parent2">
                <div>
                    <label>الاسم الكامل <span>*</span></label><br>
                    <input type="text" placeholder="Full name" id="full" name="fname" value="<?php echo isset($form_data['fname']) ? $form_data['fname'] : ''; ?>">
                    <span id="req1">مطلوب</span>
                    @error('fname')
                        <span id="req1">لا يجب ان يتخطي الاسم الكامل 50 حرفا</span>
                    @enderror
                </div>
                <div>
                    <label>اسم المستخدم<span>*</span></label><br>
                    <input type="text" placeholder="Username" id="usr" name="uname" value="<?php echo isset($form_data['uname']) ? $form_data['uname'] : ''; ?>">
                    <span id="req2">مطلوب</span>
                    @error('uname')
                        <span id="req1">لا يجب ان يتخطي اسم المستخدم 50 حرفا</span>
                    @enderror
                </div>
            </div>
            <div class="parent">
                <label>البريد الالكتروني <span>*</span></label><br>
                <input type="text" class="full" placeholder="Email" id="mail" name="mail">
                <span id="req3">مطلوب</span>
                <span id="formula">من فضلك ادخل بريدا الكترونيا صالحا</span>
                @error('Email')
                    <span id="req1">لا يجب ان يتخطي البريد الالكتروني 50 حرفا</span>
                @enderror
            </div>
            <div class="parent">
                <label>كلمة السر<span>*</span></label><br>
                <input type="password" class="full" placeholder="Password" id="pass" name="password">
                <span id="req4">مطلوب</span>
                <span id="weak">من فضلك ادخل كلمة مرور صالحة</span>
                <p class="note">:تلميح <br> كلمة المرور يجب ان تحتوي علي الافل علي حرف كبير, حرف خاص, رقم,ويجب ان يتخطي 8 احرف</p>
                @error('password')
                    <span id="req1">لا يجب ان تتخطي كلمة المرور 50 حرفا</span>
                @enderror
            </div>
            <div class="parent">
                <label>تأكيد كلمة المرور<span>*</span></label><br>
                <input type="password" class="full" placeholder="Confirm password" id="cpass">
                <span id="req5">مطلوب</span>
                <span id="match">من فضلك ادخل كلمة مرور مطابقة للسابقة.</span>
                <p class="note">:تلميح<br>كلمة المرور يجب ان تتطابق مع السابقة</p>
            </div>
            <div class="parent">
                <label>الهاتف المحمول <span>*</span></label><br>
                <input type="text" class="full" placeholder="Phone" id="num" name="phone">
                <span id="req6">مطلوب</span>
                @error('phone')
                    <span id="req1">لا يجب ان يتخطي الهاتف المحمول 20 رقما</span>
                @enderror

            </div>
            <div class="parent">
                <label>العنوان <span>*</span></label><br>
                <input type="text" class="full" placeholder="Street Address" id="adrs" name="address">
                <span id="req7">مطلوب</span>
                @error('address')
                    <span id="req1">لا يجب ان يتخطي العنوان 100 حرفا</span>
                @enderror
            </div>
            <div class="parent" id="actorss">
                <label>تاريخ الميلاد <span>*</span></label><button class="actors" id="actorBtn">Show actors</button><br>
                <input type="date" class="full" id="dte" name="birth">
                <span id="req8">مطلوب</span>
            </div>
            <div class="parent">
                <label>ارفع صورة <span>*</span></label><br>
                <input type="file" class="image" id="img" name="imagge"><br>
                <span id="req10">مطلوب</span>
                @error('imagge')
                    <span id="req1">اسم الصورة لا يجب ان يتخطي 100 حرفا</span>
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