@extends("layouts.tamkeen-home")

@section("title","الصفحة الرئيسية")

@section("servicesActive","active")


@section("content")
<section id="heading-breadcrumbs" class="brder-top-0 border-bottom-0" style="background-image:linear-gradient(rgba(255, 255, 255 ,70%), rgba(255, 255, 255 ,70%)), url(/tamkeen-proj/assets/imgs/gallery_item_1.jpg)">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2 text-right"> عن كاشخ</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{asset('/')}}">الرئيسية</a></li>
                <li class="breadcrumb-item active">عن كاشخ</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
        <section class="inner-page-services">
          <div class="container py-1">


          <div class="row row-cols-1 row-cols-md-10">
              <p>
              الكاشخ خبرة اكثر من اربعين عام في مجال المستلزمات الرجالية شماغات - عقلات - ملابس داخلية - عطورات - ثوب - مستلزمات رجالية - ولادي - رجالي.
              </p>
          </div>

        </div>

        </section>

@endsection