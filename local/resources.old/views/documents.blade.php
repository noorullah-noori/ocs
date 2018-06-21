@include('include.header')
<?php
global $lang,$dir,$indir,$rtl,$ltr,$title,$date,$short_desc,$description,$jdate;
$pdf = 'pdf_'.$lang;
?>
  {{-- main content starts --}}
  <style>
  .ui.fluid.card {
    border:1px solid #ddd;
    margin-bottom:10px;
  }
  .ui.items > .item {
    border-bottom: 1px dashed #ddd;
    padding-bottom: 10px;
    direction:{{$rtl}} !important;
  }
  .ui.items {
    direction:rtl;
    float: right;
    text-align: right;
  }
  .ui.items>.item>.image {
    padding-top:0 !important;
  }
  </style>
    {{-- left sidebar president word and social boxes start --}}

    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        <div class="sixteen wide tablet mobile eleven wide computer column">
          <div class="ui fluid card" style="">
            <div class="content">
              <h2 class="ui header title_font border">{{trans('menu.reports_and_documents')}}</h2>
              <div class="ui items" style="width:100%;">
                @foreach($documents as $document)
                  @php
                  $extension = \File::extension($document->$pdf);
                  $icon = '';
                  if($extension=='xls' || $extension=='xlsx'){
                      $icon = 'excel.png';
                  }
                  else if($extension=='doc'){
                   $icon = 'doc.png'; 
                  }
                  else{
                    $icon = 'pdf.png';
                  }
                  if(sizeof($document->$title)==0)
                    continue;
                  @endphp
                <div class="ui item {{($document==$documents->last())?'no_border':''}}">
                  <div class="ui tiny image icon" style="width: 12%;padding:0;">
                    <a target="_blank" href="{{asset('uploads/documents_'.$lang.'/'.$document->$pdf)}}">
                    <img src="{{asset('assets/img/'.$icon)}}">
                    </a>
                  </div>
                  <div class="content">
                    <a href="{{url('uploads/documents_'.$lang.'/'.$document->$pdf)}}" target="_blank" class="ui small header title_font">{{$document->$title}}</a>
                    <div class="meta">
                      <span dir="">{{$jdate->detailedDate($document->$date,$lang)}}</span>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
             {{-- Pagination start --}}
                    <div class="ui centered grid">
                      {{$documents->links()}}
                    </div>
               {{-- Pagination End --}}
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
