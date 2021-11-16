
<!DOCTYPE html>
<html>
{{--head--}}
@include('fronts.head_part')
<body> 
    {{-- chat bot  --}} 
    <div class="chat_icon"  >
        <a href="https://api.whatsapp.com/send?phone={{$contacts[0]['number_phone']}}">
        <img src="{{url('/images/whatsapp.png')}}">
      </a> 
    </div>

    {{-- end chat bot  --}}

<main>
    <div class="big-wrapper">
{{--        header--}}
         @include('fronts.header')
{{--        full slider--}}
        <section>
         
            <ul id="adaptive" class="cs-hidden">
                 @foreach ($headers as $header)
                 <li class="item-a" >
                    {{--      slider box--}}
                    <div class="full-slider-box">
                        <img src="{{url('/images/'.$header->image_url)}}">
                        <div class="slider-text-container">
                             <div class="f-slider-text">
                             <strong>{{$header->detail}}</strong>
                            {{--    <a href="#" class="btn">اتصل بنا</a>--}}
                              </div>
                        </div>
                    </div>
                </li>
              
                @endforeach
        
            </ul>
        </section>


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
       @foreach($systems as $system)

                <div class="box">
                    <img src="{{url('images/'.$system->image)}}" alt="">
                    <div class="content">
                        <h3>{{$system->name}}</h3>
                        <p> {{$system->small_detail}} </p>
                        <a class="btn" href="{{url('systemDetail/'.$system->id)}}">للمزيد</a>
                    </div>
                </div>
        @endforeach
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

</body>
{{--   footer--}}
@include('fronts.footer')

{{--  script part include javascript and links --}}
@include('fronts.script_part')
</html>
