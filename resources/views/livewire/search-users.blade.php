<div class="row">

    <div class="col-12 col-md-4">
        <input type="text" class="form-control" placeholder="Cerca tra i vari utenti..." wire:model.live="searchUser">
    </div>

    <div class="col-12 col-md-8">
        <div class="row">
            @foreach ($users as $user)
            <div class="col-12 col-md-4 mb-3">
                <x-card_user :user="$user" />
            </div>
            @endforeach
        </div>

    </div>

</div>