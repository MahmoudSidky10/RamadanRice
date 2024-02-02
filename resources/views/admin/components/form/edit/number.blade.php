<div class="form-group {{@$class}}">
    <label for="exampleInputuname" class="@if(isset($required) and $required == "required") required @endif ">{{$label}}</label>
    <div class="input-group">
        <input name="{{$name}}"
               @if(isset($required) and $required == "required") required @endif
               value="{{isset($value) ? $value : old($name, $item["$name"])}}"
               placeholder="{{$placeholder}}"
               type="number" class="form-control"
               step={{ (isset($step)) ? $step : '' }}>
    </div>
</div>
