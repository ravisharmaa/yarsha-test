<div class="form-group">
   {{Form::label('title','Menu Title')}}
    {{Form::text('title',null,['class'=>'form-control','placeholder'=>"Enter The Title"])}}
</div>
<div class="form-group">
    {{Form::label('title','Menu Url')}}
    {{Form::text('url',null,['class'=>'form-control','placeholder'=>"Enter The Url"])}}
</div>
<div class="form-group">
    {{Form::label('type','Choose Type')}}
    {{Form::select('type',['page'=>'Page','post'=>'Post'], null, ['class'=>'form-control','placeholder'=>"Choose Type"])}}
</div>

<div class="form-group">
    {{Form::label('choose_parent','Choose Parent')}}
    {{Form::select('parent_id',isset($data)?$data:null, null, ['class'=>'form-control','placeholder'=>"Choose Parent"])}}
</div>

{{Form::button($submitBtn,['type'=>'submit','class'=>'btn btn-primary'])}}