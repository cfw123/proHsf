<form action="{{ route('admin.role.addauth',$role) }}" method="post">
    @csrf

    <dl>
        @foreach($auth as $item)
            <dt>
                <input type="checkbox" @if(in_array($item['id'],$mauths)) checked @endif name="ids[]" value="{{$item['id']}}">
                {{ $item['name'] }}</dt>
            @foreach($item['sub'] as $val)
                <dd>
                    <input type="checkbox" @if(in_array($val['id'],$mauths)) checked @endif name="ids[]" value="{{$val['id']}}">
                    {{ $val['name'] }}</dd>
            @endforeach
        @endforeach

    </dl>

    <input type="submit" value="添加权限">

</form>