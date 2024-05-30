<div class="container">
<div class="basic-login">

    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
    @endif

        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">

        @csrf
   <input class="p-2 m-2" placeholder="Item Name" name="name">

   <input class="p-2 m-2" placeholder="Price" name="price">
        <textarea name="detail" id=""   rows="3" class="form-control"></textarea>





            <button type="submit"> Submit</button>
    </form>

</div>
</div>

@push('scripts')

@endpush
