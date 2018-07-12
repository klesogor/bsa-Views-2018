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
</tr>