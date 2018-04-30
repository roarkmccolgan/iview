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
<div class="h-screen flex flex-col">
	<div class="bg-ntt-blue">
	    <div class="container mx-auto px-4">
    		<div class="text-right py-4">
    			<svg class="fill-current text-white h-6 sm:h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 687.66 132.18"><path class="cls-1" d="M540.64 7.04v114.72"/><path class="cls-1" d="M591.81 247v114.67a1 1 0 0 0 2 0V247a1 1 0 0 0-2 0zM299.7 259.14c-.16-11.84-13.14-8.59-13.14-12.16 0-1.46.33-1.78 1.62-1.78 6 0 11.84.65 17.84.65 5 0 10.06-.65 15.08-.65 2.6 0 3.08.32 3.08 1.62 0 3.89-11.68.16-11.68 12.33v87.08c0 11 14.43 7.3 14.43 12.16 0 1.13-.49 1.62-3.24 1.62-3.73 0-10.7-.64-17.68-.64-9.89 0-13.3.64-15.57.64-2.92 0-3.4-.81-3.4-2.43 0-4.7 12.65.65 12.65-15.41zM348.13 262.54c0-16.54-13.3-11.35-13.3-15.73 0-1.13 1.3-1.62 2.27-1.62 5 0 9.73.65 14.6.65 10.7 0 21.25-.65 35.19-.65 28.7 0 56.92 21.73 56.92 51.73 0 37.3-17.68 63.08-62.6 63.08-8.27 0-16.54-.64-24.81-.64-1.46 0-17 .64-18.16.64-1.3 0-1.62-.64-1.62-1.62 0-3.73 11.51.33 11.51-15.08zm12.81 74c0 2.59-.49 10.37 1 11.84 5.35 5.35 17.68 7.3 25 7.3 23 0 44.92-12.33 44.92-49.79 0-36-24-56.43-54.82-56.59-15.4 0-16.06 2.59-16.06 10.22zM513.27 243.73c30.49 0 38.92 12.49 43.62 12.49 1.3 0 2.27-1.62 3.89-1.62 1.79 0 1.79 2.6 2.27 13.13.33 8.6 1.79 13.94-1 13.94-1.95 0-3.08-4.21-3.73-5.34-10-17.36-21.56-27.9-42.48-27.9-31.63 0-46.87 21.08-46.87 51.24 0 28.22 16.22 56.44 47.35 56.44 25.46 0 41.35-16.22 43.79-23.68a2.74 2.74 0 0 1 2.27-2.1 1.63 1.63 0 0 1 1.46 1.78l-3.73 16.22c-.16.64-11.68 12.81-48.17 12.81-33.24 0-57.08-22.87-57.08-56.44s24.2-60.97 58.41-60.97zM255.31 264.43H103.1a66.36 66.36 0 0 0-5.19 7.38H53.62a1.45 1.45 0 1 0 0 2.9h159.07a66 66 0 0 0-4.62-7.36h47.25a1.45 1.45 0 0 0 0-2.9zM255.31 283.37h-163a65.48 65.48 0 0 0-2.3 7.78H53.62a1.45 1.45 0 1 0 0 2.9h165.86a65.73 65.73 0 0 0-1.92-7.77h37.75a1.45 1.45 0 1 0 0-2.9zM255.31 301.06H88.56q-.18 2.44-.18 4.93 0 2.05.13 4.07H53.62a1.45 1.45 0 0 0 0 2.9h166.57a66.83 66.83 0 0 0 .37-7v-2h34.79a1.45 1.45 0 1 0 0-2.9zM255.31 319.18H89.7a65.56 65.56 0 0 0 2.8 9.82H53.62a1.45 1.45 0 1 0 0 2.9h161.66a65.61 65.61 0 0 0 3.3-9.84h36.73a1.45 1.45 0 1 0 0-2.9zM255.31 337.3H96.25a66.16 66.16 0 0 0 7.16 10.7H53.62a1.45 1.45 0 1 0 0 2.9H203a66.37 66.37 0 0 0 8-10.66h44.29a1.45 1.45 0 0 0 0-2.9zM255.31 355.4H110.6a66.08 66.08 0 0 0 84.27 2.88h60.45a1.45 1.45 0 1 0 0-2.9zM53.62 256.6h144.72a66.37 66.37 0 0 0-9-6.73h66a1.45 1.45 0 0 0 0-2.9h-71.19a66.11 66.11 0 0 0-70.08 6.76H53.62a1.45 1.45 0 1 0 0 2.9zM633.61 281.81h-9.81l-1.62 4.14h-3.3l7.95-20h3.75l7.95 20h-3.3zm-8.94-2.67h8.07l-4-10.59zM643.19 270.59v15.36h-3v-20h3.09l10.89 15v-15h3v20h-2.91zM673.55 281.81h-9.81l-1.62 4.14h-3.3l7.95-20h3.75l7.95 20h-3.3zm-8.94-2.67h8.07l-4-10.59zM680.14 265.94h3v17.37h9.09v2.64h-12.09zM697.1 277.58l-7.83-11.64h3.45l5.88 8.94 5.82-8.94h3.48l-7.8 11.64v8.37h-3zM709.15 283.49l10.74-14.91h-10.74v-2.64h14.61v2.46L713 283.31h11v2.64h-14.85zM726.39 265.94h13.44v2.64h-10.44v5.85h10.23v2.64h-10.23v6.24h10.44v2.64h-13.44zM625.84 294.58h-6.21v-2.64H635v2.64h-6.18v17.37h-3zM651.09 303H640v8.94h-3v-20h3v8.4h11.07v-8.4h3v20h-3zM658 291.94h13.4v2.64H661v5.85h10.23v2.64H661v6.24h10.4v2.64H658zM620.95 317.94h13.44v2.64h-10.44v5.85h10.23v2.64h-10.23v8.88h-3zM636.61 317.94h3V330c0 3.42 1.89 5.61 5.4 5.61s5.37-2.19 5.37-5.61v-12.06h3v12.15c0 5-2.79 8.22-8.4 8.22s-8.43-3.27-8.43-8.19zM661.68 320.58h-6.21v-2.64h15.39v2.64h-6.18v17.37h-3zM672.87 317.94h3V330c0 3.42 1.89 5.61 5.4 5.61s5.37-2.19 5.37-5.61v-12.06h3v12.15c0 5-2.79 8.22-8.4 8.22s-8.43-3.27-8.43-8.19zM700.27 330.24h-3.75v7.71h-3v-20h8.43c3.81 0 6.42 2.46 6.42 6.15a5.58 5.58 0 0 1-5 5.85l5.13 8H705zm1.29-9.66h-5v7h5a3.52 3.52 0 1 0 0-7zM711.33 317.94h13.44v2.64h-10.44v5.85h10.23v2.64h-10.23v6.24h10.44v2.64h-13.44z" transform="translate(-52.17 -239.91)"/></svg>
    		</div>
	    </div>
	</div>
	<div class="flex-grow">
		<div class="container mx-auto py-4 px-4 text-grey-darker">
			<div class="my-4">
				<svg class="fill-current text-ntt-blue h-8 sm:h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1709.19 415.17"><defs><clipPath id="clip-path" transform="translate(-102.93 -89.91)"><path class="cls-1" d="M102.93 301.51c0 96.92 220.17 178.6 520.31 203.57-203.74-31.08-419.8-99.4-419.8-175.83 0-116.61 322.44-211.17 716.36-211.17 271.46 0 535.34 64.38 639.43 130.29C1459.1 163.8 1151.05 89.91 819 89.91c-393.78 0-716.08 94.63-716.08 211.6"/></clipPath><linearGradient id="linear-gradient" x1="-2.89" y1="601.28" x2="2.14" y2="601.28" gradientTransform="matrix(0 84.56 84.56 0 -50114.41 239.01)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffe4b8"/><stop offset=".5" stop-color="#ffcb05"/><stop offset="1" stop-color="#ad680e"/></linearGradient><clipPath id="clip-path-2" transform="translate(-102.93 -89.91)"><path class="cls-1" d="M203.44 329.25c0 76.43 216.06 144.77 419.81 175.83C474.85 467 320.81 411.69 320.81 340c0-106.56 285.38-193.12 633.59-193.12 239.91 0 489.61 42.24 604.83 101.49-104.09-65.92-368-130.29-639.43-130.29-393.92 0-716.36 94.56-716.36 211.17"/></clipPath><linearGradient id="linear-gradient-2" x1=".91" y1="587.5" x2="5.93" y2="587.5" gradientTransform="matrix(0 -76.14 -76.14 0 45510.53 483.53)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffe4b8"/><stop offset=".25" stop-color="#ffcb05"/><stop offset="1" stop-color="#ad680e"/></linearGradient></defs><g clip-path="url(#clip-path)"><path fill="url(#linear-gradient)" d="M0 0h1456.29v415.17H0z"/></g><g clip-path="url(#clip-path-2)"><path fill="url(#linear-gradient-2)" d="M100.5 28.17h1355.79v387H100.5z"/></g><path class="cls-6" d="M299.6 178.41h67.2l4.41 82.5h.3l17.33-82.5h38.54l-24.49 117.07h-66.1l-5.03-84.79h-.37l-17.75 84.79H275.1l24.5-117.07zM555.63 212.98h-38.7l-17.23 82.5h-44.96l17.3-82.5h-38.7l7.24-34.57h122.28l-7.23 34.57zM689.76 212.98h-38.64l-17.3 82.5h-44.94l17.29-82.5h-38.61l7.19-34.57h122.27l-7.26 34.57z"/><path class="cls-6" d="M956.63 342.73c0 25.6-17 44.35-41.65 44.35-19.85 0-31.76-12.9-31.76-33.22 0-24.34 17.92-42.9 41.37-42.9 18.93 0 32 11.64 32 31.76m-19 .13c0-9.42-3.19-17.37-13.89-17.37-14.33 0-21.56 16.49-21.56 29.77 0 9.54 3.78 17.09 14.28 17.09 14.11 0 21.17-16.92 21.17-29.5M970.64 320.76c.55-2.92 1.15-5.84 1.53-8.18h16.94l-1.66 9.64h.3a25.51 25.51 0 0 1 21.42-11.22c8.39 0 16.9 5.11 17.8 13.65h.34c4.54-9.27 14.8-13.65 24.5-13.65 10.39 0 19.39 8.95 19.39 19.89 0 6.49-1.63 13.66-3.18 19.72l-7.31 34.72h-18.1l7.25-35.44c1-4.35 2.33-11.1 2.33-15.52a8.44 8.44 0 0 0-8.49-8.83c-12.62 0-15.71 15.29-18.05 25.23l-7.25 34.57h-18.11l7.3-35.44c.89-4.35 2.31-11.1 2.31-15.52a8.45 8.45 0 0 0-8.5-8.83c-12.43 0-15.77 15.45-18.09 25.23l-7.21 34.57H958zM1085.88 320.76c.5-2.92 1-5.84 1.46-8.18h17l-1.67 9.64h.35a25.28 25.28 0 0 1 21.36-11.22c8.23 0 16.8 5.11 17.72 13.65h.31c4.63-9.27 14.78-13.65 24.54-13.65 10.43 0 19.43 8.95 19.43 19.89 0 6.49-1.66 13.66-3.12 19.72l-7.4 34.72h-18.09l7.28-35.44c.93-4.35 2.28-11.1 2.28-15.52a8.41 8.41 0 0 0-8.52-8.83c-12.61 0-15.7 15.29-18 25.23l-7.22 34.57h-18.12l7.37-35.44c.87-4.35 2.26-11.1 2.26-15.52a8.4 8.4 0 0 0-8.54-8.83c-12.34 0-15.69 15.45-18 25.23l-7.22 34.57h-18.18zM1253.88 374.77c-.84 4.45-1.47 8.33-1.75 10.52h-17.81l1.26-7h-.27c-5.07 4.84-11.94 8.82-19.81 8.82-13.66 0-22.8-9-22.8-23.4 0-5.55 1.41-11.23 2.34-15.77l7.32-35.34h18.16l-6.77 34.32c-.9 5-2 9.82-2 15.25 0 6.09 4.1 10.21 9.88 10.21 12.64 0 17.2-12.42 19.54-23.24l7.41-36.55h18.24zM1278.57 322.93c.76-4.23 1.47-8 1.76-10.36h17.75l-1.19 7.16h.26c5-4.81 11.94-8.77 19.76-8.77 13.68 0 22.8 8.94 22.8 23.2 0 5.41-1.36 11.33-2.33 15.84l-7.34 35.29h-18.14l6.78-34.24c1-5 2.07-10 2.07-15.32 0-6.05-4.09-10.23-9.91-10.23-12.61 0-17.2 12.35-19.52 23.2l-7.44 36.6h-18.21zM1360 312.57h18.17l-14.88 72.71h-18.19zm6.7-31.26h18.15l-3.8 18h-18.18zM1437.65 329.19a23.66 23.66 0 0 0-13.27-3.7c-14.51 0-22.66 14.08-22.66 27.86 0 9.45 3 19 15.43 19a33.91 33.91 0 0 0 14.83-3.69l-2 14.93c-5.59 2.9-11.54 3.48-17.52 3.48-18 0-29.72-12.71-29.72-31.4 0-25.49 16.1-44.72 41.26-44.72a60.46 60.46 0 0 1 18.16 2.79zM1485.22 374.05h-.28c-6.29 8.29-12.45 13-22.48 13-12.63 0-21.55-7.46-21.55-20.82 0-24 25.76-26 42.79-26h6.41a23.37 23.37 0 0 0 .52-6.14c0-7.39-7.59-9.55-13.92-9.55a50.09 50.09 0 0 0-22.89 5.81l2.54-15.07a66.58 66.58 0 0 1 23.71-4.38c14 0 27.14 5.4 27.14 22.35 0 9.69-6.89 38.38-8.54 52h-15.31zm-17.77-.8c13.55 0 17.77-9.79 20.61-21.52h-6.33c-8.83 0-23.49 1.55-23.49 13.83 0 5.12 4.66 7.69 9.22 7.69M1518.07 312.57h13.12l3.11-14.87 19.57-6.8-4.49 21.67h16.26l-2.8 13.8h-16.3l-6.65 31.75a31 31 0 0 0-.78 7.1c0 4.37 2.85 7.12 6.91 7.12a22.54 22.54 0 0 0 8.75-1.67l-3.07 14.61c-3.14.75-6.64 1.79-9.74 1.79-12.43 0-21.07-5.11-21.07-19.08a80.76 80.76 0 0 1 2.29-17l5.17-24.67h-13.16zM1580.27 312.57h18.16l-14.9 72.71h-18.17zm6.64-31.26h18.18l-3.78 18h-18.22zM1674.94 342.73c0 25.6-17 44.35-41.59 44.35-19.85 0-31.76-12.9-31.76-33.22 0-24.34 17.93-42.9 41.36-42.9 18.83 0 32 11.64 32 31.76m-19.07.13c0-9.42-3-17.37-13.73-17.37-14.38 0-21.58 16.49-21.58 29.77 0 9.54 3.78 17.09 14.25 17.09 14.12 0 21.07-16.92 21.07-29.5M1690.44 322.93c.81-4.23 1.51-8 1.77-10.36H1710l-1.25 7.16h.32c5-4.81 11.93-8.77 19.82-8.77 13.66 0 22.76 8.94 22.76 23.2 0 5.41-1.33 11.33-2.26 15.84l-7.42 35.29h-18.17l6.85-34.24c1-5 2-10 2-15.32 0-6.05-4.08-10.23-9.91-10.23-12.66 0-17.23 12.35-19.57 23.2l-7.44 36.6h-18.19zM1808.13 328.05c-4.75-1.86-9.74-3.43-14.91-3.43-5.41 0-12.17 1.58-12.17 7.43 0 9.1 23.56 12.46 23.56 30.37 0 18.93-15.82 24.66-31.44 24.66a48.3 48.3 0 0 1-21.32-4.44l3.93-15.09c5.13 3 10.32 5.71 17.39 5.71 6.08 0 12.47-2.12 12.47-8.07 0-11.83-23.6-12.88-23.6-31.15 0-17 15.81-23.06 30.22-23.06a76.12 76.12 0 0 1 19.88 3zM883.41 306.35c-4.25-3-11.38-5.7-21.55-5.7-9.06 0-28.72 5.84-35.44 29.46-8.43 29.76 8.45 41.38 25.16 41.38a36.88 36.88 0 0 0 20.06-6.14l-3.35 18.94a77.12 77.12 0 0 1-21.46 2.78c-28.66 0-48.59-22.08-40.17-57 7.6-31.41 30.84-45 54.16-45 9.53 0 19.5 1.27 27.68 4.73z" transform="translate(-102.93 -89.91)"/></svg>
			</div>
			<h1 class="font-light leading-tight">{{ $title }}</h1>
			<h3 class="font-light leading-tight">{{ $sub_title }}</h3>
		</div>
		<div class="container mx-auto bg-white border-t border-b mt-6 p-8 sm:border sm:rounded shadow text-grey-darker">
			<div class="flex flex-wrap justify-center">
				<div class="w-full sm:w-1/2 relative">
					<img class="max-w-full" src="/images/tools/8/nttsdwan.jpg" alt="">
				</div>
				<div class="w-full sm:w-1/2">
					<div class="sm:ml-8">
						<div>
							<h2 class="font-light mb-4 text-ntt-blue leading-tight">{{ $heading }}</h2>
							<p class="mb-2">
								{!! $body !!}
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mx-auto bg-white border-t border-b mt-6 mb-4 py-4 px-4 sm:border sm:rounded text-grey-darker">
		<div class="flex justify-start">
			<div class="mr-2 pr-2 border-r text-sm"><a href="/disclaimer" target="_blank" class="no-underline text-ntt-blue opacity-75">@lang('general.disclaimer')</a></div>
			<div class="mr-2 pr-2 border-r text-sm"><a href="/privacy" target="_blank" class="no-underline text-ntt-blue opacity-75">@lang('general.idcprivacy')</a></div>
			<div class="mr-2 pr-2 border-r text-sm"><a href="/cookies" target="_blank" class="no-underline text-ntt-blue opacity-75">@lang('general.cookiespolicylink')</a></div>
		</div>
	</div>
</div>
@stop
@section('pagescript')
<script src="//cdn.jsdelivr.net/npm/velocity-animate@1.5/velocity.min.js"></script>
<script language='JavaScript1.1' async src='//pixel.mathtag.com/event/js?mt_id=1312712&mt_adid=171162&mt_exem=&mt_excl=&v1=&v2=&v3=&s1=&s2=&s3='></script>
@parent
@stop