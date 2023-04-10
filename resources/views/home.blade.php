@extends('template')
@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-body" style="text-align: center">
          <!-- Small boxes (Stat box) -->
          <div class="row">            
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{ App\Http\Controllers\UserController::getQtyKayuAllHome('BCT','001'); }}<sup style="font-size: 20px"></sup></h3>
                  
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">TPN LAMA </a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-indigo">
                <div class="inner">
                  <h3>{{ App\Http\Controllers\UserController::getQtyKayuAllHome('BCT','600'); }}<sup style="font-size: 20px"></sup></h3>                  
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">TPK 49 </a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-pink">
                <div class="inner">
                  <h3>{{ App\Http\Controllers\UserController::getQtyKayuAllHome('BCT','002'); }}<sup style="font-size: 20px"></sup></h3>                  
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" data-toggle="modal" data-target="#modChart" data-source="65.1,59.47,80.00,81.11,56.67,55.45,40.88,20.45,40.98,80.66,88.34,61.01" data-target-source="50" class="small-box-footer">TPN MANTOBAR</i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-teal">
                <div class="inner">
                  <h3>{{ App\Http\Controllers\UserController::getQtyKayuAllHome('BCT','601'); }}<sup style="font-size: 20px"></sup></h3>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">TPK 57</i></a>
              </div>
            </div>            
          </div>
          <!-- /.row -->

          <div class="row">            
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3>{{ App\Http\Controllers\UserController::getQtyKayuAllHome('BCT','710'); }}<sup style="font-size: 20px"></sup></h3>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">LOGPOND SANGAI DRT</i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-secondary">
                <div class="inner">
                  <h3>{{ App\Http\Controllers\UserController::getQtyKayuAllHome('BCT','711'); }}<sup style="font-size: 20px"></sup></h3>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">LOGPOND SANGAI AIR</a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-cyan">
                <div class="inner">
                  <h3>{{ App\Http\Controllers\UserController::getQtyKayuAllHome('BCT','720'); }}<sup style="font-size: 20px"></sup></h3>                  
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">LOGPOND TANJUNG</a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>{{ App\Http\Controllers\UserController::getQtyKayuAllHome('BCT','730'); }}<sup style="font-size: 20px"></sup></h3>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">LOGPOND KABUAU DRT</a>
              </div>
            </div>            
          </div>
          <!-- /.row -->

          <div class="row">            
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3>{{ App\Http\Controllers\UserController::getQtyKayuAllHome('BCT','731'); }}<sup style="font-size: 20px"></sup></h3>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">LOGPOND KABUAU AIR</a>              
              </div>
            </div>
            <div class="col-lg-3 col-6">    
              <!-- small box -->
              <div class="small-box bg-light">
                <div class="inner">
                  <h3>{{ App\Http\Controllers\UserController::getQtyKayuAllHome('BCT','740'); }}<sup style="font-size: 20px"></sup></h3>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">LOGPOND HANJALIPAN</a>                
              </div>
            </div>                      
          </div>
          <!-- /.row -->

          
        </div>
        <!-- /.card-body -->

    </div>
      <!-- /.card -->
    <div class="modal fade" id="modChartx" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="exampleModalLabel">Linechart</h4>
                </div>
                <div class="modal-body">
                    <div class="card">
                      <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                          <h3 class="card-title">Sales</h3>
                          <a href="javascript:void(0);">View Report</a>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="d-flex">
                          <p class="d-flex flex-column">
                            <span class="text-bold text-lg">$18,230.00</span>
                            <span>Sales Over Time</span>
                          </p>
                          <p class="ml-auto d-flex flex-column text-right">
                            <span class="text-success">
                              <i class="fas fa-arrow-up"></i> 33.1%
                            </span>
                            <span class="text-muted">Since last month</span>
                          </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                          <canvas id="sales-chart" height="200"></canvas>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                          <span class="mr-2">
                            <i class="fas fa-square text-primary"></i> This year
                          </span>

                          <span>
                            <i class="fas fa-square text-gray"></i> Last year
                          </span>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection