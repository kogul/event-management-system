<div id="main">
    <nav class="navbar navbar-default  " style="color:white">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </div>
            <div class="collapse navbar-collapse shift" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><span style="font-size:30px;cursor:pointer" onclick="openNav()" onclick="closeNav()" class="selector">&#9776;</span></li>
                    <li><a class="mainheader" id="mainheader" style="margin-left:10px;color:#7b1fa2 ">DASHBOARD</a></li>
                    <a class="navbar-brand" rel="home" href="#">
                        <img class="dashboard_logo"style="max-width:200px; margin-top: -23px;margin-left:130%;"src="t2.png">
                    </a>
                </ul>
            </div>
        </div>
    </nav>

    <div class="events container" id="events">
        <h2 class="eventheader text-center" style="font-family: 'Lato', sans-serif;">EVENTS</h2><input id="search" type="text" style="width:20%; " name="search" placeholder="Search..">
        <hr>

        <div class="row text-center">
            <?php
            if(!empty($events)){
            foreach ($events as $event){ ?>
            <div class="col-sm-4">
                <div class="event1">
                    <img class="eventimage" src="<?php echo base_url('/application/Assets/Images/').$event->picture; ?>">
                    <div class="eventjoin">
                        <h class="text" style="font-family: 'Lato', sans-serif;"> JOIN </h>
                    </div>
                </div>
            </div>
            <?php }
            } ?>
        </div>
    </div>

    <div class="container user_profile " id="user_profile" style="display:none">
        <h></h>
        <div class="row">
            <div class="col-sm-4 profile">
                <div class="profile_picture">
                    <img src="img_avatar.png"><span class="user_name"><h class="nametag"><?php echo $udata['u_name']; ?></h><i class="fa fa-pencil-square-o icon1" style="font-size:20px;" aria-hidden="true"></i></span>
                </div>
                <div class="user_details">
                    <div class="user_ph">
                        <h4 class="desc" style="font-family: 'Lato', sans-serif;">Phone No:</h4>
                        <span><textarea rows=1 class="number" style="outline:none;resize:none;border:1px solid white;"><?php echo $phone['number']; ?></textarea><i class="fa fa-pencil-square-o icon1" id="icon_ph" onclick="ph_change()" style="font-size:20px;" aria-hidden="true"></i><i class="fa fa-plus icon2"  style="font-size:20px;" aria-hidden="true"></i></span>
                    </div>

                    <div class="user_ph">
                        <h4 class="desc" style="font-family: 'Lato', sans-serif;" style="padding-bottom:1%;">Email Id:</h4>
                        <span><h style="padding:3%;" class="number"><?php echo $udata['email']; ?></h><span>
                    </div>
                    <br>

                    <div class="user_addr" style="font-family: 'Lato', sans-serif;">
                        <h4 class="desc">Address:</h4>
                        <textarea class="addr" cols=5 rows=3 style="outline:none;resize:none;border:1px solid white;"><?php echo $udata['city'].', '.$udata['state'].','.$udata['zipcode']; ?></textarea><span><i class="fa fa-pencil-square-o icon1" style="font-size:20px;" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <!--<div class="col-sm-9">
                        <div class="bio">
                            <h3 class="text-center" style="font-family: 'Lato', sans-serif;">Bio</h3>
                            <hr >
                            <textarea class="biotext"  cols="80" rows="4"></textarea>
                        </div>
                    </div>-->
                    <div class="col-sm-3">
                        <div class="extra">
                            <span><h2 class="changepass">Change Password</h2></span>
                            <span><h2 class="account_settings">Account Settings</h2></span>
                            <span><h2 class="account_settings">Report Issues</h2></span>
                            <span><h2 class="account_settings">Your Events</h2></span>
                        </div>
                    </div>
                </div>

                <!--<div class="bio">
                    <h3 class="text-center" style="font-family: 'Lato', sans-serif;">Messages</h3>
                    <hr>
                    <textarea class="biotext"  cols="60" rows="7"></textarea>

                </div>-->

            </div>
        </div>
    </div>

    <div class="create_event" id="create_event" style="display:none;">
        <div class="container ">
            <div class="event_select dropdown" >
                <button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">Create Event
                    <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                    <li role="presentation"><a role="menuitem" onclick="public()" tabindex="-1" href="#">Public Event</a></li>
                    <li role="presentation"><a role="menuitem" onclick="private()" tabindex="-1" href="#">Private Event</a></li>
                </ul>
            </div>
            <div class="public_event" id="public" style="display:none">
                <div>
                    <form method="post" action="/user/create" enctype="multipart/form-data">
                    <h3 class="text-center">Public Event</h3>
                    <hr>
                        <input type="hidden" name="category" value="public">
                    <h4 class="event_input_head">Event Photo</h4>
                    <input type="file" accept="image/*" display="inline-block" name="event_pic">
                    <h4 class="event_input_head">Event Name</h4>
                    <input type="text" placeholder="Enter a short,clear name" name="event_name">
                    <h4 class="event_input_head">Event Date</h4>
                    <input type="date" name="event_date">
                    <h4 class="event_input_head">Event Location</h4>
                    <select name="location">
                        <?php foreach ($locations as $location){?>
                        <option value="<?php echo $location->location_id; ?>"><?php echo $location->name; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <br>
                    <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
            <div class="private_event" id="private"style="display:none">
                <div>
                    <form method="post" action="/user/create" enctype="multipart/form-data">
                    <h3 class="text-center">Private Event</h3>
                    <hr>
                        <hr>
                        <input type="hidden" name="category" value="private">
                        <h4 class="event_input_head">Event Photo</h4>
                        <input type="file" accept="image/*" display="inline-block" name="event_pic">
                        <h4 class="event_input_head">Event Name</h4>
                        <input type="text" placeholder="Enter a short,clear name" name="event_name">
                        <h4 class="event_input_head">Event Date</h4>
                        <input type="date" name="event_date">
                        <h4 class="event_input_head">Event Location</h4>
                        <select name="location">
                            <?php foreach ($locations as $location){?>
                                <option value="<?php echo $location->location_id; ?>"><?php echo $location->name; ?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <br>
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>