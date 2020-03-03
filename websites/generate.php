<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Template &middot; Bootstrap</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <script type="text/javascript" src="../assets/js/jquery-1.7.1.min.js"></script>
      <script type="text/javascript" src="../assets/js/jquery-ui-1.8.17.custom.min.js"></script>
      <script type="text/javascript" src="../assets/js/jspdf.debug.js"></script>
      <script type="text/javascript" src="../assets/js/test-generation-helper.js"></script>
      <link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,700italic' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
      <!-- Le styles -->
      <link href="../assets/css/bootstrap.css" rel="stylesheet">
      <link href="../assets/css/quesbankstyle.css" rel="stylesheet">
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
         @timing:         0.08s;
         .tag{
         display: inline-block;
         /* position: relative;*/
         margin: 5px 10px 5px 0px;
         }
         .tag input[type=checkbox]{
         opacity: 0;
         position: absolute;
         z-index: 300;
         cursor: pointer;
         /* left: 0;*/
         width: 100%;
         height: 7%;
         &:hover + label{
         background: lighten(#ccc, 7%);
         }
         }
         .tag label{
         padding: 7px 34px 6px 18px;
         /* position: relative;*/
         z-index: 200;
         color: white;
         display: block;
         border-radius: 16px;
         background: #ccc;
         transition: all @timing ease-in;
         }
         .tag .fa{
         /* position: absolute;*/
         z-index: 250;
         float: right;
         margin-right: 12px;
         margin-top: -27px;
         color: white;
         line-height: 0.95;
         }
         .tag .fa-check{
         display: none;
         float: right;
         margin-right: 11px;
         margin-top: -27px;
         transition: all @timing ease-in;
         }
         .tag input[type=checkbox]:checked + label{
         background: black;
         animation: flick @timing;
         }
         .tag input[type=checkbox]:checked ~ .fa-plus{
         display: none;
         }
         .tag input[type=checkbox]:checked ~ .fa-check{
         animation: flick @timing;
         display: block;
         }
         .footer {
         padding-left: 10%;
         padding-right: 10%;
         }
         span.langsetting {
         float: right;
         }
         div#generatepage{
         width:80%;
         margin:0 auto;
         margin-top:5%;
         }
      </style>
      <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
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
   <body>
      <form method = "post">
         <div class="container-narrow">
            <div class="masthead">
               <ul class="nav nav-pills pull-right">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="manage.php">Manage</a></li>
                  <li><a href="contact.html">Contact</a></li>
               </ul>
               <h3 class="muted">QuesBank</h3>
            </div>
            <?php
               $db = mysql_connect('localhost','root','password')
                or die('Error connecting to MySQL server.');
               
               ?>
            <hr>
            <div id="generatepage">
               <div id="distill">
                  <div id="year-filter">
                     <label>Year</label>
                     <div class="tag">
                        <input type="checkbox" name = "year_box_1" value="yes"/>
                        <label for="">2000-2005</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "year_box_2" value="yes"/>
                        <label for="">2006-2010</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "year_box_3" value="yes"/>
                        <label for="">2011-2015</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "year_box_4" value="yes"/>
                        <label for="">2016-2017</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                  </div>
                  <div id="grade-filter">
                     <label>Grade</label>
                     <div class="tag">
                        <input type="checkbox" name = "grade_box_1" value="yes"/>
                        <label for="">1</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "grade_box_2" value="yes" />
                        <label for="">2</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "grade_box_3" value="yes" />
                        <label for="">3</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "grade_box_4" value="yes" />
                        <label for="">4</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "grade_box_5" value="yes" />
                        <label for="">5</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "grade_box_6" value="yes" />
                        <label for="">6</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "grade_box_7" value="yes" />
                        <label for="">7</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "grade_box_8" value="yes" />
                        <label for="">8</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "grade_box_9" value="yes" />
                        <label for="">9</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "grade_box_10" value="yes" />
                        <label for="">10</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "grade_box_11" value="yes" />
                        <label for="">11</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "grade_box_12" value="yes" />
                        <label for="">12</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                  </div>
                  <div id="testtype-filter">
                     <label>Testtype</label>
                     <?php
                        @mysql_select_db("tags", $db);
                        $sql = "SELECT * FROM tags.testtypetags";
                        $result = mysql_query($sql);
                        $x = 1;
                           while( $row = mysql_fetch_array($result))
                           {
                           $testtype = $row['testtype'];
                           ?>
                     <div class="tag">
                        <input type="checkbox" name = "testtype_box_<?php echo "$x";?>" value="yes"/>
                        <label for=""><?php echo "$testtype" ?></label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <?php $x = $x + 1;} ?>
                  </div>
                  <div id="testtype-filter">
                     <label>Textbook</label>
                     <?php
                        @mysql_select_db("tags", $db);
                        $sql = "SELECT * FROM tags.textbooktags";
                        $result = mysql_query($sql);
                        $x = 1;
                           while( $row = mysql_fetch_array($result))
                           {
                           $textbook = $row['textbook'];
                           ?>
                     <div class="tag">
                        <input type="checkbox" name = "textbook_box_<?php echo "$x";?>" value="yes"/>
                        <label for=""><?php echo "$textbook" ?></label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <?php $x = $x + 1;} ?>
                  </div>
                  <div id="lesson-filter">
                     <label>Lesson</label>
                     <div class="tag">
                        <input type="checkbox" name = "lesson_box_1" value="yes"/>
                        <label for="">1</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "lesson_box_2" value="yes"/>
                        <label for="">2</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "lesson_box_3" value="yes"/>
                        <label for="">3</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "lesson_box_4" value="yes"/>
                        <label for="">4</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                  </div>
                  <div id="testtype-filter">
                     <label>Knowledge</label>
                     <?php
                        @mysql_select_db("tags", $db);
                        $sql = "SELECT * FROM tags.knowledgetags";
                        $result = mysql_query($sql);
                        $x = 1;
                           while( $row = mysql_fetch_array($result))
                           {
                           $knowledge = $row['knowledge'];
                           ?>
                     <div class="tag">
                        <input type="checkbox" name = "knowledge_box_<?php echo "$x";?>" value="yes"/>
                        <label for=""><?php echo "$knowledge" ?></label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <?php $x = $x + 1;} ?>
                  </div>
                  <div id="difficulty-filter">
                     <label>Difficulty</label>
                     <div class="tag">
                        <input type="checkbox" name = "difficulty_box_1" value="yes"/>
                        <label for="">Easy</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "difficulty_box_2" value="yes"/>
                        <label for="">Medium</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                     <div class="tag">
                        <input type="checkbox" name = "difficulty_box_3" value="yes"/>
                        <label for="">Hard</label>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-check"></i>
                     </div>
                  </div>
               </div>
               <hr>
               <?php
                  $db = mysql_connect('localhost','root','password')
                   or die('Error connecting to MySQL server.');
                   @mysql_select_db("test", $db);
                   $fill_blank_sql = "SELECT * FROM test.fill_blank";
                  
                  
                  
                  
                  
                  
                  
                   $fill_blank_result = mysql_query($aaabbb_sql);
                  
                  
                   $count = "SELECT COUNT(idfill_blank) FROM test.fill_blank";
                   $all = mysql_fetch_array(mysql_query($count) );
                   $total_num = $all[0];
                  
                   $question_1_index = rand(1, $total_num);
                   echo "$question_1_index";
                   $questions_for_samples_query = mysql_fetch_row(mysql_query("SELECT question FROM test.fill_blank WHERE idfill_blank = $question_1_index"));
                   $questions_for_samples_1 = $questions_for_samples_query[0];
                   $answers_for_samples_query = mysql_fetch_row(mysql_query("SELECT answer FROM test.fill_blank WHERE idfill_blank = $question_1_index"));
                   $answers_for_samples_1 = $answers_for_samples_query[0];
                  
                   $question_2_index = rand(1, $total_num);
                   while ($question_1_index == $question_2_index){
                     $question_2_index = rand(1, $total_num);
                   }
                   echo "$question_2_index";
                   $questions_for_samples_query = mysql_fetch_row(mysql_query("SELECT question FROM test.fill_blank WHERE idfill_blank = $question_2_index"));
                   $questions_for_samples_2 = $questions_for_samples_query[0];
                   $answers_for_samples_query = mysql_fetch_row(mysql_query("SELECT answer FROM test.fill_blank WHERE idfill_blank = $question_2_index"));
                   $answers_for_samples_2 = $answers_for_samples_query[0];
                  
                   $question_3_index = rand(1, $total_num);
                   while ($question_1_index == $question_3_index || $question_2_index == $question_3_index){
                     $question_3_index = rand(1, $total_num);
                   }
                   echo "$question_3_index";
                   $questions_for_samples_query = mysql_fetch_row(mysql_query("SELECT question FROM test.fill_blank WHERE idfill_blank = $question_3_index"));
                   $questions_for_samples_3 = $questions_for_samples_query[0];
                   $answers_for_samples_query = mysql_fetch_row(mysql_query("SELECT answer FROM test.fill_blank WHERE idfill_blank = $question_3_index"));
                   $answers_for_samples_3 = $answers_for_samples_query[0];
                  
                  
                  $questions_for_samples = array ($questions_for_samples_1, $questions_for_samples_2, $questions_for_samples_3);
                  $answers_for_samples = array ($answers_for_samples_1, $answers_for_samples_2, $answers_for_samples_3);
                   echo "$questions_for_samples[0]";
                    echo "$questions_for_samples[1]";
                     echo "$questions_for_samples[2]";
                     echo "$answers_for_samples[0]";
                      echo "$answers_for_samples[1]";
                       echo "$answers_for_samples[2]";
                  ?>
               <hr>
               <!-- Standard button -->
               <input type="submit" name="type1" class="btn btn-default" value="Test Type 1">
               Pudding: 5 multiple-choice, 5 fill-blank/sentences, 2 translation, 1 reading
               <br>
               <!--start filtering-->
               <?php if($_REQUEST['type1']){
                  $value='yes';
                  
                  
                  //init
                  $fill_blank_year_box_1 = "SELECT * FROM test.fill_blank WHERE year = 0";
                  $fill_blank_year_box_2 = "SELECT * FROM test.fill_blank WHERE year = 0";
                  $fill_blank_year_box_3 = "SELECT * FROM test.fill_blank WHERE year = 0";
                  $fill_blank_year_box_4 = "SELECT * FROM test.fill_blank WHERE year = 0";
                  
                  $fill_blank_grade_box = "SELECT * FROM test.fill_blank WHERE year = 0";
                  $fill_blank_testtype_box = "SELECT * FROM test.fill_blank WHERE year = 0";
                  $fill_blank_textbook_box = "SELECT * FROM test.fill_blank WHERE year = 0";
                  $fill_blank_lesson_box = "SELECT * FROM test.fill_blank WHERE year = 0";
                  $fill_blank_knowledge_box = "SELECT * FROM test.fill_blank WHERE year = 0";
                  $fill_blank_difficulty_box = "SELECT * FROM test.fill_blank WHERE year = 0";
                  
                  
                  
                  $type1_year_filter_bool = false;
                  $type1_grade_filter_bool = false;
                  $type1_testtype_filter_bool = false;
                  $type1_textbook_filter_bool = false;
                  $type1_lesson_filter_bool = false;
                  $type1_knowledge_filter_bool = false;
                  $type1_difficulty_filter_bool = false;
                  
                  
                  $type1_final_year_used = "SELECT * FROM test.fill_blank WHERE year = 0";
                  $type1_final_grade_used = "SELECT * FROM test.fill_blank WHERE year = 0";
                  $type1_final_testtype_used = "SELECT * FROM test.fill_blank WHERE year = 0";
                  $type1_final_textbook_used = "SELECT * FROM test.fill_blank WHERE year = 0";
                  $type1_final_lesson_used = "SELECT * FROM test.fill_blank WHERE year = 0";
                  $type1_final_knowledge_used = "SELECT * FROM test.fill_blank WHERE year = 0";
                  $type1_final_difficulty_used = "SELECT * FROM test.fill_blank WHERE year = 0";
                  
                  
                  $type_1_final_db_used = "SELECT * FROM test.fill_blank WHERE year = 0";
                  
                  
                  
                  
                  
                  
                  //all boolean value first
                  //year filter
                  
                  
                  
                  if (isset($_POST['year_box_1'])) {
                      if ($_POST['year_box_1'] == $value) {
                          $year_box_1_check = true;
                          $type1_year_filter_bool = true;
                      } else {
                          $year_box_1_check = false;
                          print 'Invalid checkbox value submitted.';
                      }
                  } else {
                      $year_box_1_check = false;
                  }
                  
                  if (isset($_POST['year_box_2'])) {
                      if ($_POST['year_box_2'] == $value) {
                          $year_box_2_check = true;
                          $type1_year_filter_bool = true;
                      } else {
                          $year_box_2_check = false;
                          print 'Invalid checkbox value submitted.';
                      }
                  } else {
                      $year_box_2_check = false;
                  }
                  
                  if (isset($_POST['year_box_3'])) {
                      if ($_POST['year_box_3'] == $value) {
                          $year_box_3_check = true;
                          $type1_year_filter_bool = true;
                      } else {
                          $year_box_3_check = false;
                          print 'Invalid checkbox value submitted.';
                      }
                  } else {
                      $year_box_3_check = false;
                  }
                  
                  if (isset($_POST['year_box_4'])) {
                      if ($_POST['year_box_4'] == $value) {
                          $year_box_4_check = true;
                          $type1_year_filter_bool = true;
                      } else {
                          $year_box_4_check = false;
                          print 'Invalid checkbox value submitted.';
                      }
                  } else {
                      $year_box_4_check = false;
                  }
                  
                  
                  
                  //grade filter
                  for ($x = 1; $x<=12; $x++){
                    if (isset($_POST['grade_box_'.$x])) {
                      if ($_POST['grade_box_'.$x] == $value) {
                          ${'grade_box_'.$x.'_check'} = true;
                          $type1_grade_filter_bool = true;
                      } else {
                          ${'grade_box_'.$x.'_check'} = false;
                          print 'Invalid checkbox value submitted.';
                      }
                  } else {
                      ${'grade_box_'.$x.'_check'} = false;
                  }
                  }
                  
                  
                  //testtype filter
                  $count = "SELECT COUNT(idtesttypetags) FROM tags.testtypetags";
                  $all = mysql_fetch_array(mysql_query($count));
                  for ($x = 1; $x<=$all[0]; $x++){
                    if (isset($_POST['testtype_box_'.$x])) {
                      if ($_POST['testtype_box_'.$x] == $value) {
                          ${'testtype_box_'.$x.'_check'} = true;
                          $type1_testtype_filter_bool = true;
                      } else {
                          ${'testtype_box_'.$x.'_check'} = false;
                          print 'Invalid checkbox value submitted.';
                      }
                  } else {
                      ${'testtype_box_'.$x.'_check'} = false;
                  }
                  }
                  
                  
                  //textbook filter
                  $count = "SELECT COUNT(idtextbooktags) FROM tags.textbooktags";
                  $all = mysql_fetch_array(mysql_query($count));
                  for ($x = 1; $x<=$all[0]; $x++){
                    if (isset($_POST['textbook_box_'.$x])) {
                      if ($_POST['textbook_box_'.$x] == $value) {
                          ${'textbook_box_'.$x.'_check'} = true;
                          $type1_textbook_filter_bool = true;
                      } else {
                          ${'textbook_box_'.$x.'_check'} = false;
                          print 'Invalid checkbox value submitted.';
                      }
                  } else {
                      ${'textbook_box_'.$x.'_check'} = false;
                  }
                  }
                  //lesson filter
                  for ($x = 1; $x<=4; $x++){
                    if (isset($_POST['lesson_box_'.$x])) {
                      if ($_POST['lesson_box_'.$x] == $value) {
                          ${'lesson_box_'.$x.'_check'} = true;
                          $type1_lesson_filter_bool = true;
                      } else {
                          ${'lesson_box_'.$x.'_check'} = false;
                          print 'Invalid checkbox value submitted.';
                      }
                  } else {
                      ${'lesson_box_'.$x.'_check'} = false;
                  }
                  }
                  //knowledge filter
                  $count = "SELECT COUNT(idknowledgetags) FROM tags.knowledgetags";
                  $all = mysql_fetch_array(mysql_query($count));
                  for ($x = 1; $x<=$all[0]; $x++){
                    if (isset($_POST['knowledge_box_'.$x])) {
                      if ($_POST['knowledge_box_'.$x] == $value) {
                          ${'knowledge_box_'.$x.'_check'} = true;
                          $type1_knowledge_filter_bool = true;
                      } else {
                          ${'knowledge_box_'.$x.'_check'} = false;
                          print 'Invalid checkbox value submitted.';
                      }
                  } else {
                      ${'knowledge_box_'.$x.'_check'} = false;
                  }
                  }
                  //difficulty filter
                  for ($x = 1; $x<=3; $x++){
                    if (isset($_POST['difficulty_box_'.$x])) {
                      if ($_POST['difficulty_box_'.$x] == $value) {
                          ${'difficulty_box_'.$x.'_check'} = true;
                          $type1_lesson_filter_bool = true;
                      } else {
                          ${'difficulty_box_'.$x.'_check'} = false;
                          print 'Invalid checkbox value submitted.';
                      }
                  } else {
                      ${'difficulty_box_'.$x.'_check'} = false;
                  }
                  }
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  //start actual filter
                  
                  if (!$type1_year_filter_bool && !$type1_grade_filter_bool
                  &&!$type1_testtype_filter_bool &&!$type1_textbook_filter_bool
                  &&!$type1_lesson_filter_bool &&!$type1_knowledge_filter_bool
                  &&!$type1_difficulty_filter_bool) {
                    print "No year selected\n";
                    $type_1_final_db_used = "SELECT * FROM test.fill_blank";
                    $type_1_final_db_used_query = mysql_query($type_1_final_db_used);
                    print "using original db";
                    while( $row = mysql_fetch_array($type_1_final_db_used_query))
                    {
                    print $row['question'];
                    }
                  }
                  
                  else{
                    $type_1_final_db_used = "SELECT * FROM test.fill_blank";
                    //year
                    /*if ($type1_year_filter_bool){
                    print "There is at least one year selected";
                  
                    for ($x = 1; $x<=4; $x++){
                      if (${'year_box_'.$x.'_check'}){
                      ${'fill_blank_year_box_'.$x} = "SELECT * FROM test.fill_blank WHERE year BETWEEN (1996+$x*5) AND (2000+$x*5)";
                      ${'fill_blank_year_box_'.$x.'_query'} = mysql_query('fill_blank_year_box_'.$x);
                  
                      print "year box $x selected";
                    }
                  
                  }*/
                  
                  
                    /*if ($year_box_1_check) {
                      $fill_blank_year_box_1 = "SELECT * FROM test.fill_blank WHERE year BETWEEN 2000 AND 2005";
                      $fill_blank_year_box_1_query = mysql_query($fill_blank_year_box_1);
                  
                      print "year box 1 selected";
                    }
                    if ($year_box_2_check) {
                      $fill_blank_year_box_2 = "SELECT * FROM test.fill_blank WHERE year BETWEEN 2006 AND 2010";
                      $fill_blank_year_box_2_query = mysql_query($fill_blank_year_box_2);
                  
                      print "year box 2 selected";
                    }
                    if ($year_box_3_check) {
                      $fill_blank_year_box_3 = "SELECT * FROM test.fill_blank WHERE year BETWEEN 2011 AND 2015";
                      $fill_blank_year_box_3_query = mysql_query($fill_blank_year_box_3);
                      print "year box 3 selected";
                    }
                    if ($year_box_4_check) {
                      $fill_blank_year_box_4 = "SELECT * FROM test.fill_blank WHERE year BETWEEN 2016 AND 2017";
                      $fill_blank_year_box_4_query = mysql_query($fill_blank_year_box_4);
                      print "year box 4 selected";
                    }*/
                  
                  
                    /*$type_1_final_db_used = $fill_blank_year_box_1."
                      ".UNION." ".$fill_blank_year_box_2."
                      ".UNION." ".$fill_blank_year_box_3."
                      ".UNION." ".$fill_blank_year_box_4;
                      print "questions selected from box";
                      $type_1_final_db_used_query = mysql_query($type_1_final_db_used);
                      while( $row = mysql_fetch_array($type_1_final_db_used_query))
                      {
                      print $row['question'];
                      }
                    }*/
                  //year
                  if ($type1_year_filter_bool){
                    print "There is at least one year selected";
                  
                    for ($x = 1; $x<=4; $x++){
                      if (${'year_box_'.$x.'_check'}){
                      ${'fill_blank_year_box'} = "SELECT * FROM test.fill_blank WHERE year BETWEEN (1996+$x*5) AND (2000+$x*5)";
                      $type1_final_year_used = $type1_final_year_used." ".UNION." ".$fill_blank_year_box;
                      print "year box $x selected";
                      }
                  
                    }
                  
                  
                      $type_1_final_db_used = $type_1_final_db_used." ".INTERSECT." ".$type1_final_year_used;
                  
                  }
                  //grade
                    if ($type1_grade_filter_bool){
                      print "There is at least one grade selected";
                  
                      for ($x = 1; $x<=12; $x++){
                        if (${'grade_box_'.$x.'_check'}){
                        ${'fill_blank_grade_box'} = "SELECT * FROM test.fill_blank WHERE grade = $x";
                        $type1_final_grade_used = $type1_final_grade_used." ".UNION." ".$fill_blank_grade_box;
                        print "grade box $x selected";
                        }
                  
                      }
                      $type_1_final_db_used = $type_1_final_db_used." ".INTERSECT." ".$type1_final_grade_used;
                  
                  
                    }
                    //testtype
                    $db_tagname = mysql_fetch_array(mysql_query("SELECT testtype FROM tags.testtypetags"));
                    $count = "SELECT COUNT(idtesttypetags) FROM tags.testtypetags";
                    $all = mysql_fetch_array(mysql_query($count));
                    if ($type1_testtype_filter_bool){
                      print "There is at least one testtype selected";
                  
                      for ($x = 1; $x<=all[0]; $x++){
                        if (${'testtype_box_'.$x.'_check'}){
                        ${'fill_blank_testtype_box'} = "SELECT * FROM test.fill_blank WHERE testtype = db_tagname[$x-1]";
                        $type1_final_testtype_used = $type1_final_testtype_used." ".UNION." ".$fill_blank_testtype_box;
                        print "testtype box $x selected";
                        }
                  
                      }
                      $type_1_final_db_used = $type_1_final_db_used." ".INTERSECT." ".$type1_final_testtype_used;
                  
                  
                    }
                  
                  //textbook
                  $db_tagname = mysql_fetch_array(mysql_query("SELECT textbook FROM tags.textbooktags"));
                  $count = "SELECT COUNT(idtextbooktags) FROM tags.textbooktags";
                  $all = mysql_fetch_array(mysql_query($count));
                  if ($type1_textbook_filter_bool){
                    print "There is at least one textbook selected";
                  
                    for ($x = 1; $x<=all[0]; $x++){
                      if (${'textbook_box_'.$x.'_check'}){
                        print "lululalalalallalala";
                      ${'fill_blank_textbook_box'} = "SELECT * FROM test.fill_blank WHERE textbook = db_tagname[$x-1]";
                      $type1_final_textbook_used = $type1_final_textbook_used." ".UNION." ".$fill_blank_textbook_box;
                      print "textbook box $x selected";
                      }
                  
                    }
                    $type_1_final_db_used = $type_1_final_db_used." ".INTERSECT." ".$type1_final_textbook_used;
                  
                  
                  }
                  //lesson
                  if ($type1_lesson_filter_bool){
                    print "There is at least one lesson selected";
                  
                    for ($x = 1; $x<=4; $x++){
                      if (${'lesson_box_'.$x.'_check'}){
                      ${'fill_blank_lesson_box'} = "SELECT * FROM test.fill_blank WHERE lesson = $x";
                      $type1_final_lesson_used = $type1_final_lesson_used." ".UNION." ".$fill_blank_lesson_box;
                      print "lesson box $x selected";
                      }
                  
                    }
                    $type_1_final_db_used = $type_1_final_db_used." ".INTERSECT." ".$type1_final_lesson_used;
                  
                  
                  }
                  //knowledge
                  $db_tagname = mysql_fetch_array(mysql_query("SELECT knowledge FROM tags.knowledgetags"));
                  $count = "SELECT COUNT(idknowledgetags) FROM tags.knoeledgetags";
                  $all = mysql_fetch_array(mysql_query($count));
                  if ($type1_knowledge_filter_bool){
                    print "There is at least one knowledge selected";
                  
                    for ($x = 1; $x<=all[0]; $x++){
                      if (${'knowledge_box_'.$x.'_check'}){
                      ${'fill_blank_knowledge_box'} = "SELECT * FROM test.fill_blank WHERE knowledge = db_tagname[$x-1]";
                      $type1_final_knowledge_used = $type1_final_knowledge_used." ".UNION." ".$fill_blank_knowledge_box;
                      print "textbook box $x selected";
                      }
                  
                    }
                    $type_1_final_db_used = $type_1_final_db_used." ".INTERSECT." ".$type1_final_textbook_used;
                  
                  
                  }
                  //difficulty
                  
                  $difficulty_array = Array('Easy', 'Medium', 'Hard');
                  if ($type1_difficulty_filter_bool){
                    print "There is at least one difficulty selected";
                  
                    for ($x = 1; $x<=3; $x++){
                      if (${'difficulty_box_'.$x.'_check'}){
                      ${'fill_blank_difficulty_box'} = "SELECT * FROM test.fill_blank WHERE difficulty = difficulty_array[$x-1]";
                      $type1_final_difficulty_used = $type1_final_difficulty_used." ".UNION." ".$fill_blank_difficulty_box;
                      print "difficulty box $x selected";
                      }
                  
                    }
                    $type_1_final_db_used = $type_1_final_db_used." ".INTERSECT." ".$type1_final_difficulty_used;
                  
                  
                  }
                  
                  
                  
                  
                  //after all
                  
                  
                  $type_1_final_db_used_query = mysql_query($type_1_final_db_used);
                  while( $row = mysql_fetch_array($type_1_final_db_used_query))
                  {
                  print $row['question'];
                  }
                  }
                  
                  
                  
                  
                  
                  
                  }
                  
                  
                  ?>
               <hr>
               <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
               <button type="button" class="btn btn-primary">Test Type 2</button>
               Learning and Practicing: 10 multiple-choice, 5 fill-blank, 2 sentences, 2 translation
               <hr>
               <!-- Indicates a successful or positive action -->
               <button type="button" class="btn btn-success">Test Type 3</button>
               Focus on Grammar: 25 multiple-choice, 25 fill-blank, 5 translation, 5 sentences
               <hr>
               <!-- Contextual button for informational alert messages -->
               <button type="button" class="btn btn-info">Test Type 4</button>
               Test: 10 multiple-choice, 1 reading, 10 fill-blank, 2 translation, 5 sentences
               <hr>
               <!-- Indicates caution should be taken with this action -->
               <button type="button" class="btn btn-warning">Test Type 5</button>
               Homework: 10 multiple-choice, 2 reading, 2 translation, 5 sentences
               <hr>
               <!-- Indicates a dangerous or potentially negative action -->
               <button type="button" class="btn btn-danger">Test Type 6</button>
               Phase Quiz: 20 multiple-choice, 1 wanxing, 4 reading, 1 interaction, 1 mission reading
               <hr>
               <button type="button" class="btn btn-primary">Test Type 7</button>
               Tutorial Practicing: 25 multiple-choice, 30 fill-blank, 10 sentences trans, 5 translation
               <hr>
               <hr>
               <div class="footer">
                  <p>
                     <a href="javascript:demoTwoPageDocument()" class="button">get sample pdf</a>
                  </p>
               </div>
               <div class="footer">
                  <p>&copy; Air English 2015</p>
               </div>
            </div>
            <!-- /container -->
    
      <!-- bootstrap -->
      <div class="modal fade largeModal" id="pudding" tabindex="-1" role="dialog">
      <?php
         $chkArr = isset($_POST['chk']) ? $_POST['chk'] : array();
         $chkArrCSV = implode(',',$chkArr);
         ?>
      <div class="modal-dialog " role="document">
      <div class="modal-content">
      <div class="modal-header">
      <h3>PREVIEW</h3>
      </div>
      <div class="modal-body">
      <?php
         $db = mysql_connect('localhost','root','password')
          or die('Error connecting to MySQL server.');
          @mysql_select_db("test", $db);
         
          $fill_blank_sql = "SELECT * FROM test.fill_blank";
         
         
         
         
         
         
         
         
         
          if ($year_box_1_check){
            $fill_blank_year_box_1 = "SELECT * FROM test.fill_blank WHERE year BETWEEN 2000 AND 2005";
            $fill_blank_year_box_1_query = mysql_query($fill_blank_year_box_1);
            echo "haha";
          }
          if ($year_box_2.checked){
            $fill_blank_year_box_2 = "SELECT * FROM test.fill_blank WHERE year BETWEEN 2006 AND 2010";
            $fill_blank_year_box_2_query = mysql_query($fill_blank_year_box_2);
          }
          if ($year_box_3.checked){
            $fill_blank_year_box_3 = "SELECT * FROM test.fill_blank WHERE year BETWEEN 2011 AND 2015";
            $fill_blank_year_box_3_query = mysql_query($fill_blank_year_box_3);
          }
          if ($year_box_4.checked){
            $fill_blank_year_box_4 = "SELECT * FROM test.fill_blank WHERE year BETWEEN 2016 AND 2017";
            $fill_blank_year_box_4_query = mysql_query($fill_blank_year_box_4);
          }
         
          /*while( $row = mysql_fetch_array($fill_blank_year_box_1_query))
          {
          echo $row['question'];
         }
         echo "\n";
         while( $row = mysql_fetch_array($fill_blank_year_box_2_query))
         {
         echo $row['question'];
         }
         echo "\n";
         while( $row = mysql_fetch_array($fill_blank_year_box_3_query))
         {
         echo $row['question'];
         }
         echo "\n";
         while( $row = mysql_fetch_array($fill_blank_year_box_4_query))
         {
         echo $row['question'];
         }
         echo "\n";*/
         
         
         
         
          $fill_blank_result = mysql_query($fill_blank_sql);
         
          $count = "SELECT COUNT(idfill_blank) FROM test.fill_blank";
          $all = mysql_fetch_array(mysql_query($count) );
          $total_num = $all[0];
         
          $question_1_index = rand(1, $total_num);
          //echo "$question_1_index";
          $questions_for_samples_query = mysql_fetch_row(mysql_query("SELECT question FROM test.fill_blank WHERE idfill_blank = $question_1_index"));
          $questions_for_samples_1 = $questions_for_samples_query[0];
          $answers_for_samples_query = mysql_fetch_row(mysql_query("SELECT answer FROM test.fill_blank WHERE idfill_blank = $question_1_index"));
          $answers_for_samples_1 = $answers_for_samples_query[0];
         
          $question_2_index = rand(1, $total_num);
          while ($question_1_index == $question_2_index){
            $question_2_index = rand(1, $total_num);
          }
          //echo "$question_2_index";
          $questions_for_samples_query = mysql_fetch_row(mysql_query("SELECT question FROM test.fill_blank WHERE idfill_blank = $question_2_index"));
          $questions_for_samples_2 = $questions_for_samples_query[0];
          $answers_for_samples_query = mysql_fetch_row(mysql_query("SELECT answer FROM test.fill_blank WHERE idfill_blank = $question_2_index"));
          $answers_for_samples_2 = $answers_for_samples_query[0];
         
          $question_3_index = rand(1, $total_num);
          while ($question_1_index == $question_3_index || $question_2_index == $question_3_index){
            $question_3_index = rand(1, $total_num);
          }
          //echo "$question_3_index";
          $questions_for_samples_query = mysql_fetch_row(mysql_query("SELECT question FROM test.fill_blank WHERE idfill_blank = $question_3_index"));
          $questions_for_samples_3 = $questions_for_samples_query[0];
          $answers_for_samples_query = mysql_fetch_row(mysql_query("SELECT answer FROM test.fill_blank WHERE idfill_blank = $question_3_index"));
          $answers_for_samples_3 = $answers_for_samples_query[0];
         
         
         $questions_for_samples = array ($questions_for_samples_1, $questions_for_samples_2, $questions_for_samples_3);
         $answers_for_samples = array ($answers_for_samples_1, $answers_for_samples_2, $answers_for_samples_3);
          /*echo "$questions_for_samples[0]";
           echo "$questions_for_samples[1]";
            echo "$questions_for_samples[2]";
            echo "$answers_for_samples[0]";
             echo "$answers_for_samples[1]";
              echo "$answers_for_samples[2]";*/
         ?>
      </div>
      </div>
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
      </span>
      </p>
      </div>
      </div>
        </form>
      <script>
         func year_box_func(){
         
           var year_box_1_in_js = document.getElementById('year_box_1')
           if (year_box_1_in_js.checked == true){
              document.getElementById('year_box_1_check') = true
           }
           else {
             document.getElementById('year_box_1_check') = false
           }
         }
         
         
         
         
         
         
         
         function question_sample(){
           var doc_1 = new jsPDF();
           var doc_2 = new jsPDF();
           var question_sample_val_0 = "<?php echo $questions_for_samples[0] ?>";
           var question_sample_val_1 = "<?php echo $questions_for_samples[1] ?>";
           var question_sample_val_2 = "<?php echo $questions_for_samples[2] ?>";
           var answer_sample_val_0 = "<?php echo $answers_for_samples[0] ?>";
           var answer_sample_val_1 = "<?php echo $answers_for_samples[1] ?>";
           var answer_sample_val_2 = "<?php echo $answers_for_samples[2] ?>";
           doc_1.text(20, 20, '1. ' + question_sample_val_0);
           doc_1.text(20, 30, '2. ' + question_sample_val_1);
           doc_1.text(20, 40, '3. ' + question_sample_val_2);
         
         
           doc_2.text(20, 20, '1. ' + answer_sample_val_0);
           doc_2.text(20, 30, '2. ' + answer_sample_val_1);
           doc_2.text(20, 40, '3. ' + answer_sample_val_2);
         
           // Save the PDF
           doc_1.save('Sample Questions.pdf');
           doc_2.save('Sample Answers.pdf');
         }
      </script>
      <!-- Le javascript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
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
   </body>
</html>