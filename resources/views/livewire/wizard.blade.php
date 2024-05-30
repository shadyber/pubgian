<div>

    @if(!empty($successMessage))
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif
<div>
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                    <p>Step 1</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                    <p>Step 2</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">3</a>
                    <p>Step 3</p>
                </div>
            </div>
        </div>

        <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
            <div class="col-md-12 col-xs-12 m-2 p-1">
                <div class="col-lg-12 col-md-12">
                    <h4>Basic Informations</h4>
                    <div class="form-group">
                        @error('name') <span class="error red-color">{{ $message }}</span> @enderror
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"  wire:model="name" />

                    </div>

                    <div class="form-group">
                        @error('price') <span class="error red-color">{{ $message }}</span> @enderror
                        <x-label for="price" value="{{ __('Price') }}" />
                        <x-input id="price" type="text" name="price" :value="old('price')" required autofocus autocomplete="price"  wire:model="price" />

                    </div>


                    <div class="form-group">
                        @error('detail') <span class="error red-color">{{ $message }}</span> @enderror
                        <x-label for="detail" value="{{ __('Detail') }}" />
                        <textarea id="detail" type="text" rows="3"   required autofocus autocomplete="detail"  wire:model="detail" >
                            detil
                        </textarea>

                    </div>



                    <button class="btn btn-primary nextBtn btn-lg pull-right " wire:click="firstStepSubmit" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 2</h3>

               step 2
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>
                    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
                </div>
            </div>
        </div>
        <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 3</h3>

                 form 3

                    <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
                </div>
            </div>
        </div>
    </div>

    <style>

        .stepwizard-step p {
            margin-top: 10px;
        }
        .stepwizard-row {
            display: table-row;
        }
        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }
        .stepwizard-step button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }
        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-order: 0;
        }
        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }
        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }
        .displayNone{
            display: none;
        }

    </style>
        <script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
        <script>
            const editor = CKEDITOR.replace('detail');
            editor.on('change', function(event){
                console.log(event.editor.getData())
            @this.set('detail', event.editor.getData());
            })
        </script>

</div>
