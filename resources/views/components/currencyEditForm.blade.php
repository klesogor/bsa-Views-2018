<form method = 'POST' action="{{route('currencies.update',$currency->id)}}">
    {{csrf_field()}}
    {{method_field('PATCH')}}

    @component('components.formInputs.title')
        {{$currency->title}}
    @endcomponent

    @component('components.formInputs.shortName')
        {{$currency->short_name}}
    @endcomponent

    @component('components.formInputs.logoUrl')
        {{$currency->logo_url}}
    @endcomponent

    @component('components.formInputs.price')
        {{$currency->price}}
    @endcomponent
    <button type="submit" class="btn btn-primary mb-2">Save</button>
</form>