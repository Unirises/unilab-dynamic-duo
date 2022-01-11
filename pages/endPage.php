<link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dynamicStyle.css">
    <div class="container-fluid">
    <h1 class="thanks animate__zoomInUp animate__animated text-center mt-2">THANK YOU FOR PLAYING!</h1>
    <div class="text-center">
    <img src="img/dynamic_duo.png" class="dynamicduo-logo-small animate__animated animate__heartBeat animate__infinite" alt="">
    <div class="row">
    <div class="col-6">
        <div>
        <img src="img/z1.png" class="z-logo-fozal" alt="">
        </div>
    </div>
    <div class="col-6">
<div>
<img src="img/z2.png" class="z-logo" alt="">
</div>
    </div>
    
    </div>



    <div class="endPageBtn">
<img src="img/home.png" id="backToHomeFEndpage" class="endPageIconSideL" alt="">
<img src="img/exit_btn.png" id="closeTab" class="endPageIconSideR" alt="">

</div>

<script src="js/edynamicDuo.js"></script>
<script>
    $('#closeTab').click(function(){
        var win = window.open("about:blank", "_self");
win.close();
    })
</script>


    
    
    </div>

    </div>