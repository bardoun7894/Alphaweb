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
                    <p>{{$contacts[0]['number_phone']}}</p>
                </div>
                <div class="info">
                    <i class="fas fa-envelope"></i>
                    <p>{{$contacts[0]['email']}}</p>
                </div>
                <div class="info">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>{{$contacts[0]['country']}},{{$contacts[0]['city']}}</p>
                </div>
            </div>
        </div>
        <p class="text-light">© جميع الحقوق محفوظة لشركة Al-ula-Soft</p>

    </div>
</footer>
