@include('admin.include.header')
<style type="text/css">
      .table-responsive{
            direction: rtl;
      }

</style>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">"{{$user->name}}" Details</h2>
        </div>

      <h4>Personal Detail</h4>
      <br>
      <p><b>اسم رسانه :</b> {{$user->name}}</p>
      <p><b>شماره جواز :</b> {{$user->license_number}}</p>
      <p><b>تاریخ اخذ جواز فعالیت :</b> {{$user->license_date}}</p>
      <p><b>تاریخ شروع فعالیت :</b> {{$user->starting_date}}</p>
      <p><b>نوعیت رسانه:</b> {{$user->type}}</p>
      <br>

      <h4>Coverage Details</h4>
      <br>
      <p><b>ساحه پوشش :</b> {{$user->coverage_area}}</p>
      <p><b>نوعیت نشرات :</b> {{$user->coverage_type}}</p>
      <p><b>گروه مخاطبان:</b> {{$user->recipent_group}}</p>
      <p><b>زبان نشرات :</b> {{$user->broadcasting_language}}</p>
      <p><b>آدرس دفتر مرکزی:</b> {{$user->addres}}</p>
      <p><b>ایمیل های دفتر :</b><br><b>ایمیل ۱ :</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->email1}} <br>
            <b>ایمیل ۲ :</b>{{$user->email2}}&nbsp;&nbsp;&nbsp;&nbsp;<br>
            <b>ایمیل ۳ :</b> {{$user->email3}}</p>
      <p><b>Official Contanct(s) Number In Afghanistan:</b><br> <b>شماره تلیفون ۱ :</b> {{$user->phone1}}
      &nbsp;&nbsp;&nbsp;&nbsp;
      <b>شماره تلیفون ۲ :</b> {{$user->phone2}} &nbsp;&nbsp;&nbsp;&nbsp; <br> <b>شماره تلیفون ۳ :</b> {{$user->phone3}}</p>
      <p><b>Website/Social Media Pages(s):</b> <br><b>Website:</b> {{$user->website}} &nbsp;&nbsp;&nbsp;&nbsp; <br>
      <b>فیسبوک:</b>  {{$user->facebook}} &nbsp;&nbsp;&nbsp;&nbsp; 
      <br> <b>تویتر:</b>  {{$user->twitter}}</p>
<br>  
      <h4>News Director</h4>
      <br>
      <p><b>اسم :</b> {{$manager->name}}</p>
      <p><b>ایمیل :</b> {{$manager->email}}</p>
      <p><b>شماره تلیفون :</b> {{$manager->telephone}}</p>
      <p><b>فیسبوک :</b> {{$manager->facebook}}</p>
      <p><b>تویتر:</b> {{$manager->twitter}}</p>
<br>
      <h4>Media Secretary</h4>
      <br>
      <p><b>اسم :</b> {{$secretary->name}}</p>
      <p><b>ایمیل :</b> {{$secretary->email}}</p>
      <p><b>شماره تلیفون :</b> {{$secretary->telephone}}</p>
      <p><b>فیسبوک :</b> {{$secretary->facebook}}</p>
      <p><b>تویتر:</b> {{$secretary->twitter}}</p>
<br>
      <h4>Journalist No.1</h4>
      <br>
      <p><b>اسم :</b> {{$journalist1->name}}</p>
      <p><b>ایمیل :</b> {{$journalist1->email}}</p>
      <p><b>شماره تلیفون :</b> {{$journalist1->telephone}}</p>
      <p><b>فیسبوک :</b> {{$journalist1->facebook}}</p>
      <p><b>تویتر:</b> {{$journalist1->twitter}}</p>
<br>
      <h4>Journalist No.2</h4>
      <br>
      <p><b>اسم :</b> {{$journalist2->name}}</p>
      <p><b>ایمیل :</b> {{$journalist2->email}}</p>
      <p><b>شماره تلیفون :</b> {{$journalist2->telephone}}</p>
      <p><b>فیسبوک :</b> {{$journalist2->facebook}}</p>
      <p><b>تویتر:</b> {{$journalist2->twitter}}</p>

      <a class="btn btn-default" href="{{route('view_media_register')}}">Back</a>
</div>
</section>

@include('admin.include.footer')