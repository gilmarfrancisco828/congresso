
<section id="main-content">
  <section class="wrapper site-min-height">
   <h2><i class="fa fa-angle-right"></i><?= $titulo ?>
   </h2>
   <div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">


        <div class="col-sm-12 message">
          <?= '<br><br><div class="alert alert-info alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> '.$quantidade.' resultado(s) encontrado(s). </div><br>' ?>
          <?php
          ?>
          <?= $mensagens; ?>
        </div>

        <table class="table table-striped table-advance table-hover">
          <thead>



            <tr>
              <?php 
              foreach($table_header as $object){
                echo '<th><i class="'.$object['icon'].'"></i> '.$object['label'].'</th>';  
              }

              ?>

            </tr>

          </thead>
          <tbody>

            <?php 

            foreach($objects as $object){
              echo '<tr>';
              for($i = 0 ; $i < count($table_body); $i++){
                echo '<td>'.$object[$table_body[$i]].'</td>';

              }
              echo '<td>
              <button class="btn btn-primary btn-xs"
              data-toggle     ="modal" 
              data-target     ="#modal" 
              data-type       ="update"
              ';
              foreach(array_keys($object) as $key){
                if(is_array($object[$key])){
                  echo 'data-'.$key.'="'.$object[$key].'" ';
                }else echo ' data-'.$key.'="'.$object[$key].'" ';
              }
              echo '> <i class="fa fa-eye"></i></button></td></tr>';

            }

            ?>

          </tr>

        </tbody>
      </table>
      
    </div>
  </div>
</div>

<?php 
echo modal("modal", "label", "", "form", $data_input_modal); 
?>


</section>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    function fechaDivMessage(){
      $('#message').fadeOut('slow');
    }

    $('#modal').on('show.bs.modal', function (event) {
      var button    = $(event.relatedTarget)
      var action    = button.data('type')
      var modal = $(this)



      if(action == "update")
      {
        <?php 
        foreach($data_input_modal as $input){
         if($input['type'] != 'special_select')
           echo 'var '.$input['name'].' = button.data("'.$input['name'].'");';
       }

       foreach($data_input_modal as $input){
        if($input['type'] == 'input_file'){
          echo 'modal.find("#'.$input['name'].'").attr(\'href\', "'.base_url('uploads/artigo/').'" + '.$input['name'].');';
        }else if($input['type'] == 'input_text') {
          echo 'modal.find("#'.$input['name'].'").val('.$input['name'].');';

        }

        else if($input['type'] == 'special_select'){
          $html = '';
          $html.= 'var html = "";';
          $html.= '

          $.ajax({
            url: "'.$input['url'].'" + '.$input['id'].',
            success:function(response) {

              var json = JSON.parse(response);
              ';

              $html.= 'html+= \' <select name="'.$input['name'].'" id="'.$input['name'].'" class="form-control" >\';';
              $html.= '
              html+= \'<option selected readonly disabled>'.$input['label'].'</option> \';';
              $html.= '
              for(var i = 0; i < json.length; i++){
                ';
                $html.= ' html+= \'<option value="\' + json[i].value + \'">\' + json[i].label + \'</option> \'';
                $html.= '
              }';
              $html.=  '

              html +=\'</select>\'

              ';
              $html.= '

              modal.find("#'.$input['name'].'").html(html);';

              $html.= 'console.log(html);';
              $html.= 
              '

            }

          });';
          echo $html;
          // echo 'var html = $.ajax({
          //   method: "POST",
          //   url: "'.$input['url'].'" + '.$input['id'].',

          // })
          // .done(function( result ) {
          //   alert( result );
          // });';
          //echo $input['name'].' = html;';
          
        }
      }

      ?>


      modal.find('#label').text('<?= $titulo ?>')
      modal.find('#id').show()

      <?php if(isset($url['aprovar'])){ 
        ?>
        modal.find('#form').attr("action", '<?= $url['aprovar'] ?>' + id)
        modal.find('#mandabala').text("Aceitar")
        <?php }
        else{
          ?>
          modal.find("#mandabala").hide()
          <?php
        }
        ?>


        <?php if(isset($url['reprovar'])){ 
          ?>
          modal.find('#nao_aceitar').text('Recusar')
          modal.find('#nao_aceitar').attr('href', "<?= $url['reprovar'] ?>"+ id)
          <?php
        }else{ ?>
          modal.find('#nao_aceitar').hide()
          <?php
        }
        ?>



      }
    })


  });
</script>