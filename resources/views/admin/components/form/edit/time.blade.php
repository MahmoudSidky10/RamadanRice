<div class="form-group">
    <label for="exampleInputuname">{{$label}} : {{date('m/d/Y h:i A',strtotime($item["$name"]))}} </label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="{{$icon}}"></i></span>
        </div>
        <input name="{{$name}}" type="time" value=""
               class="form-control {{$name}}  {{@$class}}" placeholder="{{$placeholder}}">
    </div>
</div>

