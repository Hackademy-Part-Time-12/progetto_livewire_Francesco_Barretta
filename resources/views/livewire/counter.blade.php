    <div class="container my-5">

        <div class="row text-center">
            <h2 class="text-center">{{$value}}</h2>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-danger" id="decrement" wire:click="decrement">-1</button>
                <button class="btn btn-success" id="increment" wire:click="increment">+1</button>
            </div>
        </div>

    </div>

