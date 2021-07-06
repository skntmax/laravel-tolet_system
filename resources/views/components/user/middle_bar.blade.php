<link rel="stylesheet" type="text/css" href="{{asset('./yoyo/css/room_cards.css')}}">
<script type="text/javascript" src="{{asset('./yoyo/js/room_cards_js.js')}}"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('./yoyo/css/room_cards.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('./yoyo/css/locker_css.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">


<?php
for($i=0; $i<=10;$i++){

?>
<div class="location_with_lock">
          <div class="" style="float:left;">
        <h3>  </h3>            
             </div>
       <div style="float:right;">
           <h3 class="bi bi-unlock-fill" style=" float:left;"> </h3><h3 style="float:left;" >Lock</h3> <label class="switch">
              <input type="checkbox" name="lock[]" value="locked"  >
              <span class="slider round"></span>
            </label>
       </div> 
    </div>

<div class="container mt-5 mb-5">
     
    <div class="row">
        <div class="col-md-12">
            <div class="bg-white p-3 rounded mt-2">
                <div class="row">
                    <div class="col-md-3">
                        <div class="d-flex flex-column justify-content-center align-items-center icon-container text-white mb-2" style="background-color: #FC8907;"><img src="{{asset('./yoyo/user/users_image/room_preview.jpg')}}" alt="" height="150px" width="200px"><span class="mb-4">
                      <ul  style="float:left;">
                         <li> hiii </li>
                         <li> hiii </li>
                         <li> hiii </li>
                         <li> hiii </li>
                         <li> hiii </li>

                      </ul>
                        </span></div>
                    </div>
                    <div class="col-md-6 border-right">
                        <div class="listing-title">
                            <h5>House Name  : katiyar Bhavan  </h5>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-row align-items-center ratings"><span class="mr-1 rating-number">4</span>
                                <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span class="mr-2 text-black-50 number-ratings">(12342 ratings)</span>
                            </div>
                            <div class="level "><span>Level:</span><span class="font-weight-bold">Beginner</span></div>
                            <div class="level "><span>Expected Rent:</span><span class="font-weight-bold text-success">Rs.2000</span></div>
                        </div>
                        <div class="description">
                            <p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer...<br></p>
                        </div>
                        <div class="tags mb-2"><span>Microsoft</span><span>Azure</span><span>Development</span></div>
                    </div>
                    <div class="d-flex col-md-3">
                        <div class="d-flex flex-column justify-content-start user-profile w-100">
                            <div class="d-flex user"><img class="rounded-circle" src="{{asset('./yoyo/home_owner/anil_katiyar/anil_katiyar.jpg')}}" width="50">
                                <div class="about ml-1"><span class="d-block text-black font-weight-bold">Anil Katiyar </span><span>Doctor</span></div>
                            </div>
                            <div class="progresses"><span>Designing</span>
                                <div class="progress mt-1">
                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                </div>
                            </div>
                            <div class="progresses"><span>Expertise</span>
                                <div class="progress mt-1">
                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                </div>
                            </div>
                            <div class="progresses"><span>Awareness</span>
                                <div class="progress mt-1">
                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

</div>
</div>

<?php

} 

?>

