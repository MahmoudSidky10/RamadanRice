<div class="form-group @if(isset($class)) {{$class}} @endif">
    <label class="required">{{$label}}</label>
    <div class="">
        <select required class="form-control" name="{{$name}}" @if(isset($disabled) && $disabled == true) disabled @endif>
            @foreach($items as $selectItem)
                <option @if((isset($selectedItemId) && $selectedItemId == $selectItem->id)) selected @endif
                value="{{$selectItem->id}}">{{$selectItem->name}}</option>
            @endforeach
        </select>
    </div>
</div>
