<div>

    <form action="review"  method="POST" >
        <input type="hidden" name="item_id" value="{{$item->id}}">
        <div class=" d-flex justify-content-center mt-5">
            <div class=" text-center mb-5">
                <div class="rating"> <input type="radio" name="rating" value="5" id="5">
                    <label for="5">☆</label> <input type="radio" name="rating" value="4" id="4">
                    <label for="4">☆</label> <input type="radio" name="rating" value="3" id="3">
                    <label for="3">☆</label> <input type="radio" name="rating" value="2" id="2">
                    <label for="2">☆</label> <input type="radio" name="rating" value="1" id="1">
                    <label for="1">☆</label> </div>
                <div class="buttons  mt-0"> <button class="btn btn-info px-4 py-1 rating-submit ">Submit</button> </div>
            </div>
        </div>

        <div class="form-group">
                                                            <textarea name="review" id="review" cols="30"
                                                                      rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="submit">
        </div>
    </form>

</div>
