<div class="form-group {{@$class}}">
    <label class="@if(isset($required) and $required == "required") required @endif" for="exampleInputuname">{{$label}}</label>
    <div class="input-group">
        <textarea
            @if (isset($dir))
                dir="{{$dir}}"
            @else
                style="direction: @if(app()->getLocale() == "en") ltr @else rtl @endif"
            @endif
            name="{{$name}}" rows="5" cols="5" placeholder="{{$placeholder}}" type="text"
            class="form-control">{{ (isset($value) ? $value : '') }}</textarea>
    </div>
</div>
