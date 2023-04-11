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
        <x-form.input name="name" lable="name" :value="$order->name" required />
    </div>
</div><br>


<div >
    <select name="room_id" @class([
       'form-control ','SlectBox','is-invalid'=>$errors->has('room_id')
    ])
     onclick="console.log($(this).val())"
        onchange="console.log('change is firing')">
        <!--placeholder-->
        <option value="" selected disabled>اختر الغرفة المناسبة لك</option>
        @foreach ($room as $room)
            <option value="{{ $room->id }}" >
                {{ $room->name }}</option>
        @endforeach
        @error('room_id')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </select>
</div>

<div class="form-row">
    <div class="col-md-12">
        <x-form.input name="phone" lable="phone" :value="$order->phone" required />
    </div>
    <div class="col-md-12">
        <x-form.input name="order_date" type="date" lable="order_date" :value="$order->order_date" required />
    </div>
</div><br>

<div class="row">
    <div class="col-md-12">
        <x-form.textarea lable="Description" name="notes" :value="$order->notes" />
    </div>
</div><br>






<div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">{{ __('Save Data') }}</button>
</div>
<br><br>
