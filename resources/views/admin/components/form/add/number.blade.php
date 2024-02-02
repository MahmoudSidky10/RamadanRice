<div class="form-group {{@$class}}">
    <label for="exampleInputuname" class="@if(isset($required) and $required == "required") required @endif">@if(isset($label)) {{$label}} @endif</label>
    <input @if(isset($required) and $required == "required") required @endif name="{{$name}}" type="number"
           value="{{ (isset($value) ? $value : '') }}"
           class="form-control" placeholder="{{$placeholder}}"
           step={{ (isset($step)) ? $step : '' }}>
    <span class="form-text text-muted">@if(isset($note))  {{$note}} @endif</span>
</div>
