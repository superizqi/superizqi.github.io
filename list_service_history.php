<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Radius Manager - Administration Control Panel</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <body>
      <nav class="navbar navbar-inverse">
         <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">System <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="#">Home</a></li>
                  <li>
                     <a href="#">System Settings</a>
                     <hr>
                  <li><a href="#">Logout</a></li>
               </ul>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">User <span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                  <li><a href="#">List users</a></li>
                  <li><a href="#">Find users</a></li>
                  <li><a href="#">New user</a></li>
                  <hr>
                  <li><a href="#">List user groups</a></li>
                  <li><a href="#">New user groups</a></li>
               </ul>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                  <li><a href="#">List services</a></li>
                  <li><a href="#">New services</a></li>
                  <hr>
                  <li><a href="#">Scheduled changes</a></li>
                  <li><a href="#">Service change <br> history</a></li>
               </ul>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Managers<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                  <li><a href="#">List Managers</a></li>
                  <li><a href="#">New Managers</a></li>
               </ul>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">NAS<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                  <li><a href="#">List NAS</a></li>
                  <li><a href="#">New NAS</a></li>
               </ul>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">AP<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                  <li><a href="#">List access point</a></li>
                  <li><a href="#">New access point</a></li>
               </ul>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">CMTS<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                  <li><a href="#">List CMTS</a></li>
                  <li><a href="#">New CMTS</a></li>
               </ul>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">IP pools<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                  <li><a href="#">List pools</a></li>
                  <li><a href="#">New pool</a></li>
               </ul>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Financials<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                  <li><a href="#">Find invoices</a></li>
                  <li><a href="#">Generate postpaid<br>invoices</a></li>
               </ul>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Card system<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                  <li><a href="#">List card series</a></li>
                  <li><a href="#">List classic prepaid<br>cards</a></li>
                  <li><a href="#">List refil cards</a></li>
                  <li><a href="#">Find refil cards</a></li>
                  <hr>
                  <li><a href="#">Generate cards</a></li>
                  <hr>
                  <li><a href="#">Card statistics</a></li>
               </ul>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">IAS<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                  <li><a href="#">List IAS</a></li>
                  <li><a href="#">List IAS templates</a></li>
                  <li><a href="#">New IAS templates</a></li>
               </ul>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                  <li><a href="#">Online RADIUS<br>users</a></li>
                  <li><a href="#">Registered cable<br>modems</a></li>
                  <hr>
                  <li><a href="#">Overall traffic report</a></li>
                  <li><a href="#">Find traffic data</a></li>
                  <li><a href="#">Traffic summary</a></li>
                  <hr>
                  <li><a href="#">Connection report</a></li>
                  <li><a href="#">Authentication log</a></li>
                  <li><a href="#">Last syslog events</a></li>
                  <li><a href="#">Browse syslog</a></li>
                  <hr>
                  <li><a href="#">System informations</a></li>
                  <li><a href="#">System statistics</a></li>
               </ul>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                  <li><a href="#">Bulk email</a></li>
                  <li><a href="#">bulk SMS</a></li>
                  <hr>
                  <li><a href="#">Start RADIUS server</a></li>
                  <li><a href="#">Stop RADIUS server</a></li>
                  <li><a href="#">Restart RADIUS<br>server</a></li>
                  <li><a href="#">Rebuild clients.conf</a></li>
                  <hr>
                  <li><a href="#">Start DHCP server</a></li>
                  <li><a href="#">Stop DHCP server</a></li>
                  <li><a href="#">Restart DHCP server</a></li>
                  <li><a href="#">Rebuild dhcpd.conf</a></li>
               </ul>
         </ul>
         </div>
      </nav>
      <h3><a href="#">Service change history</a></h3>
      <div class= "col-md-12">
         <p class= "pull-right">Found: 20</p>
      </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Requested on</th>
        <th>Requested by</th>
        <th>Requested for</th>
        <th>Scheduled to</th>
        <th>Services name</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>2016-03-25</td>
        <td>admin</td>
        <td>testuser1</td>
        <td>2016-03-25</td>
        <td>prepaid monthly 1 GB download</td>
        <td>complated</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>2016-09-17</td>
        <td>admin</td>
        <td>admin01</td>
        <td>2016-09-17</td>
        <td>Default service</td>
        <td>complated</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>2016-10-23</td>
        <td>admin</td>
        <td>testuser2</td>
        <td>2016-10-23</td>
        <td>prepaid monthly 1 GB download</td>
        <td>Default service</td>
      </tr>
    </tbody>
  </table>
    </thead>
  </table>
</div>
<div class= "col-md-12">
         <p class= "pull-right">Found: 20</p>
      </div>

<p>Manager: <strong>Teamdev1801</strong> | Date: <strong>2018-04-01</strong> | Version: <strong>4.1.6</strong> | Radius server: <strong>OK </strong>| DHCP server: <strong>n/a </p>
   </body>
</html>