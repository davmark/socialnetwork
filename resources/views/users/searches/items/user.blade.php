<tr class="info">
    <td>{{$result->username}}</td>
    <td>{{$result->email}}</td>
    <td>
        @if($friend = $result->getRequest($user->id,$result->id))
            @if($friend['accept'])
                <button class="btn btn-info unfriend__request" data-user_id = '{{ $result->id }}'>Unfriend</button>
            @else
                @if($friend['from'])
                <p class="warning">Request sent</p>
                @else
                    <button class="btn btn-warning accept__request" data-user_id = '{{ $result->id }}'>Accept invitation</button>
                    <button class="btn btn-danger cancel__request" data-user_id = '{{ $result->id }}'>Cancel</button>
                @endif
            @endif
        @else
        <button class="btn btn-success send__request" data-user_id = '{{ $result->id }}'>Send request</button>
        @endif
    </td>
</tr>
