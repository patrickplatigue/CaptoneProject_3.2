@extends('main')

@section('content')
   
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <?php
          $AddingTradeSessionValue = Session::get('Adding_Agreement'); 
          Session::remove('Adding_Agreement');//determines the addition of new flower
          $DeletingTradeSessionValue = Session::get('DeletingSession'); 
          Session::remove('DeletingSession');//determines the addition of new flower
       ?>
          <input type = "text" class = "hidden" id = "addingSessionField" value = "{{$AddingTradeSessionValue}}">
          <input type = "text" class = "hidden" id = "deletingSessionField" value = "{{$DeletingTradeSessionValue}}">

      <div class="panel panel-primary" style="margin-top: 25px;">
        <div class="panel-heading" style="background-color: #26A69A">
          <h3 class="panel-title">Specific Customer's Agreement</h3>
        </div>
        <h4 style="padding-left: 15px;"> Customer ID: CUST-{{$CustomerDet->Cust_ID}}</h4>
        <h4 style="padding-left: 15px; padding-bottom: 10px;"> Customer Name: {{$CustomerDet->Cust_FName}} {{$CustomerDet->Cust_MName}}, {{$CustomerDet->Cust_LName}} </h4>
      </div>
    
    
      <div class="col-md-3">
      <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#addprice">
        Add New Agreement
      <span class = "glyphicon glyphicon-book"></span>
      </button>
      <br>
      <br>
     </div>

     <div class="col-md-3">
      <a href="http://localhost:8000/TradeAgreements">
        <button type="button" class="btn btn-info btn-pressure pull-right"> 
            Return to the Customer List
          <span class = "glyphicon glyphicon-user"></span>
        </button>
      </a>
      <br>
      <br>
     </div>
  </section>

  <!-- Modal -->
    <div class="modal fade" id="addprice" tabindex="
    -1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add New Agreement</h4>
          </div>
           {!! Form::open(array('route' => 'customersTradeAgreement.store', 'data-parsley-validate'=>'', 'method'=>'POST')) !!}
        <div class="modal-body">
              <input class = "hidden" id = "typeCust" name = "typeCust" value = "{{$CustomerDet->Customer_Type}}">
              <input class = "hidden" id = "custID" name = "custID" value = "{{$CustomerDet->Cust_ID}}">
            <div class = "row">
              <div class="form-group col-md-5">
                <label for="SDateField">Start Date:</label>
                <input type='date' name ="SDateField" id ="SDateField" class = "form-control"  required/>
              </div>
              <div class="form-group col-xs-5">
                <label for="EDateField">Due Date</label>
                <input type='date' name ="EDateField" id ="EDateField" class = "form-control" required/>
              </div>
            </div>
            
            <br>
           <div class="modal-footer" id = "editFooter">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
              <div class="btn-group" role="group">
                <button type="button" name = "cancelEditBtn" data-dismiss="modal" id = "cancelEditBtn" class="btn btn-default"  role="button">Cancel</button>
              </div>
              <div class="btn-group" role="group">
                 <button type = "submit" name = "AddBtn" id = "AddBtn" class = "btn btn-success btn-success"><span class = "glyphicon glyphicon-floppy-save"></span> Add Agreement</button>
              </div>
            </div>
          </div>
        </div>
     {!! Form::close() !!}
      </div>
    </div>
  </div>
  
        <div class="col-md-12">
          <div class="box">
            <h3 class="container">Active Agreements</h3>  
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <th class="text-center"> Agreement ID </th>
                    <th class="text-center"> Starting Date</th>
                    <th class="text-center"> End Date</th>
                    <th class="text-center"> Status</th>
                    <th class="text-center"> Action </th>

                </thead>

                <tbody>
                    <tr>  
                    @foreach($agreements as $agreement)
                        <td>    AGMT_{{$agreement->Agreement_ID}}   </td>
                        <td>    {{$agreement->Starting_Date}}   </td>
                        <td>    {{$agreement->Ending_Date}}  </td> 
                        <td>    {{$agreement->Status}}   </td>

                        <td align="center" > 
                          <a data-toggle="modal" href="#betaModal{{$agreement->Agreement_ID}}"> <button class="btn btn-info btn-md"> View </button></a>
                           {!! Form::open(['route' => ['TradeAgreements.destroy',$agreement->Agreement_ID],'method'=>'DELETE']) !!}
                          <button type = "submit" name = "YesBtn" class="btn btn-danger btn-md"> Delete</button>
                          {!! Form::close() !!}
                        </td> 

                        <div id="betaModal{{$agreement->Agreement_ID}}" class="modal fade">
                                    <div class="modal-dialog text-center" style = "width: 40%;" >
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Agreement Details</h4>
                                            </div>

                                            <div class="modal-body">
                                              <div class = "row">
                                                <div class = "col-md-6">
                                                  <h4><b>Agreement ID:</b></h4>
                                                </div>
                                                <div class = "col-md-6">
                                                  <h5>AGRMT-{{$agreement->Agreement_ID}}</h5>
                                                </div>
                                              </div>
                                              <div class = "row">
                                                <div class = "col-md-6">
                                                  <h4><b>Customer ID: </b></h4>
                                                </div>
                                                <div class = "col-md-6">
                                                  <h5>CUST-{{$CustomerDet->Cust_ID}}</h5>
                                                </div>
                                              </div>
                                              <div class = "row">
                                                <div class = "col-md-6">
                                                  <h4><b>Name: </b></h4>
                                                </div>
                                                <div class = "col-md-6">
                                                  <h5>{{$CustomerDet->Cust_FName}} {{$CustomerDet->Cust_MName}}, {{$CustomerDet->Cust_LName}}</h5>
                                                </div>
                                              </div>                                              
                                              <div class = "row">
                                                <div class = "col-md-6">
                                                  <h4><b>Start Date: </b></h4>
                                                </div>
                                                <div class = "col-md-6">
                                                  <h5>{{$agreement->Starting_Date}} </h5>
                                                </div>
                                              </div>                                              
                                              <div class = "row">
                                                <div class = "col-md-6">
                                                  <h4><b>Due Date: </b></h4>
                                                </div>
                                                <div class = "col-md-6">
                                                  <h5>{{$agreement->Ending_Date}} </h5>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="modal-footer" id = "editFooter">
                                              <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                                                <div class="btn-group" role="group">
                                                  <button type="button" name = "cancelEditBtn" data-dismiss="modal" id = "cancelEditBtn" 
                                                  class="btn btn-default"  role="button">Cancel</button>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <a type = "button"  id = "editBtn" href="#" class = "btn btn-success btn-info" ><span class = "glyphicon glyphicon-pencil"></span> 
                                                      Edit Agreement
                                                    </a>
                                                 
                                                </div>
                                              </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                          <!--end of modal-->

                     </tr>
                    @endforeach 
                </tbody>
       
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            <h3 class="container">Expired Agreements</h3>  
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <th class="text-center"> Agreement ID </th>
                    <th class="text-center"> Starting Date</th>
                    <th class="text-center"> End Date</th>
                    <th class="text-center"> Status</th>
                    <th class="text-center"> Action </th>

                </thead>

                <tbody>
                    <tr>  
                    @foreach($Inativeagreements as $inactiveagreement)
                        <td>    AGMT_{{$inactiveagreement->Agreement_ID}}   </td>
                        <td>    {{$inactiveagreement->Starting_Date}}   </td>
                        <td>    {{$inactiveagreement->Ending_Date}}  </td> 
                        <td>    {{$inactiveagreement->Status}}   </td>

                        <td align="center" > 
                          <a data-toggle="modal" href="#inactiveDetail{{$inactiveagreement->Agreement_ID}}"> <button class="btn btn-info btn-md"> View </button></a>
                        </td> 

                        <div id="inactiveDetail{{$inactiveagreement->Agreement_ID}}" class="modal fade">
                                    <div class="modal-dialog text-center" style = "width: 40%;" >
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Agreement Details</h4>
                                            </div>

                                            <div class="modal-body">
                                              
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                          <!--end of modal-->

                     </tr>
                    @endforeach 
                </tbody>
       
              </table>
            </div>
            <!-- /.box-body -->
          </div>

          </div>

       
@endsection

@section('scripts')
    <script>
      $(document).ready(function(){

        $('#editBtn').click(function(){
          swal("Sorry:","This function is still under development","info");
        })

        if($('#addingSessionField').val()=='Successful'){
         //Show popup
         swal("Good Job!:","You have successfully made a trade Agreement for this Customer, Expect that the system will set a 10% discount to the price of all the flowers that this customer will buy","success");
          }


        if($('#deletingSessionField').val()=='Successful'){
         //Show popup
         swal("Good Job!:","You have successfully Deleted the trade Agreement of this customer","success");
          }

        $("#FLowerIDfield").change(function(){

          var element =  $(this);
          //var  = element.val(); 
          var price = $('option:selected').attr( "data-tag" );
          //console.log(price) ; 
          $('#origPriceField').val(price);
        });//end of function
    });

      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth()+1; //January is 0!
      var yyyy = today.getFullYear();
       if(dd<10){
              dd='0'+dd
          } 
          if(mm<10){
              mm='0'+mm
          } 

      today = yyyy+'-'+mm+'-'+dd;
        $("#SDateField").setAttribute("min", today);
    </script>
@endsection