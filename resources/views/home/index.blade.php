@extends('layouts.app')

@section('description', 'Wij lossen uw problemen en vraagstukken graag op; Oplossings- en resultaat gericht denken, korte persoonlijke lijnen en snelle service zijn onze kenmerken. Waarmee kunnen wij u van dienst zijn?')

@section('title', 'Home')

@section('content')

@include('partials/headers/home')

<section>
    <div class="container">
        <div class="row">
			<div class="col-lg-2 col-md-12">
				@include('partials/leftsidebar/hulp')
				<div class="partners">
					@include('partials/leftsidebar/partners')
				</div>
				<div class="mt-5">
					@include('partials.leftsidebar.data-protection')
				</div>
			</div>

			<div class="col-lg-7 col-sm-12">
				<h1>@lang('common.lcomp')</h1>
				<p>
					@lang('home.text-paragraph-1')
				</p>

				<b>
					@lang('home.text-header-1')
				</b>

				<p>
					<i>@lang('home.text-paragraph-2')</i>
				</p>

				<p>
					@lang('home.text-paragraph-3')
				</p>

				<b>
					@lang('home.text-header-2')
				</b>

				<p>@lang('home.text-paragraph-4')</p>
				<img class="w-100 mb-4" alt="Lcomp team" src="{{ asset('/images/LCOMPTeamNieuw1.jpg') }}">
			</div>
			<div class="col-lg-3 col-md-12">
				@include('partials/rightsidebar/services')
				@include('partials/rightsidebar/isl')
				@include('partials/rightsidebar/live-chat')
			</div>
        </div>
    </div>
</section>
@include('partials/footer')	
@endsection