

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> RESPONSIVE LANDINE</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 {{--    <link rel="stylesheet" href="{{url('css/style.css')}}">--}}
    <link rel="stylesheet" href="{{url('css/responsive.css')}}" >
    <link rel="stylesheet" href="{{url('font-family/style.css')}}" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <meta name="viewport" content="with=device-width,initial-scale=1.0" >
</head>

<body>
<main>
    <div class="big-wrapper">
        <header>
        <div class="container" id="home">
          <div class="logo">
                    <img src="{{url('images/alp.png')}}" alt="">
                    <h3>Alpha</h3>
                </div>
         <div class="links">
                    <ul  id="menuList">
                        <li><a href="#home">الرئيسية</a></li>
                        <li><a href="#testimonials">عملائنا</a></li>
                        <li><a href="#services">خدماتنا</a></li>
                        <li><a href="#about">عنا</a></li>
                        <li><a href="#">اتصل بنا</a></li>
                    </ul>
                </div>
{{--                <input type="checkbox" id="menu-bar">--}}
                <label  class="fas fa-bars" onclick="showLinks()"></label>

            </div>
        </header>
{{--        full slider--}}
        <section>
            <div  class="menuBlock">
            </div>
            <ul id="adaptive" class="cs-hidden">
                <li class="item-a">
                    {{--      slider box--}}
                    <div class="full-slider-box f-slide1">
                        <div class="slider-text-container">
                            <div class="f-slider-text">
                                <strong>أنظمة محاسبية ادارية متكاملة</strong>
                                {{--                <a href="#" class="btn">اتصل بنا</a>--}}
                            </div>
                        </div>
                    </div>


                </li>
                <li class="item-b">
                    {{--      slider box--}}
                    <div class="full-slider-box f-slide2">
                        <div class="slider-text-container">
                            <div class="f-slider-text">
                                <strong> انظمة حسب الطلب </strong>
                                {{--                <a href="#" class="btn">اتصل بنا</a>--}}
                            </div>
                        </div>
                    </div>

                </li>
                <li class="item-c">
                    {{--      slider box--}}
                    <div class="full-slider-box f-slide3">
                        <div class="slider-text-container">
                            <div class="f-slider-text">
                                <strong>نظام صلاحيات ورقابة دقيق، وآمان عــالي</strong>
                                {{--                <a href="#" class="btn">اتصل بنا</a>--}}
                            </div>
                        </div>
                    </div>


                </li>
            </ul>
        </section>



{{--        <div class="showcase-area">--}}
{{--            <div class="container">--}}
{{--                <div class="left">--}}
{{--                    <div class="big-title">--}}
{{--                        <h1>الفا الشاملة,</h1>--}}
{{--                        <h1> للإنظمة وتطوير البرمجيات</h1>--}}
{{--                    </div>--}}
{{--                    <p class="text">--}}
{{--                        تحقيق الريادة في مجال الانظمة المحاسبية والإدارية والانظمة المتخصصة--}}
{{--                    </p>--}}
{{--                    <div class="cta">--}}
{{--                        <a class="btn">ابدأ الأن</a>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="right">--}}
{{--                    <img width="50px" src="{{url('images/work.png')}}" alt="person">--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}

    </div>

     <hr class="divd">

    {{--      about --}}
    <section class="about" id="about">
        <h1 class="heading">عن شركتنا</h1>

        <div class="aboutUs">
           <div class="box">
                <div class="box-icon">
                    <i class="fas fa-bullseye"></i>
                    <span class="text-about-icon">الاهداف</span>
           </div>
           <div class="box-icon">
                   <i class="fas fa-eye"></i>
                   <span class="text-about-icon">الرؤية</span>
                </div>
               <div class="box-icon">
                   <i class="fas fa-user"></i>
                   <span class="text-about-icon">عنا</span>
                </div>
            </div>
            <div class="about-text">
               <div class="text-strong">
                   تأسست الفا الشاملة للإنظمة وتطوير البرمجيات لتلبي الإحتياجات التقنية للعملاء لمواكبة التطور الرقمي من خلال اتمتة العمل اليدوي الى انظمة محاسبية وإدارية، وذلك بتقديم حلول متخصصة بطرق إبداعية تناسب إحتياجات كل العملاء بطرق سهلة ومبسطة،
                   وبمنتجات ذات جودة وآمان عالي.
               </div>
            </div>
        </div>
{{--      <div class="column">--}}
{{--            <div class="image">--}}
{{--                <img src="{{url('images/eps.png')}}" alt="">--}}
{{--            </div>--}}
{{--            <div class="content">--}}
{{--                <h3> الفا الشاملة للإنظمة وتطوير البرمجيات</h3>--}}
{{--                <p>تأسست الفا الشاملة للإنظمة وتطوير البرمجيات لتلبي الإحتياجات التقنية للعملاء لمواكبة التطور الرقمي من خلال اتمتة العمل اليدوي الى انظمة محاسبية  وإدارية،--}}
{{--                    وذلك بتقديم حلول متخصصة بطرق إبداعية تناسب إحتياجات كل العملاء بطرق سهلة ومبسطة، وبمنتجات ذات جودة وآمان عالي.--}}
{{--                </p>--}}

{{--            </div>--}}

{{--        </div>--}}
    </section>
{{--    divider--}}
    <hr class="divd">
    {{--        services--}}
    <section class="services" id="services">
        <h1 class="heading">خدمتنا</h1>
        <div class="box-container">
            <div class="box">
                <img src="{{url('images/websiteApp.png')}}" alt="">
                <h3>برمجة مواقع</h3>
                <p> برمجة مواقع النت بكل انواعها </p>
            </div>
            <div class="box">
                <img src="{{url('images/dsktop.png')}}" alt="">
                <h3>تطبيقات سطح المكتب</h3>
                <p> برمجة تطبيقات سطح المكتب سواء ماك او ويندوز</p>
            </div>
            <div class="box">
                <img src="{{url('images/mobileApp.png')}}" alt="">
                <h3>تطبيقات الجوال</h3>
                <p>برمجة تطبيقات الجوال بجميع انواعها</p>
            </div>
        </div>
    </section>
    <hr class="divd">
    {{--      Reviews --}}
<section class="system" id="system">
    <h1 class="heading">أنظمة و برامج</h1>
    <div class="box-container">
        <div class="box">
            <img src="{{url('images/accounting.jpeg')}}" alt="">
             <div class="content">
                 <h3>نظام أنفنتي لايت (INFINITE LITE)</h3>
                 <p>نظام للمؤسسات المتوسطة والصغيرة
                      </p>
                 <a class="btn" href="#">اطلب الان</a>
             </div>
        </div>
        <div class="box">
            <img src="{{url('images/stringio.png')}}" alt="">
             <div class="content">
                 <h3>نظام محطات الوقود </h3>
                 <p>نظام لإدارة محطات الوقود </p>
                 <a class="btn" href="#">اطلب الان</a>
             </div>
        </div>
        <div class="box">
            <img src="{{url('images/accounting.jpeg')}}" alt="">
             <div class="content">
                 <h3>نظام أنفنتي (INFINITE)</h3>
                 <p>  نظام محاسبي - اداري متكامل  </p>
                 <a class="btn" href="#">المزيد</a>
             </div>
        </div>
        <div class="box">
            <img src="{{url('images/eurodollar.jpeg')}}" alt="">
             <div class="content">
                 <h3>نظام الصراف</h3>
                 <p> لإدارة محلات الصرافة </p>
                 <a class="btn" href="#">المزيد</a>
             </div>
        </div>
        <div class="box">
            <img src="{{url('images/employee.jpeg')}}" alt="">
             <div class="content">
                 <h3>نظام شئون الموظفين </h3>
                 <p> نظام شئون الموظفين</p>
                 <a class="btn" href="#">المزيد</a>
             </div>
        </div>
    </div>
</section>
    <hr class="divd">
    <section class="testimonials" id="testimonials">
        <h1 class="heading">عملائنا</h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="{{url('images/user.png')}}" alt="">
                    <h3>أحمد الخليفي</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="comment">
               تعامل ممتاز وسرعة في الرد والتعديلات وأيضا التسليم في الموعد وجودة عمل ممتازة ،، سرّني التعامل معهم ،، شكراً  </div>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="{{url('images/use.png')}}" alt="">
                    <h3>فهد الكندري</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <div class="comment">
                        الأسعار معقولة للغاية ، وخدمة عملاء لطيفة وتحول سريع للغاية . موصى به للغاية لجميع الذين يحتاجون إلى أي نوع من المعاملات . شكرا يا رفاق
                    </div>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="{{url('images/businessman.png')}}" alt="">
                    <h3>بلال القصيمي</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="comment">
                        هؤلاء الرجال هم الافضل! يقدمون منتج نهائي سريع وعالي الجودة. افضل شركة اتعاملت معاها . ينصح به بشده! مبدئهم الجودة أولا! </div>
                </div>
            </div>

        </div>
    </section>

</main>





<link rel="stylesheet" href="{{url('css/lightslider.css')}}">

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<script src="{{url('js/lightslider.js')}}"></script>
<script>
    textabouticon = document.getElementsByClassName("text-about-icon");
    textabouticon = document.getElementsByClassName("text-strong");

    $("div.box-icon").mouseover(function () {

        var about=$(this).text().trim();
        switch (about){
            case "الاهداف":
             textabouticon[0].innerHTML=` لمساهمة الفاعلة في التحول الرقمي.
تمكين رواد المال والأعمال بالإرتقاء بأعمالهم من خلال أنظمة محاسبية وإدارية مبسطة ذات جودة وكفاءة وأمان عالي.
تلبية احتياجات العملاء  من برامج متخصصة ، وحلول لمواكبة التغيرات التقنية.
المساهمة في تدريب وتأهيل المجمتع لمواكبة العالم الرقمي.`;
                break;
            case "الرؤية":
            textabouticon[0].innerHTML="تحقيق الريادة في مجال الانظمة المحاسبية والإدارية والانظمة المتخصصة."
                break;
            case "عنا":
                textabouticon[0].innerHTML="  تأسست الفا الشاملة للإنظمة وتطوير البرمجيات لتلبي الإحتياجات التقنية للعملاء لمواكبة التطور الرقمي من خلال اتمتة العمل اليدوي الى انظمة محاسبية وإدارية، وذلك بتقديم حلول متخصصة بطرق إبداعية تناسب إحتياجات كل العملاء بطرق سهلة ومبسطة، وبمنتجات ذات جودة وآمان عالي."
                break;
            // case "الرسالة":
            //     textabouticon[0].innerHTML="الرؤية"
            //     break;
        }
        }
    )
//full slider
    $(document).ready(function() {
        $('#adaptive').lightSlider({
            adaptiveHeight:true,
             speed: 500,
            slideMargin: 20,
            rtl:true,
            item:1,
            auto:true,
            controls:false,
            vThumbWidth:200,
            // pauseOnHover:true,
            // slideMargin:1,
            loop:true,

        });
    });

    //menulist
    menuList = document.getElementById("menuList");
    bigwrapper = document.getElementsByClassName("menuBlock");
    menuList.style.maxHeight="0px";

    window.addEventListener("resize", function(event) {
// console.log(document.body.clientWidth+"heigth")
        if(document.body.clientWidth>=1200){
            // location.reload();
            menuList.style.opacity = 1;
        }else{
            menuList.style.opacity=0;
        }
    })

    function showLinks(){
   // bigwrapper.style.visibility="visible";
if(    bigwrapper[0].style.display=="block" ){
    bigwrapper[0].style.display="none";
}else{
    bigwrapper[0].style.display="block";

}
if(menuList.style.maxHeight==="0px"){
    menuList.style.maxHeight="180px"
    menuList.style.opacity=1;
}else{
    menuList.style.maxHeight="0px"
    menuList.style.opacity=0;

}
    }


</script>

</body>
<footer>
    {{--    footer--}}

    <div class="footer">
        <div class="box-container">
            <div class="box">
                <h3>عنا</h3>
                <p>تأسست الفا الشاملة للإنظمة وتطوير البرمجيات لتلبي الإحتياجات التقنية للعملاء لمواكبة التطور الرقمي من خلال اتمتة العمل اليدوي الى انظمة محاسبية  وإدارية، وذلك بتقديم حلول متخصصة بطرق إبداعية تناسب إحتياجات كل العملاء بطرق سهلة ومبسطة، وبمنتجات ذات جودة وآمان عالي.
                </p>

            </div>
            <div class="box">
                <h3> روابط  </h3>
                <a href="#home">الرئيسية</a>
                <a href="#services">خدمات</a>
                <a href="#testimonials">عملائنا</a>

            </div>
            <div class="box">
                <h3>تابعنا</h3>
                <a href="#">فايسبوك</a>
                <a href="#">انستغرام </a>
                <a href="#">تويتر</a>
            </div>
            <div class="box">
                <h3>تواصل معنا</h3>
                <div class="info">
                     <i class="fas fa-phone"></i>
                     <p>212708150351+</p>
                 </div>
                <div class="info">
                     <i class="fas fa-envelope"></i>
                     <p>mbardouni@gmail.com</p>
                 </div>
                <div class="info">
                     <i class="fas fa-map-marker-alt"></i>
                     <p>السعودية,الخبر</p>
                 </div>
            </div>
        </div>
        <p class="text-light">© جميع الحقوق محفوظة لشركة Alpha</p>

    </div>
</footer>
</html>
