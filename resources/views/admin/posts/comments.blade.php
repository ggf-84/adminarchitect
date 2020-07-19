@if(count($comments))
<table class="table table-striped-col">
    <tbody>
        <tr>
            <th>
                Text comment
            </th>
            <th >
                User
            </th>
            <th >
                Date
            </th>
        </tr>
        @foreach($comments as $comment)
            <tr>
                <td>
                    {{ $comment->comment }}
                </td>
                <td>
                    <a href="{{ url('cms',['module'=> 'users', 'id' => $comment->user->id]) }}" target="_blank">{{ $comment->user->name }}</a>
                </td>
                <td style="width: 20%; min-width: 200px;">
                    {{ $comment->created_at }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@else
<h4>No comments</h4>
@endif
