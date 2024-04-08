<a href="{{route('warga')}}" id="penduduk" class="tw-group tw-flex tw-h-9 tw-gap-1 tw-content-center tw-items-center tw-px-3 tw-rounded-md {{ (Route::currentRouteName() == 'warga') ? ' tw-bg-b500 tw-outline tw-outline-2 tw-outline-b300 ' : 'tw-bg-n100 hover:tw-bg-n200' }}">
    <img class="tw-group tw-h-5 tw-bg-cover  " src="{{asset('assets/icons/actionable/people.svg')}}" alt="overview icon">
    <p class="tw-menu-text {{ (Route::currentRouteName() == 'warga') ? 'tw-text-n100' : 'tw-text-n1000' }}">Penduduk</p>
</a>