<div class="form-group @if(isset($class)) {{$class}}  @endif ">
    <label for="exampleInputuname" class="required">{{$label}}</label>
    <div class="input-group">
        <input type="file"
               data-default-file="@if(isset($data_default_file)) {{ $data_default_file }} @else {{env("AWS_BUCKET_URL")}}{{$item["$name"]}} @endif"
               name="{{@$name}}" class="dropify"
               data-max-file-size="{{$max}}M"/>
    </div>
</div>
