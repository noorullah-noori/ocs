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
      <p><b>اسم :</b> {{$user->name}}</p>
      <p><b>تخلص :</b> {{$user->last_name}}</p>
      <p><b>نام پدر :</b> {{$user->father_name}}</p>
      <p><b>تابعیت :</b> {{$user->nationality}}</p>
      <p><b>شماره تذکره / پاسپورت.:</b> {{$user->passport}}</p>
      <p><b>رشته تحصیلی:</b> {{$user->discipline}}</p>
      <p><b>نوعیت رسانه:</b> {{$user->type}}</p>
      <p><b>زبان مسلط:</b> {{$user->language}}</p>
      <p><b>تاریخ شروع فعالیت:</b> {{$user->starting_date}}</p>
      <p><b>رسانه فعلی:</b> {{$user->current_media}}</p>
      <p><b>رسانه قبلی :</b> {{$user->previous_media}}</p>
      <p><b>آدرس دفتر مرکزی رسانه فعلی:</b> {{$user->address}}</p>
      <br>

      <h4>ایمیل ها</h4>
      <br>
      <p><b>ایمیل ۱:</b> {{$user->email1}}</p>
      <p><b>ایمیل ۲ :</b> {{$user->email2}}</p>
      <p><b>ایمیل ۳:</b> {{$user->email3}}</p>
<br>
      <h4>شماره های تماس</h4>
      <br>
      <p><b>شماره تماس ۱. :</b> {{$user->phone1}}</p>
      <p><b>شماره تماس ۲. :</b> {{$user->phone2}}</p>
      <p><b>شماره تماس ۳. :</b> {{$user->phone3}}</p>
<br>
      <h4>آدرس های الکترونیک (شبکه های اجتماعی)</h4>
      <br>
      <p><b>Facebook :</b> {{$user->facebook}}</p>
      <p><b>Type Of Broadcasting :</b> {{$user->twitter}}</p>
      <p><b>Audience Group :</b> {{$user->linked_in}}</p>
<br>
      <h4>شماره های تماس دفتر</h4>
      <br>
      <p><b>شماره تماس ۱.:</b> {{$user->o_phone1}}</p>
      <p><b>شماره تماس ۲.:</b> {{$user->o_phone2}}</p>
      <p><b>شماره تماس ۳.:</b> {{$user->o_phone3}}</p>
<br>
      <h4>ایمیل های دفتر</h4>
      <br>
      <p><b>ایمیل ۱.:</b> {{$user->o_email1}}</p>
      <p><b>ایمیل ۲.:</b> {{$user->o_email2}}</p>
      <p><b>ایمیل ۳.:</b> {{$user->o_email3}}</p>
<br>
      <h4>Office Website/Socail Medial Pages</h4>
      <br>
      <p><b>Website:</b> {{$user->o_website}}</p>
      <p><b>Facebook:</b> {{$user->o_facebook}}</p>
      <p><b>Twitter:</b> {{$user->o_twitter}}</p>

      <a class="btn btn-default" href="{{route('view_journalist_register')}}">Back</a>
</div>
</section>

@include('admin.include.footer')