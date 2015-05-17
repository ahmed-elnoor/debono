
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

	<div style="  margin:2% auto; padding:2%;" class="z-depth-2">
<div class="card-panel blue lighten-4" style="color:#000; text-align:center;"><strong>{{ $name_type }} (كل المواضيع)</strong></div>
<br/>


<!-- if find topic do this -->
@if(!empty($all_topics))


<div class="table-responsive">
  
<table  class="result_table table table-hover" >

  <thead>
    <tr>
      <th>عنوان الموضوع </th>
      <th>تعديل      </th>
      <th>حذف        </th>
    </tr>
  </thead>
 
  @foreach($all_topics as $topic)
  
  <tbody>
  
  <tr>

    <td>
      {{ $topic->title_topic }}
    </td>
    
    <td>
      <a href="{{URL::to('admin/toic/'.$topic->id.'/edit')}}"><img src={{asset('img/file_edit.png')}} width="30px" eight="30px" alt="edit"  ></a>
    </td>
      



  <td>
  
  {{ Form::open( ['action'=>['topicController@destroy',$topic->id],'method'=>'delete']) }}

  {{Form::submit('حذف',array('class'=>'btn  red darken-3','onClick'=>'return confirm("هل تريد بالفعل حذف هذا الموضوع")'))}}

  {{Form::close()}}
  </td>


<!-- end row / end tbody -->
</tr>
</tbody>

@endforeach
  
<!-- end form / end table -->

</table>
<div/>

@else 

<div class="alert  blue-grey lighten-5 ">
  <strong>عفواً  : </strong> لا يوجد مواضيع لعرضها حتى الان
</div>

@endif
</div>
</div>

@stop
