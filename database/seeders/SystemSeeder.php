<?php

namespace Database\Seeders;

use App\Models\System;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data= [ [
             'name' => "محطات الوقود",
             'small_detail' => "نظام لإدارة محطات الوقود",
             'image' => "stringio.png",
             'description' => "نظام مالي ومخزني يلبي متطلبات محطات الوقود بمختلف أحجامها وأنواعها، يتم من خلاله إثبات عمليات الشراء بالجملة والبيع بالتجزئة لكميات الوقود، والخدمات الإضافية الخاصة بالمركبات، وكذلك إثبات كميات الوقود المتوفرة ومعايرة المضخات، واستخراج التقارير المتنوعة والمختلفة",
             'visibility'=>1,
             'orderB'=>1,
             'created_at'=>now(),
              'updated_at'=>now()
               ],[
           'name' => "نظام أنفنتي (INFINITE LITE)",
           'small_detail' => "نظام للمؤسسات المتوسطة والصغيرة",
            'image' => "accounting.jpeg",
           'description' => "نظام محاسبي ومخزني متكامل معد وفق معايير معتمدة، يلائم طبيعة أعمال الأنشطة التجارية المختلفة كمحلات بيع مواد البناء، محلات الملابس والمولات، وتجارة المواد الغذائية وبإدارة مركزية للبيانات ومزامنتها فيما بين الفروع والإدارة العامة، يعمل بسياسة الجرد المستمر، ويتوافق للربط مع بقية أنظمة العلا سوفت (الأصول، الأرشفة الإلكترونية، والموارد البشرية)، كما يدعم ميزة التوزيع.",
           'visibility'=>1,
           'orderB'=>2,
           'created_at'=>now(),
           'updated_at'=>now()
            ],[
           'name' => "نظام أنفنتي (INFINITE)",
           'small_detail' => " نظام محاسبي - اداري متكامل",
           'image' => "accounting.jpeg",
           'description' => "   نظام محاسبي ومخزني متكامل معد وفق معايير معتمدة، يلائم طبيعة أعمال الأنشطة التجارية المختلفة كمحلات بيع مواد البناء، محلات الملابس والمولات، وتجارة المواد الغذائية وبإدارة مركزية للبيانات ومزامنتها فيما بين الفروع والإدارة العامة، يعمل بسياسة الجرد المستمر، ويتوافق للربط مع بقية أنظمة العلا سوفت (الأصول، الأرشفة الإلكترونية، والموارد البشرية)، كما يدعم ميزة التوزيع.
                ",
            'visibility'=>1,
            'orderB'=>3,
             'created_at'=>now(),
               'updated_at'=>now()
            ],[
           'name' => "نظام الصراف",
           'small_detail' => "لإدارة محلات الصرافة ",
           'image' => "eurodollar.jpeg",
           'description' => " نظام مصرفي يخدم المؤسسات المصرفية الفردية أو ذات الفروع المدارة مركزيا مع إمكانية وصول من أي مكان في العالم، يحتوي النظام على نوافذ عديدة يمكن من خلالها إدارة عمليات بيع وشراء العملات، المصارفة، تحويل الأموال، التعامل مع الشيكات وإدارة عمولات الوكلاء، واستخراج التقارير الإدارية والمالية المطلوبة، ويمتاز بإمكانية ربطة بخدمة الرسائل والإشعارات عبر SMS وتطبيق WhatsApp
            كما يحتوي على باقة كبيرة من الخواص والميزات التي تسهم في تسهيل أعمال موظفي شركات الصرافة وتزيد من نسبة الأمان للبيانات، وتسهل الربط مع الفروع.
            ",
           'visibility'=>1,
           'orderB'=>4,
           'created_at'=>now(),
           'updated_at'=>now()
           ],[
           'name' => "نظام شئون الموظفين",
           'small_detail' => " نظام لادارة شئون الموظفين",
           'image' => "employee.jpeg",
           'description' => "منظومة متكاملة من الأنظمة الفرعية التي تلبي احتياجات أقسام الموارد البشرية في المؤسسات والشركات والمنظمات والمصانع والدوائر الحكومية متعددة الفروع التي تضم أي عدد من الموظفين؛ حيث يوفر لها إدارة وسيطرة ورقابة كاملة وشاملة على دوامات وفترات عمل الموظفين باختلاف وردياتهم، ومعالجة إجازاتهم السنوية والعارضة وفترات العمل الإضافية. كما يدير الترقيات وترحيل قيود الرواتب واستقطاع الجزاءات وإثبات استحقاق السلف والقروض وتقييمات أداء الموظفين وغيرها من الأمور الإدارية والمالية." ,
           'visibility'=>1,
           'orderB'=>5,
           'created_at'=>now(),
           'updated_at'=>now()
           ],] ;
       DB::table('systems')->delete();
       DB::table('systems')->insert($data);

    }
}
