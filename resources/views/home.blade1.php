@extends('layouts.app')

@section('page-dashboard')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Ferma Budget System</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Ferma</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>60.6%</h3>

          <p><b>CAPITAL BUDGETS</b></p>
        </div>
        <div class="icon">
          <i class="ion ion-cash"></i>
        </div>
        <a href="#" class="small-box-footer">N25,674,881,560.00 <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>39.4%<sup style="font-size: 20px">R=O+P</sup></h3>

          <p><b>RECURRENT BUDGETS</b></p>
        </div>
        <div class="icon">
          <i class="ion ion-cash"></i>
        </div>
        <a href="#" class="small-box-footer">N16,666,923,934.00 <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>89.9% <sup style="font-size: 16px">of Recurrent</sup></h3>

          <p>OVERHEAD BUDGETS</p>
        </div>
        <div class="icon">
          <i class="ion ion-cash"></i>
        </div>
        <a href="#" class="small-box-footer">N14,984,468,075.00 <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>10.1%<sup style="font size: 16px">of Recurrent</sup></h3>

          <p>PERSONNEL BUDGETS</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">N1,682,455,859.00 <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->
      <div class="nav-tabs-custom">
        <!-- Tabs within a box -->
        <ul class="nav nav-tabs pull-right">
          <li class="active"><a href="#revenue-chart" data-toggle="tab"></a></li>
          <!--<li><a href="#sales-chart" data-toggle="tab">Donut</a></li>-->
          <li class="pull-left header"><i class="fa fa-inbox"></i> Ferma Budget System</li>
        </ul>
        <div class="tab-content no-padding">
          <!-- Morris chart - Sales -->
          <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
          <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
        </div>
      </div>
      <!-- /.nav-tabs-custom -->

      <!-- Chat box -->
      <div class="box box-success">
        <div class="box-header">
          <i class="fa fa-comments-o"></i>

          <h3 class="box-title">2018 Budget Summary</h3>

          <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
            <div class="btn-group" data-toggle="btn-toggle">
              <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
              </button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
            </div>
          </div>
        </div>
        <div class="box-body chat" id="chat-box">
          <!-- chat item -->
          <div class="item">
            <img src="dist/img/user4-128x128.jpg" alt="user image" class="online">

            <p class="message">
              <a href="#" class="name">
                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2018</small>
                Construction
              </a>
              Construction of office Buildings = N1,475,933,163.00 	
              
            </p>
            
            </div>
          <!-- /.item -->
          <!-- chat item -->
          <div class="item">
            <img src="dist/img/user3-128x128.jpg" alt="user image" class="offline">

            <p class="message">
              <a href="#" class="name">
                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2018</small>
                Mechanical Department
              </a>
              Mechanical = N510,000,000.00 
              
            </p>
          </div>
          <!-- /.item -->
          <!-- chat item -->
          <div class="item">
            <img src="dist/img/user2-160x160.jpg" alt="user image" class="offline">

            <p class="message">
              <a href="#" class="name">
                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2018</small>
                Electrical Department
              </a>
              Electrical =	 N302,000,000.00 
             
            </p>
          </div>
          <!-- /.item -->
        </div>
        <!-- /.chat -->
       
      <!-- /.box (chat box) -->

      <!-- TO DO List -->
      <div class="box box-primary">
        <div class="box-header">
          <i class="ion ion-clipboard"></i>

          <h3 class="box-title">Statistics of Firms</h3>

          <div class="box-tools pull-right">
            <ul class="pagination pagination-sm inline">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
          <ul class="todo-list">
            <li>
              <!-- drag handle -->
              <span class="handle">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                  </span>
              <!-- checkbox -->
              <input type="checkbox" value="">
              <!-- todo text -->
              <span class="text">180 Firms Applied</span>
              <!-- Emphasis label -->
              <small class="label label-danger"><i class="fa fa-clock-o"></i> Ferma Nigeria</small>
              <!-- General tools such as edit or delete-->
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            <li>
                  <span class="handle">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                  </span>
              <input type="checkbox" value="">
              <span class="text">50 Firms Have Completed Documment</span>
              <small class="label label-info"><i class="fa fa-clock-o"></i> Ferma Nigeria</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            <li>
                  <span class="handle">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                  </span>
              <input type="checkbox" value="">
              <span class="text">90 Firms have Uncompleted Documents</span>
              <small class="label label-warning"><i class="fa fa-clock-o"></i> Ferma Nigeria</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            <li>
                  <span class="handle">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                  </span>
              <input type="checkbox" value="">
              <span class="text">40 Firms Awarded Contracts</span>
              <small class="label label-success"><i class="fa fa-clock-o"></i> Ferma Nigeria</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            
           
             
          </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix no-border">
          
        </div>
      </div>
      <!-- /.box -->

      <!-- quick email widget -->
      <div class="box box-info">
        <div class="box-header">
          <i class="fa fa-envelope"></i>

          <h3 class="box-title">2018 Budget Summary</h3>
          <!-- tools box -->
          <div class="pull-right box-tools">
            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                    title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
          <!-- /. tools -->
        </div>
        <div class="box-body">
          <form action="#" method="post">
            <div class="form-group">
        
       
                            
                    
            </div>
            <div class="form-group">
              
            </div>
            <div>

                    <b>NORTH CENTRAL I  ZONAL OFFICE:</b><br/>
                    FEDERAL CAPITAL TERITORY<br/>
                    NIGER STATE<br/>
                    KOGI STATE<br/>
                    NASARAWA STATE<br/>
                    <b>NORTH CENTRAL  II ZONAL OFFICE  MAKURDI:</b><br/>
                    BENUE STATE<br/>
                    PLATEAU STATE<br/>
                    TARABA STATE<br/>
                    <b>NORTH EAST I ZONAL OFFICE, DAMATURU:</b><br/>
                    YOBE STATE<br/>
                    BORNO STATE<br/>
                    JIGAWA STATE<br/>
                    <b>NORTH EAST II ZONAL OFFICE, BAUCHI:</b><br/>
                    BAUCHI STATE<br/>
                    ADAMAWA STATE<br/>
                    GOMBE STATE<br/>
                    <b>NORTH WEST  I ZONAL OFFICE, KANO:</b><br/>
                    KANO STATE<br/>
                    KADUNA  STATE<br/>
                    KATSINA STATE<br/>
                    <b>NORTH WEST II ZONAL OFFICE, SOKOTO:</b><br/>
                    SOKOTO STATE<br/>
                    KEBBI STATE<br/>
                    ZAMFARA STATE<br/>
                    <b>SOUTH EAST I  ZONAL OFFICE, ENUGU:</b><br/>
                    ENUGU STATE<br/>
                    ANAMBRA STATE<br/>
                    IMO STATE<br/>
                    <b>SOUTH EAST  II ZONAL OFFICE, ABAKALIKI:</b><br/>
                    EBONYI STATE<br/>
                    CROSS RIVER STATE<br/>
                    ABIA STATE<br/>
                    <b> SOUTH -SOUTH  I ZONAL OFFICE, PORTHARCOURT:</b><br/>
                    RIVERS STATE<br/>
                    AKWA-IBOM STATE<br/>
                    BAYELSA STATE<br/>
                    <b>SOUTH -SOUTH  II  ZONAL OFFICE, BENIN:</b><br/>
                    EDO STATE<br/>
                    DELTA STATE<br/>
                    ONDO STATE<br/>
                    <b> WEST  I ZONAL OFFICE, IBADAN:</b><br/>
                    OYO STATE<br/>
                    KWARA STATE<br/>
                    EKITI STATE<br/>
                    OSUN STATE<br/>
                    <b>SOUTH WEST II  ZONAL OFFICE, LAGOS:</b><br/>
                    LAGOS EAST<br/>
                    LAGOS WEST<br/>
                </div>
          </form>
        </div>
        <div class="box-footer clearfix">
           </div>
      </div>

    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">

      <!-- Map box -->
      <div class="box box-solid bg-light-blue-gradient">
        <div class="box-header">
          <!-- tools box -->
          <div class="pull-right box-tools">
            <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                    title="Date range">
              <i class="fa fa-calendar"></i></button>
            <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                    data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
              <i class="fa fa-minus"></i></button>
          </div>
          <!-- /. tools -->

          <i class="fa fa-map-marker"></i>

          <h3 class="box-title">
           Ferma Zones
          </h3>
        </div>
        <div class="box-body">
        <a href="https://goo.gl/maps/VffvmtcvtRq">
          <div id="world-map" style="height: 250px; width: 100%;" ></div>
          </a>
        </div>
        <!-- /.box-body-->
        <div class="box-footer no-border">
          <div class="row">
            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
              <div id="sparkline-1"></div>
              <div class="knob-label">NORTH CENTRAL I  ZONAL  OFFICE GWAGWALADA
                </div>
            </div>
            <!-- ./col -->
            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
              <div id="sparkline-2"></div>
              <div class="knob-label">NORTH CENTRAL  II ZONAL OFFICE  MAKURDI
                </div>
            </div>
            <!-- ./col -->
            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-3"></div>
                    <div class="knob-label">NORTH EAST I ZONAL OFFICE, DAMATURU
                        </div>
                  </div>
            <!-- ./col -->
            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-3"></div>
                    <div class="knob-label">NORTH EAST II ZONAL OFFICE, BAUCHI
                        </div>
                  </div>
            <!-- ./col -->
            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-5"></div>
                    <div class="knob-label">NORTH WEST  I ZONAL OFFICE, KANO
                        </div>
                  </div>
            <!-- ./col -->
            <div class="col-xs-4 text-center">
              <div id="sparkline-6"></div>
              <div class="knob-label">NORTH WEST II ZONAL OFFICE, SOKOTO
                </div>
            </div>
            <!-- ./col -->
             
            <div class="col-xs-4 text-center">
                    <div id="sparkline-6"></div>
                    <div class="knob-label">SOUTH EAST I  ZONAL OFFICE, ENUGU
                            
                      </div>
                  </div>
                                    
                   <!-- ./col -->
            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-2"></div>
                    <div class="knob-label">SOUTH EAST  II ZONAL OFFICE, ABAKALIKI
                            
                      </div>
                  </div>
                  <!-- ./col -->
                   
            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-2"></div>
                    <div class="knob-label">SOUTH -SOUTH  I ZONAL OFFICE, PORTHARCOURT
                </div>
                  </div>
                  <!-- ./col -->
                                     
            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-2"></div>
                    <div class="knob-label">SOUTH -SOUTH  II  ZONAL OFFICE, BENIN                            
                            
                      </div>
                  </div>
                  <!-- ./col -->                                    
            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-2"></div>
                    <div class="knob-label">SOUTH WEST  I ZONAL OFFICE, IBADAN                           
                            
                      </div>
                  </div>
                  <!-- ./col -->
                                                       
            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-2"></div>
                    <div class="knob-label">SOUTH WEST II  ZONAL OFFICE, LAGOS                            
                            
                      </div>
                  </div>
                  <!-- ./col -->
          </div>
          <!-- /.row -->
        </div>
      </div>
      <!-- /.box -->

      <!-- solid sales graph -->
      <div class="box box-solid bg-teal-gradient">
        <div class="box-header">
          <i class="fa fa-th"></i>

          <h3 class="box-title">2018 Summary Budget</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <div class="box-body border-radius-none">
          <div class="chart" id="line-chart" style="height: 250px;"></div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer no-border">
          <div class="row">
            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
              <input type="text" class="knob" data-readonly="true" value="10.1" data-width="60" data-height="60"
                     data-fgColor="#39CCCC">

              <div class="knob-label"><b>23030114   TOTAL PERSONNEL	N1,682,455,859.00</b>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
              <input type="text" class="knob" data-readonly="true" value="89.9" data-width="60" data-height="60"
                     data-fgColor="#39CCCC">

              <div class="knob-label"><b>23030115	TOTAL OVERHEAD	N14,984,468,075.00</b>
                </div>
            </div>
             <!-- ./col -->
             <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <input type="text" class="knob" data-readonly="true" value="39.4" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">
      
                    <div class="knob-label"><b>23030116	 TOTAL RECURRENT	N16,666,923,934.00</b>
                        </div>
                  </div>
                  
             <!-- ./col -->
             <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <input type="text" class="knob" data-readonly="true" value="60.6" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">
      
                    <div class="knob-label"><b>23030117	 TOTAL CAPITAL	 N25,674,881,560.00</b> 
                        </div>
                  </div>
                  
             <!-- ./col -->
            <div class="col-xs-4 text-center">
              <input type="text" class="knob" data-readonly="true" value="100" data-width="60" data-height="60"
                     data-fgColor="#39CCCC">

              <div class="knob-label"><b>23030118	TOTAL ALLOCATION	 N42,341,805,494.00</b> 
                </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->

      <!-- Calendar -->
      <div class="box box-solid bg-green-gradient">
        <div class="box-header">
          <i class="fa fa-calendar"></i>

          <h3 class="box-title">Calendar</h3>
          <!-- tools box -->
          <div class="pull-right box-tools">
            <!-- button with a dropdown -->
            <div class="btn-group">
              <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bars"></i></button>
              <ul class="dropdown-menu pull-right" role="menu">
                <li><a href="#">Ferma Budget Events</a></li>
                <li><a href="#">Clear events</a></li>
                <li class="divider"></li>
                <li><a href="#">View calendar</a></li>
              </ul>
            </div>
            <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
            </button>
          </div>
          <!-- /. tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <!--The calendar -->
          <div id="calendar" style="width: 100%"></div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-black">
          <div class="row">
            <div class="col-sm-6">
              <!-- Progress bars -->
              <div class="clearfix">
                <span class="pull-left"><b>Total Amount for Road Projects = N22,464,325,000.00</b> 
                    </span>
                <small class="pull-right">88.1%</small>
              </div>
              <div class="progress xs">
                <div class="progress-bar progress-bar-green" style="width: 88.1%;"></div>
              </div>
              <div class="clearfix">
                    <span class="pull-left"><b>Total Amount for ICT Projects = 312,622,397.00 </b> 
                        </span>
                    <small class="pull-right">1.2%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 1.2%;"></div>
                  </div>

              <div class="clearfix">
                <span class="pull-left"><b>Total Amount for Mechanical Projects =  N510,000,000.00 
                    </b></span>
                <small class="pull-right">2.0%</small>
              </div>
              <div class="progress xs">
                <div class="progress-bar progress-bar-green" style="width: 2.0%;"></div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <div class="clearfix">
                <span class="pull-left"><b>Total Amount for Electrical Projects = N302,000,000.00                       
                    </b></span>
                <small class="pull-right">1.2%</small>
              </div>
              <div class="progress xs">
                <div class="progress-bar progress-bar-green" style="width: 1.2%;"></div>
              </div>


              <div class="clearfix">
                    <span class="pull-left"><b>Total Amount for Research and Design Projects = N430,001,000.00                             
                        </b></span>
                    <small class="pull-right">1.7%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 1.7%;"></div>
                  </div>

              <div class="clearfix">
                <span class="pull-left"><b>Total Amount for Construction of Office Building Projects = N1,475,933,163.00</b> 
                    </span>
                <small class="pull-right">5.8%</small>
              </div>
              <div class="progress xs">
                <div class="progress-bar progress-bar-green" style="width: 5.8%;"></div>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->

</section>
<!-- /.content -->

@endsection
