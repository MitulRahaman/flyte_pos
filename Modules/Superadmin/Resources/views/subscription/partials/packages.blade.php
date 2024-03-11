@php
	$count = 0;
@endphp
<div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
@foreach ($packages as $package)
	@if($package->is_private == 1 && !auth()->user()->can('superadmin'))
		@php
			continue;
		@endphp
	@endif

	@php
		$businesses_ids = json_decode($package->businesses);
	@endphp

	@if (Route::current()->getName() == 'subscription.index' && (is_array($businesses_ids) && in_array(auth()->user()->business_id, $businesses_ids) || is_null($package->businesses)))
		@php
			$count++;
		@endphp
		@include('superadmin::subscription.partials.package_card')
	@elseif((Route::current()->getName() == 'welcome' || Route::current()->getName() == 'pricing')  && is_null($package->businesses))
		@php
			$count++;
		@endphp
		@include('superadmin::subscription.partials.package_card')
	@endif
	
@endforeach
</div>