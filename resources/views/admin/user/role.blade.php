<form action="###" method="post">
    @csrf

    <ul>
        @foreach($roles as $val)
            <li>
                <input type="radio" @if($val->id == $user->role_id) checked @endif name="ids" value="{{$val->id}}">
                {{ $val->role_name }}
            </li>
        @endforeach

    </ul>

    <input type="submit" value="分配角色">

</form>