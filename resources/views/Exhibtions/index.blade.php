@extends('layou.app')
@section('content')




        <div class="sponsor" style="margin-top:80px;">
            <i class="text-center" style="font-size: 60px;  font-weight: bold; color: green;"> 
  <Map>
  </Map></i> 
            <h2 style="text-align: center ; font-weight: bold; font-size: 60px; color: teal;">Sponsor</h2>
            <div class="container">
                <div class="row">
                <div class="col-4">
                    <img src="/assets/img/mcdonalds-logo.png" style="width: 100%;">
                </div>
                <div class="col-4">
                    <img src="/assets/img/mercedes.png" style="width: 100%;">                
                </div>
                <div class="col-4">
                    <img src="/assets/img/toyota-logo.png" style="width:100%">                
                </div>
                <div class="col-4">
                    <img src="/assets/img/intel-logo.png" style="width:100%">                
                </div>
                </div>
            </div>
        </div>
    </section>
    <section style="padding-top: 20px;">
        <div class="row" style="width: 98%;">
            <div class="col">
                    <div class="container-fluid" >
                        <div class="row" style="max-height: 10000px; max-width: 10000px; overflow: auto;border: 5px solid rgb(0, 0, 0);">
                       
    <div class="col" style="height: 500px; " >
        <div id="mnsry_container">

            @foreach($merches as $merche)
              <div>

            <img src="./CategorImage/{{$categorie->CategoryName}}.jpg" width="60%" style="width:100px; height: 100px"  />
                
                <hr>
                <br>
              </div>
             

            @endforeach
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
            </div>
            <div class="col">
                <div class="containerTab" id="b1" style="display: none;">
                    <div class="row" id="col">
                        <div class="col-md-6" style="width: 48%;padding-top: 5px;">
                            <div class="card bg-success bg-gradient" style="background: rgba(25,135,84,0.43);width: 100%;" >
                                <div class="card-body" style="width: 100%;">
                                    <div class="row">
                                        <div class="col-md-6" style="width: 60%;">
                                            <h4 style="font-family: Bitter, serif;font-size: 14px;"><strong>Lumina ss 2015 </strong></h4>
                                            <p style="margin: 0px;margin-top: 20px;font-size: 14px;">25, 000,5000</p>
                                        </div>
                                        <div class="col-md-6" style="width: 40%;border-radius: 47px;"><img src="/assets/img/p-4.jpg" style="width: 100%;border: 6px none var(--bs-dark);border-radius: 18px;" /></div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn btn-outline-info btn-block1" type="button" data-bs-toggle="modal" data-bs-target="#itemModal" style="color: rgb(255,255,255);font-size: 16px;"><i class="fa fa-plus me-2"></i>&nbsp;Show Detail</button>                            
                            </div>                        
                        </div> 
                        </div>
                    </div>
                </div>
            </div>

    </section>

@endsection