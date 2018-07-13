<div class="form-group {{$errors->has('title') ?  'has-error' : ''}}">
    <label for="name">Title</label>
    <input type="text" class="form-control" id="name" placeholder="Title" name="title" value = "{{old('title') ?? $slot}}">
    @if($errors->has('title'))
        <span class = 'text-danger'>{{$errors->first('title')}}</span>
    @endif
</div>