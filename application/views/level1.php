  <!-- team-area start -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/levels/level1.css">
    <div class="team-area">
        <div class="container">
            <div class="row">
              <div id='calc-contain'>
                <label for="defaultFormCardNameEx" class="text-danger"><?php echo $error; ?></label>
                <a href="<?php echo $file_path; ?>" download  id="level1File">
                  <img src="<?php echo base_url(); ?>assets/images/levels/level1/document-file-icon.png" alt="W3Schools" width="104" height="142">
                </a>
                <form name="calculator" method="POST" action="<?php echo site_url('level1/submit');?>" id="frm_level1">

                  <input type="text" name="answer" maxlength="4" onchange="this.value=this.value.replace(/[^0-9]/g,'');" />
                  <br>

                  <input type="button" value=" 1 " onclick="calculator.answer.value += '1'" />
                  <input type="button" value=" 2 " onclick="calculator.answer.value += '2'" />
                  <input type="button" value=" 3 " onclick="calculator.answer.value += '3'" />
                  <br/>

                  <input type="button" value=" 4 " onclick="calculator.answer.value += '4'" />
                  <input type="button" value=" 5 " onclick="calculator.answer.value += '5'" />
                  <input type="button" value=" 6 " onclick="calculator.answer.value += '6'" />
                  </br>

                  <input type="button" value=" 7 " onclick="calculator.answer.value += '7'" />
                  <input type="button" value=" 8 " onclick="calculator.answer.value += '8'" />
                  <input type="button" value=" 9 " onclick="calculator.answer.value += '9'" />
                  </br>

                  <input type="button" value=" c " onclick="calculator.answer.value = ''" />
                  <input type="submit" value=" Unlock "/>
                  </br>


                </form>
              </div>
            </div>
        </div>
    </div>
    <!-- team-area end -->
    <script>
    $( document ).ready(function() {
      if ($('#level1File').attr('href') == "") {
        $('#frm_level1').show();
        $('#level1File').hide();
      } else {
        $('#frm_level1').hide();
        $('#level1File').show();
      }
    });

    $("#level1File").click(
        function(e) {
            e.preventDefault();
            var link=document.createElement('a');
            var filePath = $(this).attr("href");
            link.href =  filePath;
            link.download = filePath.substr(filePath.lastIndexOf('/') + 1);
            link.click();
            window.location="<?php echo site_url('level2');?>";
            window.focus();
        }
    );
    </script>
