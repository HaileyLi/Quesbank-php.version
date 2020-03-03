<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Template &middot; Bootstrap</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
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
         .footer {
         padding-left: 10%;
         padding-right: 10%;
         }
         span.langsetting {
         float: right;
         }
         div#sepmanagepage{
         width:80%;
         margin:0 auto;
         }
         div#manageall {
         margin-top: 6%;
         }
         h1.managepagetitle {
         text-align: center;
         margin-bottom: 35px;
         }
         span.stat {
         float: right;
         }
         table#myTable tr th:hover{
         background:#eeeeee;
         }
         table#myTable{
         margin-top:25px;
         }
         table#myTable tr th:after{
         content:"▾";
         }
         #header-fixed {
         position: fixed;
         top: 140px;
         display:none;
         background-color:white;
         }
         div.addquespage{
         width:80%;
         margin:0 auto;
         margin-top:5%;
         }
         span#deleteInputButton button {
         width: 100%;
    padding: 10px;
       background: #d9534f;
    border:1px solid #d43f3a;
    color: white;
}
input.submitNewQues {
width: 100%;
    padding: 10px;
       background: #337ab7;
    border:1px solid #2e6da4;
    color: white;

}
button.addNewInput {
width: 100%;
    padding: 10px;
       background: #5cb85c;
    border:1px solid #4cae4c;
    color: white;

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
   <body onload="loadLanguage()">
      <div class="container-narrow">
      <div class="masthead">
         <ul class="nav nav-pills pull-right">
            <li class="active"><a href="index.php" class="lang" key="home">Home</a></li>
            <li><a href="manage.php" class="lang" key="manage">Manage</a></li>
            <li><a href="contact.html" class="lang" key="contact">Contact</a></li>
         </ul>
         <h3 class="muted">QuesBank</h3>
      </div>
      <hr>
      <div>
         <!-- Nav tabs -->
         <div class="addquespage">
            <ul class="nav nav-tabs" role="tablist">
               <li role="presentation" class="active"><a href="#fill_blank" aria-controls="fillblank" role="tab" data-toggle="tab" class="lang" key="fillBlank">Fillblank</a></li>
               <li role="presentation"><a href="#multichoice" aria-controls="multichoice" role="tab" data-toggle="tab" class="lang" key="multiChoice">Multichoice</a></li>
               <li role="presentation"><a href="#sentence" aria-controls="sentence" role="tab" data-toggle="tab" class="lang" key="sentenceTrans">Sentencetrans</a></li>
               <li role="presentation"><a href="#interaction" aria-controls="interaction" role="tab" data-toggle="tab" class="lang" key="interaction">Interaction</a></li>
               <li role="presentation"><a href="#readingmu" aria-controls="readingmu" role="tab" data-toggle="tab" class="lang" key="wanxing">Readingmulti</a></li>
               <li role="presentation"><a href="#reading" aria-controls="reading" role="tab" data-toggle="tab" class="lang" key="reading">Reading</a></li>
               <li role="presentation"><a href="#readingmi" aria-controls="readingmi" role="tab" data-toggle="tab" class="lang" key="readingMission">Readingmission</a></li>
               <li role="presentation"><a href="#translation" aria-controls="translation" role="tab" data-toggle="tab" class="lang" key="translation">Translation</a></li>
               <li role="presentation"><a href="#listening" aria-controls="listening" role="tab" data-toggle="tab" class="lang" key="listening">Listening</a></li>
               <li role="presentation"><a href="#writing" aria-controls="writing" role="tab" data-toggle="tab" class="lang" key="writing">Writing</a></li>
               <li role="presentation"><a href="#others" aria-controls="others" role="tab" data-toggle="tab" class="lang" key="others">Others</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane fade in active" id="fill_blank">
                  <br>
                  <div id="addfillblank">
                     <?php
                        $db = mysql_connect('localhost','root','password')
                         or die('Error connecting to MySQL server.');
                         //$pStatement = $db->getConnection()->query("SET CHARACTER SET utf8");

                        ?>
                     <form method="post">
                        <span name="inputs" id="inputs">
                           <span name="firstInput">
                              <div  class="addAquestion">
                                 <h3  class="lang" key="referenceBigHeader">References</h3>
                                 <hr>
                                 <span class="lang" key="yearHeader">Year</span>
                                 <!--   <input id="year" class="yearInput" name="year[]" type="text" placeholder="Year" > -->
                                 <select id="year" class="yearInputFillBlank" name="year[]" type="text" placeholder="Year" >
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                 </select>
                                 <span class="lang"  key="gradeHeader">Grade</span>
                                 <!-- <input id="grade" class="gradeInput" name="grade[]" type="text" placeholder="Grade" > -->
                                 <select id="grade" class="gradeInputFillBlank" name="grade[]" type="text" placeholder="Grade">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                 </select>
                                 <span class="lang" key="testtypeHeader">Testtype</span>
                                 <!-- <input id="testtype" class="testtypeInput" name="testtype[]" type="text" placeholder="Testtype" > -->
                                 <select id="testtype" class="testtypeInputFillBlank" name="testtype[]" type="text" placeholder="Testtype">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.testtypetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $testtype = $row['testtype'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$testtype" ?>"><?php echo "$testtype" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="referenceHeader">Reference</span>
                                 <input id="reference" class="referenceInputFillBlank referenceInput" name="reference[]" type="text" placeholder="Reference" ><br>
                                 <!--  <input id="textbook" class="textbookInput" name="textbook[]" type="text" placeholder="Textbook" > -->
                                 <span class="lang" key="textbookHeader">Textbook</span>
                                 <select id="textbook" class="textbookInputFillBlank" name="textbook[]" type="text" placeholder="Textbook">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.textbooktags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $textbook = $row['textbook'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$textbook" ?>"><?php echo "$textbook" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="lessonHeader">Lesson</span>
                                 <!-- <input id="lesson" class="lessonInput" name="lesson[]" type="text" placeholder="Lesson" > -->
                                 <select id="lesson" class="lessonInputFillBlank" name="lesson[]" type="text" placeholder="Lesson">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                 </select>
                                 <!-- <input id="knowledge" class="knowledgeInput" name="knowledge[]" type="text" placeholder="Knowledge" > -->
                                 <span class="lang" key="knowledgeHeader">Knowledge</span>
                                 <select id="knowledge" class="knowledgeInputFillBlank" name="knowledge[]" type="text" placeholder="Knowledge" >
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.knowledgetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $knowledge = $row['knowledge'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$knowledge" ?>"><?php echo "$knowledge" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="difficultyHeader">Difficulty</span>
                                 <select id="difficulty" class="difficultyInputFillBlank" name="difficulty[]" type="text" placeholder="difficulty">
                                    <option class="lang" key="hard">Hard</option>
                                    <option class="lang" key="medium">Medium</option>
                                    <option class="lang" key="easy">Easy</option>
                                 </select>
                                 <h3>Q & A </h3>
                                 <hr>
                                 <textarea rows="4" id="question" class="questionInputFillBlank questionInput" name="question[]" type="text" placeholder="Question" ></textarea>
                                 <textarea rows="4" id="answer" class="answerInputFillBlank answerInput" name="answer[]" type="text" placeholder="Answer" ></textarea>
                                 <br>
                                 <hr>
                                 <span id="deleteInputButton">
                                 <button type="button" name="deleteInputFillBlank"  class="lang" key="deleteInput"  value="0" onclick="deleteInputs(this.value, 0)" >Delete Input</button>
                                 </span>
                              </div>
                           </span>
                        </span>
                        <input name="add" type="submit" id="add" value="Submit Question" class="submitNewQues" >
                        <br>
                     </form>
                     <button type="button" name="addInput" class="addNewInput lang" onclick="addInputs(0)" key="addInput">Add Input</button>
                     <?php if ( $_REQUEST['add'] ){
                        mysql_select_db("test", $db);
                        $years = $_POST['year'];
                        $grades = $_POST['grade'];
                        $testtypes = $_POST['testtype'];
                        $references = $_POST['reference'];
                        $textbooks = $_POST['textbook'];
                        $lessons = $_POST['lesson'];
                        $knowledges = $_POST['knowledge'];
                        $difficulties = $_POST['difficulty'];
                        $questions = $_POST['question'];
                        $answers = $_POST['answer'];
                        $dates = $_POST['date'];
                           $dom = new DOMDocument();

                           for ($i=0, $count = count($questions); $i <$count ; $i++) {
                             # code...
                             $year = $years[$i];
                             $grade = $grades[$i];
                             $testtype = $testtypes[$i];
                             $reference = $references[$i];
                             $textbook = $textbooks[$i];
                             $lesson = $lessons[$i];
                             $knowledge = $knowledges[$i];
                             $difficulty = $difficulties[$i];
                             $question = $questions[$i];
                             $answer =  $answers[$i];
                              //echo $question;
                            //     echo $answer;
                            //     echo  $book;
                            //     echo $diff;
                        if ($difficulty == '困难') {
                        $difficulty = 'Hard';
                        }else if($difficulty == '简单'){
                        $difficulty = 'Easy';
                        }else if($difficulty == '适中'){
                        $difficulty = 'Medium';
                        }
                        $date = date('Y-m-d');
                        $yearString =  mysql_real_escape_string($year);
                        $gradeString = mysql_real_escape_string($grade);
                        $testtypeString = mysql_real_escape_string($testtype);
                        $referenceString = mysql_real_escape_string($reference);
                        $textbookString =  mysql_real_escape_string($textbook);
                        $lessonString =  mysql_real_escape_string($lesson);
                        $knowledgeString = mysql_real_escape_string($knowledge);
                        $diffcultyString = mysql_real_escape_string($difficulty);
                        $questionString = mysql_real_escape_string($question);
                        $answerString = mysql_real_escape_string($answer);



                             $sql = "INSERT INTO test.fill_blank
                                    (year, grade, testtype, reference, textbook, lesson, knowledge, difficulty, question, answer, date)
                                    VALUES('$yearString','$gradeString','$testtypeString','$referenceString','$textbookString','$lessonString','$knowledgeString','$diffcultyString','$questionString','$answerString', '$date')";
                                       $retval = mysql_query( $sql, $db);
                           }

                        if(! $retval)
                        {
                          die('Could not update data: ' . mysql_error());
                        }

                        echo '<script type="text/javascript">';
                        echo  'var update_text= "Data updated successfully!" ;   ';
                        echo 'alert(update_text)  ;' ;
                        echo ' </script> ';

                        mysql_close($db);
                        }
                        ?>
                  </div>
               </div>
               <div role="tabpanel" class="tab-pane fade in" id="multichoice">
                  <br>
                  <div id="addmultichoice">
                     <?php
                        $db = mysql_connect('localhost','root','password')
                         or die('Error connecting to MySQL server.');
                         //$pStatement = $db->getConnection()->query("SET CHARACTER SET utf8");

                        ?>
                     <form method="post">
                        <span name="inputs" id="inputs">
                           <span name="firstInput">
                              <div  class="addAquestion">
                                 <h3 class="lang" key="referenceBigHeader">References</h3>
                                 <hr>
                                 <span class="lang" key="yearHeader">Year</span>
                                 <!--   <input id="year" class="yearInput" name="year[]" type="text" placeholder="Year" > -->
                                 <select id="year" class="yearInputMultiChoice" name="year[]" type="text" placeholder="Year">
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                 </select>
                                 <span class="lang" key="gradeHeader">Grade</span>
                                 <!-- <input id="grade" class="gradeInput" name="grade[]" type="text" placeholder="Grade" > -->
                                 <select id="grade" class="gradeInputMultiChoice" name="grade[]" type="text" placeholder="Grade">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                 </select>
                                 <span class="lang" key="testtypeHeader">Testtype</span>
                                 <!-- <input id="testtype" class="testtypeInput" name="testtype[]" type="text" placeholder="Testtype" > -->
                                 <select id="testtype" class="testtypeInputMultiChoice" name="testtype[]" type="text" placeholder="Testtype">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.testtypetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $testtype = $row['testtype'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$testtype" ?>"><?php echo "$testtype" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="referenceHeader">Reference</span>
                                 <input id="reference" class="referenceInputMultiChoice referenceInput" name="reference[]" type="text" placeholder="Reference" ><br>
                                 <!--  <input id="textbook" class="textbookInput" name="textbook[]" type="text" placeholder="Textbook" > -->
                                 <span class="lang" key="textbookHeader">Textbook</span>
                                 <select id="textbook" class="textbookInputMultiChoice" name="textbook[]" type="text" placeholder="Textbook">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.textbooktags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $textbook = $row['textbook'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$textbook" ?>"><?php echo "$textbook" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="lessonHeader">Lesson</span>
                                 <!-- <input id="lesson" class="lessonInput" name="lesson[]" type="text" placeholder="Lesson" > -->
                                 <select id="lesson" class="lessonInputMultiChoice" name="lesson[]" type="text" placeholder="Lesson">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                 </select>
                                 <!-- <input id="knowledge" class="knowledgeInput" name="knowledge[]" type="text" placeholder="Knowledge" > -->
                                 <span class="lang" key="knowledgeHeader">Knowledge</span>
                                 <select id="knowledge" class="knowledgeInputMultiChoice" name="knowledge[]" type="text" placeholder="Knowledge" >
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.knowledgetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $knowledge = $row['knowledge'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$knowledge" ?>"><?php echo "$knowledge" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="difficultyHeader">Difficulty</span>
                                 <select id="difficulty" class="difficultyInputMultiChoice" name="difficulty[]" type="text" placeholder="difficulty">
                                    <option class="lang" key="hard">Hard</option>
                                    <option class="lang" key="medium">Medium</option>
                                    <option class="lang" key="easy">Easy</option>
                                 </select>
                                 <h3>Q & A </h3>
                                 <hr>
                                 <textarea rows="4" id="question" class="questionInputMultiChoice questionInput" name="question[]" type="text" placeholder="Question" ></textarea>
                                 <textarea rows="4" id="answer" class="answerInputMultiChoice answerInput" name="answer[]" type="text" placeholder="Answer" ></textarea>
                                 <br>
                                 <hr>
                                 <span id="deleteInputButton">
                                 <button type="button" name="deleteInputMultiChoice"  value="0" onclick="deleteInputs(this.value, 1) " class="lang" key="deleteInput" >Delete Input</button>
                                 </span>
                              </div>
                           </span>
                        </span>
                        <input name="submitMultiChoice" type="submit" id="submitMultiChoice" value="Submit Question" class="submitNewQues submit">
                        <br>
                     </form>
                     <button type="button" name="addInput" class="addNewInput lang" onclick="addInputs(1)" key="addInput">Add Input</button>
                     <?php if ( $_REQUEST['submitMultiChoice'] ){
                        mysql_select_db("test", $db);
                        $years = $_POST['year'];
                        $grades = $_POST['grade'];
                        $testtypes = $_POST['testtype'];
                        $references = $_POST['reference'];
                        $textbooks = $_POST['textbook'];
                        $lessons = $_POST['lesson'];
                        $knowledges = $_POST['knowledge'];
                        $difficulties = $_POST['difficulty'];
                        $questions = $_POST['question'];
                        $answers = $_POST['answer'];
                        $dates = $_POST['date'];
                           $dom = new DOMDocument();

                           for ($i=0, $count = count($questions); $i <$count ; $i++) {
                             # code...
                             $year = $years[$i];
                             $grade = $grades[$i];
                             $testtype = $testtypes[$i];
                             $reference = $references[$i];
                             $textbook = $textbooks[$i];
                             $lesson = $lessons[$i];
                             $knowledge = $knowledges[$i];
                             $difficulty = $difficulties[$i];
                             $question = $questions[$i];
                             $answer =  $answers[$i];
                              //echo $question;
                            //     echo $answer;
                            //     echo  $book;
                            //     echo $diff;
                        if ($difficulty == '困难') {
                        $difficulty = 'Hard';
                        }else if($difficulty == '简单'){
                        $difficulty = 'Easy';
                        }else if($difficulty == '适中'){
                        $difficulty = 'Medium';
                        }
                        $date = date('Y-m-d');
                        $yearString =  mysql_real_escape_string($year);
                        $gradeString = mysql_real_escape_string($grade);
                        $testtypeString = mysql_real_escape_string($testtype);
                        $referenceString = mysql_real_escape_string($reference);
                        $textbookString =  mysql_real_escape_string($textbook);
                        $lessonString =  mysql_real_escape_string($lesson);
                        $knowledgeString = mysql_real_escape_string($knowledge);
                        $diffcultyString = mysql_real_escape_string($difficulty);
                        $questionString = mysql_real_escape_string($question);
                        $answerString = mysql_real_escape_string($answer);



                             $sql = "INSERT INTO test.multi_choice
                                    (year, grade, testtype, reference, textbook, lesson, knowledge, difficulty, question, answer, date)
                                    VALUES('$yearString','$gradeString','$testtypeString','$referenceString','$textbookString','$lessonString','$knowledgeString','$diffcultyString','$questionString','$answerString', '$date')";
                                       $retval = mysql_query( $sql, $db);
                           }

                        if(! $retval)
                        {
                          die('Could not update data: ' . mysql_error());
                        }
                        echo '<script type="text/javascript">';
                        echo  'var update_text= "Data updated successfully!" ;   ';
                        echo 'alert(update_text)  ;' ;
                        echo ' </script> ';

                        mysql_close($db);
                        }
                        ?>
                  </div>
               </div>
               <div role="tabpanel" class="tab-pane fade in" id="sentence">
                  <br>
                  <div id="addsentencetrans">
                     <?php
                        $db = mysql_connect('localhost','root','password')
                         or die('Error connecting to MySQL server.');
                         //$pStatement = $db->getConnection()->query("SET CHARACTER SET utf8");

                        ?>
                     <form method="post">
                        <span name="inputs" id="inputs">
                           <span name="firstInput">
                              <div  class="addAquestion">
                                 <h3 class="lang" key="referenceBigHeader">References</h3>
                                 <hr>
                                 <span class="lang" key="yearHeader">Year</span>
                                 <!--   <input id="year" class="yearInput" name="year[]" type="text" placeholder="Year" > -->
                                 <select id="year" class="yearInputSentenceTrans" name="year[]" type="text" placeholder="Year">
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                 </select>
                                 <span class="lang" key="gradeHeader">Grade</span>
                                 <!-- <input id="grade" class="gradeInput" name="grade[]" type="text" placeholder="Grade" > -->
                                 <select id="grade" class="gradeInputSentenceTrans" name="grade[]" type="text" placeholder="Grade">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                 </select>
                                 <span class="lang" key="testtypeHeader">Testtype</span>
                                 <!-- <input id="testtype" class="testtypeInput" name="testtype[]" type="text" placeholder="Testtype" > -->
                                 <select id="testtype" class="testtypeInputSentenceTrans" name="testtype[]" type="text" placeholder="Testtype">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.testtypetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $testtype = $row['testtype'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$testtype" ?>"><?php echo "$testtype" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="referenceHeader">Reference</span>
                                 <input id="reference" class="referenceInputSentenceTrans referenceInput" name="reference[]" type="text" placeholder="Reference" ><br>
                                 <!--  <input id="textbook" class="textbookInput" name="textbook[]" type="text" placeholder="Textbook" > -->
                                 <span class="lang" key="textbookHeader">Textbook</span>
                                 <select id="textbook" class="textbookInputSentenceTrans" name="textbook[]" type="text" placeholder="Textbook">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.textbooktags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $textbook = $row['textbook'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$textbook" ?>"><?php echo "$textbook" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="lessonHeader">Lesson</span>
                                 <!-- <input id="lesson" class="lessonInput" name="lesson[]" type="text" placeholder="Lesson" > -->
                                 <select id="lesson" class="lessonInputSentenceTrans" name="lesson[]" type="text" placeholder="Lesson">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                 </select>
                                 <!-- <input id="knowledge" class="knowledgeInput" name="knowledge[]" type="text" placeholder="Knowledge" > -->
                                 <span class="lang" key="knowledgeHeader">Knowledge</span>
                                 <select id="knowledge" class="knowledgeInputSentenceTrans" name="knowledge[]" type="text" placeholder="Knowledge" >
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.knowledgetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $knowledge = $row['knowledge'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$knowledge" ?>"><?php echo "$knowledge" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="difficultyHeader">Difficulty</span>
                                 <select id="difficulty" class="difficultyInputSentenceTrans" name="difficulty[]" type="text" placeholder="difficulty">
                                    <option class="lang" key="hard">Hard</option>
                                    <option class="lang" key="medium">Medium</option>
                                    <option class="lang" key="easy">Easy</option>
                                 </select>
                                 <h3>Q & A </h3>
                                 <hr>
                                 <textarea rows="4" id="question" class="questionInputSentenceTrans questionInput" name="question[]" type="text" placeholder="Question" ></textarea>
                                 <textarea rows="4" id="answer" class="answerInputSentenceTrans answerInput" name="answer[]" type="text" placeholder="Answer" ></textarea>
                                 <br>
                                 <hr>
                                 <span id="deleteInputButton">
                                 <button type="button" name="deleteInputSentenceTrans"  value="0" onclick="deleteInputs(this.value, 2)"  class="lang" key="deleteInput">Delete Input</button>
                                 </span>
                              </div>
                           </span>
                        </span>
                        <input name="submitSentenceTrans" type="submit" id="submitSentenceTrans" value="Submit Question" class="submitNewQues submit">
                        <br>
                     </form>
                     <button type="button" name="addInput" class="addNewInput lang" onclick="addInputs(2)"  key="addInput">Add Input</button>
                     <?php if ( $_REQUEST['submitSentenceTrans'] ){
                        mysql_select_db("test", $db);
                        $years = $_POST['year'];
                        $grades = $_POST['grade'];
                        $testtypes = $_POST['testtype'];
                        $references = $_POST['reference'];
                        $textbooks = $_POST['textbook'];
                        $lessons = $_POST['lesson'];
                        $knowledges = $_POST['knowledge'];
                        $difficulties = $_POST['difficulty'];
                        $questions = $_POST['question'];
                        $answers = $_POST['answer'];
                        $dates = $_POST['date'];
                           $dom = new DOMDocument();

                           for ($i=0, $count = count($questions); $i <$count ; $i++) {
                             # code...
                             $year = $years[$i];
                             $grade = $grades[$i];
                             $testtype = $testtypes[$i];
                             $reference = $references[$i];
                             $textbook = $textbooks[$i];
                             $lesson = $lessons[$i];
                             $knowledge = $knowledges[$i];
                             $difficulty = $difficulties[$i];
                             $question = $questions[$i];
                             $answer =  $answers[$i];
                              //echo $question;
                            //     echo $answer;
                            //     echo  $book;
                            //     echo $diff;
                        if ($difficulty == '困难') {
                        $difficulty = 'Hard';
                        }else if($difficulty == '简单'){
                        $difficulty = 'Easy';
                        }else if($difficulty == '适中'){
                        $difficulty = 'Medium';
                        }
                        $date = date('Y-m-d');
                        $yearString =  mysql_real_escape_string($year);
                        $gradeString = mysql_real_escape_string($grade);
                        $testtypeString = mysql_real_escape_string($testtype);
                        $referenceString = mysql_real_escape_string($reference);
                        $textbookString =  mysql_real_escape_string($textbook);
                        $lessonString =  mysql_real_escape_string($lesson);
                        $knowledgeString = mysql_real_escape_string($knowledge);
                        $diffcultyString = mysql_real_escape_string($difficulty);
                        $questionString = mysql_real_escape_string($question);
                        $answerString = mysql_real_escape_string($answer);



                             $sql = "INSERT INTO test.sentence_trans
                                    (year, grade, testtype, reference, textbook, lesson, knowledge, difficulty, question, answer, date)
                                    VALUES('$yearString','$gradeString','$testtypeString','$referenceString','$textbookString','$lessonString','$knowledgeString','$diffcultyString','$questionString','$answerString', '$date')";
                                       $retval = mysql_query( $sql, $db);
                           }

                        if(! $retval)
                        {
                          die('Could not update data: ' . mysql_error());
                        }
                        echo '<script type="text/javascript">';
                        echo  'var update_text= "Data updated successfully!" ;   ';
                        echo 'alert(update_text)  ;' ;
                        echo ' </script> ';

                        mysql_close($db);
                        }
                        ?>
                  </div>
               </div>
               <div role="tabpanel" class="tab-pane fade in" id="interaction">
                  <br>
                  <div id="addinteraction">
                     <?php
                        $db = mysql_connect('localhost','root','password')
                         or die('Error connecting to MySQL server.');
                         //$pStatement = $db->getConnection()->query("SET CHARACTER SET utf8");

                        ?>
                     <form method="post">
                        <span name="inputs" id="inputs">
                           <span name="firstInput">
                              <div  class="addAquestion">
                                 <h3 class="lang" key="referenceBigHeader">References</h3>
                                 <hr>
                                 <span class="lang" key="yearHeader">Year</span>
                                 <!--   <input id="year" class="yearInput" name="year[]" type="text" placeholder="Year" > -->
                                 <select id="year" class="yearInputInteraction" name="year[]" type="text" placeholder="Year">
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                 </select>
                                 <span class="lang" key="gradeHeader">Grade</span>
                                 <!-- <input id="grade" class="gradeInput" name="grade[]" type="text" placeholder="Grade" > -->
                                 <select id="grade" class="gradeInputInteraction" name="grade[]" type="text" placeholder="Grade">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                 </select>
                                 <span class="lang" key="testtypeHeader">Testtype</span>
                                 <!-- <input id="testtype" class="testtypeInput" name="testtype[]" type="text" placeholder="Testtype" > -->
                                 <select id="testtype" class="testtypeInputInteraction" name="testtype[]" type="text" placeholder="Testtype">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.testtypetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $testtype = $row['testtype'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$testtype" ?>"><?php echo "$testtype" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="referenceHeader">Reference</span>
                                 <input id="reference" class="referenceInputInteraction referenceInput" name="reference[]" type="text" placeholder="Reference" ><br>
                                 <!--  <input id="textbook" class="textbookInput" name="textbook[]" type="text" placeholder="Textbook" > -->
                                 <span class="lang" key="textbookHeader">Textbook</span>
                                 <select id="textbook" class="textbookInputInteraction" name="textbook[]" type="text" placeholder="Textbook">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.textbooktags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $textbook = $row['textbook'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$textbook" ?>"><?php echo "$textbook" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="lessonHeader">Lesson</span>
                                 <!-- <input id="lesson" class="lessonInput" name="lesson[]" type="text" placeholder="Lesson" > -->
                                 <select id="lesson" class="lessonInputInteraction" name="lesson[]" type="text" placeholder="Lesson">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                 </select>
                                 <!-- <input id="knowledge" class="knowledgeInput" name="knowledge[]" type="text" placeholder="Knowledge" > -->
                                 <span class="lang" key="knowledgeHeader">Knowledge</span>
                                 <select id="knowledge" class="knowledgeInputInteraction" name="knowledge[]" type="text" placeholder="Knowledge" >
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.knowledgetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $knowledge = $row['knowledge'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$knowledge" ?>"><?php echo "$knowledge" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="difficultyHeader">Difficulty</span>
                                 <select id="difficulty" class="difficultyInputInteraction" name="difficulty[]" type="text" placeholder="difficulty">
                                    <option class="lang" key="hard">Hard</option>
                                    <option class="lang" key="medium">Medium</option>
                                    <option class="lang" key="easy">Easy</option>
                                 </select>
                                 <h3>Q & A </h3>
                                 <hr>
                                 <textarea rows="4" id="question" class="questionInputInteraction questionInput" name="question[]" type="text" placeholder="Question" ></textarea>
                                 <textarea rows="4" id="answer" class="answerInputInteraction answerInput" name="answer[]" type="text" placeholder="Answer" ></textarea>
                                 <br>
                                 <hr>
                                 <span id="deleteInputButton">
                                 <button type="button" name="deleteInputInteraction"  value="0" onclick="deleteInputs(this.value, 3)"  class="lang" key="deleteInput">Delete Input</button>
                                 </span>
                              </div>
                           </span>
                        </span>
                        <input name="submitInteraction" class="submitNewQues submit" type="submit" id="submitInteraction" value="Submit Question" >
                        <br>
                     </form>
                     <button type="button" name="addInput" class="addNewInput lang" onclick="addInputs(3)" key="addInput">Add Input</button>
                     <?php if ( $_REQUEST['submitInteraction'] ){
                        mysql_select_db("test", $db);
                        $years = $_POST['year'];
                        $grades = $_POST['grade'];
                        $testtypes = $_POST['testtype'];
                        $references = $_POST['reference'];
                        $textbooks = $_POST['textbook'];
                        $lessons = $_POST['lesson'];
                        $knowledges = $_POST['knowledge'];
                        $difficulties = $_POST['difficulty'];
                        $questions = $_POST['question'];
                        $answers = $_POST['answer'];
                        $dates = $_POST['date'];
                           $dom = new DOMDocument();

                           for ($i=0, $count = count($questions); $i <$count ; $i++) {
                             # code...
                             $year = $years[$i];
                             $grade = $grades[$i];
                             $testtype = $testtypes[$i];
                             $reference = $references[$i];
                             $textbook = $textbooks[$i];
                             $lesson = $lessons[$i];
                             $knowledge = $knowledges[$i];
                             $difficulty = $difficulties[$i];
                             $question = $questions[$i];
                             $answer =  $answers[$i];
                              //echo $question;
                            //     echo $answer;
                            //     echo  $book;
                            //     echo $diff;
                        if ($difficulty == '困难') {
                        $difficulty = 'Hard';
                        }else if($difficulty == '简单'){
                        $difficulty = 'Easy';
                        }else if($difficulty == '适中'){
                        $difficulty = 'Medium';
                        }
                        $date = date('Y-m-d');
                        $yearString =  mysql_real_escape_string($year);
                        $gradeString = mysql_real_escape_string($grade);
                        $testtypeString = mysql_real_escape_string($testtype);
                        $referenceString = mysql_real_escape_string($reference);
                        $textbookString =  mysql_real_escape_string($textbook);
                        $lessonString =  mysql_real_escape_string($lesson);
                        $knowledgeString = mysql_real_escape_string($knowledge);
                        $diffcultyString = mysql_real_escape_string($difficulty);
                        $questionString = mysql_real_escape_string($question);
                        $answerString = mysql_real_escape_string($answer);



                             $sql = "INSERT INTO test.interaction
                                    (year, grade, testtype, reference, textbook, lesson, knowledge, difficulty, question, answer, date)
                                    VALUES('$yearString','$gradeString','$testtypeString','$referenceString','$textbookString','$lessonString','$knowledgeString','$diffcultyString','$questionString','$answerString', '$date')";
                                       $retval = mysql_query( $sql, $db);
                           }

                        if(! $retval)
                        {
                          die('Could not update data: ' . mysql_error());
                        }
                        echo '<script type="text/javascript">';
                        echo  'var update_text= "Data updated successfully!" ;   ';
                        echo 'alert(update_text)  ;' ;
                        echo ' </script> ';

                        mysql_close($db);
                        }
                        ?>
                  </div>
               </div>
               <div role="tabpanel" class="tab-pane fade in" id="readingmu">
                  <br>
                  <div id="addireadingmulti">
                     <?php
                        $db = mysql_connect('localhost','root','password')
                         or die('Error connecting to MySQL server.');
                         //$pStatement = $db->getConnection()->query("SET CHARACTER SET utf8");

                        ?>
                     <form method="post">
                        <span name="inputs" id="inputs">
                           <span name="firstInput">
                              <div  class="addAquestion">
                                 <h3 class="lang" key="referenceBigHeader">References</h3>
                                 <hr>
                                 <span class="lang" key="yearHeader">Year</span>
                                 <!--   <input id="year" class="yearInput" name="year[]" type="text" placeholder="Year" > -->
                                 <select id="year" class="yearInputReadingMulti" name="year[]" type="text" placeholder="Year">
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                 </select>
                                 <span class="lang" key="gradeHeader">Grade</span>
                                 <!-- <input id="grade" class="gradeInput" name="grade[]" type="text" placeholder="Grade" > -->
                                 <select id="grade" class="gradeInputReadingMulti" name="grade[]" type="text" placeholder="Grade">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                 </select>
                                 <span class="lang" key="testtypeHeader">Testtype</span>
                                 <!-- <input id="testtype" class="testtypeInput" name="testtype[]" type="text" placeholder="Testtype" > -->
                                 <select id="testtype" class="testtypeInputReadingMulti" name="testtype[]" type="text" placeholder="Testtype">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.testtypetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $testtype = $row['testtype'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$testtype" ?>"><?php echo "$testtype" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="referenceHeader">Reference</span>
                                 <input id="reference" class="referenceInputReadingMulti referenceInput" name="reference[]" type="text" placeholder="Reference" ><br>
                                 <!--  <input id="textbook" class="textbookInput" name="textbook[]" type="text" placeholder="Textbook" > -->
                                 <span class="lang" key="textbookHeader">Textbook</span>
                                 <select id="textbook" class="textbookInputReadingMulti" name="textbook[]" type="text" placeholder="Textbook">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.textbooktags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $textbook = $row['textbook'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$textbook" ?>"><?php echo "$textbook" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="lessonHeader">Lesson</span>
                                 <!-- <input id="lesson" class="lessonInput" name="lesson[]" type="text" placeholder="Lesson" > -->
                                 <select id="lesson" class="lessonInputReadingMulti" name="lesson[]" type="text" placeholder="Lesson">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                 </select>
                                 <!-- <input id="knowledge" class="knowledgeInput" name="knowledge[]" type="text" placeholder="Knowledge" > -->
                                 <span class="lang" key="knowledgeHeader">Knowledge</span>
                                 <select id="knowledge" class="knowledgeInputReadingMulti" name="knowledge[]" type="text" placeholder="Knowledge" >
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.knowledgetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $knowledge = $row['knowledge'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$knowledge" ?>"><?php echo "$knowledge" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="difficultyHeader">Difficulty</span>
                                 <select id="difficulty" class="difficultyInputReadingMulti" name="difficulty[]" type="text" placeholder="difficulty">
                                    <option class="lang" key="hard">Hard</option>
                                    <option class="lang" key="medium">Medium</option>
                                    <option class="lang" key="easy">Easy</option>
                                 </select>
                                 <h3>Q & A </h3>
                                 <hr>
                                 <textarea rows="4" id="question" class="questionInputReadingMulti questionInput" name="question[]" type="text" placeholder="Question" ></textarea>
                                 <textarea rows="4" id="answer" class="answerInputReadingMulti answerInput" name="answer[]" type="text" placeholder="Answer" ></textarea>
                                 <br>
                                 <hr>
                                 <span id="deleteInputButton">
                                 <button type="button" name="deleteInputReadingMulti"  value="0" onclick="deleteInputs(this.value, 4)"  class="lang" key="deleteInput">Delete Input</button>
                                 </span>
                              </div>
                           </span>
                        </span>
                        <input name="submiReadingMulti" type="submit" id="submiReadingMulti" value="Submit Question" class="submitNewQues">
                        <br>
                     </form>
                     <button type="button" name="addInput" class="addNewInput lang" onclick="addInputs(4)" key="addInput">Add Input</button>
                     <?php if ( $_REQUEST['submiReadingMulti'] ){
                        mysql_select_db("test", $db);
                        $years = $_POST['year'];
                        $grades = $_POST['grade'];
                        $testtypes = $_POST['testtype'];
                        $references = $_POST['reference'];
                        $textbooks = $_POST['textbook'];
                        $lessons = $_POST['lesson'];
                        $knowledges = $_POST['knowledge'];
                        $difficulties = $_POST['difficulty'];
                        $questions = $_POST['question'];
                        $answers = $_POST['answer'];
                        $dates = $_POST['date'];
                           $dom = new DOMDocument();

                           for ($i=0, $count = count($questions); $i <$count ; $i++) {
                             # code...
                             $year = $years[$i];
                             $grade = $grades[$i];
                             $testtype = $testtypes[$i];
                             $reference = $references[$i];
                             $textbook = $textbooks[$i];
                             $lesson = $lessons[$i];
                             $knowledge = $knowledges[$i];
                             $difficulty = $difficulties[$i];
                             $question = $questions[$i];
                             $answer =  $answers[$i];
                              //echo $question;
                            //     echo $answer;
                            //     echo  $book;
                            //     echo $diff;
                        if ($difficulty == '困难') {
                        $difficulty = 'Hard';
                        }else if($difficulty == '简单'){
                        $difficulty = 'Easy';
                        }else if($difficulty == '适中'){
                        $difficulty = 'Medium';
                        }
                        $date = date('Y-m-d');
                        $yearString =  mysql_real_escape_string($year);
                        $gradeString = mysql_real_escape_string($grade);
                        $testtypeString = mysql_real_escape_string($testtype);
                        $referenceString = mysql_real_escape_string($reference);
                        $textbookString =  mysql_real_escape_string($textbook);
                        $lessonString =  mysql_real_escape_string($lesson);
                        $knowledgeString = mysql_real_escape_string($knowledge);
                        $diffcultyString = mysql_real_escape_string($difficulty);
                        $questionString = mysql_real_escape_string($question);
                        $answerString = mysql_real_escape_string($answer);



                             $sql = "INSERT INTO test.read_multi
                                    (year, grade, testtype, reference, textbook, lesson, knowledge, difficulty, question, answer, date)
                                    VALUES('$yearString','$gradeString','$testtypeString','$referenceString','$textbookString','$lessonString','$knowledgeString','$diffcultyString','$questionString','$answerString', '$date')";
                                       $retval = mysql_query( $sql, $db);
                           }

                        if(! $retval)
                        {
                          die('Could not update data: ' . mysql_error());
                        }
                        echo '<script type="text/javascript">';
                        echo  'var update_text= "Data updated successfully!" ;   ';
                        echo 'alert(update_text)  ;' ;
                        echo ' </script> ';

                        mysql_close($db);
                        }
                        ?>
                  </div>
               </div>
               <div role="tabpanel" class="tab-pane fade in" id="reading">
                  <br>
                  <div id="addreading">
                     <?php
                        $db = mysql_connect('localhost','root','password')
                         or die('Error connecting to MySQL server.');
                         //$pStatement = $db->getConnection()->query("SET CHARACTER SET utf8");

                        ?>
                     <form method="post">
                        <span name="inputs" id="inputs">
                           <span name="firstInput">
                              <div  class="addAquestion">
                                 <h3 class="lang" key="referenceBigHeader">References</h3>
                                 <hr>
                                 <span class="lang" key="yearHeader">Year</span>
                                 <!--   <input id="year" class="yearInput" name="year[]" type="text" placeholder="Year" > -->
                                 <select id="year" class="yearInputReading" name="year[]" type="text" placeholder="Year">
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                 </select>
                                 <span class="lang" key="gradeHeader">Grade</span>
                                 <!-- <input id="grade" class="gradeInput" name="grade[]" type="text" placeholder="Grade" > -->
                                 <select id="grade" class="gradeInputReading" name="grade[]" type="text" placeholder="Grade">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                 </select>
                                 <span class="lang" key="testtypeHeader">Testtype</span>
                                 <!-- <input id="testtype" class="testtypeInput" name="testtype[]" type="text" placeholder="Testtype" > -->
                                 <select id="testtype" class="testtypeInputReading" name="testtype[]" type="text" placeholder="Testtype">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.testtypetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $testtype = $row['testtype'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$testtype" ?>"><?php echo "$testtype" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="referenceHeader">Reference</span>
                                 <input id="reference" class="referenceInputReading referenceInput" name="reference[]" type="text" placeholder="Reference" ><br>
                                 <!--  <input id="textbook" class="textbookInput" name="textbook[]" type="text" placeholder="Textbook" > -->
                                 <span class="lang" key="textbookHeader">Textbook</span>
                                 <select id="textbook" class="textbookInputReading" name="textbook[]" type="text" placeholder="Textbook">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.textbooktags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $textbook = $row['textbook'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$textbook" ?>"><?php echo "$textbook" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="lessonHeader">Lesson</span>
                                 <!-- <input id="lesson" class="lessonInput" name="lesson[]" type="text" placeholder="Lesson" > -->
                                 <select id="lesson" class="lessonInputReading" name="lesson[]" type="text" placeholder="Lesson">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                 </select>
                                 <!-- <input id="knowledge" class="knowledgeInput" name="knowledge[]" type="text" placeholder="Knowledge" > -->
                                 <span class="lang" key="knowledgeHeader">Knowledge</span>
                                 <select id="knowledge" class="knowledgeInputReading" name="knowledge[]" type="text" placeholder="Knowledge" >
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.knowledgetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $knowledge = $row['knowledge'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$knowledge" ?>"><?php echo "$knowledge" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="difficultyHeader">Difficulty</span>
                                 <select id="difficulty" class="difficultyInputReading" name="difficulty[]" type="text" placeholder="difficulty">
                                    <option class="lang" key="hard">Hard</option>
                                    <option class="lang" key="medium">Medium</option>
                                    <option class="lang" key="easy">Easy</option>
                                 </select>
                                 <h3>Q & A </h3>
                                 <hr>
                                 <textarea rows="4" id="question" class="questionInputReading questionInput" name="question[]" type="text" placeholder="Question" ></textarea>
                                 <textarea rows="4" id="answer" class="answerInputReading answerInput" name="answer[]" type="text" placeholder="Answer" ></textarea>
                                 <br>
                                 <hr>
                                 <span id="deleteInputButton">
                                 <button type="button" name="deleteInputReading"  value="0" onclick="deleteInputs(this.value, 5)" class="lang" key="deleteInput" >Delete Input</button>
                                 </span>
                              </div>
                           </span>
                        </span>
                        <input name="submitReading" type="submit" id="submitReading" value="Submit Question" class="submitNewQues">
                        <br>
                     </form>
                     <button type="button" name="addInput" class="addNewInput lang" onclick="addInputs(5)" key="addInput">Add Input</button>
                     <?php if ( $_REQUEST['submitReading'] ){
                        mysql_select_db("test", $db);
                        $years = $_POST['year'];
                        $grades = $_POST['grade'];
                        $testtypes = $_POST['testtype'];
                        $references = $_POST['reference'];
                        $textbooks = $_POST['textbook'];
                        $lessons = $_POST['lesson'];
                        $knowledges = $_POST['knowledge'];
                        $difficulties = $_POST['difficulty'];
                        $questions = $_POST['question'];
                        $answers = $_POST['answer'];
                        $dates = $_POST['date'];
                           $dom = new DOMDocument();

                           for ($i=0, $count = count($questions); $i <$count ; $i++) {
                             # code...
                             $year = $years[$i];
                             $grade = $grades[$i];
                             $testtype = $testtypes[$i];
                             $reference = $references[$i];
                             $textbook = $textbooks[$i];
                             $lesson = $lessons[$i];
                             $knowledge = $knowledges[$i];
                             $difficulty = $difficulties[$i];
                             $question = $questions[$i];
                             $answer =  $answers[$i];
                              //echo $question;
                            //     echo $answer;
                            //     echo  $book;
                            //     echo $diff;
                        if ($difficulty == '困难') {
                        $difficulty = 'Hard';
                        }else if($difficulty == '简单'){
                        $difficulty = 'Easy';
                        }else if($difficulty == '适中'){
                        $difficulty = 'Medium';
                        }
                        $date = date('Y-m-d');
                        $yearString =  mysql_real_escape_string($year);
                        $gradeString = mysql_real_escape_string($grade);
                        $testtypeString = mysql_real_escape_string($testtype);
                        $referenceString = mysql_real_escape_string($reference);
                        $textbookString =  mysql_real_escape_string($textbook);
                        $lessonString =  mysql_real_escape_string($lesson);
                        $knowledgeString = mysql_real_escape_string($knowledge);
                        $diffcultyString = mysql_real_escape_string($difficulty);
                        $questionString = mysql_real_escape_string($question);
                        $answerString = mysql_real_escape_string($answer);



                             $sql = "INSERT INTO test.reading
                                    (year, grade, testtype, reference, textbook, lesson, knowledge, difficulty, question, answer, date)
                                    VALUES('$yearString','$gradeString','$testtypeString','$referenceString','$textbookString','$lessonString','$knowledgeString','$diffcultyString','$questionString','$answerString', '$date')";
                                       $retval = mysql_query( $sql, $db);
                           }

                        if(! $retval)
                        {
                          die('Could not update data: ' . mysql_error());
                        }
                        echo '<script type="text/javascript">';
                        echo  'var update_text= "Data updated successfully!" ;   ';
                        echo 'alert(update_text)  ;' ;
                        echo ' </script> ';

                        mysql_close($db);
                        }
                        ?>
                  </div>
               </div>
               <div role="tabpanel" class="tab-pane fade in" id="readingmi">
                  <br>
                  <div id="addreadingmission">
                     <?php
                        $db = mysql_connect('localhost','root','password')
                         or die('Error connecting to MySQL server.');
                         //$pStatement = $db->getConnection()->query("SET CHARACTER SET utf8");

                        ?>
                     <form method="post">
                        <span name="inputs" id="inputs">
                           <span name="firstInput">
                              <div  class="addAquestion">
                                 <h3 class="lang" key="referenceBigHeader">References</h3>
                                 <hr>
                                 <span class="lang" key="yearHeader">Year</span>
                                 <!--   <input id="year" class="yearInput" name="year[]" type="text" placeholder="Year" > -->
                                 <select id="year" class="yearInputReadingMission" name="year[]" type="text" placeholder="Year">
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                 </select>
                                 <span class="lang" key="gradeHeader">Grade</span>
                                 <!-- <input id="grade" class="gradeInput" name="grade[]" type="text" placeholder="Grade" > -->
                                 <select id="grade" class="gradeInputReadingMission" name="grade[]" type="text" placeholder="Grade">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                 </select>
                                 <span class="lang" key="testtypeHeader">Testtype</span>
                                 <!-- <input id="testtype" class="testtypeInput" name="testtype[]" type="text" placeholder="Testtype" > -->
                                 <select id="testtype" class="testtypeInputReadingMission" name="testtype[]" type="text" placeholder="Testtype">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.testtypetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $testtype = $row['testtype'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$testtype" ?>"><?php echo "$testtype" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="referenceHeader">Reference</span>
                                 <input id="reference" class="referenceInputReadingMission referenceInput" name="reference[]" type="text" placeholder="Reference" ><br>
                                 <!--  <input id="textbook" class="textbookInput" name="textbook[]" type="text" placeholder="Textbook" > -->
                                 <span class="lang" key="textbookHeader">Textbook</span>
                                 <select id="textbook" class="textbookInputReadingMission" name="textbook[]" type="text" placeholder="Textbook">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.textbooktags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $textbook = $row['textbook'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$textbook" ?>"><?php echo "$textbook" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="lessonHeader">Lesson</span>
                                 <!-- <input id="lesson" class="lessonInput" name="lesson[]" type="text" placeholder="Lesson" > -->
                                 <select id="lesson" class="lessonInputReadingMission" name="lesson[]" type="text" placeholder="Lesson">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                 </select>
                                 <!-- <input id="knowledge" class="knowledgeInput" name="knowledge[]" type="text" placeholder="Knowledge" > -->
                                 <span class="lang" key="knowledgeHeader">Knowledge</span>
                                 <select id="knowledge" class="knowledgeInputReadingMission" name="knowledge[]" type="text" placeholder="Knowledge" >
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.knowledgetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $knowledge = $row['knowledge'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$knowledge" ?>"><?php echo "$knowledge" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="difficultyHeader">Difficulty</span>
                                 <select id="difficulty" class="difficultyInputReadingMission" name="difficulty[]" type="text" placeholder="difficulty">
                                    <option class="lang" key="hard">Hard</option>
                                    <option class="lang" key="medium">Medium</option>
                                    <option class="lang" key="easy">Easy</option>
                                 </select>
                                 <h3>Q & A </h3>
                                 <hr>
                                 <textarea rows="4" id="question" class="questionInputReadingMission questionInput" name="question[]" type="text" placeholder="Question" ></textarea>
                                 <textarea rows="4" id="answer" class="answerInputReadingMission answerInput" name="answer[]" type="text" placeholder="Answer" ></textarea>
                                 <br>
                                 <hr>
                                 <span id="deleteInputButton">
                                 <button type="button" name="deleteInputReadingMission"  value="0" onclick="deleteInputs(this.value, 6)"  class="lang" key="deleteInput">Delete Input</button>
                                 </span>
                              </div>
                           </span>
                        </span>
                        <input name="submitReadingMission" type="submit" id="submitReadingMission" value="Submit Question" class="submitNewQues">
                        <br>
                     </form>
                     <button type="button" name="addInput" class="addNewInput lang" onclick="addInputs(6)" key="addInput">Add Input</button>
                     <?php if ( $_REQUEST['submitReadingMission'] ){
                        mysql_select_db("test", $db);
                        $years = $_POST['year'];
                        $grades = $_POST['grade'];
                        $testtypes = $_POST['testtype'];
                        $references = $_POST['reference'];
                        $textbooks = $_POST['textbook'];
                        $lessons = $_POST['lesson'];
                        $knowledges = $_POST['knowledge'];
                        $difficulties = $_POST['difficulty'];
                        $questions = $_POST['question'];
                        $answers = $_POST['answer'];
                        $dates = $_POST['date'];
                           $dom = new DOMDocument();

                           for ($i=0, $count = count($questions); $i <$count ; $i++) {
                             # code...
                             $year = $years[$i];
                             $grade = $grades[$i];
                             $testtype = $testtypes[$i];
                             $reference = $references[$i];
                             $textbook = $textbooks[$i];
                             $lesson = $lessons[$i];
                             $knowledge = $knowledges[$i];
                             $difficulty = $difficulties[$i];
                             $question = $questions[$i];
                             $answer =  $answers[$i];
                              //echo $question;
                            //     echo $answer;
                            //     echo  $book;
                            //     echo $diff;
                        if ($difficulty == '困难') {
                        $difficulty = 'Hard';
                        }else if($difficulty == '简单'){
                        $difficulty = 'Easy';
                        }else if($difficulty == '适中'){
                        $difficulty = 'Medium';
                        }
                        $date = date('Y-m-d');
                        $yearString =  mysql_real_escape_string($year);
                        $gradeString = mysql_real_escape_string($grade);
                        $testtypeString = mysql_real_escape_string($testtype);
                        $referenceString = mysql_real_escape_string($reference);
                        $textbookString =  mysql_real_escape_string($textbook);
                        $lessonString =  mysql_real_escape_string($lesson);
                        $knowledgeString = mysql_real_escape_string($knowledge);
                        $diffcultyString = mysql_real_escape_string($difficulty);
                        $questionString = mysql_real_escape_string($question);
                        $answerString = mysql_real_escape_string($answer);



                             $sql = "INSERT INTO test.reading_mission
                                    (year, grade, testtype, reference, textbook, lesson, knowledge, difficulty, question, answer, date)
                                    VALUES('$yearString','$gradeString','$testtypeString','$referenceString','$textbookString','$lessonString','$knowledgeString','$diffcultyString','$questionString','$answerString', '$date')";
                                       $retval = mysql_query( $sql, $db);
                           }

                        if(! $retval)
                        {
                          die('Could not update data: ' . mysql_error());
                        }
                        echo '<script type="text/javascript">';
                        echo  'var update_text= "Data updated successfully!" ;   ';
                        echo 'alert(update_text)  ;' ;
                        echo ' </script> ';

                        mysql_close($db);
                        }
                        ?>
                  </div>
               </div>
               <div role="tabpanel" class="tab-pane fade in" id="translation">
                  <br>
                  <div id="addtranslation">
                     <?php
                        $db = mysql_connect('localhost','root','password')
                         or die('Error connecting to MySQL server.');
                         //$pStatement = $db->getConnection()->query("SET CHARACTER SET utf8");

                        ?>
                     <form method="post">
                        <span name="inputs" id="inputs">
                           <span name="firstInput">
                              <div  class="addAquestion">
                                 <h3 class="lang" key="referenceBigHeader">References</h3>
                                 <hr>
                                 <span class="lang" key="yearHeader">Year</span>
                                 <!--   <input id="year" class="yearInput" name="year[]" type="text" placeholder="Year" > -->
                                 <select id="year" class="yearInputTranslation" name="year[]" type="text" placeholder="Year">
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                 </select>
                                 <span class="lang" key="gradeHeader">Grade</span>
                                 <!-- <input id="grade" class="gradeInput" name="grade[]" type="text" placeholder="Grade" > -->
                                 <select id="grade" class="gradeInputTranslation" name="grade[]" type="text" placeholder="Grade">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                 </select>
                                 <span class="lang" key="testtypeHeader">Testtype</span>
                                 <!-- <input id="testtype" class="testtypeInput" name="testtype[]" type="text" placeholder="Testtype" > -->
                                 <select id="testtype" class="testtypeInputTranslation" name="testtype[]" type="text" placeholder="Testtype">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.testtypetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $testtype = $row['testtype'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$testtype" ?>"><?php echo "$testtype" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="referenceHeader">Reference</span>
                                 <input id="reference" class="referenceInputTranslation referenceInput" name="reference[]" type="text" placeholder="Reference" ><br>
                                 <!--  <input id="textbook" class="textbookInput" name="textbook[]" type="text" placeholder="Textbook" > -->
                                 <span class="lang" key="textbookHeader">Textbook</span>
                                 <select id="textbook" class="textbookInputTranslation" name="textbook[]" type="text" placeholder="Textbook">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.textbooktags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $textbook = $row['textbook'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$textbook" ?>"><?php echo "$textbook" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="lessonHeader">Lesson</span>
                                 <!-- <input id="lesson" class="lessonInput" name="lesson[]" type="text" placeholder="Lesson" > -->
                                 <select id="lesson" class="lessonInputTranslation" name="lesson[]" type="text" placeholder="Lesson">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                 </select>
                                 <!-- <input id="knowledge" class="knowledgeInput" name="knowledge[]" type="text" placeholder="Knowledge" > -->
                                 <span class="lang" key="knowledgeHeader">Knowledge</span>
                                 <select id="knowledge" class="knowledgeInputTranslation" name="knowledge[]" type="text" placeholder="Knowledge" >
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.knowledgetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $knowledge = $row['knowledge'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$knowledge" ?>"><?php echo "$knowledge" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="difficultyHeader">Difficulty</span>
                                 <select id="difficulty" class="difficultyInputTranslation" name="difficulty[]" type="text" placeholder="difficulty">
                                    <option class="lang" key="hard">Hard</option>
                                    <option class="lang" key="medium">Medium</option>
                                    <option class="lang" key="easy">Easy</option>
                                 </select>
                                 <h3>Q & A </h3>
                                 <hr>
                                 <textarea rows="4" id="question" class="questionInputTranslation questionInput" name="question[]" type="text" placeholder="Question" ></textarea>
                                 <textarea rows="4" id="answer" class="answerInputTranslation answerInput" name="answer[]" type="text" placeholder="Answer" ></textarea>
                                 <br>
                                 <hr>
                                 <span id="deleteInputButton">
                                 <button type="button" name="deleteInputTranslation"  value="0" onclick="deleteInputs(this.value, 7)" class="lang" key="deleteInput">Delete Input</button>
                                 </span>
                              </div>
                           </span>
                        </span>
                        <input name="submitTranslation" type="submit" id="submitTranslation" value="Submit Question" class="submitNewQues">
                        <br>
                     </form>
                     <button type="button" name="addInput" class="addNewInput lang" onclick="addInputs(7)" key="addInput">Add Input</button>
                     <?php if ( $_REQUEST['submitTranslation'] ){
                        mysql_select_db("test", $db);
                        $years = $_POST['year'];
                        $grades = $_POST['grade'];
                        $testtypes = $_POST['testtype'];
                        $references = $_POST['reference'];
                        $textbooks = $_POST['textbook'];
                        $lessons = $_POST['lesson'];
                        $knowledges = $_POST['knowledge'];
                        $difficulties = $_POST['difficulty'];
                        $questions = $_POST['question'];
                        $answers = $_POST['answer'];
                        $dates = $_POST['date'];
                           $dom = new DOMDocument();

                           for ($i=0, $count = count($questions); $i <$count ; $i++) {
                             # code...
                             $year = $years[$i];
                             $grade = $grades[$i];
                             $testtype = $testtypes[$i];
                             $reference = $references[$i];
                             $textbook = $textbooks[$i];
                             $lesson = $lessons[$i];
                             $knowledge = $knowledges[$i];
                             $difficulty = $difficulties[$i];
                             $question = $questions[$i];
                             $answer =  $answers[$i];
                              //echo $question;
                            //     echo $answer;
                            //     echo  $book;
                            //     echo $diff;
                        if ($difficulty == '困难') {
                        $difficulty = 'Hard';
                        }else if($difficulty == '简单'){
                        $difficulty = 'Easy';
                        }else if($difficulty == '适中'){
                        $difficulty = 'Medium';
                        }
                        $date = date('Y-m-d');
                        $yearString =  mysql_real_escape_string($year);
                        $gradeString = mysql_real_escape_string($grade);
                        $testtypeString = mysql_real_escape_string($testtype);
                        $referenceString = mysql_real_escape_string($reference);
                        $textbookString =  mysql_real_escape_string($textbook);
                        $lessonString =  mysql_real_escape_string($lesson);
                        $knowledgeString = mysql_real_escape_string($knowledge);
                        $diffcultyString = mysql_real_escape_string($difficulty);
                        $questionString = mysql_real_escape_string($question);
                        $answerString = mysql_real_escape_string($answer);



                             $sql = "INSERT INTO test.translation
                                    (year, grade, testtype, reference, textbook, lesson, knowledge, difficulty, question, answer, date)
                                    VALUES('$yearString','$gradeString','$testtypeString','$referenceString','$textbookString','$lessonString','$knowledgeString','$diffcultyString','$questionString','$answerString', '$date')";
                                       $retval = mysql_query( $sql, $db);
                           }

                        if(! $retval)
                        {
                          die('Could not update data: ' . mysql_error());
                        }
                        echo '<script type="text/javascript">';
                        echo  'var update_text= "Data updated successfully!" ;   ';
                        echo 'alert(update_text)  ;' ;
                        echo ' </script> ';

                        mysql_close($db);
                        }
                        ?>
                  </div>
               </div>
               <div role="tabpanel" class="tab-pane fade in" id="listening">
                  <br>
                  <div id="addtlistening">
                     <?php
                        $db = mysql_connect('localhost','root','password')
                         or die('Error connecting to MySQL server.');
                         //$pStatement = $db->getConnection()->query("SET CHARACTER SET utf8");

                        ?>
                     <form method="post">
                        <span name="inputs" id="inputs">
                           <span name="firstInput">
                              <div  class="addAquestion">
                                 <h3 class="lang" key="referenceBigHeader">References</h3>
                                 <hr>
                                 <span class="lang" key="yearHeader">Year</span>
                                 <!--   <input id="year" class="yearInput" name="year[]" type="text" placeholder="Year" > -->
                                 <select id="year" class="yearInputListening" name="year[]" type="text" placeholder="Year">
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                 </select>
                                 <span class="lang" key="gradeHeader">Grade</span>
                                 <!-- <input id="grade" class="gradeInput" name="grade[]" type="text" placeholder="Grade" > -->
                                 <select id="grade" class="gradeInputListening" name="grade[]" type="text" placeholder="Grade">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                 </select>
                                 <span class="lang" key="testtypeHeader">Testtype</span>
                                 <!-- <input id="testtype" class="testtypeInput" name="testtype[]" type="text" placeholder="Testtype" > -->
                                 <select id="testtype" class="testtypeInputListening" name="testtype[]" type="text" placeholder="Testtype">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.testtypetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $testtype = $row['testtype'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$testtype" ?>"><?php echo "$testtype" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="referenceHeader">Reference</span>
                                 <input id="reference" class="referenceInputListening referenceInput" name="reference[]" type="text" placeholder="Reference" ><br>
                                 <!--  <input id="textbook" class="textbookInput" name="textbook[]" type="text" placeholder="Textbook" > -->
                                 <span class="lang" key="textbookHeader">Textbook</span>
                                 <select id="textbook" class="textbookInputListening" name="textbook[]" type="text" placeholder="Textbook">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.textbooktags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $textbook = $row['textbook'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$textbook" ?>"><?php echo "$textbook" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="lessonHeader">Lesson</span>
                                 <!-- <input id="lesson" class="lessonInput" name="lesson[]" type="text" placeholder="Lesson" > -->
                                 <select id="lesson" class="lessonInputListening" name="lesson[]" type="text" placeholder="Lesson">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                 </select>
                                 <!-- <input id="knowledge" class="knowledgeInput" name="knowledge[]" type="text" placeholder="Knowledge" > -->
                                 <span class="lang" key="knowledgeHeader">Knowledge</span>
                                 <select id="knowledge" class="knowledgeInputListening" name="knowledge[]" type="text" placeholder="Knowledge" >
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.knowledgetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $knowledge = $row['knowledge'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$knowledge" ?>"><?php echo "$knowledge" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="difficultyHeader">Difficulty</span>
                                 <select id="difficulty" class="difficultyInputListening" name="difficulty[]" type="text" placeholder="difficulty">
                                    <option class="lang" key="hard">Hard</option>
                                    <option class="lang" key="medium">Medium</option>
                                    <option class="lang" key="easy">Easy</option>
                                 </select>
                                 <h3>Q & A </h3>
                                 <hr>
                                 <textarea rows="4" id="question" class="questionInputListening questionInput" name="question[]" type="text" placeholder="Question" ></textarea>
                                 <textarea rows="4" id="answer" class="answerInputListening answerInput" name="answer[]" type="text" placeholder="Answer" ></textarea>
                                 <br>
                                 <hr>
                                 <span id="deleteInputButton">
                                 <button type="button" name="deleteInputListening"  value="0" onclick="deleteInputs(this.value, 8)" class="lang" key="deleteInput">Delete Input</button>
                                 </span>
                              </div>
                           </span>
                        </span>
                        <input name="submitListening" type="submit" id="submitListening" value="Submit Question" class="submitNewQues">
                        <br>
                     </form>
                     <button type="button" name="addInput" class="addNewInput lang" onclick="addInputs(8)" key="addInput">Add Input</button>
                     <?php if ( $_REQUEST['submitListening'] ){
                        mysql_select_db("test", $db);
                        $years = $_POST['year'];
                        $grades = $_POST['grade'];
                        $testtypes = $_POST['testtype'];
                        $references = $_POST['reference'];
                        $textbooks = $_POST['textbook'];
                        $lessons = $_POST['lesson'];
                        $knowledges = $_POST['knowledge'];
                        $difficulties = $_POST['difficulty'];
                        $questions = $_POST['question'];
                        $answers = $_POST['answer'];
                        $dates = $_POST['date'];
                           $dom = new DOMDocument();

                           for ($i=0, $count = count($questions); $i <$count ; $i++) {
                             # code...
                             $year = $years[$i];
                             $grade = $grades[$i];
                             $testtype = $testtypes[$i];
                             $reference = $references[$i];
                             $textbook = $textbooks[$i];
                             $lesson = $lessons[$i];
                             $knowledge = $knowledges[$i];
                             $difficulty = $difficulties[$i];
                             $question = $questions[$i];
                             $answer =  $answers[$i];
                              //echo $question;
                            //     echo $answer;
                            //     echo  $book;
                            //     echo $diff;
                        if ($difficulty == '困难') {
                        $difficulty = 'Hard';
                        }else if($difficulty == '简单'){
                        $difficulty = 'Easy';
                        }else if($difficulty == '适中'){
                        $difficulty = 'Medium';
                        }
                        $date = date('Y-m-d');
                        $yearString =  mysql_real_escape_string($year);
                        $gradeString = mysql_real_escape_string($grade);
                        $testtypeString = mysql_real_escape_string($testtype);
                        $referenceString = mysql_real_escape_string($reference);
                        $textbookString =  mysql_real_escape_string($textbook);
                        $lessonString =  mysql_real_escape_string($lesson);
                        $knowledgeString = mysql_real_escape_string($knowledge);
                        $diffcultyString = mysql_real_escape_string($difficulty);
                        $questionString = mysql_real_escape_string($question);
                        $answerString = mysql_real_escape_string($answer);



                             $sql = "INSERT INTO test.listening
                                    (year, grade, testtype, reference, textbook, lesson, knowledge, difficulty, question, answer, date)
                                    VALUES('$yearString','$gradeString','$testtypeString','$referenceString','$textbookString','$lessonString','$knowledgeString','$diffcultyString','$questionString','$answerString', '$date')";
                                       $retval = mysql_query( $sql, $db);
                           }

                        if(! $retval)
                        {
                          die('Could not update data: ' . mysql_error());
                        }
                        echo '<script type="text/javascript">';
                        echo  'var update_text= "Data updated successfully!" ;   ';
                        echo 'alert(update_text)  ;' ;
                        echo ' </script> ';

                        mysql_close($db);
                        }
                        ?>
                  </div>
               </div>
               <div role="tabpanel" class="tab-pane fade in" id="writing">
                  <br>
                  <div id="addwriting">
                     <?php
                        $db = mysql_connect('localhost','root','password')
                         or die('Error connecting to MySQL server.');
                         //$pStatement = $db->getConnection()->query("SET CHARACTER SET utf8");

                        ?>
                     <form method="post">
                        <span name="inputs" id="inputs">
                           <span name="firstInput">
                              <div  class="addAquestion">
                                 <h3 class="lang" key="referenceBigHeader">References</h3>
                                 <hr>
                                 <span class="lang" key="yearHeader">Year</span>
                                 <!--   <input id="year" class="yearInput" name="year[]" type="text" placeholder="Year" > -->
                                 <select id="year" class="yearInputWriting" name="year[]" type="text" placeholder="Year">
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                 </select>
                                 <span class="lang" key="gradeHeader">Grade</span>
                                 <!-- <input id="grade" class="gradeInput" name="grade[]" type="text" placeholder="Grade" > -->
                                 <select id="grade" class="gradeInputWriting" name="grade[]" type="text" placeholder="Grade">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                 </select>
                                 <span class="lang" key="testtypeHeader">Testtype</span>
                                 <!-- <input id="testtype" class="testtypeInput" name="testtype[]" type="text" placeholder="Testtype" > -->
                                 <select id="testtype" class="testtypeInputWriting" name="testtype[]" type="text" placeholder="Testtype">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.testtypetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $testtype = $row['testtype'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$testtype" ?>"><?php echo "$testtype" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="referenceHeader">Reference</span>
                                 <input id="reference" class="referenceInputWriting referenceInput" name="reference[]" type="text" placeholder="Reference" ><br>
                                 <!--  <input id="textbook" class="textbookInput" name="textbook[]" type="text" placeholder="Textbook" > -->
                                 <span class="lang" key="textbookHeader">Textbook</span>
                                 <select id="textbook" class="textbookInputWriting" name="textbook[]" type="text" placeholder="Textbook">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.textbooktags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $textbook = $row['textbook'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$textbook" ?>"><?php echo "$textbook" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="lessonHeader">Lesson</span>
                                 <!-- <input id="lesson" class="lessonInput" name="lesson[]" type="text" placeholder="Lesson" > -->
                                 <select id="lesson" class="lessonInputWriting" name="lesson[]" type="text" placeholder="Lesson">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                 </select>
                                 <!-- <input id="knowledge" class="knowledgeInput" name="knowledge[]" type="text" placeholder="Knowledge" > -->
                                 <span class="lang" key="knowledgeHeader">Knowledge</span>
                                 <select id="knowledge" class="knowledgeInputWriting" name="knowledge[]" type="text" placeholder="Knowledge" >
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.knowledgetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $knowledge = $row['knowledge'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$knowledge" ?>"><?php echo "$knowledge" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="difficultyHeader">Difficulty</span>
                                 <select id="difficulty" class="difficultyInputWriting" name="difficulty[]" type="text" placeholder="difficulty">
                                    <option class="lang" key="hard">Hard</option>
                                    <option class="lang" key="medium">Medium</option>
                                    <option class="lang" key="easy">Easy</option>
                                 </select>
                                 <h3>Q & A </h3>
                                 <hr>
                                 <textarea rows="4" id="question" class="questionInputWriting questionInput" name="question[]" type="text" placeholder="Question" ></textarea>
                                 <textarea rows="4" id="answer" class="answerInputWriting answerInput" name="answer[]" type="text" placeholder="Answer" ></textarea>
                                 <br>
                                 <hr>
                                 <span id="deleteInputButton">
                                 <button type="button" name="deleteInputWriting"  value="0" onclick="deleteInputs(this.value, 9)" class="lang" key="deleteInput">Delete Input</button>
                                 </span>
                              </div>
                           </span>
                        </span>
                        <input name="submitWriting" type="submit" id="submitWriting" value="Submit Question" class="submitNewQues">
                        <br>
                     </form>
                     <button type="button" name="addInput" class="addNewInput lang" onclick="addInputs(9)" key="addInput">Add Input</button>
                     <?php if ( $_REQUEST['submitWriting'] ){
                        mysql_select_db("test", $db);
                        $years = $_POST['year'];
                        $grades = $_POST['grade'];
                        $testtypes = $_POST['testtype'];
                        $references = $_POST['reference'];
                        $textbooks = $_POST['textbook'];
                        $lessons = $_POST['lesson'];
                        $knowledges = $_POST['knowledge'];
                        $difficulties = $_POST['difficulty'];
                        $questions = $_POST['question'];
                        $answers = $_POST['answer'];
                        $dates = $_POST['date'];
                           $dom = new DOMDocument();

                           for ($i=0, $count = count($questions); $i <$count ; $i++) {
                             # code...
                             $year = $years[$i];
                             $grade = $grades[$i];
                             $testtype = $testtypes[$i];
                             $reference = $references[$i];
                             $textbook = $textbooks[$i];
                             $lesson = $lessons[$i];
                             $knowledge = $knowledges[$i];
                             $difficulty = $difficulties[$i];
                             $question = $questions[$i];
                             $answer =  $answers[$i];
                              //echo $question;
                            //     echo $answer;
                            //     echo  $book;
                            //     echo $diff;
                        if ($difficulty == '困难') {
                        $difficulty = 'Hard';
                        }else if($difficulty == '简单'){
                        $difficulty = 'Easy';
                        }else if($difficulty == '适中'){
                        $difficulty = 'Medium';
                        }
                        $date = date('Y-m-d');
                        $yearString =  mysql_real_escape_string($year);
                        $gradeString = mysql_real_escape_string($grade);
                        $testtypeString = mysql_real_escape_string($testtype);
                        $referenceString = mysql_real_escape_string($reference);
                        $textbookString =  mysql_real_escape_string($textbook);
                        $lessonString =  mysql_real_escape_string($lesson);
                        $knowledgeString = mysql_real_escape_string($knowledge);
                        $diffcultyString = mysql_real_escape_string($difficulty);
                        $questionString = mysql_real_escape_string($question);
                        $answerString = mysql_real_escape_string($answer);



                             $sql = "INSERT INTO test.writing
                                    (year, grade, testtype, reference, textbook, lesson, knowledge, difficulty, question, answer, date)
                                    VALUES('$yearString','$gradeString','$testtypeString','$referenceString','$textbookString','$lessonString','$knowledgeString','$diffcultyString','$questionString','$answerString', '$date')";
                                       $retval = mysql_query( $sql, $db);
                           }

                        if(! $retval)
                        {
                          die('Could not update data: ' . mysql_error());
                        }
                        echo '<script type="text/javascript">';
                        echo  'var update_text= "Data updated successfully!" ;   ';
                        echo 'alert(update_text)  ;' ;
                        echo ' </script> ';

                        mysql_close($db);
                        }
                        ?>
                  </div>
               </div>
               <div role="tabpanel" class="tab-pane fade in" id="others">
                  <br>
                  <div id="addothers">
                     <?php
                        $db = mysql_connect('localhost','root','password')
                         or die('Error connecting to MySQL server.');
                         //$pStatement = $db->getConnection()->query("SET CHARACTER SET utf8");

                        ?>
                     <form method="post">
                        <span name="inputs" id="inputs">
                           <span name="firstInput">
                              <div  class="addAquestion">
                                 <h3 class="lang" key="referenceBigHeader">References</h3>
                                 <hr>
                                 <span class="lang" key="yearHeader">Year</span>
                                 <!--   <input id="year" class="yearInput" name="year[]" type="text" placeholder="Year" > -->
                                 <select id="year" class="yearInputOthers" name="year[]" type="text" placeholder="Year">
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                 </select>
                                 <span class="lang" key="gradeHeader">Grade</span>
                                 <!-- <input id="grade" class="gradeInput" name="grade[]" type="text" placeholder="Grade" > -->
                                 <select id="grade" class="gradeInputOthers" name="grade[]" type="text" placeholder="Grade">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                 </select>
                                 <span class="lang" key="testtypeHeader">Testtype</span>
                                 <!-- <input id="testtype" class="testtypeInput" name="testtype[]" type="text" placeholder="Testtype" > -->
                                 <select id="testtype" class="testtypeInputOthers" name="testtype[]" type="text" placeholder="Testtype">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.testtypetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $testtype = $row['testtype'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$testtype" ?>"><?php echo "$testtype" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="referenceHeader">Reference</span>
                                 <input id="reference" class="referenceInputOthers referenceInput" name="reference[]" type="text" placeholder="Reference" ><br>
                                 <!--  <input id="textbook" class="textbookInput" name="textbook[]" type="text" placeholder="Textbook" > -->
                                 <span class="lang" key="textbookHeader">Textbook</span>
                                 <select id="textbook" class="textbookInputOthers" name="textbook[]" type="text" placeholder="Textbook">
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.textbooktags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $textbook = $row['textbook'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$textbook" ?>"><?php echo "$textbook" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="lessonHeader">Lesson</span>
                                 <!-- <input id="lesson" class="lessonInput" name="lesson[]" type="text" placeholder="Lesson" > -->
                                 <select id="lesson" class="lessonInputOthers" name="lesson[]" type="text" placeholder="Lesson">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                 </select>
                                 <!-- <input id="knowledge" class="knowledgeInput" name="knowledge[]" type="text" placeholder="Knowledge" > -->
                                 <span class="lang" key="knowledgeHeader">Knowledge</span>
                                 <select id="knowledge" class="knowledgeInputOthers" name="knowledge[]" type="text" placeholder="Knowledge" >
                                    <?php
                                       $db = mysql_connect('localhost','root','password')
                                                         or die('Error connecting to MySQL server.');
                                                           @mysql_select_db("tags", $db);
                                                         $sql = "SELECT * FROM tags.knowledgetags";
                                                         $result = mysql_query($sql);
                                                              while( $row = mysql_fetch_array($result))
                                                              {
                                                              $knowledge = $row['knowledge'];
                                                              ?>
                                    <option class="lang" key="<?php echo "$knowledge" ?>"><?php echo "$knowledge" ?></option>
                                    <?php
                                       }
                                        ?>
                                 </select>
                                 <span class="lang" key="difficultyHeader">Difficulty</span>
                                 <select id="difficulty" class="difficultyInputOthers" name="difficulty[]" type="text" placeholder="difficulty">
                                    <option class="lang" key="hard">Hard</option>
                                    <option class="lang" key="medium">Medium</option>
                                    <option class="lang" key="easy">Easy</option>
                                 </select>
                                 <h3>Q & A </h3>
                                 <hr>
                                 <textarea rows="4" id="question" class="questionInputOthers questionInput" name="question[]" type="text" placeholder="Question" ></textarea>
                                 <textarea rows="4" id="answer" class="answerInputOthers anwerInput" name="answer[]" type="text" placeholder="Answer" ></textarea>
                                 <br>
                                 <hr>
                                 <span id="deleteInputButton">
                                 <button type="button" name="deleteInputOthers"  value="0" onclick="deleteInputs(this.value, 10)" class="lang" key="deleteInput" >Delete Input</button>
                                 </span>
                              </div>
                           </span>
                        </span>
                        <input name="submitOthers" type="submit" id="submitOthers" value="Submit Question" class="submitNewQues">
                        <br>
                     </form>
                     <button type="button" name="addInput" class="addNewInput lang" onclick="addInputs(10)" key="addInput">Add Input</button>
                     <?php if ( $_REQUEST['submitOthers'] ){
                        mysql_select_db("test", $db);
                        $years = $_POST['year'];
                        $grades = $_POST['grade'];
                        $testtypes = $_POST['testtype'];
                        $references = $_POST['reference'];
                        $textbooks = $_POST['textbook'];
                        $lessons = $_POST['lesson'];
                        $knowledges = $_POST['knowledge'];
                        $difficulties = $_POST['difficulty'];
                        $questions = $_POST['question'];
                        $answers = $_POST['answer'];
                        $dates = $_POST['date'];
                           $dom = new DOMDocument();

                           for ($i=0, $count = count($questions); $i <$count ; $i++) {
                             # code...
                             $year = $years[$i];
                             $grade = $grades[$i];
                             $testtype = $testtypes[$i];
                             $reference = $references[$i];
                             $textbook = $textbooks[$i];
                             $lesson = $lessons[$i];
                             $knowledge = $knowledges[$i];
                             $difficulty = $difficulties[$i];
                             $question = $questions[$i];
                             $answer =  $answers[$i];
                              //echo $question;
                            //     echo $answer;
                            //     echo  $book;
                            //     echo $diff;
                        if ($difficulty == '困难') {
                        $difficulty = 'Hard';
                        }else if($difficulty == '简单'){
                        $difficulty = 'Easy';
                        }else if($difficulty == '适中'){
                        $difficulty = 'Medium';
                        }
                        $date = date('Y-m-d');
                        $yearString =  mysql_real_escape_string($year);
                        $gradeString = mysql_real_escape_string($grade);
                        $testtypeString = mysql_real_escape_string($testtype);
                        $referenceString = mysql_real_escape_string($reference);
                        $textbookString =  mysql_real_escape_string($textbook);
                        $lessonString =  mysql_real_escape_string($lesson);
                        $knowledgeString = mysql_real_escape_string($knowledge);
                        $diffcultyString = mysql_real_escape_string($difficulty);
                        $questionString = mysql_real_escape_string($question);
                        $answerString = mysql_real_escape_string($answer);



                             $sql = "INSERT INTO test.others
                                    (year, grade, testtype, reference, textbook, lesson, knowledge, difficulty, question, answer, date)
                                    VALUES('$yearString','$gradeString','$testtypeString','$referenceString','$textbookString','$lessonString','$knowledgeString','$diffcultyString','$questionString','$answerString', '$date')";
                                       $retval = mysql_query( $sql, $db);
                           }

                        if(! $retval)
                        {
                          die('Could not update data: ' . mysql_error());
                        }
                        echo '<script type="text/javascript">';
                        echo  'var update_text= "Data updated successfully!" ;   ';
                        echo 'alert(update_text)  ;' ;
                        echo ' </script> ';

                        mysql_close($db);
                        }
                        ?>
                  </div>
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
                  <select id="changeLang" name="changeLang" onchange="languageChange();">
                     <option  class="lang" value="en" key="langEnglish" >English</option>
                     <option class="lang" value="zh" key="langChinese">中文</option>
                  </select>
               </span>
            </p>
         </div>
      </div>
      <!-- Le javascript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script type="text/javascript" src="../assets/js/languageHandler.js">  </script>
      <script type="text/javascript" src="../assets/js/cookieHandler.js"></script>
      <script type="text/javascript" src="../assets/js/addQueInputHandler.js">  </script>
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
