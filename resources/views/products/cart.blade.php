@extends("layouts.tamkeen-home")

@section("title","الصفحة الرئيسية")

@section("css")

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('tamkeen-proj/css/style.default.css')}}" id="theme-stylesheet">
    <!--linear icon css-->
    <link rel="stylesheet" href="{{asset('tamkeen-proj/assets/css/linearicons.css')}}">
@endsection

@section('content')

    <div class="container py-5">
        <!-- For demo purpose -->
        <div class="row mb-9">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-6">نموذج الدفع <h1>
            </div>
        </div> <!-- End -->
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card ">
                    <div class="card-header">
                        <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                            <!-- Credit card form tabs -->
                            <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fa fa-credit-card" aria-hidden="true"></i> بطاقة الائتمان </a> </li>
                                <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fa fa-paypal" aria-hidden="true"></i>
                                        باي بال </a> </li>
                                <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fa fa-mobile" aria-hidden="true"></i>
                                        الدفع  البنكي  </a> </li>
                            </ul>
                        </div> <!-- End -->
                        <!-- Credit card form content -->
                        <div class="tab-content">
                            <!-- credit card info-->
                            <div id="credit-card" class="tab-pane fade show active pt-3">
                                <form role="form" onsubmit="event.preventDefault()">
                                    <div class="form-group"> <label for="username">
                                            <h6>صاحب بطاقة</h6>
                                        </label> <input type="text" name="username" placeholder="اسم صاحب البطاقة

" required class="form-control "> </div>
                                    <div class="form-group"> <label for="cardNumber">
                                            <h6>رقم البطاقة</h6>
                                        </label>
                                        <div class="input-group"> <input type="text" name="cardNumber" placeholder="رقم البطاقة الصالح

" class="form-control " required>
                                            <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fa fa-cc-visa" aria-hidden="true"></i>
 <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
<i class="fa fa-cc-amex" aria-hidden="true"></i>
 </span> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>تاريخ الانتهاء</h6>
                                                </span></label>
                                                <div class="input-group"> <input type="number" placeholder="شهر  " name="" class="form-control" required> <input type="number" placeholder="سنة
" name="" class="form-control" required> </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                    <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                </label> <input type="text" required class="form-control"> </div>
                                        </div>
                                    </div>
                                    <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> تاكيد الدفع</button>
                                </form>
                            </div>
                        </div> <!-- End -->
                        <!-- Paypal info -->
                        <div id="paypal" class="tab-pane fade pt-3">
                            <h6 class="pb-2">حدد نوع حساب باي بال  الخاص بك</h6>
                            <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked>محلي </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">عالمي</label></div>
                            <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> تسجيل الدخول إلى باي بال الخاص بي</button> </p>
                            <p class="text-muted"> ملاحظة: بعد الضغط على الزر ، سيتم توجيهك إلى بوابة آمنة للدفع. بعد الانتهاء من عملية الدفع ، ستتم إعادة توجيهك مرة أخرى إلى موقع الويب لعرض تفاصيل طلبك. </p>
                        </div> <!-- End -->
                        <!-- bank transfer info -->
                        <div id="net-banking" class="tab-pane fade pt-3">
                            <div class="form-group "> <label for="Select Your Bank">
                                    <h6>اختر البنك الذي تتعامل معه</h6>
                                </label> <select class="form-control" id="ccmonth">
                                    <option value="" selected disabled>--اختر البنك الذي تتعامل معه--</option>
                                    <option>بنك1</option>
                                    <option>بنك 2</option>
                                    <option>بنك 3</option>
                                    <option>بنك4</option>
                                    <option>بنك 5</option>
                                    <option>بنك 6</option>
                                    <option>بنك7</option>
                                    <option>بنك9</option>
                                    <option>بنك 10</option>
                                </select> </div>
                            <div class="form-group">
                                <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> متابعة الدفع</button> </p>
                            </div>
                            <p class="text-muted">ملاحظة: بعد الضغط على الزر ، سيتم توجيهك إلى بوابة آمنة للدفع. بعد الانتهاء من عملية الدفع ، ستتم إعادة توجيهك مرة أخرى إلى موقع الويب لعرض تفاصيل طلبك. </p>
                        </div> <!-- End -->
                        <!-- End -->
                    </div>
                </div>
            </div>
        </div>
@endsection

