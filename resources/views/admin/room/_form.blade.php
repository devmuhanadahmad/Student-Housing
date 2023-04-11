@if ($errors->any())
    <div class="alert alert-danger">
        <h5>{{ __('Error Occured') }}</h5>
        <ul>
            @foreach ($errors->all() as $err)
                <li class="text-danger">{{ $err }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-row">
    <div class="col-md-12">
        <x-form.input name="name" lable="Room name" :value="$room->name" required />
    </div>
</div><br>

<div class="row">
    <div class="col-md-6">
        <x-form.input name="price" type="number" lable="Room price" :value="$room->price" required />
    </div>
    <div class="col-md-6">
        <x-form.input name="space" type="number" lable="Room space" :value="$room->space" required />
    </div>
</div><br>

<div class="row">
    <div class="col-md-12">
        <x-form.textarea lable="Description" name="notes" :value="$room->notes" />
    </div>
</div><br>


<!--image input-->
<div class="row">
    <div class="col-md-12">
        <x-form.input lable="Image" type="file" name="image" class="dropify"
            accept=".pdf,.jpg, .png, image/jpeg, image/png" data-height="70" />
    </div>
</div> <br><br>



<div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">{{ __('Save Data') }}</button>
</div>
<br><br>
