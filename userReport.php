
<!DOCTYPE html>
<html lang="en" data-ng-app="HealthApp">
<head>
    <title>customer report</title>
	<meta charset="utf-8" />
     <link href="css/bootstrap.css" rel="stylesheet" />
      <link href="css/bootstrap-theme.css" rel="stylesheet" />
      <link href="css/style.css" rel="stylesheet" />
     
</head>
    <body ng-controller="userController">
    <div class="col-md-12 header">
       <div class="logo"><h3 style="color:white;font-size:1.8em;text-align:right;">Customer Report</h3></div> 
    </div>
    <div class="col-md-12 nav-pills-container">
        <ul class="nav nav-pills">
            <li><a href="user.php">Home</a></li>
            <li class="logout-li"><a ng-click="logout()"><div class="glyphicon glyphicon-log-out"></div> Logout</a></li>
        </ul>
    </div>
<div class="col-md-9">
       <div id="exportable">
        <div class="col-md-8" style="text-align: center;">Customer Shopping Report</div>
            <div class= "row">
            <div class="col-md-11">               
                    <table class="table" >
                        <thead >
                                <tr class="table-header">                              
                                    <th>Shopping Details<th/>                                                                            
                                </tr>
                            </thead>                       
                            <tbody>
                                    <tr ng-repeat="appInfo in getAppInforms">                                 
                                            <td>On the {{appInfo.dateadded | date:'yyyy-MM-dd HH:mm' }} you {{appInfo.Details}}</td>  
                                            
                                            
                                    </tr>
                            </tbody>           
                    </table>
                  <!--  <div class="alert alert-success">
                        <span class="glyphicon glyphicon-happy-face"></span> You can use this report to register if you are already unblocked by an Advisor <a class="alert-link"></a>.
                    </div>-->
                </div>
                </div>
            </div>
       
<div class="col-md-2">    
     <select class="form-control"  name="appointment_time"  ng-model="selectedExport"  required>
     <option value="csv">CSV</option>
     <option value='excel'>EXCEL</option>
     <option value="doc">WORD</option>
      <option value="" selected hidden />
   </select>   
   </div>
   <button type="button"  value="submit" class="btn btn-primary" ng-click="eAction(selectedExport)">Export</button>
</div>
  
<script src="js/jquery.js" type="text/javascript"></script>
      <script src="js/bootstrap.js" type="text/javascript"></script>
        <!-- angular extentions-->
      <script src="js/angular.js" type="text/javascript"></script> 
      <script src="app.js" type="text/javascript"></script>
      <script src="js/toaster.min.js" type="text/javascript"></script>
      <script src="js/angular-moment.min.js" type="text/javascript"></script>
      <script src="js/angular-route.min.js" type="text/javascript"></script>
      <script src="js/angular-ui-router.js" type="text/javascript"></script>
      <script src="js/ui-bootstrap-tpls.min.js" type="text/javascript"></script>
      <script src="js/dialogs.min.js" type="text/javascript"></script> 
      <script src="js/idvalidator.js" type="text/javascript"></script> 
        <!-- Load controllers -->
     <script src="angular/userController.js" type="text/javascript"></script>  
     <script src="angular/sharedService.js" type="text/javascript"></script>  
     <script src="angular/loginService.js" type="text/javascript"></script>  
     

</body>
</html>
<toaster-container></toaster-container>