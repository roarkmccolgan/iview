@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', $pagetitle)


@section('head')
@parent
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
@stop

@section('main')
@if(App::environment('production'))
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-156016-34', 'auto');
	ga('set', 'page', '/thankyou');
	ga('send', 'pageview');
	var utm = '{{$utm}}';
	ga('send', 'event', "lead", "generated", utm);

</script>
@endif
<div id="app" class="h-screen flex flex-col">
	<div>
	    <div class="container mx-auto px-4 flex items-center justify-between">
    		<div class="text-left text-white py-2">
    			<svg class="fill-current text-white w-32 h-12 sm:w-48 sm:h-12" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 26"><defs></defs><title>nttdata_logo</title><g id="Symbols"><g id="Logo_NTT-white" data-name="Logo/NTT-white"><path d="M22.75,2.3V6.8h6.86V23.7h4.85V6.8h6.87V2.3Z"/><path d="M102.75,2.3H90.5V6.84H102.4c1.76,0,2.43.8,2.43,2.84v.76H95c-3.75,0-5.62,1.88-5.62,6.12v1c0,4.37,1.94,6.12,5.83,6.12h14.48V9.63C109.65,4.24,107.87,2.3,102.75,2.3ZM95.69,19.12c-.74,0-1.56-.37-1.56-2.2s.82-2.16,1.56-2.16h9.16v4.37Z"/><path d="M143.08,2.3H130.84V6.84h11.91c1.76,0,2.43.8,2.43,2.84v.75h-9.86c-3.75,0-5.62,1.88-5.62,6.12v1c0,4.37,1.94,6.12,5.83,6.12H150V9.63C150,4.24,148.22,2.3,143.08,2.3ZM136,19.12c-.74,0-1.56-.37-1.56-2.2s.82-2.16,1.56-2.16h9.16v4.37Z"/><path d="M42.88,2.3V6.8h6.86V23.7h4.85V6.8h6.87V2.3Z"/><path d="M110.63,2.3V6.8h6.86V23.7h4.85V6.8h6.87V2.3Z"/><path d="M87.46,16.2V9.8c0-5.6-2.17-7.5-7.06-7.5h-13V23.67H80.6C85.82,23.67,87.46,21.11,87.46,16.2Zm-5,.09c0,2.05-.69,2.84-2.44,2.84H72.24V6.86h7.83c1.76,0,2.44.8,2.44,2.84Z"/><path d="M15.87,18.6c-.1-.2-6.61-12.85-7.39-14.11A4.5,4.5,0,0,0,4.33,2.06c-2,0-4.33.88-4.33,5.64v16H4.79V10.36c0-1-.06-2.38-.07-2.65s0-.44.12-.52.28,0,.37.22S11.32,19.5,12.6,21.52A4.53,4.53,0,0,0,16.77,24c2,0,4.33-.88,4.33-5.64V2.3H16.32V15.64c0,1,.06,2.38.07,2.65s0,.44-.12.52S16,18.78,15.87,18.6Z"/></g></g></svg>
    			<span class="-mt-2 block text-sm text-white">Trusted Global Innovator</span>
	    	</div>
	    	<div class="text-white py-2">
    			<svg class="fill-current text-white w-32 h-12 sm:w-48 sm:h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 687.66 132.18"><path d="M540.64 7.04v114.72"/><path d="M591.81 247v114.67a1 1 0 0 0 2 0V247a1 1 0 0 0-2 0zM299.7 259.14c-.16-11.84-13.14-8.59-13.14-12.16 0-1.46.33-1.78 1.62-1.78 6 0 11.84.65 17.84.65 5 0 10.06-.65 15.08-.65 2.6 0 3.08.32 3.08 1.62 0 3.89-11.68.16-11.68 12.33v87.08c0 11 14.43 7.3 14.43 12.16 0 1.13-.49 1.62-3.24 1.62-3.73 0-10.7-.64-17.68-.64-9.89 0-13.3.64-15.57.64-2.92 0-3.4-.81-3.4-2.43 0-4.7 12.65.65 12.65-15.41zM348.13 262.54c0-16.54-13.3-11.35-13.3-15.73 0-1.13 1.3-1.62 2.27-1.62 5 0 9.73.65 14.6.65 10.7 0 21.25-.65 35.19-.65 28.7 0 56.92 21.73 56.92 51.73 0 37.3-17.68 63.08-62.6 63.08-8.27 0-16.54-.64-24.81-.64-1.46 0-17 .64-18.16.64-1.3 0-1.62-.64-1.62-1.62 0-3.73 11.51.33 11.51-15.08zm12.81 74c0 2.59-.49 10.37 1 11.84 5.35 5.35 17.68 7.3 25 7.3 23 0 44.92-12.33 44.92-49.79 0-36-24-56.43-54.82-56.59-15.4 0-16.06 2.59-16.06 10.22zM513.27 243.73c30.49 0 38.92 12.49 43.62 12.49 1.3 0 2.27-1.62 3.89-1.62 1.79 0 1.79 2.6 2.27 13.13.33 8.6 1.79 13.94-1 13.94-1.95 0-3.08-4.21-3.73-5.34-10-17.36-21.56-27.9-42.48-27.9-31.63 0-46.87 21.08-46.87 51.24 0 28.22 16.22 56.44 47.35 56.44 25.46 0 41.35-16.22 43.79-23.68a2.74 2.74 0 0 1 2.27-2.1 1.63 1.63 0 0 1 1.46 1.78l-3.73 16.22c-.16.64-11.68 12.81-48.17 12.81-33.24 0-57.08-22.87-57.08-56.44s24.2-60.97 58.41-60.97zM255.31 264.43H103.1a66.36 66.36 0 0 0-5.19 7.38H53.62a1.45 1.45 0 1 0 0 2.9h159.07a66 66 0 0 0-4.62-7.36h47.25a1.45 1.45 0 0 0 0-2.9zM255.31 283.37h-163a65.48 65.48 0 0 0-2.3 7.78H53.62a1.45 1.45 0 1 0 0 2.9h165.86a65.73 65.73 0 0 0-1.92-7.77h37.75a1.45 1.45 0 1 0 0-2.9zM255.31 301.06H88.56q-.18 2.44-.18 4.93 0 2.05.13 4.07H53.62a1.45 1.45 0 0 0 0 2.9h166.57a66.83 66.83 0 0 0 .37-7v-2h34.79a1.45 1.45 0 1 0 0-2.9zM255.31 319.18H89.7a65.56 65.56 0 0 0 2.8 9.82H53.62a1.45 1.45 0 1 0 0 2.9h161.66a65.61 65.61 0 0 0 3.3-9.84h36.73a1.45 1.45 0 1 0 0-2.9zM255.31 337.3H96.25a66.16 66.16 0 0 0 7.16 10.7H53.62a1.45 1.45 0 1 0 0 2.9H203a66.37 66.37 0 0 0 8-10.66h44.29a1.45 1.45 0 0 0 0-2.9zM255.31 355.4H110.6a66.08 66.08 0 0 0 84.27 2.88h60.45a1.45 1.45 0 1 0 0-2.9zM53.62 256.6h144.72a66.37 66.37 0 0 0-9-6.73h66a1.45 1.45 0 0 0 0-2.9h-71.19a66.11 66.11 0 0 0-70.08 6.76H53.62a1.45 1.45 0 1 0 0 2.9zM633.61 281.81h-9.81l-1.62 4.14h-3.3l7.95-20h3.75l7.95 20h-3.3zm-8.94-2.67h8.07l-4-10.59zM643.19 270.59v15.36h-3v-20h3.09l10.89 15v-15h3v20h-2.91zM673.55 281.81h-9.81l-1.62 4.14h-3.3l7.95-20h3.75l7.95 20h-3.3zm-8.94-2.67h8.07l-4-10.59zM680.14 265.94h3v17.37h9.09v2.64h-12.09zM697.1 277.58l-7.83-11.64h3.45l5.88 8.94 5.82-8.94h3.48l-7.8 11.64v8.37h-3zM709.15 283.49l10.74-14.91h-10.74v-2.64h14.61v2.46L713 283.31h11v2.64h-14.85zM726.39 265.94h13.44v2.64h-10.44v5.85h10.23v2.64h-10.23v6.24h10.44v2.64h-13.44zM625.84 294.58h-6.21v-2.64H635v2.64h-6.18v17.37h-3zM651.09 303H640v8.94h-3v-20h3v8.4h11.07v-8.4h3v20h-3zM658 291.94h13.4v2.64H661v5.85h10.23v2.64H661v6.24h10.4v2.64H658zM620.95 317.94h13.44v2.64h-10.44v5.85h10.23v2.64h-10.23v8.88h-3zM636.61 317.94h3V330c0 3.42 1.89 5.61 5.4 5.61s5.37-2.19 5.37-5.61v-12.06h3v12.15c0 5-2.79 8.22-8.4 8.22s-8.43-3.27-8.43-8.19zM661.68 320.58h-6.21v-2.64h15.39v2.64h-6.18v17.37h-3zM672.87 317.94h3V330c0 3.42 1.89 5.61 5.4 5.61s5.37-2.19 5.37-5.61v-12.06h3v12.15c0 5-2.79 8.22-8.4 8.22s-8.43-3.27-8.43-8.19zM700.27 330.24h-3.75v7.71h-3v-20h8.43c3.81 0 6.42 2.46 6.42 6.15a5.58 5.58 0 0 1-5 5.85l5.13 8H705zm1.29-9.66h-5v7h5a3.52 3.52 0 1 0 0-7zM711.33 317.94h13.44v2.64h-10.44v5.85h10.23v2.64h-10.23v6.24h10.44v2.64h-13.44z" transform="translate(-52.17 -239.91)"/></svg>
	    	</div>
	    </div>
	</div>
	<div class="container mx-auto mt-6 p-8">
		<div class="flex flex-wrap justify-center">
			<div class="w-full sm:w-1/2 relative">
				<img class="max-w-full" src="/images/tools/10/891021854.jpg" alt="">
			</div>
			<div class="w-full sm:w-1/2">
				<div class="sm:ml-8">
					<div>
						<h2 class="font-light mb-4 text-white leading-tight">{{ $heading }}</h2>
						<p class="mb-2">
							{!! $body !!}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mx-auto border-white border-t mt-6 mb-4 py-4 px-4 text-white">
		<div class="flex justify-start">
			<div class="mr-2 pr-2 border-black border-r text-sm"><a href="/disclaimer" target="_blank" class="no-underline text-white opacity-75">@lang('general.disclaimer')</a></div>
			<div class="mr-2 pr-2 border-black border-r text-sm"><a href="/privacy" target="_blank" class="no-underline text-white opacity-75">@lang('general.idcprivacy')</a></div>
			<div class="mr-2 pr-2 border-black border-r text-sm"><a href="/cookies" target="_blank" class="no-underline text-white opacity-75">@lang('general.cookiespolicylink')</a></div>
		</div>
	</div>
</div>
@stop
@section('pagescript')
<script src="//cdn.jsdelivr.net/npm/velocity-animate@1.5/velocity.min.js"></script>
<script language='JavaScript1.1' async src='//pixel.mathtag.com/event/js?mt_id=1312712&mt_adid=171162&mt_exem=&mt_excl=&v1=&v2=&v3=&s1=&s2=&s3='></script>
@parent
@stop