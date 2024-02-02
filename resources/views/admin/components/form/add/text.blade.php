<div class="form-group {{@$class}}">
    <label for="exampleInputuname"
           class="@if(isset($required) and $required == "required") required @endif">@if(isset($label))
            {{$label}}
        @endif</label>
    <input @if(isset($required) and $required == "required") required @endif name="{{$name}}" type="{{isset($type) ? $type : 'text'}}"
            value="{{ (isset($value) ? $value : '') }}"
            @if(isset($dir))  dir="{{$dir}}" @endif
           class="form-control" placeholder="{{$placeholder}}">
    <span class="form-text text-muted">@if(isset($note))
            {{$note}}
        @endif</span>
</div>
