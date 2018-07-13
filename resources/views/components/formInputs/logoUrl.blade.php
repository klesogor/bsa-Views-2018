<div class="form-group {{$errors->has('logo-url') ?  'has-error' : ''}}">
    <label for="logo-url">Logo url</label>
    <input class="form-control" id="logo-url" placeholder="example.com/kitten.png" name="logo_url" value = "{{old('logo_url') ??  $slot}}">
    @if($errors->has('logo_url'))
        <span class = ' text-danger'>{{$errors->first('logo_url')}}</span>
    @endif
</div>