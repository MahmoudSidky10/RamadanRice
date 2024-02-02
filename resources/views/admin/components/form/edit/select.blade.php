<div class="form-group @if(isset($class)) {{$class}} @endif ">
    <label class="required" >{{$label}}</label>
    <div class="input-group">

        <select required class="form-control" name="{{$name}}" @if(isset($disabled)) disabled @endif>
            @foreach($items as $selectItem)
                <option @if($item[$name] == $selectItem->id) selected @endif
                value="{{$selectItem->id}}">{{$selectItem->name}}</option>
            @endforeach
        </select>
    </div>
</div>
