<div class="form-group @if(isset($class)) {{$class}}  @endif">
    <label for="exampleInputuname" class="required">{{$label}}</label>
    <div class="input-group">
        <input type="file"
               accept="image/x-png,image/gif,image/jpeg, .svg"
               name="{{$name}}" class="dropify "
               data-max-file-size="{{$max}}M"/>
    </div>
</div>
