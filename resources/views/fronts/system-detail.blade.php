@include('fronts.head_part')


@include('fronts.header')

<div class="system_detail_container" >

      <div class="row">
            <div class="col-lg-12">
                <div class="page-title-wrap">
                    <h1 class="page-title">{{$systems->name}}</h1>
                </div>
            </div>
        </div>
       <div class="decribe_container">
        <div class="date_title">
            <p class="date_text">
                <span>{{$systems->created_at}} </span>
                <i class="fas fa-calendar-alt"></i>
            </p>
            <p class="system_describe"> وصف النظام </p>
        </div>
        <div class="image">
            <img src="{{url('images/'.$systems->image)}}" alt="">

        </div>
           <div class="text_container">
               <div class="row_div_text">
                   <h2>نبذة عن النظام</h2>
                   <p>{{$systems->description}}  </p>
               </div>

           </div>

       </div>

</div>
@include('fronts.footer')
@include('fronts.script_part')
