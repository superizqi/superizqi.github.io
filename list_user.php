<?php
require_once('connectDB.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
?>

<html>
<head>
<title>Radius Manager - Administration Control Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css"></style>
<link rel="stylesheet" href="styles.css" type="text/css">
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body bgcolor="#FFFFFF" text="#000000" link="#0000FF" vlink="#0000FF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<script type="text/javascript" src="menu/JSCookMenu.js"></script>

<script type="text/javascript"><!--
var MenuDefs =
[
    ['', 'System', '', '', '',
        ['&nbsp', 'Home', 'admin.php', '', ''],
        ['&nbsp', 'System settings', 'admin.php?cont=edit_settings', '', ''],
        _cmSplit,
        ['&nbsp', 'Logout', 'admin.php?cont=logout', '', ''],
    ],
    ['', 'Users', '', '', '',
        ['&nbsp', 'List users', 'admin.php?cont=list_users', '', ''],
        ['&nbsp', 'Find users', 'admin.php?cont=search_users', '', ''],
        ['&nbsp', 'New user', 'admin.php?cont=new_user', '', ''],
        _cmSplit,
        ['&nbsp', 'List user groups', 'admin.php?cont=list_usergroups', '', ''],
        ['&nbsp', 'New user group', 'admin.php?cont=new_usergroup', '', ''],
    ],
    ['', 'Services', '', '', '',
        ['&nbsp', 'List services', 'admin.php?cont=list_services', '', ''],
        ['&nbsp', 'New service', 'admin.php?cont=new_service', '', ''],
        _cmSplit,
        ['&nbsp', 'Scheduled changes', 'admin.php?cont=list_scheduled_services', '', ''],
        ['&nbsp', 'Service change history', 'admin.php?cont=list_service_history', '', ''],
    ],
    ['', 'Managers', '', '', '',
        ['&nbsp', 'List managers', 'admin.php?cont=list_managers', '', ''],
        ['&nbsp', 'New manager', 'admin.php?cont=new_manager', '', ''],
    ],
    ['', 'NAS', '', '', '',
        ['&nbsp', 'List NAS', 'admin.php?cont=list_nases', '', ''],
        ['&nbsp', 'New NAS', 'admin.php?cont=new_nas', '', ''],
    ],
    ['', 'AP', '', '', '',
        ['&nbsp', 'List access points', 'admin.php?cont=list_ap', '', ''],
        ['&nbsp', 'New access point', 'admin.php?cont=new_ap', '', ''],
    ],
    ['', 'CMTS', '', '', '',
        ['&nbsp', 'List CMTS', 'admin.php?cont=list_cmts', '', ''],
        ['&nbsp', 'New CMTS', 'admin.php?cont=new_cmts', '', ''],
    ],
    ['', 'IP pools', '', '', '',
        ['&nbsp', 'List pools', 'admin.php?cont=list_pools', '', ''],
        ['&nbsp', 'New pool', 'admin.php?cont=new_pool', '', ''],
    ],
    ['', 'Financials', '', '', '',
        ['&nbsp', 'Find invoices', 'admin.php?cont=search_invoices', '', ''],
        ['&nbsp', 'Generate postpaid invoices', 'admin.php?cont=batch_billing', '', ''],
    ],
    ['', 'Card system', '', '', '',
        ['&nbsp', 'List card series', 'admin.php?cont=list_cardseries', '', ''],
        ['&nbsp', 'List classic prepaid cards', 'admin.php?cont=list_users&listacctype=4', '', ''],
        ['&nbsp', 'List refill cards', 'admin.php?cont=list_refillcards', '', ''],
        ['&nbsp', 'Find refill cards', 'admin.php?cont=search_refillcards', '', ''],
        _cmSplit,
        ['&nbsp', 'Generate cards', 'admin.php?cont=cardgen', '', ''],
        _cmSplit,
        ['&nbsp', 'Card statistics', 'admin.php?cont=cardstats', '', ''],
    ],
    ['', 'IAS', '', '', '',
        ['&nbsp', 'List IAS users', 'admin.php?cont=list_users&listacctype=32', '', ''],
        ['&nbsp', 'List IAS templates', 'admin.php?cont=list_ias', '', ''],
        ['&nbsp', 'New IAS template', 'admin.php?cont=new_ias', '', ''],
    ],
    ['', 'Reports', '', '', '',
        ['&nbsp', 'Online RADIUS users', 'admin.php?cont=list_online_radius', '', ''],
        ['&nbsp', 'Registered cable modems', 'admin.php?cont=list_online_cm', '', ''],
        _cmSplit,
        ['&nbsp', 'Overall traffic report', 'admin.php?cont=traffic_report', '', ''],
        ['&nbsp', 'Find traffic data', 'admin.php?cont=search_traffic_data', '', ''],
        ['&nbsp', 'Traffic summary', 'admin.php?cont=search_traffic_summary', '', ''],
        _cmSplit,
        ['&nbsp', 'Connection report', 'admin.php?cont=search_cts_data', '', ''],
        ['&nbsp', 'Authentication log', 'admin.php?cont=search_postauth', '', ''],
        _cmSplit,
        ['&nbsp', 'Last syslog events', 'admin.php?cont=quick_syslog', '', ''],
        ['&nbsp', 'Browse syslog', 'admin.php?cont=list_syslog', '', ''],
        _cmSplit,
        ['&nbsp', 'System informations', 'admin.php?cont=sysinfo', '', ''],
        ['&nbsp', 'System statistics', 'admin.php?cont=sysstats', '', ''],
    ],
    ['', 'Tools', '', '', '',
        ['&nbsp', 'Bulk email', 'admin.php?cont=show_bulkmail', '', ''],
        ['&nbsp', 'Bulk SMS', 'admin.php?cont=show_bulksms', '', ''],
        _cmSplit,
        ['&nbsp', 'Start RADIUS server', 'admin.php?cont=start_radius_server', '', ''],
        ['&nbsp', 'Stop RADIUS server', 'admin.php?cont=stop_radius_server', '', ''],
        ['&nbsp', 'Restart RADIUS server', 'admin.php?cont=restart_radius_server', '', ''],
        ['&nbsp', 'Rebuild clients.conf', 'admin.php?cont=resync_radius', '', ''],
        _cmSplit,
        ['&nbsp', 'Start DHCP server', 'admin.php?cont=start_dhcp_server', '', ''],
        ['&nbsp', 'Stop DHCP server', 'admin.php?cont=stop_dhcp_server', '', ''],
        ['&nbsp', 'Restart DHCP server', 'admin.php?cont=restart_dhcp_server', '', ''],
        ['&nbsp', 'Rebuild dhcpd.conf', 'admin.php?cont=resync_dhcp', '', ''],
    ]
];
--></script>

<link rel="stylesheet" href="menu/theme/theme.css" type="text/css">
<script type="text/javascript" src="menu/theme/theme.js"></script>

<table width="850" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="normal"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="images/main1_01.gif" width="508" height="85" border="0" usemap="#Map"></td>
          <td width="100%" background="images/main1_03.gif"></td>
          <td><img src="images/main1_02.gif" width="267" height="85"></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td class="normal"> <table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td background="images/menubg.gif" bgcolor="BBD1FF"><div id="menu1"></div>
<script type="text/javascript"><!--
	cmDraw('menu1', MenuDefs, 'hbr', cmThemeGray);
--></script>
</td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#EAF1FF">
        <tr>
          <td><link href="styles.css" rel="stylesheet" type="text/css">
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="1" class="tb-bdr" >
        <tr>
          <td><table width="100%" border="0" cellpadding="2" cellspacing="0" class="tb-bg">
              <tr>
                <td class="modtext">List users</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><img src="images/spacer.gif" width="1" height="2"></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td> <p align="center" class="quickjump"> <table class="normal" width="100%" border="0" align="center" cellpadding="2" cellspacing="0"><tr><td align="center" width="100%"></td><td nowrap valign="top"><b>Found: 15</b></td></tr></table></p></td>
    </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="normal">
  <tr>
    <td><form name="formcolsel" method="post" action="admin.php?cont=list_users_selcolumns&from=0&ordercol=username&ordertype=ASC&lastorder=username&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment="><fieldset id="colseltab" class="hidden"><legend>Available columns</legend><table class="normal" width="10%" border="0" cellspacing="0" cellpadding="0"><tr><td nowrap><input name="encol_username" id="encol_username" type="checkbox" value="1" checked><label for="encol_username">User name</label>&nbsp&nbsp</td><td nowrap><input name="encol_srvname" id="encol_srvname" type="checkbox" value="1" checked><label for="encol_srvname">Service name</label>&nbsp&nbsp</td><td nowrap><input name="encol_expiry" id="encol_expiry" type="checkbox" value="1" checked><label for="encol_expiry">Expiration</label>&nbsp&nbsp</td><td nowrap><input name="encol_availdl" id="encol_availdl" type="checkbox" value="1" checked><label for="encol_availdl">Download limit</label>&nbsp&nbsp</td></tr><tr><td nowrap><input name="encol_availul" id="encol_availul" type="checkbox" value="1" checked><label for="encol_availul">Upload limit</label>&nbsp&nbsp</td><td nowrap><input name="encol_availtotal" id="encol_availtotal" type="checkbox" value="1" checked><label for="encol_availtotal">Total limit</label>&nbsp&nbsp</td><td nowrap><input name="encol_availtime" id="encol_availtime" type="checkbox" value="1" checked><label for="encol_availtime">Online time limit</label>&nbsp&nbsp</td><td nowrap><input name="encol_cpeip" id="encol_cpeip" type="checkbox" value="1" checked><label for="encol_cpeip">CPE IP</label>&nbsp&nbsp</td></tr><tr><td nowrap><input name="encol_cmip" id="encol_cmip" type="checkbox" value="1" checked><label for="encol_cmip">CM IP</label>&nbsp&nbsp</td><td nowrap><input name="encol_cmmac" id="encol_cmmac" type="checkbox" value="1" checked><label for="encol_cmmac">CM MAC</label>&nbsp&nbsp</td><td nowrap><input name="encol_firstname" id="encol_firstname" type="checkbox" value="1" checked><label for="encol_firstname">First name</label>&nbsp&nbsp</td><td nowrap><input name="encol_lastname" id="encol_lastname" type="checkbox" value="1" checked><label for="encol_lastname">Last name</label>&nbsp&nbsp</td></tr><tr><td nowrap><input name="encol_company" id="encol_company" type="checkbox" value="1" checked><label for="encol_company">Company</label>&nbsp&nbsp</td><td nowrap><input name="encol_address" id="encol_address" type="checkbox" value="1" checked><label for="encol_address">Address</label>&nbsp&nbsp</td><td nowrap><input name="encol_city" id="encol_city" type="checkbox" value="1" checked><label for="encol_city">City</label>&nbsp&nbsp</td><td nowrap><input name="encol_zip" id="encol_zip" type="checkbox" value="1" checked><label for="encol_zip">ZIP</label>&nbsp&nbsp</td></tr><tr><td nowrap><input name="encol_country" id="encol_country" type="checkbox" value="1" checked><label for="encol_country">Country</label>&nbsp&nbsp</td><td nowrap><input name="encol_state" id="encol_state" type="checkbox" value="1" checked><label for="encol_state">State</label>&nbsp&nbsp</td><td nowrap><input name="encol_email" id="encol_email" type="checkbox" value="1" checked><label for="encol_email">Email</label>&nbsp&nbsp</td><td nowrap><input name="encol_registered" id="encol_registered" type="checkbox" value="1" checked><label for="encol_registered">Registered</label>&nbsp&nbsp</td></tr><tr><td nowrap><input name="encol_lastlogoff" id="encol_lastlogoff" type="checkbox" value="1" checked><label for="encol_lastlogoff">Last logoff</label>&nbsp&nbsp</td><td nowrap><input name="encol_comment" id="encol_comment" type="checkbox" value="1" checked><label for="encol_comment">Comment</label>&nbsp&nbsp</td></tr></table><input class="normal" id="colselbtn" type="submit" name="Submit" value="Apply"> [<a href="#" onclick="ToggleAllColSel(true)">select all</a>] [<a href="#" onclick="ToggleAllColSel(false)">deselect all</a>]</td></fieldset></form></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<form name="form1" method="post" action="admin.php?cont=list_users_action">
    <tr>
      <td class="normal"> <TABLE cellSpacing=1 cellPadding=1
            width="100%" border=0
            valign="top">
        </TABLE>
        <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="">
<tr class="tb-header" bgcolor="#dddddd">
<th width="20" height="20" nowrap align=center><font color="#000000"><a onclick="ToggleTable()" href="#">#</a></th>
<th width="20" height="20" nowrap align=center><font color="#000000"><input name="select" type="checkbox" id="select" onClick="ToggleCheckBoxes()"</th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=username&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">User name</a></strong></td><td><img src="images/arrowdown.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=srvid&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">Service name</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=expiration&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">Expiration</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000">Download limit</th>
<th height="20" nowrap align=center><font color="#000000">Upload limit</th>
<th height="20" nowrap align=center><font color="#000000">Total limit</th>
<th height="20" nowrap align=center><font color="#000000">Online time limit</th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=staticipcpe&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">CPE IP</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=staticipcm&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">CM IP</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=cmmac&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">CM MAC</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=firstname&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">First name</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=lastname&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">Last name</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=company&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">Company</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=address&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">Address</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=city&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">City</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=zip&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">ZIP</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=country&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">Country</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=state&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">State</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=email&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">Email</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=createdon&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">Registered</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=lastlogoff&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">Last logoff</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
<th height="20" nowrap align=center><font color="#000000"><table border="0" cellspacing="0" cellpadding="0"><tr class="tb-header"><td nowrap><strong><a href="admin.php?cont=list_users&ordercol=comment&ordertype=ASC&chord=true&lastorder=username&from=0&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">Comment</a></strong></td><td><img src="images/arrownone.gif"></td></tr></table></th>
</tr>

<?php

$query = "SELECT * FROM registrasi";
$data = mysqli_query($dbc, $query);

$i = 1;
while ($row = mysqli_fetch_array($data)) {
echo '<tr class="normal" bgcolor="#E0E0E0">';
echo '<td height="20"bgcolor="#FF3E3E" nowrap align=center><font color="#000000">'.$i.'</td>';
echo '<td height="20"nowrap align=center><font color="#000000"><input name="list[]" type="checkbox" id="list[]" value="'.$row[0].'"></td>';
echo '<td height="20"nowrap align=left><font color="#000000"><a href="admin.php?cont=edit_user&username='.$row[0].'">'.$row[0].'</a></td>';
echo '<td height="20"nowrap align=left><font color="#000000"><a href="admin.php?cont=edit_service&srvid=0">Default service</a></td>';
echo '<td height="20"nowrap align=center><font color="#000000">never</td>';
echo '<td height="20"nowrap align=center><font color="#000000">no limit</td>';
echo '<td height="20"nowrap align=center><font color="#000000">no limit</td>';
echo '<td height="20"nowrap align=center><font color="#000000">no limit</td>';
echo '<td height="20"nowrap align=center><font color="#000000">no limit</td>';
echo '<td height="20"nowrap align=center><font color="#000000">no limit</td>';
echo '<td height="20"nowrap align=center><font color="#BBBBBB"></td>';
echo '<td height="20"nowrap align=center><font color="#BBBBBB"></td>';
echo '<td height="20"nowrap align=center><font color="#000000">'.$row[2].'</td>';
echo '<td height="20"nowrap align=left><font color="#000000">'.$row[3].'</td>';
echo '<td height="20"nowrap align=left><font color="#000000"></td>';
echo '<td height="20"nowrap align=left><font color="#000000">'.$row[4].'</td>';
echo '<td height="20"nowrap align=left><font color="#000000">'.$row[5].'</td>';
echo '<td height="20"nowrap align=left><font color="#000000">'.$row[6].'</td>';
echo '<td height="20"nowrap align=left><font color="#000000">'.$row[7].'</td>';
echo '<td height="20"nowrap align=left><font color="#000000">'.$row[8].'</td>';
echo '<td height="20"nowrap align=left><font color="#000000">'.$row[1].'</td>';
echo '<td height="20"nowrap align=left><font color="#000000"></td>';
echo '<td height="20"nowrap align=center><font color="#000000">2017-12-08</td>';
echo '<td height="20"nowrap align=center><font color="#000000">2017-12-09</td>';
echo '<td height="20"nowrap align=left><font color="#000000"></td>';
echo '</tr>';
$i += 1;
}
?>
</table>
</td>
    </tr>
    <tr>
      <td class="normal"><strong>Action:
        <select name="action" class="normal" id="action" onchange="Confirm()">
          <option></option>
          <option value="0">Enable</option>
          <option value="1">Disable</option>
          <option value="2">Delete</option>
          <option value="3">Disconnect</option>
        </select>
        <font color="#00E51B">*Active</font>&nbsp;&nbsp;&nbsp;<font color="#FFCC00">*Expired</font>&nbsp;&nbsp;&nbsp;<font color="#FF3E3E">*Disabled</font>&nbsp;&nbsp;&nbsp;<font color="#95B8FF">*Online</font>&nbsp;&nbsp;&nbsp;<font color="#FF66FF">*Unverified</font></strong></td>
    </tr>
    <tr>
      <td class="quickjump"><div align="center"><table class="normal" width="100%" border="0" align="center" cellpadding="2" cellspacing="0"><tr><td align="center" width="100%"></td><td nowrap valign="top"><b>Found: 15</b></td></tr></table></div></td>
    </tr>
    <tr>
      <td class="normal"> <p align="center" class="quickjump">[<a href="admin.php?cont=list_users&csvexport=1&odercol=username&ordertype=ASC&username=&listacctype=27&srvtype=&status=-1&acctinfo=-1&cardstatus=-1&groupid=&owner=&srvid=&mac=&maccm=&staticip=&firstname=&lastname=&company=&address=&city=&zip=&country=&state=&phone=&mobile=&email=&comment=">CSV export</a>]</p></td>
    </tr>
  </form>
</table>
<script language="JavaScript" src="helper.js" type="text/JavaScript">
</script>
 </td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td bgcolor="#BBD1FF" class="normal"><p class="normal"><font color="#184470">Manager:
              <strong>teamdev1801</strong> | Date: <strong>2018-03-30</strong>
              | Version: <strong>4.1.6</strong> | RADIUS server: <strong>OK
              </strong>| DHCP server: <strong>n/a </strong></font></p>
            </td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="images/bottom_01.gif" width="567" height="24"></td>
          <td width="100%" background="images/bottom_bg.gif"></td>
          <td><div align="right"><img src="images/bottom_02.gif" width="208" height="24"></div></td>
        </tr>
      </table></td>
  </tr>
</table>
<map name="Map">
  <area shape="rect" coords="0,0,254,48" href="admin.php">
</map>
</body>
</html>
