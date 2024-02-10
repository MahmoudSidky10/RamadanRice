<div class="form-group">
    <label for="exampleInputuname">{{$label}}</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="{{$icon}}"></i></span>
        </div>
        <input required name="{{$name}}" type="date" value="{{date('Y-m-d',strtotime($item["$name"]))}}"
               @if(isset($disabled)) {{$disabled}} @endif
               class="form-control {{@$class}}" placeholder="{{$placeholder}}">
    </div>
</div>
