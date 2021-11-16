
<section>
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
</section>
