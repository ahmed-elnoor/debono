
@section('content')

  <?php 

  switch ($type) {
    
    case 'media_gate':
    $name_type = "البوابة الأعلاميه";
    break;
    
    case 'traning_package':
    $name_type = "الحقيبة التدريبية";
    break;

    case 'traning_centers':
    $name_type = "المراكز التدريبية";
    break;

    case 'traning_tabels':
    $name_type = "الجداول التدريبية";
    break;

    case 'research_library':
    $name_type = "موسوعة البحوث والدراسات";
    break;


    case 'services':
    $name_type = "خدمات أكاديمية ديبونو";
    break;

    }


  ?>
	
	<div style="width:90%; margin:2% auto;" class="z-depth-2">

  {{ Form::open(["action"=>"topicController@store",'files'=>'true','id' =>'my-dropzone' , 'class' =>'dropzone' ,'data-parsley-validate' ]) }}
<div class="card-panel blue lighten-4" style="color:#000; "><strong>{{ $name_type }} (موضوع جديد)</strong></div>
  
  <div class="row">

    <div class="col m6 s12">
      <div class="input-field">
        <i class="fa mdi-action-subject  prefix"></i>
        <input   id="input_name" type="text" required name="title_topic">
        <label for="input_name">العنوان</label>
      </div>
    </div>

    <div class="col m6 s12">
      <div class="input-field">
        <i class="fa mdi-content-sort  prefix"></i>
        <input  id="sub_title_text" type="text" name="sub_title_topic">
        <label for="sub_title_text">العنوان الفرعى </label>
      </div>
    </div>
  </div>
 
 
  <div class="input-field">
 <textarea id="content" class="markItUp" name="content_topic" required ></textarea>
    <label for="content">الموضوع</label>
  </div>
 
  <div class="col m6 s12">
     <div class="form-group has-error ">
  
      <div class="input-field">
      
        <input type="file"  name="img_topic">
        <label id="img_topic" for="img_topic">صورة الموضوع</label>
      
      </div>
    </div>
</div>

</div>

  </div>

<div style="margin:1% auto; width:10%;" >
  <div class="input-field">
    <button class="waves-effect btn" type="submit" name="save_topic" >حفظ الموضوع</button>
  </div>


     {{ Form::hidden('type_topic', $type) }}
     {{ Form::close() }}

</div>



@stop