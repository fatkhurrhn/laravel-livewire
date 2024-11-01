<div class="col-lg-4 col-md-6 service-item">
<a class="text-black" wire:navigate href="{{ route('servicePage', $service->id) }}">

        <div class="block"> <span class="colored-box text-center h3 mb-4">{{ $x }}</span>
            <h3 class="mb-3 service-title">{{ $service->title }}</h3>
            <p class="mb-0 service-description">{{ $service->short_desc }}</p>
        </div>
    </a>
</div>