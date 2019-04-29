

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>


<!--h2>QRCode Scanner</h2-->

   <button type="button" class="btn btn-primary" onClick="openScanner()">Scan QR Code</button>

    <div id="qr-scanner-modal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body">
              <video id="preview1" style="width: 100%!important"></video>
          </div>


          <div class="modal-footer text-center">
            <div class="row">
                <div class="col text-center">
                    <button type="button" class="btn btn-default" onClick="closeModal()">Close</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script type="text/javascript">

        let scanner = null;

        function openScanner(){


            scanner = new Instascan.Scanner({ video: document.getElementById('preview1') });

            scanner.addListener('scan', function (content) {
                //alert("QRCode Content: " + content);
                  $('#qr-scanner-modal').modal('hide');
                  $("#qr-code-value").html(content);
                  if($("#qrCode").val(content)){}
                  

                  getCategoryFromQR(content);

                  try{
                        if(scanner != null){
                            scanner.stop().then(function (){
                                console.log("Scanner Stopped...");
                            });
                        }
                    }catch(error){}
            });

              Instascan.Camera.getCameras().then(function (cameras) {
                if (cameras.length > 0) {
                  scanner.start(cameras[0]);
                  console.log("Scanner Stared...");
                } else {
                  console.error('No cameras found.');
                }
              }).catch(function (e) {
                console.error(e);
              });

            $('#qr-scanner-modal').modal('show');
        }

        function getCategoryFromQR(qrvalue){
            //$("#qr-code-value").html(qrvalue);
            $.ajax({

               type:'POST',

               url:'/getCategory',

               data:{categoryid:qrvalue},

               success:function(data){

                  alert(JSON.stringify(data));

               }

            });
        }

        function closeModal(){
            try{
                if(scanner != null){
                    scanner.stop().then(function (){
                        console.log("Scanner Stopped...");
                    });
                }
            }catch(error){}

            $('#qr-scanner-modal').modal('hide');
        }
    </script>

