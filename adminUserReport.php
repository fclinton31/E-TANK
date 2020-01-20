
<!DOCTYPE html>
<html lang="en" data-ng-app="HealthApp">
<head>
    <title> report</title>
	<meta charset="utf-8" />
     <link href="css/bootstrap.css" rel="stylesheet" />
      <link href="css/bootstrap-theme.css" rel="stylesheet" />
      <link href="css/style.css" rel="stylesheet" />
     
</head>
    <body ng-controller="adminController">
    <div class="col-md-12 header">
       <div class="logo"><h3 style="color:white;font-size:1.8em;text-align:right;">Shopping Report</h3></div> 
    </div>
    <div class="col-md-12 nav-pills-container">
        <ul class="nav nav-pills">
            <li><a href="admin.php">Home</a></li>
            <li class="logout-li"><a ng-click="logout()"><div class="glyphicon glyphicon-log-out"></div> Logout</a></li>
        </ul>
    </div>
    <br>
    <br>
    <br>
<div class="col-md-9">
       <div class="export-table">
        <div class="col-md-8" style="text-align: center;">Highest Buying Report</div>
            <div class= "row">
            <div class="col-md-11">               
                    <table class="table " >
                        <thead >
                                <tr class="table-header">                              
                                    <th>Customer Details</th>  
                                    <th>Number Of Times</th>                                                                            
                                </tr>
                            </thead>                       
                            <tbody>
                                    <tr ng-repeat="shopInfo in getShoppingReport">                                 
                                            <td>{{shopInfo.FirstName}}  {{shopInfo.Surname}}</td>  
                                            <td>{{shopInfo.howmany}}</td>                          
                                    </tr>
                            </tbody>           
                    </table>
                </div>
                </div>
            </div>
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
     <script src="angular/adminController.js" type="text/javascript"></script>   
     <script src="angular/sharedService.js" type="text/javascript"></script>  
     <script src="angular/loginService.js" type="text/javascript"></script>  
     

</body>
</html>
<toaster-container></toaster-container>