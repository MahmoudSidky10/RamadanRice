<div class="form-group {{@$class}}">
    <label for="exampleInputuname" class="@if(isset($required) and $required == "required") required @endif ">{{$label}}</label>
    <div class="input-group">
        <input name="{{$name}}"  @if(isset($dir))  dir="{{$dir}}" @endif
        @if(isset($disabled)) {{$disabled}} @endif
               @if(isset($required) and $required == "required") required @endif
               value="@if(isset($value)) {{ $value }} @else {{old($name, $item["$name"])}} @endif"
               placeholder="{{$placeholder}}"
               type="text" class="form-control" >
    </div>
</div>
