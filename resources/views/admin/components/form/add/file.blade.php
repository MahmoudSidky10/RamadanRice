<div class="form-group @if(isset($class)) {{$class}}  @endif">
    <label for="exampleInputuname" class="@if(isset($required) and $required == "required") required @endif">{{$label}}</label>
    <div class="input-group">
        <input type="file"
               @if(isset($required) and $required == "required") required @endif
               accept="image/x-png,image/gif,image/jpeg, .svg"
               name="{{$name}}" class="dropify "
               data-max-file-size="{{$max}}M"/>
    </div>
</div>
