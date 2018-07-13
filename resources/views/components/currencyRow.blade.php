<tr>
    <th scope="row">{{$index}}</th>
    <td>
        <a href = "{{route('currencies.show',$currency->id)}}">
            {{$currency->title}}
        </a>
    </td>
    <td>
        <img class="img-responsive" src ="{{$currency->logo_url}}">
    </td>
    <td> {{$currency->short_name}}</td>
    <td> {{$currency->price}}</td>
    <td>
        <form action = "{{route('currencies.destroy',$currency->id)}}" class="form-inline">
            <a class = "btn btn-primary mr-sm-2" href = "{{route('currencies.edit',$currency->id)}}">
                Edit
            </a>
            <input type="submit" class="btn btn-danger" value = "Delete">
        </form>
    </td>
</tr>