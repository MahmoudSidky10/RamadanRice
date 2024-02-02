<div class="form-group {{@$class}}">
    <label for="exampleInputuname" class="@if(isset($required) and $required == "required") required @endif">{{$label}}</label>
    <div class="input-group">
        <textarea
            @if (isset($dir))
            dir="{{$dir}}"
            @else
            style="direction: @if(app()->getLocale() == "en") ltr @else rtl @endif"
            @endif
            @if(isset($required) ? 'required' : '') @endif name="{{$name}}" type="text" cols="5" rows="5" dir="rtl"
            class="form-control">@if(isset($value)) {{ $value }} @else {{old($name, $item["$name"])}} @endif</textarea>
    </div>
</div>
