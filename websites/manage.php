<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Quesbank</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Le styles -->
      <link href="../assets/css/bootstrap.css" rel="stylesheet">
       <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
            <link href="../assets/css/quesbankstyle.css" rel="stylesheet">
      <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
      <style type="text/css">
         body {
         padding-top: 20px;
         padding-bottom: 40px;
         }
         /* Custom container */
         .container-narrow {
         margin: 0 auto;
         max-width: 100%;
         }
         .container-narrow > hr {
         margin: 30px 0;
         }
         /* Main marketing message and sign up button */
         .jumbotron {
         margin: 60px 0;
         text-align: center;
         }
         .jumbotron h1 {
         font-size: 72px;
         line-height: 1;
         }
         .jumbotron .btn {
         font-size: 21px;
         padding: 14px 24px;
         }
         /* Supporting marketing content */
         .marketing {
         margin: 60px 0;
         }
         .marketing p + h4 {
         margin-top: 28px;
         }
         .modal.fade {
         top: -100%;
         }
          .masthead {
    padding-bottom: 15px;
    border-bottom: 1px solid #eeeeee ;
    display:block;
    position:fixed;
    background:#fff;
    width:100%;
    top:0;
}

.muted{
    color: #999999;
    margin-left: 10%;
    margin-top: 23px;
}
ul.nav.nav-pills.pull-right {
    margin-right: 10%;
    margin-top: 29px;
    margin-bottom: 0;
}

.footer {
    padding-left: 10%;
    padding-right: 10%;
}
span.langsetting {
    float: right;
}
div.main-content{
width:80%;
margin:0 auto;
margin-top:7%;
}
div#managequestypes h1, div#managetags h1 {
    margin-bottom: 40px;
    text-align:center;
}
div#managetags input.newinput {
    margin-top: 10px;
    width:70%;
}
table.tagstable td, table.tagstable th {
    text-align: center;
}
input.addnewinput {
width:100%;
}
input.addnewinput {
    width: 100%;
    padding: 10px;
    background: #337ab7;
    border: 1px solid #2e6da4;
    color: white;
}
      </style>

      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
      <![endif]-->
      <!-- Fav and touch icons -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
      <link rel="shortcut icon" href="../assets/ico/favicon.png">
   </head>
   <body onload="loadLanguage()">
      <div class="container-narrow">
         <div class="masthead">
            <ul class="nav nav-pills pull-right">
               <li ><a href="index.php" class="lang" key="home">Home</a></li>
               <li class="active" ><a href="manage.php" class="lang" key="manage" >Manage</a></li>
               <li ><a href="contact.html?language=42"  class="lang" key="contact">Contact</a></li>
            </ul>
            <h3 class="muted">QuesBank</h3>
         </div>
         <hr>
         <div class="main-content">
         <div id="managequestypes">
         <h1 class="lang" key="manageAllQuesTag">Manage All Question Types</h1>
         <div id="manageall">
       <a class="btn btn-default lang" style="margin:10px;" href="managefillblank.php" role="button" key="fillBlankTag">Manage Fill Blank</a>
       <a class="btn btn-default lang" style="margin:10px;" href="managemultichoice.php" role="button" key="multiChoiceTag">Manage Multi Choice</a>
       <a class="btn btn-default lang" style="margin:10px;" href="manageinteraction.php" role="button" key="interactionTag">Manage Interaction</a>
       <a class="btn btn-default lang" style="margin:10px;" href="managesentence.php" role="button" key="sentenceTransTag">Manage Sentence</a>
       <a class="btn btn-default lang" style="margin:10px;" href="managereadingmu.php" role="button" key="wanxingTag">Manage Reading Multi (wanxing)</a>
       <a class="btn btn-default lang" style="margin:10px;" href="managereading.php" role="button" key="readingTag">Manage Reading</a>
       <a class="btn btn-default lang" style="margin:10px;" href="managereadingmi.php" role="button" key="readingMissionTag">Manage Reading Mission</a>
       <a class="btn btn-default lang" style="margin:10px;" href="managetranslation.php" role="button" key="translationTag">Manage Translation</a>
       <a class="btn btn-default lang" style="margin:10px;" href="managelistening.php" role="button" key="listeningTag">Manage Listening</a>
       <a class="btn btn-default lang"  style="margin:10px;" href="managewriting.php" role="button" key="writingTag">Manage Writing</a>
       <a class="btn btn-default lang" style="margin:10px;" href="manageothers.php" role="button" key="othersTag">Manage Others</a>
       </div>
       </div>
       <hr>
       <div id="managetags">
       <h1 class="lang" key="manageTags">Manage Tags</h1>
       <?php
                        $db = mysql_connect('localhost','root','password')
                         or die('Error connecting to MySQL server.');

                        ?>

                        <table class="table table-bordered tagstable"  id="myTabletesttype">
                        <thead>
                        <tr>
                              <th class="lang danger" key="testtypeHeader">Testtype</th>
                        </tr>
                        </thead>
                        <tbody>
                           <?php
                           @mysql_select_db("tags", $db);
                         $sql = "SELECT * FROM tags.testtypetags";
                         $result = mysql_query($sql);
                              while( $row = mysql_fetch_array($result))
                              {
                              $testtype = $row['testtype'];
                              ?>
                           <tr>
                              <td><?php echo "$testtype" ?></td>
                              </tr>
                                 <?php
                                    }
                                    ?>
                                    <form method="post">
                                   <td> <input class="newinput" id="newtesttype" name="newtesttype" type="text" placeholder="NewTesttype">

                                   </td>
                                    <tr>
                              <td><input value="Save" class="addnewinput saveButton" id="addtesttype" name="addtesttype" type="submit"></td></form>
                             <?php if ( $_REQUEST['addtesttype'] ){
                                   mysql_select_db("tags", $db);
   									 $newtesttype = $_POST['newtesttype'];
   									 $newtesttypeString =  mysql_real_escape_string($newtesttype);
                     if($newtesttypeString != ''){
                       $sql = "INSERT INTO tags.testtypetags (testtype) VALUES ('$newtesttypeString')";
                      $retval = mysql_query( $sql, $db);
       if(! $retval)
       {
         die('Could not update data: ' . mysql_error());
       }

       echo '<script type="text/javascript">';
       echo  'var update_text= "Data updated successfully!" ;   ';
       echo 'alert(update_text)';
       echo ' </script> ';
       echo '<script> window.location.href="manage.php"; </script>';
     }else{
       echo '<script type="text/javascript">';
       echo  'var update_text= "Empty tag is not permitted." ;   ';
       echo 'alert(update_text)';
       echo ' </script> ';
     }


                                   }

                                   ?>
                              </tr>

                        </tbody>
                        </table>



                        <table class="table table-bordered tagstable"  id="myTabletesttype">
                        <thead>
                        <tr>
                              <th class="lang danger" key="textbookHeader">Textbook</th>
                        </tr>
                        </thead>
                        <tbody>
                           <?php
                           @mysql_select_db("tags", $db);
                         $sql = "SELECT * FROM tags.textbooktags";
                         $result = mysql_query($sql);
                              while( $row = mysql_fetch_array($result))
                              {
                              $textbook = $row['textbook'];
                              ?>
                           <tr>
                              <td><?php echo "$textbook" ?></td>
                              </tr>
                                 <?php
                                    }
                                    ?>
                                    <form method="post">
                                   <td> <input class="newinput" id="newtextbook" name="newtextbook" type="text" placeholder="NewTextbook">

                                   </td>
                                    <tr>
                              <td><input value="Save" class="addnewinput saveButton" id="addtextbook" name="addtextbook" type="submit"></td></form>
                             <?php if ( $_REQUEST['addtextbook'] ){
                                   mysql_select_db("tags", $db);
   									 $newtextbook = $_POST['newtextbook'];
   									 $newtextbookString =  mysql_real_escape_string($newtextbook);
                                   $sql = "INSERT INTO tags.textbooktags (textbook) VALUES ('$newtextbookString')";
                    if($newtextbookString != ''){
                      $retval = mysql_query( $sql, $db);
       if(! $retval)
       {
         die('Could not update data: ' . mysql_error());
       }
       echo '<script type="text/javascript">';
       echo  'var update_text= "Data updated successfully!" ;   ';
       echo 'alert(update_text)';
       echo ' </script> ';
       echo '<script> window.location.href="manage.php"; </script>';
     }else{
       echo '<script type="text/javascript">';
       echo  'var update_text= "Empty tag is not permitted." ;   ';
       echo 'alert(update_text)';
       echo ' </script> ';
     }

                                   }

                                   ?>
                              </tr>

                        </tbody>
                        </table>





                        <table class="table table-bordered tagstable"  id="myTableknowledge">
                        <thead>
                        <tr>
                              <th class="lang danger" key="knowledgeHeader">Knowledge</th>
                        </tr>
                        </thead>
                        <tbody>
                           <?php
                           @mysql_select_db("tags", $db);
                         $sql = "SELECT * FROM tags.knowledgetags";
                         $result = mysql_query($sql);
                              while( $row = mysql_fetch_array($result))
                              {
                              $knowledge = $row['knowledge'];
                              ?>
                           <tr>
                              <td><?php echo "$knowledge" ?></td>
                              </tr>
                                 <?php
                                    }
                                    ?>
                                    <form method="post">
                                   <td> <input class="newinput" id="newknowledge" name="newknowledge" type="text" placeholder="NewKnowledge">

                                   </td>
                                    <tr>
                              <td><input value="Save" class="addnewinput saveButton" id="addknowledge" name="addknowledge" type="submit"></td></form>
                             <?php if ( $_REQUEST['addknowledge'] ){
                                   mysql_select_db("tags", $db);
   									 $newknowledge = $_POST['newknowledge'];
   									 $newknowledgeString =  mysql_real_escape_string($newknowledge);
                     if($newknowledgeString != ''){
                       $sql = "INSERT INTO tags.knowledgetags (knowledge) VALUES ('$newknowledgeString')";
       $retval = mysql_query( $sql, $db);
  if(! $retval)
  {
  die('Could not update data: ' . mysql_error());
  }
  echo '<script type="text/javascript">';
  echo  'var update_text= "Data updated successfully!" ;   ';
  echo 'alert(update_text)';
  echo ' </script> ';
  echo '<script> window.location.href="manage.php"; </script>';
}else{
  echo '<script type="text/javascript">';
  echo  'var update_text= "Empty tag is not permitted." ;   ';
  echo 'alert(update_text)';
  echo ' </script> ';
}

                                   }

                                   ?>
                              </tr>

                        </tbody>
                        </table>


</div>
       </div>

<hr>
         <div class="footer">
            <p>
               &copy;
               <span class="lang" key="airEnglish">Air English 2015</span>
               <span class="langsetting">
               <span class="lang" key="languageText"> Language:</span>
               <select id="changeLang" onchange="languageChange();">
                  <option  class="lang" value="en" key="langEnglish" >English</option>
                  <option class="lang" value="zh" key="langChinese">中文</option>
               </select>
               </div>
            </p>
         </div>
      </div>
      <!-- /container -->


      <!-- <script language="javascript" type="text/javascript">
         $('.edit-b').click(function(){
         var edit_id =$(this).attr('id');
         // alert(a);
         var strLink = "manage.php?key=" + edit_id;
         document.getElementById("update").setAttribute("href",strLink);
         });


         </script> -->
      <!--
         <script>
         $(document).on('click', '.edit-b',function(){
         var idfill_blank = $(this).attr("id");
         $.ajax({
         url:"fetch.php",
         method: "POST",
         data:{idfill_blank:idfill_blank},
         dataType:"json",
         success:function(data){
         $('#year').val(data.year);
         $('#grade').val(data.grade);
         $('#testtype').val(data.testtype);
         $('#reference').val(data.reference);
         $('#textbook').val(data.textbook);
         $('#lesson').val(data.lesson);
         $('#knowledge').val(data.knowledge);
         $('#difficulty').val(data.difficulty);
         $('#question').val(data.question);
         $('#answer').val(data.answer);
         $('#date').val(data.date);
         $('#idfill_blank').val(data.idfill_blank);
         $('#insert').val("Update");
         $('#myModal').modal('show');
         }

         });

         });


         </script> -->
      <script>
         function searchfilter() {
         // Declare variables
         var input, filter, table, tr, td, i;
         input = document.getElementById("myInput");
         filter = input.value;
         table = document.getElementById("myTable");
         tr = table.getElementsByTagName("tr");

         // Loop through all table rows, and hide those who don't match the search query
         for (i = 0; i < tr.length; i++) {
         td = tr[i].getElementsByTagName("td")[9];
         if (td) {
         if (td.innerHTML.indexOf(filter) > -1) {
         tr[i].style.display = "";
         } else {
         tr[i].style.display = "none";
         }
         }
         }
         }

         function searchfiltertwo() {
         // Declare variables
         var input, filter, table, tr, td, i;
         input = document.getElementById("myInputtwo");
         filter = input.value;
         table = document.getElementById("myTable");
         tr = table.getElementsByTagName("tr");

         // Loop through all table rows, and hide those who don't match the search query
         for (i = 0; i < tr.length; i++) {
         td = tr[i].getElementsByTagName("td")[5];
         if (td) {
         if (td.innerHTML.indexOf(filter) > -1) {
         tr[i].style.display = "";
         } else {
         tr[i].style.display = "none";
         }
         }
         }
         }

         function sortTable(k) {
           if (k == 0){
             var table, rows, switching, i, x, y, shouldSwitch;
             table = document.getElementById("myTable");
             switching = true;
             while (switching) {
             switching = false;
             rows = table.getElementsByTagName("tr");
             for (i = 1; i < (rows.length - 1); i++) {
             shouldSwitch = false;
             x = rows[i].getElementsByTagName("td")[k];
             y = rows[i + 1].getElementsByTagName("td")[k];
             if (parseInt(x.innerHTML, 10) > parseInt(y.innerHTML, 10)) {
             shouldSwitch= true;
             break;
             }
             }
             if (shouldSwitch) {
             rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
             switching = true;
             }
             }
           }
         else {
           var table, rows, switching, i, x, y, shouldSwitch;
           table = document.getElementById("myTable");
           switching = true;
           while (switching) {
           switching = false;
           rows = table.getElementsByTagName("tr");
           for (i = 1; i < (rows.length - 1); i++) {
           shouldSwitch = false;
           x = rows[i].getElementsByTagName("td")[k];
           y = rows[i + 1].getElementsByTagName("td")[k];
           if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
           shouldSwitch= true;
           break;
           }
           }
           if (shouldSwitch) {
           rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
           switching = true;
           }
           }
         }
         }
         /**
         $('#changeLang').change(function( ) {
         var $this = $(this);
         var lang = $this.val( );
         $('.i18n').each(function( ){
         $(this).text($(this).data(lang));
         });
         });
         **/

         /*$('.edit-b').on('click', function(){
         // Get all TD from the cliked Button
         var td = $(this).parents('tr').find('td:lt(12)');
         $('#year').val($(td[1]).text());
         $('#grade').val($(td[2]).text());
         $('#testtype').val($(td[3]).text());
         $('#reference').val($(td[4]).text());
         $('#textbook').val($(td[5]).text());
         $('#lesson').val($(td[6]).text());
         $('#knowledge').val($(td[7]).text());
         $('#difficulty').val($(td[8]).text());
         $('#question').val($(td[9]).text());
         $('#answer').val($(td[10]).text());
         });*/

         function updatedata(str){
         var id = str;
         var year = $('#year-'+str).val();
         var grade = $('#grade-'+str).val();
         var testtype = $('#testtype-'+str).val();
         var reference = $('#reference-'+str).val();
         var textbook = $('#textbook-'+str).val();
         var lesson = $('#lesson-'+str).val();
         var knowledge = $('#knowledge-'+str).val();
         var difficulty = $('#difficulty-'+str).val();
         var question = $('#question-'+str).val();
         var answer = $('#answer-'+str).val();

         $.ajax({
         type:"POST",
         url:"manage.php?p=edit",
         data:"year=" + year+ "&grade=" + grade + "&testtype=" + testtype+"&reference="+reference+"&textbook="+textbook+"&lesson" + lesson + "&knowledge=" +knowledge+"&difficulty="+difficulty+"&question="+question+"&answer="+answer+"&id" +id,
         success:function(data){
         viewData();
         }

         });
         }

         /*$('.btn-danger').on('click', function(){
         $(this).parents('tr').remove();
         })*/

      </script>
      <!-- Le javascript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script type="text/javascript" src="../assets/js/languageHandler.js"?v=1></script>
      <script type="text/javascript" src="../assets/js/cookieHandler.js"></script>
      <script src="../assets/js/jquery.js"></script>
      <script src="../assets/js/bootstrap-transition.js"></script>
      <script src="../assets/js/bootstrap-alert.js"></script>
      <script src="../assets/js/bootstrap-modal.js"></script>
      <script src="../assets/js/bootstrap-dropdown.js"></script>
      <script src="../assets/js/bootstrap-scrollspy.js"></script>
      <script src="../assets/js/bootstrap-tab.js"></script>
      <script src="../assets/js/bootstrap-tooltip.js"></script>
      <script src="../assets/js/bootstrap-popover.js"></script>
      <script src="../assets/js/bootstrap-button.js"></script>
      <script src="../assets/js/bootstrap-collapse.js"></script>
      <script src="../assets/js/bootstrap-carousel.js"></script>
      <script src="../assets/js/bootstrap-typeahead.js"></script>
      <script type="text/javascript" src="../assets/js/jquery-1.7.1.min.js"></script>
      <script type="text/javascript" src="../assets/js/jquery-ui-1.8.17.custom.min.js"></script>
      <script type="text/javascript" src="../assets/js/jspdf.debug.js"></script>
   </body>
</html>
