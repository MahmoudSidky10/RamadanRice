<div class="form-group @if(isset($class)) {{$class}}  @endif ">
    <a href="{{asset($item["$name"])}}" target="_blank" > ( عرض المرفق )</a>
    <label for="exampleInputuname" class="">{{$label}}</label>
    <div class="input-group">
        <input type="file"  @if(isset($disabled)) {{$disabled}} @endif
        data-default-file="{{asset($item["$name"])}}"
               name="{{@$name}}" class="dropify"
               data-max-file-size="{{$max}}M"/>
    </div>
</div>
