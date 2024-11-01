<div class="rounded shadow py-5 px-4">
    <div class="icon"> <i class="fas fa-user"></i>
    </div>
    <h3 class="mb-3">{{ $service->title }}</h3>
    <p class="mb-4">{{ $service->short_desc }}</p> <a wire:navigate class="btn btn-sm btn-outline-primary" href="{{ route('servicePage', $service->id) }}">View Details <i class="las la-arrow-right ms-1"></i></a>

    
</div>