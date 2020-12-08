<div>


    <div class="stepwizard mt-4">
        <div class="stepwizard-row setup-panel">
            <div class="multi-wizard-step">
                <a href="#step-1" type="button"
                class="btn {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                <p>Step 1</p>
            </div>

            <div class="multi-wizard-step">
                <a href="#step-2" type="button" class="btn {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                <p>Step 2</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-3" type="button" class="btn {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}">3</a>
                <p>Step 3</p>
            </div>
        </div>

    </div>

{{--    Feedback Message--}}
    <div class="row">
        <div class="col-md-6 mx-auto">
            @if (!empty($successMsg))
                <div class="alert alert-success">
                    <strong>{{ $successMsg }}</strong>
                </div>

            @endif
        </div>
    </div>
{{--    {{ dd ($status)}}--}}

    <div class="row setup-content {{ $currentStep != 1 ? 'display-none' : ''}}" id="step-1" >
        <div class="col-md-8 mx-auto">
            <h3>Step 1</h3>

            <div class="form-group">
                <label for="title">Team Name:</label>
                <input type="text" wire:model="name" class="form-control" id="taskTitle">
                @error('name') <span class="error">{{$message}}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Team Price</label>
                <input type="text" wire:model="price" class="form-control" id="teamPrice">
                @error('price') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="detail">Detail</label>
{{--                <input type="text" wire:model="detail" class="form-control" id="teamPrice">--}}
                <textarea class="form-control" wire:model="details" id="taskDetail" cols="30" rows="10">{{ $detail ?? '' }}</textarea>
                @error('detail') <span class="error">{{ $message }}</span> @enderror
            </div>

            <button type="button" class="btn btn-primary nextBtn btn-lg mt-2" wire:click="firstStepSubmit">
                Next
            </button>
        </div>
    </div>

    <div class="row setup-content {{ $currentStep != 2 ? 'display-none' : ''}}" id="step-2" >
        <div class="col-md-8 mx-auto">
            <h3>Step 2</h3>

            <div class="form-group">
                <label for="title">Team Status</label>
                <label class="radio-inline"><input type="radio" wire:model="status" value="1"
                    {{{ $status == '1' ? "checked" : "" }}}> Active</label>
                <label class="radio-inline"><input type="radio" wire:model="status" value="0"
                        {{{ $status == '0' ? "checked" : "" }}}> DeActive</label>
                @error('status') <span class="error">{{$message}}</span> @enderror
            </div>


            <button type="button" class="btn btn-primary nextBtn btn-lg mt-2" wire:click="secondStepSubmit">
                Next
            </button>

            <button class="btn btn-danger btn-lg" type="button" wire:click="back(1)">
                Back
            </button>
        </div>
    </div>

        <div class="row setup-content {{ $currentStep != 3 ? 'display-none' : ''}}" id="step-2" >
            <div class="col-md-8 mx-auto">
                <h3>Step 3</h3>

                <table class="table">
                    <tr>
                        <td>Team Name: </td>
                        <td><strong>{{$name}}</strong></td>
                    </tr>
                    <tr>
                        <td>Team Price: </td>
                        <td><strong>{{$price}}</strong></td>
                    </tr>
                    <tr>
                        <td>Team status: </td>
                        <td><strong>{{$status ? 'Active' : 'DeActive'}}</strong></td>
                    </tr>
                    <tr>
                        <td>Team detail: </td>
                        <td><strong>{{$details}}</strong></td>
                    </tr>
                </table>


                <button type="button" class="btn btn-success nextBtn btn-lg mt-2" wire:click="submitForm">
                    Finish
                </button>

                <button class="btn btn-danger btn-lg" type="button" wire:click="back(2)">
                    Back
                </button>
            </div>
        </div>


</div>
