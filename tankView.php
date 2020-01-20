<!DOCTYPE html>
<html lang="en" data-ng-app="HealthApp" >
<head>
  <title ng-hide="details.role=='supplier'">Admin </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <link rel="stylesheet" href="css/angular-toastr.min.css">
  <link rel="stylesheet" href="css/style2.css">
</head>
<body ng-controller="tankController">
    <div class="col-md-12 header">
      <div class="logo"><h3 style="color:white;font-size:1.8em;text-align:left;" ng-hide="details.role=='supplier'">Admin Section</h3></div> 
    </div>
    <div class="col-md-12 nav-pills-container">
        <ul class="nav nav-pills">           
            <li><a href="admin.php" ng-hide="details.role=='supplier'"><span class="glyphicon glyphicon-home"></span> </a></li> 
            <li><a href="tankReport.php" ng-disable="details.role=='supplier'">Report</a></li>                     
            <li class="logout-li"  ng-click="logout()"><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
        </ul>      
   </div> 
   <br>
<div class="well col-md-12" style="padding-top: 50px">
<p ng-repeat = " ms in messager">
    {{ms}} tank running low, Please re-fill.
</p>

</div>
    <!-- Total widgets -->
  <div class="col-md-6" style="padding-top: 100px">  
  <div class="progress" style="height:40px" ng-click="openTankModal(tankInfo[0])">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{unl95}}"
  aria-valuemin="0" aria-valuemax="100" ng-style="{width: unl95 + '%'}">
    {{unl95 | number : 2}} % {{tankInfo[0].Name}}  left
  </div>
</div>

<div class="progress" style="height:40px" ng-click="openTankModal(tankInfo[1])">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{unl93}}"
  aria-valuemin="0" aria-valuemax="100" ng-style="{width: unl93 + '%'}">
    {{unl93 | number : 2}}% {{tankInfo[1].Name}} left
  </div>
</div>

<div class="progress" style="height:40px" ng-click="openTankModal(tankInfo[2])">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{diseal}}"
  aria-valuemin="0" aria-valuemax="100" ng-style="{width: diseal + '%'}">
    {{diseal | number : 2}}% {{tankInfo[2].Name}}  left
  </div>
</div>
  </div>
     
 <script type="text/ng-template" id="tankModalContent.html">
    <!-- Patient Registration Modal -->
        <form class="form-horizontal" name="tankForm">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" ng-click="close()">&times;</button>
                <h4 class="modal-title">Update Tank</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-sm-6">                      
                                                     
                            <div class="form-group">
                                <label class="control-label col-sm-4">Name:</label>
                                <div class="col-sm-8" >
                                    <input type="text" class="form-control" name="name"  data-ng-model="patientData.Name" maxLength='25' readonly required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Liters:</label>
                                <div class="col-sm-8" ng-class="{'has-error' : tankForm.litre.$invalid && !tankForm.litre.$pristine }">
                                    <input type="text" class="form-control" name="litre"  data-ng-model="patientData.Liters "  maxLength='25' required >
                                     <span style="color:red" ng-show="tankForm.litre.$pristine && tankForm.litre.$invalid"> Litre is required.</span>
                                    <span style="color:red" ng-show="tankForm.litre.$error.pattern">incorrect Litre format</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Amount per liter:</label>
                                <div class="col-sm-8" ng-class="{'has-error' : tankForm.amount.$invalid && !tankForm.amount.$pristine }">
                                    <input type="text" class="form-control" name="amount"  ng-model="patientData.AmountPerLiter"  maxLength='10' required>                     
                                      <span style="color:red" ng-show="tankForm.amount.$pristine && tankForm.amount.$invalid">Amount Per Liter is required.</span>
                                    <span style="color:red" ng-show="tankForm.amount.$error.pattern">Amount Per Liter is incorrect</span> 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" value="submit"  data-ng-click="save()">Update</button>
                <button type="button" class="btn btn-default" ng-click="close()">Close</button>
            </div>
        </form>
   </script>
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
     <script src="angular/tankController.js" type="text/javascript"></script>   
      <script src="angular/sharedService.js" type="text/javascript"></script>  
     <script src="angular/loginService.js" type="text/javascript"></script>  
</body>
</html>
<toaster-container></toaster-container>
