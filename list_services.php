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
      <h3><a href="#">List services</a></h3>     
      <div class= "col-md-12">
         <p class= "pull-right">Found: 35</p>
      </div>    
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th><div class="checkbox">
      <label><input type="checkbox" value=""></label></th>
        <th>Service name</th>
        <th>Gross price (IDR)</th>
        <th>DL rate (kbps)</th>
        <th>UL rste (kbps)</th>
        <th>Cisco DL policy map</th>
        <th>Cisco UL policy map</th>
        <th>IP pool</th>
        <th>Download limit</th>
        <th>Upload limit</th>
        <th>Total limit</th>
        <th>Expiration limit</th>
        <th>Online time limit</th>
        <th>Next disabled service</th>
        <th>Next expired service</th>
        <th>Next daily service</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td><div class="checkbox">
      <label><input type="checkbox" value=""></label></td>
        <td>Acces list - Mikirotik</td>
        <td></td>
        <td>no limit</td>
        <td>no limit</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
      </tr>
      <tr>
        <td>2.</td>
        <td><div class="checkbox">
      <label><input type="checkbox" value=""></label></td>
        <td>Acces list - StarOS</td>
        <td></td>
        <td>no limit</td>
        <td>no limit</td>
        <td>2</td>
        <td>2</td>
        <td>2</td>
        <td>2</td>
        <td>2</td>
        <td>2</td>
        <td>2</td>
        <td>2</td>
        <td>2</td>
        <td>2</td>
        <td>2</td>
      </tr>
      <tr>
        <td>1.</td>
        <td><div class="checkbox">
      <label><input type="checkbox" value=""></label></td>
        <td>bit - default</td>
        <td>0,000000</td>
        <td>200</td>
        <td>200</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
      </tr>
    </tbody>
  </table>
    </thead>
  </table>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#"></a></li>
      <li><a href="#">Enable</a></li>
      <li><a href="#">Disable</a></li>
      <li><a href="#">Delete</a></li>
    </ul>
    <div class= "col-md-12">
         <p class= "pull-right">Found: 20</p>
      </div>
    <p>*Action*   *Disable*</p>
  </div>
</div>


<p>Manager: <strong>Teamdev1801</strong> | Date: <strong>2018-04-01</strong> | Version: <strong>4.1.6</strong> | Radius server: <strong>OK </strong>| DHCP server: <strong>n/a </p>
   </body>
</html>