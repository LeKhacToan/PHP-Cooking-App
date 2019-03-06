var i=1;
var j=1;
 $(document).on('click','#add',function(){
    i++;
    $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="names[]" id="names" class="form-control"placeholder="Tên nguyên liệu" required></td><td><input type="text"  name="numbers[]" id="numbers" class="form-control"placeholder="Số lượng" required></td><td> <i class="icon-fa icon-fa-close remove_nl" id="'+i+'"></i></td></tr>');
 });
 $(document).on('click','.remove_nl',function(){
     var button_id=$(this).attr("id");
     $("#row"+button_id+"").remove();
 });
 $(document).on('click','#add_step_new',function(){
    j++;
    $('#dynamic_field_step').append('<tr id="row_step'+j+'"><td><textarea class="form-control" name="motas[]" id="motas" rows="3" name="decription" required ></textarea></td><td><input type="file" class="form-control-file" id="hinh_steps" name="hinh_steps[]" required></td><td><i class="icon-fa icon-fa-close remove_step" id="'+j+'"></i></td></tr>');
 });
 $(document).on('click','.remove_step',function(){
     var step_id=$(this).attr("id");
     $("#row_step"+step_id+"").remove();
 });
