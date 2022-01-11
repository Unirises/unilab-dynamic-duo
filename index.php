<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dynamicStyle.css">
    <link rel="stylesheet" href="css/animation.css">
    <title>Dynamic Duo</title>
    <style></style>
    <script src="js/timer.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </head>
  <body class="background" style="background-image:url('img/bg1.png');">
<!--DD_P1.php-->
    <div class="dd_p1">
      <img class="img-logo-unilab" src="img/unilab_logo.png" alt="">
          <div class="text-center">
              <img src="img/dynamic_duo.png" class="dynamicduo-logo animate__animated animate__heartBeat animate__infinite" alt="">
              <div>
                  <button class="btn_bg btn_play btn w-25 animate__bounceInUp animate__animated" id="p1_btn_play"><span class="t-btn">ENTER</span></button>
              </div>
              
          </div>

          <div class="sound">
    <img src="img/sound_off.png" id="sound_switch" alt="" srcset="">
</div>


    </div>



    <!--DD_P2.php-->

    <div class="additional_page d-none">
    <?php include 'pages/additional_page.php' ?>
</div>

    <!--DD_P3.php-->
    <div class="dd_p3 d-none">
    <div class="d-flex justify-content-between">
    <img src="img/fozal_logo.png" class="fozal_logo" alt="">
    <img src="img/levox_logo.png" class="levox_logo" alt="">
    </div>

    <h1 class="r choose_diff text-center animate__animated animate__fadeIn"><span class="rBg">CHOOSE DIFFICULTY</span></h1>
    <div class="text-center p-p3 choose_text animate__animated animate__fadeIn">
        <p>Divided into 3 levels with increasing difficulty,</p>
        <p>Dynamic Duo will put your quick match memory to the test.</p>
        <p style="font-family: 'HelveticaLTStd-Bold'">GOOD LUCK!</p>
        <div class="d-flex justify-content-around">
        <button class="m btn_bg btn easy_btn animate__animated animate__bounceInDown" id="p4_easy_btn"><span class="t-btn">EASY</span></button>
        <button class="m btn_bg btn moderate_btn animate__animated animate__bounceIn" id="p4_moderate_btn"><span class="t-btn">MODERATE</span></button>
        <button class="m btn_bg btn hard_btn animate__animated animate__bounceInUp" id="p4_hard_btn"><span class="t-btn">HARD</span></button>
        </div>
    </div>
    

    </div>

<!--easy.php-->
    <div class="easy d-none">
    <div class="d-flex justify-content-between">
    <img src="img/fozal_logo.png" class="fozal_logo" alt="">
    <img src="img/levox_logo.png" class="levox_logo" alt="">
    </div>

    <h1 class="r text-center"><span class="rBg">MECHANICS</span></h1>
    <div class="d-flex justify-content-center">
    <button class="lvl_m btn_bg btn w-25" id="easy_btn"><span class="t-btn">EASY</span></button>
    </div>
    <div class="ctext_margin text-center animate__animated animate__fadeIn">
    <p class="p-easy">Match Up!</p>
    <p class="p-easy">Complete the Dynamic Duo  by matching</p>
    <p class="p-easy">the images from the top row to their pair below.</p>
    </div>
    <div class="text-center mt-5 animate__animated animate__fadeInUp" style="line-height: .7;">
        <label class="d-block t_limit">TIME LIMIT</label>
        <div class="d-inline-flex p-4" style="color:#ffffff;background-color:#582e7e; border-radius:5px;">
        <div style="line-height: .6;">
        
            <p class="s30">30</p>
            <label class="lsecond">seconds</label>
        
        </div>
</div>
    </div>


    </div>

<!--easyQuiz.php-->
<div class="easyQuiz d-none">
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <div class="d-flex justify-content-between mb-2">
    <img src="img/fozal_logo.png" class="fozal_logo" alt="">
    <div class="div_timerE" id="_timer"><h1><span class="timer" id="countdown">30</span></h1></div>
    
    <img src="img/levox_logo.png" class="levox_logo" alt=""> 
    </div>
    <h1 class="r text-center"><span class="rBg">EASY</span></h1>
    <div class="text-center">
    <div class="d-inline-block" id="panelGreen">
    <!--Display picture-->
<div class="d-flex flex-row justify-content-center">
  <div class="d-inline-block e_pic" style="background-image: url('img/p1.png');">
</div>
  <div class="d-inline-block e_pic" style="background-image: url('img/p2.png');">
</div>
  <div class="d-inline-block e_pic" style="background-image: url('img/p3.png');">
</div>
  <div class="d-inline-block e_pic" style="background-image: url('img/p4.png');">
</div>
  <div class="d-inline-block e_pic" style="background-image: url('img/p5.png');">
</div>
</div>

<!--Display BlankBoxes-->
<div class="d-flex flex-row justify-content-center blank_box">
    <div id="target1" data-id="answer5">
    </div>
    <div id="target2" data-id="answer4">
    </div>
    <div id="target3" data-id="answer1">
    </div>
    <div id="target4" data-id="answer2">
    </div>
    <div id="target5" data-id="answer3">
    </div>
</div>
    </div>

<!--Display AnswerBoxes-->
<div class="d-flex flex-row justify-content-center mt-5" id="answerBoxes">
  <div id="answer1" class="answer1Box" style="background-image: url('img/a1.png');">
   </div>
  <div id="answer2" class="answer2Box" style="background-color: #fff7df; background-image: url('img/a2.png');">
   </div>
  <div id="answer3" class="answer3Box" style="background-image: url('img/a3.png');">
   </div>
  <div id="answer4" class="answer4Box" style="background-color: #ebccdf; background-image: url('img/a4.png');">
   </div>
  <div id="answer5" class="answer5Box" style="background-image: url('img/a5.png');">
   </div>
  </div>

  <div id="gj" class="d-none">
  <div class="text-center w3-animate-zoom w-100">
      <h1><span class="gj_bg_easy" id="gjForEasyQuiz">GOOD JOB!</span></h1>
  </div>
  <div class="arrow_easy" id="arrow_s">
        <img src="img/arrow.png" id="easy_arrow_next" style="width: 100%; height:100%;" alt="">
    </div>
  </div>
    </div>

</div>

<!--End Page Easy Quiz-->
<!--bonus_round Easy-->
<div class="bonus_round_easy d-none">
    <div class="d-flex justify-content-between">
    <img src="img/fozal_logo.png" class="fozal_logo" alt="">
    <img src="img/levox_logo.png" class="levox_logo" alt="">
    </div>
    <h1 class="r text-center mb-5"><span class="rBg">BONUS ROUND</span></h1>
    <div class="text-center">
    <div class="d-inline-block" id="b_panelGreen">
    <!--Display picture-->
<div class="d-flex flex-row justify-content-center">
  <div class="d-inline-block pic" style="background-image: url('img/bA2.png');">
</div>
  <div class="d-inline-block pic" style="background-image: url('img/bA1.png');">
</div>
  <div class="d-inline-block pic" style="background-image: url('img/bA2.png');">
</div>
</div>

<!--Display BlankBoxes-->
<div class="d-flex flex-row justify-content-center">
    <div id="b_target1" data-id="b_answer1">
    </div>
    <div id="b_target2" data-id="b_answer2">
    </div>
    <div id="b_target3" data-id="b_answer3">
    </div>
</div>
    </div>


<!--Display AnswerBoxes-->
<div class="d-flex flex-row justify-content-center mt-4" id="b_answerBoxes">
  <div id="b_answer1" data-id="b_answer1" data-check="b_answer3" class="b_answer1Box" data-image="bA1.png" style="background-image: url('img/bA1.png');">
   </div>
  <div id="b_answer2" data-id="b_answer2" data-check="b_answer2" class="b_answer2Box" data-image="bA2.png" style="background-color: #fff7df;background-image: url('img/bA2.png');">
   </div>
  <div id="b_answer3" data-id="b_answer3" data-check="b_answer1" class="b_answer3Box" data-image="bA1.png" style="background-image: url('img/bA1.png');">
   </div>
  </div>
    </div>
    
    
    <div class="container-fluid d-none show_result_bonus_easy" id="b_gj">
      <div class="row">
      <img src="img/home.png" id="goHomeFEasy" class="icon_side animate__animated animate__backInLeft" alt="">
      <div class="col gj_bg text-center">
      <h1 style="margin-top: .5%; color:black;">LEVEL COMPLETE</h1>
      <label>WELL DONE!</label>
      </div>
      <img src="img/arrow.png" id="goModerate" class="icon_side animate__animated animate__backInRight" alt="">
    </div>
    </div>

</div>
<!--End Page Bonus round EasyQuiz-->
<!--moderate-->
<div class="moderate d-none">
<div class="d-flex justify-content-between">
    <img src="img/fozal_logo.png" class="fozal_logo" alt="">
    <img src="img/levox_logo.png" class="levox_logo" alt="">
    </div>
    <h1 class="r text-center"><span class="rBg">MECHANICS</span></h1>
    <div class="d-flex justify-content-center">
    <button class="lvl_m btn_bg btn w-25" id="moderate_btn"><span class="t-btn">MODERATE</span></button>
    </div>
    <div class="text-center ctext_margin">
    <p class="p-moderate"><b>Choose Your Match!</b></p>
    <p class="p-moderate">Pick the best match from the set to</p>
    <p class="p-moderate">complete the Dynamic Duo.</p>
    </div>
    <div class="text-center mt-5 animate__animated animate__fadeInUp" style="line-height: .7;">
        <label class="d-block t_limit">TIME LIMIT</label>
        <div class="d-inline-flex p-4" style="color:#ffffff;background-color:#582e7e; border-radius:5px;">
        <div style="line-height: .6;">
        
            <p class="s30">60</p>
            <label class="lsecond">seconds</label>
        
        </div>
</div>
    </div>

</div>
<!--End Page moderate-->
<!--End Page moderateQuiz-->
<div class="moderateQuiz d-none">

<link rel="stylesheet" href="css/animation.css">
<div class="d-flex justify-content-between">
    <img src="img/fozal_logo.png"  class="fozal_logo" alt="">
    <div  class="div_timerM" id="_timer"><h1><span class="timer" id="countdownModerate">60</span></h1></div>
    <img src="img/levox_logo.png" class="levox_logo" alt="">
    </div>


    <!--moderateQuiz1-->

    <div id="moderateQuiz1">

    <h1 class="r text-center"><span class="rBg">MODERATE</span></h1>

    <h1 class="text-center question_font"><span style="font-weight:900;">Q1:</span> Who is Batman’s sidekick?</h1>

<div class="d-flex justify-content-center animate__zoomInDown animate__animated">
    <div class="bg_panel d-inline-block">
    <div class="row">
    <div class="col qImg">
    <img src="img/batman.png" class="animate__fadeIn animate__animated" id="q1_img" alt="">
    </div>
    <div class="col qImg">
    <img src="img/question_mark.png" class="animate__fadeIn animate__animated" id="Q1_qm" alt="">
    </div>
    <div class="position-absolute d-none" id="r_icon1" style="margin: 0 auto; left:0; right:0;">
        <img src="img/check.png" class="animate__fadeIn animate__animated checked" id="cw1" alt="">
    </div>
    </div>

    <div class="row mt-5">
    <div class="col">
    <img src="img/wwm.png" class="aImg a1" id="Q1_a1" alt="">
    </div>
    <div class="col" >
    <img src="img/sm.png" class="aImg a2" id="Q1_a2"  alt="">
    </div>
    <div class="col">
        <img src="img/r3.png" class="aImg a3" id="Q1_a3" alt="">
    </div>
    </div>
    </div>
</div>
    </div>

    <!--moderateQuiz2-->
    <div id="moderateQuiz2" style="display: none;">
<link rel="stylesheet" href="css/animation.css">

    <h1 class="r text-center"><span class="rBg">MODERATE</span></h1>

    <h1 class="text-center question_font"><span style="font-weight:900;">Q2:</span> Who is Prince Harry married to?</h1>

<div class="d-flex justify-content-center animate__zoomInDown animate__animated">
    <div class="bg_panel d-inline-block">
    <div class="row">
    <div class="col qImg">
    <img src="img/mq2.png" class="animate__fadeIn animate__animated" style="width: 100%; height:100%;" id="q2_img" alt="">
    </div>
    <div class="col qImg">
    <img src="img/question_mark.png" class="animate__fadeIn animate__animated" id="Q2_qm" style="width: 100%; height:100%;" alt="">
    </div>
    <div class="position-absolute d-none" id="r_icon2" style="margin:auto; left:0; right:0;">
        <img src="img/check.png" class="animate__fadeIn animate__animated checked" id="cw2" alt="">
    </div>
    </div>

    <div class="row mt-5">
    <div class="col" style="width: 100%; height:100%;">
    <img src="img/q2m1.png" class="aImg a1" id="Q2_a1" alt="">
    </div>
    <div class="col" style="width: 100%; height:100%;">
    <img src="img/q2m2.png" class="aImg a2" id="Q2_a2"  alt="">
    </div>
    <div class="col" style="width: 100%; height:100%;">
        <img src="img/q2m3.png" class="aImg a3" id="Q2_a3" alt="">
    </div>
    </div>
    </div>
</div>


    </div>


    <!--moderateQuiz3-->
    <div id="moderateQuiz3" style="display: none;">

<link rel="stylesheet" href="css/animation.css">
<div>

    <h1 class="r text-center"><span class="rBg">MODERATE</span></h1>

    <h1 class="text-center question_font"><span style="font-weight:900;">Q3:</span> What goes with a mortar?</h1>

<div class="d-flex justify-content-center animate__zoomInDown animate__animated">
    <div class="bg_panel d-inline-block">
    <div class="row">
    <div class="col qImg">
    <img src="img/mq3.png" class="animate__fadeIn animate__animated" style="width: 100%; height:100%;" id="q3_img" alt="">
    </div>
    <div class="col qImg">
    <img src="img/question_mark.png" class="animate__fadeIn animate__animated" id="Q3_qm" style="width: 100%; height:100%;" alt="">
    </div>
    <div class="position-absolute d-none" id="r_icon3" style="margin:auto; left:0; right:0;">
        <img src="img/check.png" class="animate__fadeIn animate__animated checked"  id="cw3" alt="">
    </div>
    </div>

    <div class="row mt-5">
    <div class="col">
    <img src="img/q3m1.png" style="background-color: white;" class="aImg a1" id="Q3_a1" alt="">
    </div>
    <div class="col">
    <img src="img/q3m2.png" class="aImg a2" id="Q3_a2"  alt="">
    </div>
    <div class="col">
        <img src="img/q3m3.png" class="aImg a3" id="Q3_a3" alt="">
    </div>
    </div>
    </div>
</div>

</div>

      
    </div>
    <!--moderateQuiz4-->
    <div id="moderateQuiz4" style="display: none;">
<link rel="stylesheet" href="css/animation.css">
<div>

    <h1 class="r text-center"><span class="rBg">MODERATE</span></h1>

    <h1 class="text-center question_font"><span style="font-weight:900;">Q4:</span> Who is Spongbob’s Best Friend?</h1>

<div class="d-flex justify-content-center animate__zoomInDown animate__animated">
    <div class="bg_panel d-inline-block">
    <div class="row">
    <div class="col qImg">
    <img src="img/mq4.png" class="animate__fadeIn animate__animated" style="width: 100%; height:100%;" id="q4_img" alt="">
    </div>
    <div class="col qImg">
    <img src="img/question_mark.png" class="animate__fadeIn animate__animated" id="Q4_qm" style="width: 100%; height:100%;" alt="">
    </div>
    <div class="position-absolute d-none" id="r_icon4" style="margin:auto; left:0; right:0;">
        <img src="img/check.png" class="animate__fadeIn animate__animated checked" id="cw4" alt="">
    </div>
    </div>

    <div class="row mt-5">
    <div class="col" style="width: 100%; height:100%;">
    <img src="img/q4m1.png" class="aImg a1" id="Q4_a1" alt="">
    </div>
    <div class="col" style="width: 100%; height:100%;">
    <img src="img/q4m2.png" class="aImg a2" id="Q4_a2"  alt="">
    </div>
    <div class="col" style="width: 100%; height:100%;">
        <img src="img/q4m3.png" class="aImg a3" id="Q4_a3" alt="">
    </div>
    </div>
    </div>
</div>

</div>

      
    </div>
    <!--moderateQuiz5-->
    <div id="moderateQuiz5" style="display: none;">
<link rel="stylesheet" href="css/animation.css">
<div>

    <h1 class="r text-center"><span class="rBg">MODERATE</span></h1>

    <h1 class="text-center question_font"><span style="font-weight:900;">Q5:</span> What do you use when writing on the  Blackboard?</h1>

<div class="d-flex justify-content-center animate__zoomInDown animate__animated">
    <div class="bg_panel d-inline-block">
    <div class="row">
    <div class="col qImg">
    <img src="img/mq5.png" class="animate__fadeIn animate__animated" style="width: 100%; height:100%;" id="q5_img" alt="">
    </div>
    <div class="col qImg">
    <img src="img/question_mark.png" class="animate__fadeIn animate__animated" id="Q5_qm" style="width: 100%; height:100%;" alt="">
    </div>
    <div class="position-absolute d-none" id="r_icon5" style="margin:auto; left:0; right:0;">
        <img src="img/check.png" class="animate__fadeIn animate__animated checked"  id="cw5" alt="">
    </div>
    </div>

    <div class="row mt-5">
    <div class="col" style="width: 100%; height:100%;">
    <img src="img/q5m1.png" class="aImg a1" id="Q5_a1" alt="">
    </div>
    <div class="col" style="width: 100%; height:100%;">
    <img src="img/q5m2.png" class="aImg a2" style="background-color: white;" id="Q5_a2"  alt="">
    </div>
    <div class="col" style="width: 100%; height:100%;">
        <img src="img/q5m3.png" class="aImg a3" id="Q5_a3" alt="">
    </div>
    </div>
    </div>
</div>

</div>

      
    </div>






</div>




<div class="moderateQuizResult d-none">

    <h1 class="r text-center"><span class="rBg">MODERATE</span></h1>
    
    <div class="d-flex justify-content-center">
    
<div class="bg_panel_result_green text-center d-flex justify-content-center animate__zoomInDown animate__animated">
<div class="bg_panel_result_green_inside d-inline-block _score"  style="line-height: .75;">
        <p class="d-none" id="tup">Time's up</h1>
        <h1 class="h_score">YOUR SCORE</h1>
        <p id="setScore">0/5</h1>
        <h1 id="dj_s">GOOD JOB!</h1>
    </div>
</div>

    </div>
    



    <div class="f">
        <div class="arrowforModerateQuizResult w3-animate-opacity" id="arrow_s">
        <img src="img/arrow.png" id="goBonusModerate" class="mqr" alt="">
        </div>

      </div>


</div>




<!--End page moderateQuizAll-->

<!--bonus round moderateQuiz-->
<div class="BonusRoundmoderateQuiz d-none">

<link rel="stylesheet" href="css/animation.css">
<div class="d-flex justify-content-between">
    <img src="img/fozal_logo.png"  class="fozal_logo" alt="">
    <img src="img/levox_logo.png" class="levox_logo" alt="">
    </div>


    <!--moderateQuiz1-->

    <div id="BonusRoundmoderateQuiz1">

    <h1 class="r text-center"><span class="rBg">MODERATE</span></h1>

    <h1 class="text-center question_font"><span style="font-weight:900;">BONUS:</span> What are Westmont's Dynamic Duo brands?</h1>

<div class="d-flex justify-content-center animate__zoomInDown animate__animated">
    <div class="bg_panel d-inline-block">
    <div class="row">
    <div class="col qImg">
    <img src="img/bA1.png" class="animate__fadeIn animate__animated" id="q6_img" alt="">
    </div>
    <div class="col qImg">
    <img src="img/question_mark.png" class="animate__fadeIn animate__animated" id="Q6_qm" alt="">
    </div>
    <div class="position-absolute d-none" id="r_icon6" style="margin: 0 auto; left:0; right:0;">
        <img src="img/check.png" class="animate__fadeIn animate__animated checked" id="cw6" alt="">
    </div>
    </div>

    <div class="row mt-5" id="bonusAnswer">
    <div class="col">
    <img src="img/q6m1.png" class="aImg a1" id="Q6_a1" alt="">
    </div>
    <div class="col" >
    <img src="img/bA2.png" class="aImg a2" id="Q6_a2"  alt="">
    </div>
    <div class="col">
        <img src="img/q6m3.png" class="aImg a3" id="Q6_a3" alt="">
    </div>
    </div>

    <div class="row mt-5 d-none" id="bonusModerateGJ">
    <div class="bg_bonusModerateGJ text-center">
    <h1>Level Complete</h1>
    <label>GOOD JOB!</label>

    </div>
    </div>

    </div>
</div>
    </div>


    <div class="d-flex justify-content-between d-none" id="bonusModerateBtn">
        <div>
        <img src="img/home.png" id="goHomeFModerate" class="icon_side_Bmoderate animate__animated animate__backInLeft" alt="">
        </div>
        <div> 
        <img src="img/arrow.png" id="goHard" class="icon_side_Bmoderate animate__animated animate__backInRight" alt="">
        </div>
    </div>







</div>
<!--End Page Bonus round for moderateQuiz-->


<!--End page Hard-->
<div class="hard d-none">
<div class="d-flex justify-content-between">
    <img src="img/fozal_logo.png" style="height: 12%; width:12%;  margin:30px 0px 0px 30px" alt="">
    <img src="img/levox_logo.png" style="height: 12%; width:12%;  margin:30px 0px 0px 30px" alt="">
    </div>
    <h1 class="r text-center"><span class="rBg">MECHANICS</span></h1>
    <div class="d-flex justify-content-center">
    <button class="lvl_m btn_bg btn w-25" id="hard_btn"><span class="t-btn">HARD</span></button>
    </div>
    <div class="text-center">
    <p class="p-moderate"><b>Test your memory and find the</b></p>
    <p class="p-moderate">Dynamic Duo pairs.</p>
    <p class="p-moderate">Flip all cards to complete the level.</p>
    </div>
    <div class="text-center mt-5" style="line-height: .7;">
        <label class="d-block t_limit">TIME LIMIT</label>
        <div class="d-inline-flex p-4" style="color:#ffffff;background-color:#582e7e; border-radius:5px;">
        <div style="line-height: .6;">
        
        <p class="s30">60</p>
            <label class="lsecond">seconds</label>
        
        </div>
</div>
    </div>


</div>

<!--EndPage Hard--->

<!--HardQuiz--->

<div class="hardQuiz d-none">

<link rel="stylesheet" href="css/hard.css">
<link rel="stylesheet" href="css/dynamicStyle.css">
<div class="d-flex justify-content-between">
    <img src="img/fozal_logo.png" style="height: 12%; width:12%; margin:30px 0px 0px 30px" alt="">
    <div style=" margin:30px 0px 0px 30px" id="_timerH"><h1><span class="timer" id="countdownHard">60</span></h1></div>
    <img src="img/levox_logo.png" style="height: 12%; width:12%; margin:30px 30px 0px 0px" alt="">
	
    </div>
	<div class="text-center">

	<h1 class="r text-center mb-2 d-inline-block text-center"><span class="rBg">HARD</span></h1>
	</div>
	<div class="d-flex flex-row justify-content-center">
	<div class="p-2">
  <div class="field" id="1">
		<div class="inner-wrap">
			<div class="front"></div>
		<div class="back"></div>	
		</div>
	</div>
</div>
<div class="p-2">
  <div class="field" id="2">
		<div class="inner-wrap">
			<div class="front"></div>
		<div class="back"></div>	
		</div>
	</div>
</div>
<div class="p-2">
  <div class="field" id="3">
		<div class="inner-wrap">
			<div class="front"></div>
		<div class="back"></div>	
		</div>
	</div>
</div>
<div class="p-2">
  <div class="field" id="4">
		<div class="inner-wrap">
			<div class="front"></div>
		<div class="back"></div>	
		</div>
	</div>
</div>
	</div>

    <div class="d-none" id="endGameHard">
    <div class="d-flex flex-row justify-content-center">
	<div class="endResult text-center">
		<h5 class="eR_header">YOU GOT THEM ALL</h5>
		<h1 class="eR_gj" id="H_result">GOOD JOB!</h1>
	</div>
  
  <div class="arrow_hard">
        <img src="img/arrow.png" id="hard_arrow_next" style="width: 100%; height:100%;" alt="">
        </div>
	</div>
    </div>


	<div class="d-flex flex-row justify-content-center">
	<div class="p-2">
  <div class="field" id="5">
		<div class="inner-wrap">
			<div class="front"></div>
		<div class="back"></div>	
		</div>
	</div>
</div>
<div class="p-2">
  <div class="field" id="6">
		<div class="inner-wrap">
			<div class="front"></div>
		<div class="back"></div>	
		</div>
	</div>
</div>
<div class="p-2">
  <div class="field" id="7">
		<div class="inner-wrap">
			<div class="front"></div>
		<div class="back"></div>	
		</div>
	</div>
</div>
<div class="p-2">
  <div class="field" id="8">
		<div class="inner-wrap">
			<div class="front"></div>
		<div class="back"></div>	
		</div>
	</div>
</div>
	</div>

	<div class="d-flex flex-row justify-content-center">
	<div class="p-2">
  <div class="field" id="9">
		<div class="inner-wrap">
			<div class="front"></div>
		<div class="back"></div>	
		</div>
	</div>
</div>
<div class="p-2">
  <div class="field" id="10">
		<div class="inner-wrap">
			<div class="front"></div>
		<div class="back"></div>	
		</div>
	</div>
</div>
<div class="p-2">
  <div class="field" id="11">
		<div class="inner-wrap">
			<div class="front"></div>
		<div class="back"></div>	
		</div>
	</div>
</div>
<div class="p-2">
  <div class="field" id="12">
		<div class="inner-wrap">
			<div class="front"></div>
		<div class="back"></div>	
		</div>
	</div>
</div>
	</div>


</div>
<!--EndPage HardQuiz--->

<!--HardQuizBonusRound--->

<div class="bonus_hard_quiz d-none">
<?php include 'pages/bonus_hard.php' ?>
</div>


<!--EndPage HardQuizBonusRound-->
<!--EndPage-->
<div class="endPage d-none">
    <?php include 'pages/endPage.php' ?>
</div>

<!--EndPage EndPage-->


</div>







        <!--<div id="header">
        </div>-->

        <!--This is Jquery-->
        <script src="js/edynamicDuo.js"></script>
        <script src="js/dynamicDuo.js"></script>
        <script src="js/harddynamicDuo.js"></script>
        <script src="js/timer.js"></script>
        
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/DnD.js"></script>

        
<link rel="stylesheet" href="css/dynamicStyle.css">


<div class="d-none">
<audio src="sfx/You_Should.mp3" controls id="you_should"></audio>
<audio src="sfx/game_over.mp3" controls id="game_over"></audio>
<audio src="sfx/good_job.mp3" controls id="good_job"></audio>
<audio src="sfx/pluck_it_up.mp3" controls id="pluck_it_up"></audio>
<audio src="sfx/wrong_answer.mp3" controls id="wrong_answer"></audio>
<audio src="sfx/right_answer.mp3" controls id="right_answer"></audio>
</div>
<script>
    $('#sound_switch').on('touchstart click', function(){
        var images = $(this).attr('src');
        var you_should = document.getElementById('you_should');
        you_should.volume = .1;
        you_should.play();
        you_should.loop = true;
    if(images === 'img/sound_off.png'){ /* check source */
      $(this).attr('src','img/sound_on.png');
       /* change source */
    }
  else{
      $(this).attr('src','img/sound_off.png');
      you_should.pause(); /* change source */
  }
    })
</script>

<div class="f">
      <p>FOR HEALTHCARE PROFESSIONALS ONLY</p>
      </div>

</body>
</html>
