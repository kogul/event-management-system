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
                     <li><span style="font-size:30px;cursor:pointer" onclick="openNav()" onclick="closeNav()" class="selector"><i class="material-icons"  style="font-size:1.5em;">&#xE896;</i></span></li>
                     <li><a class="mainheader" id="mainheader" style="margin-left:10px;color:#7b1fa2 ">DASHBOARD</a></li>
                 </ul>
                 <ul class="navbar-right nav navbar-nav">
                     <li><a><i class="material-icons" id="bookmarks">chat</i></a></li>
                     <li><a class="notify" id="notify"><div class="icon material-icons mdl-badge" data-badge="♥">notifications</div></a></li>
                     <!-- <div class="chip dropdown-toggle" data-toggle="dropdown">
                      <img src="img_avatar.png" alt="Person" width="90" height="96">
                      John Doe -->
                     <li><div class="dropdown user_settings" >
                             <button class="btn btn-primary dropdown-toggle " id="menu2" type="button" data-toggle="dropdown"><i class="material-icons">account_circle</i><i class="material-icons">more_vert</i></i>
                             </button>
                             <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">

                                 <li role="presentation"><a role="menuitem" onclick="private()" tabindex="-1" href="#">Account Settings</a></li>
                                 <li role="presentation"><a role="menuitem" onclick="public()" tabindex="-1" href="#">Change Password</a></li>
                                 <li role="presentation"><a role="menuitem" onclick="private()" tabindex="-1" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to=kogul.karna@gmail.com&su=&body=&bcc=&tf=1" target="_blank">Report Issues</a></li>


                             </ul>
                             <!-- </div> -->
                         </div></li>

                 </ul>

             </div>
         </div>
     </nav>

     <div class="events container" id="events">
         <h2 class="eventheader text-center" style="font-family: 'Lato', sans-serif;">EVENTS</h2>
         <hr>

         <div class="row text-center eventsmain" style="padding-top:3%;">
             <?php
             if(!empty($events)){
             foreach ($events as $event){?>
             <div class="col-sm-3">
                 <div class="event1"  id="event1">
                     <img class="eventimage" src="<?php echo base_url('/application/Assets/Images/').$event->picture; ?>">
                     <div class="mask">
                         <h2 class="eventname"><span><?php echo $event->name; ?></span></h2>
                         <hr>
                         <h5 class="eventprice">Price: <span class="price">Rs. <?php echo $event->fees ?></span></h5>
                         <h5 class="eventlocation">Location: <span class="loc"><?php echo $event->location_id ?></span></h5>
                         <h5 class="eventdate">Date & Time : <span class="date"><?php echo $event-> date; ?> </span>-<span class="time"><?php echo $event->e_time; ?></span></h5>
                         <h5 class="eventcontact">Contact: <span class="contact"><?php echo $event->o_phone; ?></span></h5>
                         <a href="/user/regEvent?eid=<?php echo $event->e_id; ?>" class="text">Register</a>
                         <br>
                         <br>
                     </div>
                 </div>
             </div>
             <?php }
             } ?>
             <?php
             if(!empty($pvtEvents)){
                 foreach ($pvtEvents as $event){?>
                     <div class="col-sm-3">
                         <div class="event1"  id="event1">
                             <img class="eventimage" src="<?php echo base_url('/application/Assets/Images/').$event->picture; ?>">
                             <div class="mask">
                                 <h2 class="eventname"><span><?php echo $event->name; ?></span></h2>
                                 <hr>
                                 <h5 class="eventlocation">Location: <span class="loc"><?php echo $event->location_id ?></span></h5>
                                 <h5 class="eventdate">Date & Time : <span class="date"><?php echo $event-> date; ?> </span>-<span class="time"><?php echo $event->e_time; ?></span></h5>
                                 <form action="/user/invite">
                                     <input type="hidden" name="e_id" value="<?php echo $event->e_id; ?>">
                                     <input type="text" name="email" placeholder="Enter Email" class="col-sm-offset-1 form-control"><br/>
                                     <input type="submit" class="text" style="border: 0px;" value="Invite">
                                 </form>
                                 <br/>
                                 <a href="/user/delEvent?eid=<?php echo $event->e_id; ?>" class="text">Delete</a>
                                 <br>
                                 <br>
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
                    <span class="user_name"><h class="nametag"><?php echo $udata['u_name']; ?></h><i class="fa fa-pencil-square-o icon1" style="font-size:20px;" aria-hidden="true"></i></span>
                 </div>
                 <div class="user_details">
                     <div class="user_ph">
                         <h4 class="desc" style="font-family: 'Lato', sans-serif;">Phone No:</h4>
                         <?php foreach ($phone as $num){ ?>
                         <span><textarea rows=1 class="number" style="outline:none;resize:none;border:1px solid white;"><?php echo $num->number; ?></textarea><i class="fa fa-pencil-square-o icon1" id="icon_ph" onclick="ph_change()" style="font-size:20px;" aria-hidden="true"></i><i class="fa fa-plus icon2"  style="font-size:20px;" aria-hidden="true"></i></span>
                         <?php }?>
                     </div>

                     <div class="user_ph">
                         <h4 class="desc" style="font-family: 'Lato', sans-serif;" style="padding-bottom:1%;">Email Id:</h4>
                         <span><h style="padding:3%;" class="number"><?php echo $udata['email']; ?></h><span>
                     </div>
                     <br>

                     <div class="user_addr" style="font-family: 'Lato', sans-serif;">
                         <h4 class="desc">Address:</h4>
                         <textarea class="addr" cols=5 rows=3 style="outline:none;resize:none;border:1px solid white;"><?php echo $udata['city'].','.$udata['state'].','.$udata['zipcode'] ; ?></textarea><span><i class="fa fa-pencil-square-o icon1" style="font-size:20px;" aria-hidden="true"></i></span>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="bio">
                             <h3 class="text-center" style="font-family: 'Lato', sans-serif;">Add Phone</h3>
                             <hr>
                             <form method="post" action="/user/addPhone">
                                 <input type="text" placeholder="Code" class="form-control" name="p_code" id="input11" required>
                                 <input type="text" placeholder="Phone No." class="form-control" name="phnum" id="input11" required>
                                 <br>
                                 <input class="btn btn-primary profilesubmit" id="profilesubmit"   type="submit">
                             </form>
                         </div>
                     </div>

                 </div>
             </div>

             <div class="col-sm-7">
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="bio">
                             <h3 class="text-center" style="font-family: 'Lato', sans-serif;">Change Password</h3>
                             <hr>
                             <form method="post" action="/user/changePassword">
                             <input type="password" placeholder="Old Password" name="opsw" id="input11" required>
                             <br>
                             <input type="password" placeholder="New Password" name="npsw" id="input11" required>
                             <br>
                             <input type="password" placeholder="Confirm Password" name="cpsw" id="input12" required>
                             <input class="btn btn-primary profilesubmit" id="profilesubmit"   type="submit">
                             </form>
                         </div>
                     </div>

                 </div>
                 <div class="bio">
                     <h3 class="text-center" style="font-family: 'Lato', sans-serif;">Your Events</h3>
                     <hr >
                     <ul class="biotext" style="background:white;"  cols="80" rows="6">
                         <?php if(!empty($allPart)){
                            foreach ($allPart as $event){
                                ?>
                         <li><?php echo $event->name.": Rs.".$event->bill." - "; ?><a href="/user/remove?eid=<?php echo $event->e_id; ?>">Unparticipate</a></li>
                                <?php
                            }
                         } ?>
                     </ul>
                 </div>


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
                     <h3 class="text-center">Public Event</h3>
                     <hr>
                     <form action="/user/create" method="post" enctype="multipart/form-data">
                         <input type="hidden" name="category" value="public">
                     <h4 class="event_input_head ">Event Photo</h4>
                     <input type="file" name="event_pic" class="event_photo" accept="image/*" onchange="readURL(this);" display="inline-block">
                     <img id="blah" class="event_img" src="http://placehold.it/180" alt="your image" />
                     <h4 class="event_input_head">Event Name</h4>
                     <input type="text" name="event_name" placeholder="Enter a short,clear name">
                     <h4 class="event_input_head">Event Date</h4>
                     <input type="date" name="event_date">
                     <h4 class="event_input_head">Event Time</h4>
                     <input type="time" name="event_time">
                     <h4 class="event_input_head">Event Location</h4>
                         <select name="location">
                             <?php foreach ($locations as $location){ if($location->availability == 0){?>
                                 <option value="<?php echo $location->name; ?>"><?php echo $location->name; ?></option>

                             <?php }
                             }
                             ?>
                         </select>
                         <h4 class="event_input_head">Official Contact</h4>
                         <input type="text" name="o_phone">
                     <h4 class="event_input_head">Ticket Price </h4>
                     <input type="Number" name="entry_fee" placeholder="Enter the ticket price">
                     <br>
                     <br>
                     <button class="btn btn-primary" id="menu1" type="submit">Submit</button>
                     </form>
                 </div>
             </div>
             <div class="private_event" id="private"style="display:none">
                 <div>
                     <h3 class="text-center">Private Event</h3>
                     <hr>
                     <form action="/user/create" method="post" enctype="multipart/form-data">
                         <input type="hidden" name="category" value="private">
                     <h4 class="event_input_head event_photo">Event Photo</h4>
                     <input type="file" name="event_pic" class="event_photo" accept="image/*" onchange="readURL(this);" display="inline-block">
                     <img id="blah" class="event_img" src="http://placehold.it/180" alt="your image" />
                     <h4 class="event_input_head">Event Name</h4>
                     <input type="text" name="event_name" placeholder="Enter a short,clear name">
                     <h4 class="event_input_head">Event Date</h4>
                     <input name="event_date" type="date">
                     <h4 class="event_input_head">Event Time</h4>
                     <input type="time" name="event_time">
                     <h4 class="event_input_head">Event Location</h4>
                         <select name="location">
                             <?php foreach ($locations as $location){ if($location->availability == 0){?>
                                 <option value="<?php echo $location->name; ?>"><?php echo $location->name; ?></option>

                          <?php }
                             }
                             ?>
                         </select>
                         <h4 class="event_input_head">Official Contact</h4>
                         <input type="text" name="o_phone">
                     <h4 class="event_input_head">Ticket Price </h4>
                     <input type="Number" name="entry_fee" placeholder="Enter the ticket price">
                     <br>
                     <br>

                     <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to=&su=&body=google.com&bcc=&tf=1" target="_blank" class="text">Send Invitation</a>
                     <br>
                     <br>
                     <button class="btn btn-primary" id="menu1" type="submit">Submit</button>
                     </form>

                 </div>
             </div>
         </div>
     </div>
     <div id="snackbar">
         <h5>Registered in the Event!<h5>
                 <h5>Go to Profile/Your Events for more information</h5>
     </div>

 </div>
 </body>
 </html>
