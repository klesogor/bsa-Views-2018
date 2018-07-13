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

            @can('update',$currency)
                <a role = "button" class = "btn btn-primary mr-sm-2" href = "{{route('currencies.edit',$currency->id)}}">
                    Edit
                </a>
            @endcan
            @can('delete',$currency)
                <a  role = "button" class="btn btn-danger delete-button" route = "{{route('currencies.destroy',$currency->id)}}" data-toggle="modal" data-target = "#delete-modal">
                    Delete
                </a>
            @endcan
    </td>
</tr>