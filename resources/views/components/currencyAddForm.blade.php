<form method = "POST" action="{{route('currencies.store')}}">
    {{csrf_field()}}
    <div class="form-group {{$errors->has('title') ?  'has-error' : ''}}">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Name" name="title" value = "{{old('title') ?? ''}}")>
        @if($errors->has('title'))
            <span class = 'text-danger'>{{$errors->first('title')}}</span>
        @endif
    </div>
    <div class="form-group {{$errors->has('short-name') ?  'has-error' : ''}}">
        <label for="short-name">Symbol</label>
        <input type="text" class="form-control" id="short-name" placeholder="Symbol" name="short_name"  value = "{{old('short_name') ?? '' }}">
        @if($errors->has('short-name'))
            <span class = 'text-danger'>{{$errors->first('short-name')}}</span>
        @endif
    </div>
    <div class="form-group {{$errors->has('logo-url') ?  'has-error' : ''}}">
        <label for="logo-url">Logo url</label>
        <input type="url" class="form-control" id="logo-url" placeholder="example.com/kitten.png" name="logo_url" value = {{old('logo_url') ?? ''}}>
        @if($errors->has('logo_url'))
            <span class = ' text-danger'>{{$errors->first('logo_url')}}</span>
        @endif
    </div>
    <div class="form-group {{$errors->has('price') ?  'has-error' : ''}}">
        <label for="price">Price</label>
        <input class="form-control" id="price" placeholder="price" name="price" value = {{old('price') ?? ''}}>
        @if($errors->has('price'))
            <span class = 'text-danger'>{{$errors->first('price')}}</span>
        @endif
    </div>
    <div class = "form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>