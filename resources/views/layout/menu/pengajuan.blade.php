<a href="{{route('dataBaru')}}" id="pengajuan" class="tw-group tw-flex tw-h-9 tw-gap-1 tw-content-center tw-items-center tw-px-3 tw-rounded-md {{ (Route::currentRouteName() == 'dataBaru') || (Route::currentRouteName() == 'perubahanWarga') || (Route::currentRouteName() == 'perubahanKeluarga') ? ' tw-bg-b500 tw-outline tw-outline-2 tw-outline-b300 ' : 'tw-bg-n100 hover:tw-bg-n200' }}">
    <img class="tw-h-5 tw-bg-cover  " src="/assets/icons/actionable/pengajuan.svg" alt="pengajuan icon">
    <p class="tw-menu-text {{ (Route::currentRouteName() == 'dataBaru') || (Route::currentRouteName() == 'perubahanWarga') || (Route::currentRouteName() == 'perubahanKeluarga') ? 'tw-text-n100' : 'tw-text-n1000' }}">Pengajuan</p>
</a>