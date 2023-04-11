<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>الصفحة الرئيسية</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" />
  <link rel="icon" href="imges/878.jpg">

  <link rel="stylesheet" href="css/style.css">


  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


  <!-- header section starts -->
  <section class="header">
    <a href="#" class="loge"><i class="fa fa-h-square" aria-hidden="true"></i> سكن طلابي</a>
    <nav class="navbar">
      <a href="#home">الرئيسية</a>
      <a href="#about">حول</a>
      <a href="#Rooms">الغرف</a>
      <a href="#Overview">نظرة عامة</a>
      <a href="#order">الحجز</a>

    </nav>
    <div id="menu-btn" class="fa fa-bars"></div>
  </section>
  <!-- header section end -->
  <!-- home section start -->
  <section class="home" id="home">
    <div class=" swiper home-slilder">

      <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background: url(imges/a1.jpg )repeat  ;">
          <div class="content">
            <span>ليس الوحدون لكن مميزون</span>
            <h3> للراحة عنوان</h3>
            <a href="#order" class="btn">إحجز الأن</a>
          </div>
        </div>
        <div class="swiper-slide slide" style="background: url(imges/a2.jpg) no-repeat ;">
          <div class="content">
            <span> جلسات هادئة</span>
            <h3> كفتريا</h3>
            <a href="#m1" class="btn">احجز الأن</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background: url(imges/a4.jpg) no-repeat;">
          <div class="content">
            <span> ومركز لياقة بدنية جيد</span>
            <h3> صالة تدريب</h3>
            <a href="#C1" class="btn">احجز الأن</a>
          </div>
        </div>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>
  home section end
  <!-- about section start -->
  <section class="about" id="about">
    <div class="imge">
      <img src="imges/yu-900x570.jpg" alt="">
    </div>
    <div class="content">
      <h3 class="title"> مرحبا بك في بيتك الثاني</h3>
      <p>تعمل إدارة السكن الطلابي والحياة السكنية بشغف على أن توفر لك مجتمعاً آمناً ومضيافاً لتشعر وكأنك في منزلك. بدأً
        من
        السلامة وإلى الأنشطة الاجتماعية، نبذل قصارى جهدنا لجعل إقامتك في السكن الطلابي من الذكريات التي لا تُنسى.
        وبالإضافة إلى
        مرافقنا السكنية المتميزة، فإننا نوفر لك بيئة معيشية نموذجية لدعم مساعيك الجامعية. ومن خلال السكن في الحرم
        الجامعي ستكون
        على مسافة قريبة من الفصول الدراسية والمختبرات والمكتبات والمرافق الرياضية. وعلاوة على ذلك، ستجد خيارات متنوعة من
        منافذ
        الخدمات الغذائية لتنعم بالراحة وتوفير الوقت والجهد.</p>
      <!-- <a href="#Inquiries" class="btn">3ثث</a> -->
      <a href="#blogs" class="btn">الإستفسارات</a>
      <div class="icons-container">
        <div class="icons">
          <i class="fa fa-bed" aria-hidden="true"></i>
          <h3> راحة</h3>
        </div>
        <div class="icons">
          <i class="fa fa-smile-o" aria-hidden="true"></i>
          <h3>ونقاهة</h3>
        </div>
      </div>
    </div>
  </section>
  <!-- about section end -->
  <!-- food section start -->
  <section class="food" id="Rooms">
    <div class="heading">
      <span>غرف مجهزة</span>
      <h3> راحة كاملة</h3>
    </div>
    <div class=" swiper food-slider">
      <div class="swiper-wrapper">
    @foreach ($room as $room)
    <div class="swiper-slide slide" data-name="{{$room->id}}">
        <img src="{{$room->image_url}}" width="400px">
        <h3>{{$room->name}}</h3>


      </div>
    @endforeach

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!-- food section end -->
  <!-- food preview section starts -->
  <section class="food-preview-container">
    <div id="clos-preview" class="fas fa-times"></div>

    @foreach ($room2 as $room )
<div class="food-preview " data-target="{{$room->id}}">
  <img src="{{$room->image_url}}" alt="" width="300px">
  <h3>مساحة {{$room->name}} {{$room->space}} م² </h3>

  <div class="stars">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
  </div>

  <p>{{$room->notes}}</p>
    <br>
    #تميز_باختيارك
  </p>
  <div class="pric">${{$room->price}}</div>
  <a href="#order" class="btn"> إحجز الأن</a>
</div>
@endforeach

  </section>
  <!-- food preview section End -->
  <!-- gallery section start -->
  <section class="gallery" id="Overview">
    <div class="heading">
      <span> سكن طلاب</span>
      <h3> </h3>
    </div>
    <div class="gallery-container">
      <a href="imges/yu-900x570.jpg" class="boxs">
        <img src="imges/yu-900x570.jpg" alt="">
        <div class="icon"><i class="fas fa-plus"></i></div>
      </a>
      <a href="imges/88.jpg" class="boxs">
        <img src="imges/88.jpg" alt="">
        <div class="icon"><i class="fas fa-plus"></i></div>
      </a>
      <a href="imges/group-of-university-students-working-outside-toget-2022-04-20-17-06-43-utc-1024x683.jpg"
        class="boxs">
        <img src="imges/group-of-university-students-working-outside-toget-2022-04-20-17-06-43-utc-1024x683.jpg" alt="">
        <div class="icon"><i class="fas fa-plus"></i></div>
      </a>
      <a href="imges/ryx-0002-student-houses-with-high-return-on-investment-in-sakarya-ah-2.jpeg" class="boxs">
        <img src="imges/ryx-0002-student-houses-with-high-return-on-investment-in-sakarya-ah-2.jpeg" alt="">
        <div class="icon"><i class="fas fa-plus"></i></div>
      </a>

      <a href="imges/ryx-0002-student-houses-with-high-return-on-investment-in-sakarya-ah-2.jpeg" class="boxs">
        <img src="imges/ryx-0002-student-houses-with-high-return-on-investment-in-sakarya-ah-2.jpeg" alt="">
        <div class="icon"><i class="fas fa-plus"></i></div>
      </a>

      <a href="imges/thumbs_b2_24a802c2c85d1b245cb15b75dbabb333.jpg" class="boxs">
        <img src="imges/thumbs_b2_24a802c2c85d1b245cb15b75dbabb333.jpg" alt="">
        <div class="icon"><i class="fas fa-plus"></i></div>
      </a>

      <a href="imges/ryx-0002-student-houses-with-high-return-on-investment-in-sakarya-ah-2.jpeg" class="boxs">
        <img src="imges/ryx-0002-student-houses-with-high-return-on-investment-in-sakarya-ah-2.jpeg" alt="">
        <div class="icon"><i class="fas fa-plus"></i></div>
      </a>

      <a href="imges/images_64_nana.jpg" class="boxs">
        <img src="imges/images_64_nana.jpg" alt="">
        <div class="icon"><i class="fas fa-plus"></i></div>
      </a>
    </div>
    </div>
    </div>
    </div>
    </div>
  </section>
  <!-- gallery section End -->
  <!-- menu section start-->


  <!-- order section start -->
  <section class="order" id="order">
    <div class="heading">
      <span>إحجز الان</span>
      <h3> إغتنم الفرصة</h3>
    </div>
    <form action="{{route('order.store')}}" method="post">
        <x-flash-message />
        @csrf
      <div class="box-container">
        <div class="box">
          <div class="inputBox">
            <span> الاسم الكامل</span>
            <x-form.input name="name"  type="text" placeholder="أدخل أسمك"/>
          </div>
          <div class="inputBox">
            <span> الغرفة </span>
            <div >
                <select name="room_id" @class([
                   'form-control ','SlectBox','is-invalid'=>$errors->has('room_id')
                ])
                 onclick="console.log($(this).val())"
                    onchange="console.log('change is firing')">
                    <!--placeholder-->
                    <option value="" selected disabled>اختر الغرفة المناسبة لك</option>
                    @foreach ($room3 as $room)
                        <option value="{{ $room->id }}" >
                            {{ $room->name }}</option>
                    @endforeach
                    @error('room_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </select>
            </div>
          </div>
          <div class="inputBox">
            <span> تفاصيل الحجز</span>
                <x-form.textarea name="notes"  placeholder="أدخل تفاصيل حجزك   " id="" cols="30" rows="5" />
          </div>
        </div>
        <div class="box">
          <div class="inputBox">
            <span> رقم الجوال/تليفون</span>
            <x-form.input name="phone"   type="number" placeholder="أدخل رقمك "/>
          </div>
          <div class="inputBox">
            <span> تاريخ حجزك</span>
            <x-form.input name="order_date"  type="datetime-local"/>
          </div>
          <div class="inputBox">
            <span> عنواننا

            </span>
            <iframe class="map"
              src="https://www.google.com/maps/search/+%D8%A7%D8%B3%D8%AA%D9%86%D8%A8%D9%88%D9%84+,+%D8%A7%D9%84%D9%81%D8%A7%D8%AA%D8%AD+,+%D9%85%D8%AD%D8%B7%D8%A9+%D8%AA%D8%B1%D8%A7%D9%85+%D9%8A%D9%88%D8%B3%D9%81+%D8%A8%D8%A7%D8%B4%D8%A7+,+%D8%A8%D9%86%D8%A7%D8%A1+%D9%83%D8%A7%D8%AA%D8%A8+%D8%A7%D9%84%D8%B9%D8%AF%D9%84+29+%D9%81%D9%8A+%D8%A7%D8%B3%D8%B7%D9%86%D8%A8%D9%88%D9%84%E2%80%AD/@41.0108092,28.9469207,17z/data=!3m1!4b1"></iframe>
            <a
              href="https://www.google.com/maps/search/+%D8%A7%D8%B3%D8%AA%D9%86%D8%A8%D9%88%D9%84+,+%D8%A7%D9%84%D9%81%D8%A7%D8%AA%D8%AD+,+%D9%85%D8%AD%D8%B7%D8%A9+%D8%AA%D8%B1%D8%A7%D9%85+%D9%8A%D9%88%D8%B3%D9%81+%D8%A8%D8%A7%D8%B4%D8%A7+,+%D8%A8%D9%86%D8%A7%D8%A1+%D9%83%D8%A7%D8%AA%D8%A8+%D8%A7%D9%84%D8%B9%D8%AF%D9%84+29+%D9%81%D9%8A+%D8%A7%D8%B3%D8%B7%D9%86%D8%A8%D9%88%D9%84%E2%80%AD/@41.0108092,28.9469207,17z/data=!3m1!4b1">
              اسطنبول , الفاتح , محطة ترام يوسف باشا , بناء كاتب العدل 29 في اسطنبول</a>
          </div>
        </div>
      </div>
      <input type="submit" value=" إرسل الطلب" class="btn">
    </form>
  </section>
  <!-- order section End -->
  <!-- Inquiries section start -->

  <section class=" blogs" id="blogs">
      <div class="heading">
          <span> الإستفسارات </span>
          <h3>سيتم الرد على جميع الاستفسارات</h3>
        </div>

        <form action="{{route('communication.store')}}" method="post">
            @csrf

            <div class="box-container">
        <div class="box">
          <div class="inputBox">
            <span> الاسم الكامل</span>
            <x-form.input name="name" type="text" placeholder="أدخل أسمك" />
          </div>
          <div class="inputBox">
            <span> رقم الجوال</span>
            <x-form.input name="phone" type="text" placeholder="أدخل رقمك" />
          </div>
          <div class="inputBox">
            <span> إستفسارك </span>
            <x-form.textarea name="notes" placeholder="أدخل الاستفساراتك " id="" cols="30" rows="10" />
          </div>
          <input type="submit" value=" إرسل الاستفسارات" class="btn">
        </div>
      </div>
    </form>
  </section>
  <!-- Inquiries section End -->
  <!-- footer section start -->
  <footer>
    <div class="social">
      <a href="" class="a1"> <i class="fab fa-whatsapp"></i></a>
      <a href="" class="a2"><i class="fab fa-facebook"></i></a>
      <a href="" class="a3"><i class="fa fa-phone" aria-hidden="true"></i></a>
      <a href="" class="a4"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
      <br>
      <div class="footer-title">
        <a href="">copyrights @ 2023-2024</a>
      </div>
    </div>

  </footer>
  <!-- footer section End -->






  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <script>
    lightGallery(document.querySelector('.gallery .gallery-container'));
  </script>


</body>

</html>
