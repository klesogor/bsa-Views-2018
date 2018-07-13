<form method = "POST" action="{{route('currencies.store')}}">
    {{csrf_field()}}
    @component('components.formInputs.title')
    @endcomponent
    @component('components.formInputs.shortName')
    @endcomponent
    @component('components.formInputs.logoUrl')
    @endcomponent
    @component('components.formInputs.price')
    @endcomponent
    <div class = "form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>