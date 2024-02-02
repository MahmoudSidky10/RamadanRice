<div class="form-group {{@$class}}">
    <label class="required" >{{$label}}</label>
    <div class="input-group">

        <select @if(isset($required) and $required == "required") required @endif  class="form-control {{@$inputClass}}" @if(isset($multiple) and $multiple == "multiple") multiple @endif  name="{{$name}}" onchange="{{@$onchange}}" id="{{@$id}}"
            @if(isset($disabled) and $disabled == true) disabled @endif
        >

            @if(!$item[$name] && isset($selectOption))
                <option value="" selected>اختر من القائمه</option>
            @endif
            @foreach($items as $selectItem)
                <option @if($item[$name] == $selectItem->id) selected @endif
                value="{{$selectItem->id}}">{{$selectItem->name}}</option>
            @endforeach
        </select>
    </div>
</div>
