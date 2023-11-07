<div class="row">

    <div class="col-12 col-md-4">
        <input type="text" class="form-control" placeholder="Cerca tra i post..." wire:model.live="search">
    </div>

    <div class="col-12 col-md-8">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-12 col-md-4 mb-3">
                <x-card :post="$post" />
            </div>
            @endforeach
        </div>

    </div>

</div>