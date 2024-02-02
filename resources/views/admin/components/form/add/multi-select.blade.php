<div class="form-group {{@$class}}">
    <label class="@if(isset($required) and $required == "required") required @endif ">{{$label}}</label>

    <div class="">
        <select
            @if(isset($required) and $required == "required") required
                @endif  class="form-control {{@$inputClass}} {{@$class}}"
                @if(isset($multiple) and $multiple == "multiple") multiple @endif
                name="{{$name}}" onchange="{{@$onchange}}" id="{{@$id}}">
            @if(isset($onchange) || isset($selectOption))
                <option value="" selected>اختر من القائمه</option>
            @endif
            @foreach($items as $selectItem)
                <option {{ old($name) == $selectItem->id ? 'selected' : '' }} value="{{$selectItem->id}}">{{$selectItem->name}}</option>
            @endforeach
        </select>
    </div>
</div>
