<div class="form-group {{@$class}}">
    <label class="required">{{$label}}</label>
    <div class="input-group">

        <select @if(isset($required) and $required == "required") required @endif  class="form-control {{@$inputClass}}"
                @if(isset($multiple) and $multiple == "multiple") multiple @endif  name="{{$name}}"
                onchange="{{@$onchange}}" id="{{@$id}}">

            @foreach($items as $selectItem)
                <option @if(in_array($selectItem->id,$selectedItems)) selected @endif
                value="{{$selectItem->id}}">{{$selectItem->name}}</option>
            @endforeach
        </select>
    </div>
</div>
