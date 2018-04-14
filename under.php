<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Radius Manager - Administration Control Panel</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="css/styles.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <body>

     <!-- START NAVBAR -->

      <nav class="navbar navbar-inverse">
         <div class="container-fluid">
            <div class="navbar-header">
               <a class="navbar-brand" href="#">Radius Manager - Administration Control Panel</a>
            </div>
            <ul class="nav navbar-nav">
               <li class="active"><a href="#">Home</a></li>
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">System <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a href="home.php">Home</a></li>
                     <li><a href="system_settings.php">System Settings</a><hr>
                     <li><a href="logout.php">Logout</a></li>
                  </ul>
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">User <span class="caret"></span></a>
                  <ul class="dropdown-menu col-sm-1">
                     <li><a href="list_users.php">List users</a></li>
                     <li><a href="find_users.php">Find users</a></li>
                     <li><a href="new_user.php">New user</a></li><hr>
                     <li><a href="list_user.php">List user groups</a></li>
                     <li><a href="new_user.php">New user groups</a></li>
                  </ul>
                  <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
                  <ul class="dropdown-menu col-sm-1">
                     <li><a href="list_services.php">List services</a></li>
                     <li><a href="new_services.php">New services</a></li><hr>
                     <li><a href="scheduled_changes.php">Scheduled changes</a></li>
                     <li><a href="service_change.php">Service change <br> history</a></li>
                  </ul>
               <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Managers<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                     <li><a href="list_managers.php">List Managers</a></li>
                     <li><a href="new_managers.php">New Managers</a></li>
                  </ul>
               <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">NAS<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                     <li><a href="list_nas.php">List NAS</a></li>
                     <li><a href="new_nas.php">New NAS</a></li>
                  </ul>
               <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">AP<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                     <li><a href="list_access.php">List access point</a></li>
                     <li><a href="new_access.php">New access point</a></li>
                  </ul>
                  <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">CMTS<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                     <li><a href="list_cmts.php">List CMTS</a></li>
                     <li><a href="new_cmts.php">New CMTS</a></li>
                  </ul>
               <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">IP pools<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                     <li><a href="list_pools.php">List pools</a></li>
                     <li><a href="new_pool.php">New pool</a></li>
                  </ul>
               <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Financials<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                     <li><a href="find_invoices.php">Find invoices</a></li>
                     <li><a href="generate_postpaid.php">Generate postpaid<br>invoices</a></li>
                  </ul>
               <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Card system<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                     <li><a href="list_card.php">List card series</a></li>
                     <li><a href="list_classic.php">List classic prepaid<br>cards</a></li>
                     <li><a href="list_refill.php">List refil cards</a></li>
                     <li><a href="find_refill.php">Find refil cards</a></li><hr>
                     <li><a href="generate_cards.php">Generate cards</a></li><hr>
                     <li><a href="card_statistics.php">Card statistics</a></li>
                  </ul>
               <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">IAS<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                     <li><a href="list_ias.php">List IAS</a></li>
                     <li><a href="list_ias_tem.php">List IAS templates</a></li>
                     <li><a href="new_ias_tem.php">New IAS templates</a></li>
                  </ul>
               <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                     <li><a href="online_radius.php">Online RADIUS<br>users</a></li>
                     <li><a href="registered_cable.php">Registered cable<br>modems</a></li><hr>
                     <li><a href="overall_traffic.php">Overall traffic report</a></li>
                     <li><a href="find_traffic.php">Find traffic data</a></li>
                     <li><a href="traffic_summary.php">Traffic summary</a></li><hr>
                     <li><a href="connection_report.php">Connection report</a></li>
                     <li><a href="Authentication_loh.php">Authentication log</a></li>
                     <li><a href="last_syslog.php">Last syslog events</a></li>
                     <li><a href="browse_syslog.php">Browse syslog</a></li><hr>
                     <li><a href="system_information.php">System informations</a></li>
                     <li><a href="system_statistics.php">System statistics</a></li>
                  </ul>
               <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools<span class="caret"></span></a>
               <ul class="dropdown-menu col-sm-1">
                     <li><a href="Bulk_email.php">Bulk email</a></li>
                     <li><a href="Bulk_sms.php">Bulk SMS</a></li><hr>
                     <li><a href="start_radius.php">Start RADIUS server</a></li>
                     <li><a href="stop_radius.php">Stop RADIUS server</a></li>
                     <li><a href="restart_radius.php">Restart RADIUS<br>server</a></li>
                     <li><a href="rebuild_clients.php">Rebuild clients.conf</a></li><hr>
                     <li><a href="start_dhcp.php">Start DHCP server</a></li>
                     <li><a href="stop_dhcp.php">Stop DHCP server</a></li>
                     <li><a href="restart_dhcp.php">Restart DHCP server</a></li>
                     <li><a href="rebuild_dhcp.php">Rebuild dhcpd.conf</a></li>
                  </ul>
            </ul>
         </div>
         <img src="home.jpg" alt="">
      </nav>

      <!-- END NAVBAR -->

                <!-- START ISI -->

                <!-- END ISI -->

      <!-- START BOTTOM -->
          <td><div align="center">
              <p class="normal">&nbsp;</p><br>
                Version  4.1.6</p>
              <p class="normal"> <strong> Copyright &copy; 2004-2018, GLC Networks<br>
                </strong>All rights reserved.</p>
            </div>
            <p align="center" class="normal"><font color="#FF0000"><strong> </strong></font>Unauthorized duplication or use<br>of this software is prohibited.</p>
            <p align="center" class="normal"><a href="#"><strong>END USER LICENSE AGREEMENT</strong></a></p>
            </td>
            <center><p>Manager: <strong>Teamdev1801</strong> | Date: <strong>2018-04-01</strong> | Version: <strong>4.1.6</strong> | Radius server: <strong>OK </strong>| DHCP server: <strong>n/a </p></center>
     <!-- END BOTTOM -->
   </body>
</html>
