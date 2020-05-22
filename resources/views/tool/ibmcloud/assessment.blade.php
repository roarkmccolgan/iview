@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', Lang::get($tool->alias.'.title'))


@section('head')
@parent
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
@stop

@section('main')
<div id="app" class="h-screen flex flex-col">
	<div class="bg-blackblack">
	    <div class="container mx-auto px-4 flex items-center justify-between">
	    	<div class="text-white py-2">
    			<svg class="fill-current text-white w-32 h-12 sm:w-48 sm:h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 687.66 132.18"><path class="cls-1" d="M540.64 7.04v114.72"/><path class="cls-1" d="M591.81 247v114.67a1 1 0 0 0 2 0V247a1 1 0 0 0-2 0zM299.7 259.14c-.16-11.84-13.14-8.59-13.14-12.16 0-1.46.33-1.78 1.62-1.78 6 0 11.84.65 17.84.65 5 0 10.06-.65 15.08-.65 2.6 0 3.08.32 3.08 1.62 0 3.89-11.68.16-11.68 12.33v87.08c0 11 14.43 7.3 14.43 12.16 0 1.13-.49 1.62-3.24 1.62-3.73 0-10.7-.64-17.68-.64-9.89 0-13.3.64-15.57.64-2.92 0-3.4-.81-3.4-2.43 0-4.7 12.65.65 12.65-15.41zM348.13 262.54c0-16.54-13.3-11.35-13.3-15.73 0-1.13 1.3-1.62 2.27-1.62 5 0 9.73.65 14.6.65 10.7 0 21.25-.65 35.19-.65 28.7 0 56.92 21.73 56.92 51.73 0 37.3-17.68 63.08-62.6 63.08-8.27 0-16.54-.64-24.81-.64-1.46 0-17 .64-18.16.64-1.3 0-1.62-.64-1.62-1.62 0-3.73 11.51.33 11.51-15.08zm12.81 74c0 2.59-.49 10.37 1 11.84 5.35 5.35 17.68 7.3 25 7.3 23 0 44.92-12.33 44.92-49.79 0-36-24-56.43-54.82-56.59-15.4 0-16.06 2.59-16.06 10.22zM513.27 243.73c30.49 0 38.92 12.49 43.62 12.49 1.3 0 2.27-1.62 3.89-1.62 1.79 0 1.79 2.6 2.27 13.13.33 8.6 1.79 13.94-1 13.94-1.95 0-3.08-4.21-3.73-5.34-10-17.36-21.56-27.9-42.48-27.9-31.63 0-46.87 21.08-46.87 51.24 0 28.22 16.22 56.44 47.35 56.44 25.46 0 41.35-16.22 43.79-23.68a2.74 2.74 0 0 1 2.27-2.1 1.63 1.63 0 0 1 1.46 1.78l-3.73 16.22c-.16.64-11.68 12.81-48.17 12.81-33.24 0-57.08-22.87-57.08-56.44s24.2-60.97 58.41-60.97zM255.31 264.43H103.1a66.36 66.36 0 0 0-5.19 7.38H53.62a1.45 1.45 0 1 0 0 2.9h159.07a66 66 0 0 0-4.62-7.36h47.25a1.45 1.45 0 0 0 0-2.9zM255.31 283.37h-163a65.48 65.48 0 0 0-2.3 7.78H53.62a1.45 1.45 0 1 0 0 2.9h165.86a65.73 65.73 0 0 0-1.92-7.77h37.75a1.45 1.45 0 1 0 0-2.9zM255.31 301.06H88.56q-.18 2.44-.18 4.93 0 2.05.13 4.07H53.62a1.45 1.45 0 0 0 0 2.9h166.57a66.83 66.83 0 0 0 .37-7v-2h34.79a1.45 1.45 0 1 0 0-2.9zM255.31 319.18H89.7a65.56 65.56 0 0 0 2.8 9.82H53.62a1.45 1.45 0 1 0 0 2.9h161.66a65.61 65.61 0 0 0 3.3-9.84h36.73a1.45 1.45 0 1 0 0-2.9zM255.31 337.3H96.25a66.16 66.16 0 0 0 7.16 10.7H53.62a1.45 1.45 0 1 0 0 2.9H203a66.37 66.37 0 0 0 8-10.66h44.29a1.45 1.45 0 0 0 0-2.9zM255.31 355.4H110.6a66.08 66.08 0 0 0 84.27 2.88h60.45a1.45 1.45 0 1 0 0-2.9zM53.62 256.6h144.72a66.37 66.37 0 0 0-9-6.73h66a1.45 1.45 0 0 0 0-2.9h-71.19a66.11 66.11 0 0 0-70.08 6.76H53.62a1.45 1.45 0 1 0 0 2.9zM633.61 281.81h-9.81l-1.62 4.14h-3.3l7.95-20h3.75l7.95 20h-3.3zm-8.94-2.67h8.07l-4-10.59zM643.19 270.59v15.36h-3v-20h3.09l10.89 15v-15h3v20h-2.91zM673.55 281.81h-9.81l-1.62 4.14h-3.3l7.95-20h3.75l7.95 20h-3.3zm-8.94-2.67h8.07l-4-10.59zM680.14 265.94h3v17.37h9.09v2.64h-12.09zM697.1 277.58l-7.83-11.64h3.45l5.88 8.94 5.82-8.94h3.48l-7.8 11.64v8.37h-3zM709.15 283.49l10.74-14.91h-10.74v-2.64h14.61v2.46L713 283.31h11v2.64h-14.85zM726.39 265.94h13.44v2.64h-10.44v5.85h10.23v2.64h-10.23v6.24h10.44v2.64h-13.44zM625.84 294.58h-6.21v-2.64H635v2.64h-6.18v17.37h-3zM651.09 303H640v8.94h-3v-20h3v8.4h11.07v-8.4h3v20h-3zM658 291.94h13.4v2.64H661v5.85h10.23v2.64H661v6.24h10.4v2.64H658zM620.95 317.94h13.44v2.64h-10.44v5.85h10.23v2.64h-10.23v8.88h-3zM636.61 317.94h3V330c0 3.42 1.89 5.61 5.4 5.61s5.37-2.19 5.37-5.61v-12.06h3v12.15c0 5-2.79 8.22-8.4 8.22s-8.43-3.27-8.43-8.19zM661.68 320.58h-6.21v-2.64h15.39v2.64h-6.18v17.37h-3zM672.87 317.94h3V330c0 3.42 1.89 5.61 5.4 5.61s5.37-2.19 5.37-5.61v-12.06h3v12.15c0 5-2.79 8.22-8.4 8.22s-8.43-3.27-8.43-8.19zM700.27 330.24h-3.75v7.71h-3v-20h8.43c3.81 0 6.42 2.46 6.42 6.15a5.58 5.58 0 0 1-5 5.85l5.13 8H705zm1.29-9.66h-5v7h5a3.52 3.52 0 1 0 0-7zM711.33 317.94h13.44v2.64h-10.44v5.85h10.23v2.64h-10.23v6.24h10.44v2.64h-13.44z" transform="translate(-52.17 -239.91)"/></svg>
	    	</div>
    		<div class="text-right text-white py-4">
    			<img src="{{ asset('images/tools/16/ibmcloud_logo.svg') }}" class="w-16 sm:w-24" alt="">
	    	</div>
	    </div>
	</div>
	<transition name="fade">
		<router-view></router-view>
	</transition>
	<div class="bg-blackblack mt-6">
		<div class="container mx-auto mb-4 py-4 px-4 text-white">
			<div class="flex justify-start">
				<div class="mr-2 pr-2 border-black border-r text-sm"><a href="{{ url(session('locale').'/restart') }}" class="no-underline text-white opacity-75"><font-awesome-icon class="mr-1" :icon="icons.faUndo"></font-awesome-icon>@lang($tool->alias.'.restart')</a></div>
				<div class="mr-2 pr-2 border-black border-r text-sm"><a href="/disclaimer" target="_blank" class="no-underline text-white opacity-75">@lang('general.disclaimer')</a></div>
				<div class="mr-2 pr-2 border-black border-r text-sm"><a href="/privacy" target="_blank" class="no-underline text-white opacity-75">@lang('general.idcprivacy')</a></div>
				<div class="mr-2 pr-2 border-black border-r text-sm"><a href="/cookies" target="_blank" class="no-underline text-white opacity-75">@lang('general.cookiespolicylink')</a></div>
			</div>
		</div>		
	</div>
</div>
@stop
@section('pagescript')
<script src="//cdn.jsdelivr.net/npm/velocity-animate@1.5/velocity.min.js"></script>
@parent
@stop