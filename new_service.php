<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 align="center">Basic Parameters</h2>
  <form class="form-horizontal" action="#">

    <div class="form-group">
      <label class="control-label col-sm-2" for="service_name">Service Name</label>
      <div class="col-sm-10">
        <input type="service_name" class="form-control" id="service_name" placeholder="Enter Service Name" name="service_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Description:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"  placeholder="Enter Description" name="description">
      </div>
    </div>
    <div class="form-group">
     <label class="control-label col-sm-2">Enable</label>        
        <div class="checkbox">
        <input type="checkbox" class="col-sm-1" name="enable">
        </div>
      </div>
    <div class="form-group">
     <label class="control-label col-sm-2">Available in UCP</label>        
        <div class="checkbox">
        <input type="checkbox" class="col-sm-1" name="avaible_in_ucp">
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Type of service:</label>
      <div class="col-sm-10">          
       <div class="radio">
      <label><input type="radio" name="prepaid_regular">Prepaid regular</label>
      </div>
      <div class="radio">
      <label><input type="radio" name="prepaid_card">Prepaid card or IAS</label>
      </div>
      <div class="radio">
      <label><input type="radio" name="postpaid">Postpaid</label>
      </div>
      <div class="radio">
      <label><input type="radio" name="email">Email</label>
      </div>
      <div class="radio">
      <label><input type="radio" name="access_list">Access list entry</label>
      </div>
      </div>
    </div>
     <div class="form-group">
     <label class="control-label col-sm-2">Limit download:</label>        
        <div class="checkbox">
        <input type="checkbox" class="col-sm-1" name="limit_download">
        </div>
      </div>
      <div class="form-group">
     <label class="control-label col-sm-2">Limit upload:</label>        
        <div class="checkbox">
        <input type="checkbox" class="col-sm-1" name="limit_upload">
        </div>
      </div>
      <div class="form-group">
     <label class="control-label col-sm-2">Limit total traffic:</label>        
        <div class="checkbox">
        <input type="checkbox" class="col-sm-1" name="limit_total_traffic">
        </div>
      </div>
      <div class="form-group">
     <label class="control-label col-sm-2">Limit expiration:</label>        
        <div class="checkbox">
        <input type="checkbox" class="col-sm-1" name="limit_expiration">
        </div>
      </div>
      <div class="form-group">
     <label class="control-label col-sm-2">Limit online time</label>        
        <div class="checkbox">
        <input type="checkbox" class="col-sm-1" name="limit_online_time">
        </div>
      </div>
      
        <div class="form-group">
          <div class="form-inline">
      <label class="control-label col-sm-2" for="data_rate">Data rate (DL / UL):</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="data_rate" value="0" name="data_rate"> / <input type="text" class="form-control" id="data_rate" value="0" name="data_rate"> kbps (0 - no limit)
      </div>
    </div>
      </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="service_name">Cisco policy map (DL):</label>
      <div class="col-sm-10">
        <input type="service_name" class="form-control" id="cisco_policy_map"  name="cisco_policy_map">
      </div>
    </div>          

    


     <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    </form>
</div>

</body>
</html>
