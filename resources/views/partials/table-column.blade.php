<tr>
    <td>{{ $account->account_type }}</td>
    <td><a href="{{ route('accounts.show', ['accountId' => $account->id]) }}">{{ $account->first_name.' '.$account->last_name }}</a></td>
    <td>{{ $account->place }}</td>
    <td>
        @if ($account->active) 
            Active
        @else
            Inactive
        @endif
    </td>
    <td>${{ $account->cost }}</td>
    <td>{{ $account->created_at }}</td>
</tr>