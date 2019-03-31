@php
// global $dir,$indir,$rtl,$ltr,$title,$date,$short_desc,$description,$jdate;

$lang = Config::get('app.locale');
$news 				= App\Search::take('5')->whereNotNull('title_'.$lang)->where('type','!=','word')->orderBy('date_'.$lang,'desc')->get();
// // $word 				= App\Search::take('4')->whereNotNull('title_'.$lang)->where('type','!=','article')->where('type','!=','word')->orderBy('date_'.$lang,'desc')->get();
// $articles 		= DB::table('media')->where('type','article')->whereNotNull('title_'.$lang)->orderBy('date_'.$lang,'desc')->take(4)->get();
// $videos 			= App\Video::take('2')->whereNotNull('title_'.$lang)->orderBy('date_'.$lang,'desc')->get();
// $documents		= App\Document::take('4')->whereNotNull('title_'.$lang)->orderBy('date_'.$lang,'desc')->get();
// $lattest_news = DB::table('president')->where('type','word')->orderBy('id','desc')->first();
// $documents 		= App\Document::take('4')->whereNotNull('title_'.$lang)->orderBy('date_'.$lang,'desc')->get();
$word 				= \DB::table('president')->where('type','word')->orderBy('id','desc')->first();
@endphp
@extends('layouts.master')
@section('title',trans('menu.photo_albums'))

@section('content')
	<div class="ui container error-details ">
		<h1>404</h1>
		<p class="error-header">صفحه مورد نظر وجود ندارد!</p>
		<p class="error-sub-header">برای جستجو روی دکمه زیر کلیک کنید:</p>
		<a href="{{url($lang.'/advance_search')}}" class="error-search-button">
			جستجو
			<i class="icon search" style="position:relative;top:1px;left:0;"></i>
		</a>
	</div>
@endsection
@push('custom-css')
  <style>
		.error-details {
			padding: 5em;
			
		}
		.error-details * {
			text-align: center;
		}
		.error-header, .error-sub-header, .error-search-button {
			font-family: aop_font;
			direction: rtl;
		}
		h1 {
			font-size: 7em;
		}
		.error-header {
			color: #6c6c6e;
			font-size: 3em;
		}
		.error-sub-header {
			color: #6c6c6e;
			font-size: 1.5em;
		}
		.error-search-button {
			background: #5f5d99;
			font-weight: bold;
			border: none;
			padding: 8px 10px;
			color: white;
			text-align: center;
			display: block;
			margin:auto;
			width: 100px;
		}
		.error-search-button:hover {
			color: #ccc !important;

		}

  .image img {
    border-radius: 0px !important;
    border: 3px solid #ddd !important;
  }
  </style>

@endpush
