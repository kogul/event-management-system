<nav class="navbar navbar-default" style="color:white">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse shift" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a class="mainheader" id="mainheader" style="color:#7b1fa2;background:white; ">ADMIN PANEL</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li style="cursor:pointer"><a href="/admin/logout">LOGOUT<i class="fa fa-sign-out"  aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="snackbar">
    <h>Welcome Admin!</h>
</div>
<div class="container">
    <div class="table-responsive">
        <table class="table" id="eventtable" style="margin-top:15%;">
            <thead>
            <tr>
                <th>Event Name</th>
                <th>Organizer Name</th>
                <th>Organizer contact</th>
                <th>Location</th>
                <th>Date</th>
                <th>Time</th>
                <th>Number of Participants</th>
                <th>Delete</th>
                <th><i class="material-icons" onclick="sortlist()">filter_list</i></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($events as $event){ ?>
            <tr>
                <td></td>
                <td><?php echo $event['name']; ?></td>
                <td><?php echo $event['o_name']; ?></td>
                <td><?php echo $event['o_phone']; ?></td>
                <td><?php echo $event['location_id']; ?></td>
                <td><?php echo $event['date']; ?></td>
                <td><?php echo $event['e_time']; ?></td>
                <td><?php echo $event['count']; ?></td>
                <td><a class="deletebtn btn" href="/admin/delEvent?e_id=<?php echo $event['e_id']; ?>">DELETE</a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>



</body>
</html>
