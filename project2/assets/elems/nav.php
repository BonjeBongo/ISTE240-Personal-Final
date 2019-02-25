<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="<?php echo $goHome;?>">
        <img src="<?php echo $currentPath;?>assets/images/denv-co-lg.svg" width=100 height=50 alt="Logo of Denver Colorado">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span> <!--hamburger-->
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link btn active" href="<?php echo $goHome;?>">Home</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn" href="<?php echo $goHist;?>" id="learnDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About Denver
        </a>
        <div class="dropdown-menu" aria-labelledby="learnDrop">
            <a class="dropdown-item" href="<?php echo $goHistA1;?>">Denver History</a>
            <a class="dropdown-item" href="<?php echo $goHistA2;?>">Significance of Denver</a>
        </div> <!-- end dropdown items-->
        </li> <!-- end dropdown-->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn" href="<?php echo $goLand;?>" id="landmarkDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Landmarks
        </a>
        <div class="dropdown-menu" aria-labelledby="landmarkDrop">
            <a class="dropdown-item" href="<?php echo $goLandA1;?>">Red Rocks Amphitheatre</a>
            <a class="dropdown-item" href="<?php echo $goLandA2;?>">Botanic Gardens</a>
            <a class="dropdown-item" href="<?php echo $goLandA3;?>">Museum of Nature & Science</a>
            <a class="dropdown-item" href="<?php echo $goLandA4;?>">Capitol Building</a>
        </div> <!-- end dropdown items-->
        </li> <!-- end dropdown-->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn" href="<?php echo $goRest;?>rant" id="foodDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Restaurants
        </a>
        <div class="dropdown-menu" aria-labelledby="foodDrop">
            <a class="dropdown-item" href="<?php echo $goRestA1;?>">Ace Eat Serve</a>
            <a class="dropdown-item" href="<?php echo $goRestA2;?>">New Saigon</a>
            <a class="dropdown-item" href="<?php echo $goRestA3;?>">Sushi Ronin</a>
        </div> <!-- end dropdown items-->
        </li> <!-- end dropdown-->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn" href="<?php echo $goEvt;?>" id="eventsDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Events
        </a>
        <div class="dropdown-menu" aria-labelledby="eventsDrop">
            <a class="dropdown-item" href="<?php echo $goEvtA1;?>">Upcomming Events</a>
            <a class="dropdown-item" href="<?php echo $goEvtA2;?>">Past Events</a>
        </div> <!-- end dropdown items-->
        </li> <!-- end dropdown-->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn" href="<?php echo $goHtl;?>" id="hotelsDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Where to stay
        </a>
        <div class="dropdown-menu" aria-labelledby="hotelsDrop">
            <a class="dropdown-item" href="<?php echo $goHtlA1;?>">Queen Anne</a>
            <a class="dropdown-item" href="<?php echo $goHtlA2;?>">Warwick</a>
            <a class="dropdown-item" href="<?php echo $goHtlA3;?>">Comfort Inn</a>
        </div> <!-- end dropdown items-->
        </li> <!-- end dropdown-->
        <li class="nav-item">
            <a class="nav-link btn" href="<?php echo $goCont;?>">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn" href="<?php echo $goSrv;?>">Visitor Survey</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn" href="<?php echo $goComm;?>">Comment</a>
        </li>
    </ul>
    </div> <!--end collapable navbar -->
</nav> <!--end nav-->