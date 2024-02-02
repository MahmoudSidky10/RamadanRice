<div class="form-group {{@$class}}">
    <label for="exampleInputuname">{{$label}} : {{date('m/d/Y h:i A',strtotime($item["$name"]))}} </label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="{{$icon}}"></i></span>
        </div>
        <input  name="{{$name}}" type="datetime-local" value="{{@$value}}"
               class="form-control {{@$class}}" placeholder="{{$placeholder}}">
    </div>
</div>

