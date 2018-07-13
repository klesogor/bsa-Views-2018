<div class="form-group {{$errors->has('price') ?  'has-error' : ''}}">
    <label for="price">Price</label>
    <input class="form-control" id="price" placeholder="0" name="price" value = "{{old('price') ?? $slot}}">
    @if($errors->has('price'))
        <span class = 'text-danger'>{{$errors->first('price')}}</span>
    @endif
</div>