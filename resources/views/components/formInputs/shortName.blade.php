<div class="form-group {{$errors->has('short_name') ?  'has-error' : ''}}">
    <label for="short-name">Short name</label>
    <input type="text" class="form-control" id="short-name" placeholder="Short name" name="short_name"  value = "{{old('short_name') ?? $slot }}">
    @if($errors->has('short_name'))
        <span class = 'text-danger'>{{$errors->first('short_name')}}</span>
    @endif
</div>