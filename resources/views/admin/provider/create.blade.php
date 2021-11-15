@extends("layouts.admin")
@section("title","اضافة مزود جديد")

@section("content")
<div class="m-portlet m-portlet--mobile px-4 py-3">
    <form enctype="multipart/form-data" method='post' action='{{route("provider.index")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">اسم المزود </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control m-input" placeholder="ادخل اسم المزود"
                                name="fullname" value='{{ old("fullname") }}'>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label for="example-email-input" class="col-3 col-form-label">البريد الإلكتروني</label>
                        <div class="col-6">
                            <input class="form-control m-input" name="email" type="email"
                                placeholder="patientname@example.com" id="example-email-input">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label for="example-password-input" class="col-3 col-form-label">كلمة المرور</label>
                        <div class="col-6">
                            <input class="form-control m-input" name="password" type="password" value="P@ssw0rd"
                                id="password">
                        </div>
                    </div>

                    
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الايميل </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control m-input" placeholder="الايميل" name="address"
                                value='{{ old("address") }}'>
                        </div>
                    </div>

                    



                    <div class="m-form__group form-group row">
                        <label class="col-lg-3 col-form-label" for="details">الصورة الشخصية</label>
                        <input class="col-lg-6" type='file' name="image" id="image" />
                    </div>
                    

                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button class="btn btn-primary" type="submit">إضافة</button>
                            <a href='{{route("provider.index")}}' class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection