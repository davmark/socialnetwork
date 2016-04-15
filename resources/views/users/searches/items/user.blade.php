<tr class="info">
    <td>{{$result->username}}</td>
    <td>{{$result->email}}</td>
    <td>
        @if($friend = $result->getRequest($user->id,$result->id))
            @if($friend['accept'])
                <p>Friend</p>
            @else
                @if($friend['from'])
                <p class="warning">Request sent</p>
                @else
                    <button class="btn btn-warning send__request" data-user_id = '{{ $result->id }}'>Accept invitation</button>
                @endif
            @endif
        @else
        <button class="btn btn-success send__request" data-user_id = '{{ $result->id }}'>Send request</button>
        @endif
    </td>
</tr>
