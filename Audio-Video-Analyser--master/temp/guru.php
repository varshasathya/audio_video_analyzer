<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Video Info</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../public/css/bootstrap.min.css">
      <script src="../public/js/jquery.min.js"></script>
      <script src="../public/js/bootstrap.min.js"></script>
      <style>
         .pads,#all,#transcript,#video{
         padding-left: 3%;
         padding-top: 3%;
         }
         #check_style{
         background: #ffffff;
         }
         .btn3d {
         position:relative;
         top: -6px;
         border:0;
         transition: all 40ms linear;
         margin-top:10px;
         margin-bottom:10px;
         margin-left:2px;
         margin-right:2px;
         }
         .btn3d:active:focus,
         .btn3d:focus:hover,
         .btn3d:focus {
         -moz-outline-style:none;
         outline:medium none;
         }
         .btn3d:active, .btn3d.active {
         top:2px;
         }
         .btn3d.btn-magick {
         color: #fff;
         box-shadow:0 0 0 1px #9a00cd inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #9823d5, 0 8px 8px 1px rgba(0,0,0,0.5);
         background-color:#bb39d7;
         }
         .btn3d.btn-magick:active, .btn3d.btn-magick.active {
         box-shadow:0 0 0 1px #9a00cd inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
         background-color: #bb39d7;
         }
         .modal-header
         {
         background:#ff3333;
         color:white;
         }
         .form-group input[type="checkbox"] {
         display: none;
         }
         .form-group input[type="checkbox"] + .btn-group > label span {
         width: 20px;
         }
         .form-group input[type="checkbox"] + .btn-group > label span:first-child {
         display: none;
         }
         .form-group input[type="checkbox"] + .btn-group > label span:last-child {
         display: inline-block;   
         }
         .form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
         display: inline-block;
         }
         .form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
         display: none;   
         }
         
         
         
        /*scroll-menu*/ 
         div.scrollmenu {
    overflow: auto;
    white-space: nowrap;
}

div.scrollmenu div {
    display: inline-block;
    text-align: center;
    padding: 14px;
    text-decoration: none;
    
    filter: gray; /* IE6-9 */
  -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */

}

div.scrollmenu div:hover {
     filter: none; /* IE6-9 */
  -webkit-filter: grayscale(0); /* Google Chrome, Safari 6+ & Opera 15+ */
}



      </style>
   </head>
   <body>
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-8" style="background-color:lavender;">
               <div class="row" id="video">
                  <video width="800" controls>
                     <source src="http://trendsepc.in/sih/Sih_Project/Sih/upload/alo.mp4" type="video/mp4">
                  </video>
               </div>
               <div class="row" id="transcript">
                  <h4>Transcripts:</h4>
               </div>
               <div class="row" id="all">
                  <h4>Showing all contents -faces</h4>
               </div>
            </div>
            <div class="col-sm-4" style="background-color:lavenderblush;">
               <div class="row pads scrollmenu" id="topic">
                  <h4>Topics:</h4>
               </div>
               <div class="row pads scrollmenu" id="faces">
                  <h4>Faces:</h4>
               </div>
               <div class="row pads">
                  <h4>Key Words:</h4>
               </div>
               <div class="row pads">
                  <h4>Annotation:</h4>
               </div>
               <div class="row pads">
                  <h4>Brands:</h4>
               </div>
               <div class="row pads">
                  <button type="button" class="btn btn-success btn-lg">Statics</button>  
                  <button type="button" class="btn btn-magick btn-lg btn3d" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-download-alt" ></span> Downloads</button>  
               </div>
            </div>
         </div>
         <div id="myModal" class="modal fade" role="dialog">
             <div class="modal-dialog">
                        <div class="modal-content">
                                   <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">×</button>
                                         <h4 class="modal-title">Download Requirements</h4>
                                   </div>
                                   <div class="modal-body">
                                                <div class="[ form-group ]">
         
            <div class="row"> 
            <div class="[ form-group ]" style="text-align:center">
            <input type="checkbox" name="select" id="fancy-checkbox-default" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="fancy-checkbox-default" class="[ btn btn-default ]">
                    <span class="[ glyphicon glyphicon-ok ]"></span>
                    <span> </span>
                </label>
                <label for="fancy-checkbox-default" class="[ btn btn-default active ]" id="check_style">
                    Select all
                </label>
            </div>
        </div>
             <div class="col-sm-6">
                       
             <div class="[ form-group ]">
            <input type="checkbox" name="face" id="fancy-checkbox-primary" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="fancy-checkbox-primary" class="[ btn btn-primary ]">
                    <span class="[ glyphicon glyphicon-ok ]"></span>
                    <span> </span>
                </label>
                <label for="fancy-checkbox-primary" class="[ btn btn-default active ]" id="check_style">
                    Face Analysis
                </label>
            </div>
        </div>
        
        <div class="[ form-group ]">
            <input type="checkbox" name="response" id="fancy-checkbox-success" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="fancy-checkbox-success" class="[ btn btn-success ]">
                    <span class="[ glyphicon glyphicon-ok ]"></span>
                    <span> </span>
                </label>
                <label for="fancy-checkbox-success" class="[ btn btn-default active ]" id="check_style">
                    Response rate
                </label>
            </div>
        </div>
        </div>
         <div class="col-sm-6">
            
        <div class="[ form-group ]">
            <input type="checkbox" name="emotion" id="fancy-checkbox-info" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                    <span class="[ glyphicon glyphicon-ok ]"></span>
                    <span> </span>
                </label>
                <label for="fancy-checkbox-info" class="[ btn btn-default active ]" id="check_style">
                    Emotion Usage
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="object" id="fancy-checkbox-warning" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="fancy-checkbox-warning" class="[ btn btn-warning ]">
                    <span class="[ glyphicon glyphicon-ok ]"></span>
                    <span> </span>
                </label>
                <label for="fancy-checkbox-warning" class="[ btn btn-default active ]" id="check_style">
                    Object Appearence
                </label>
            </div>
        </div>
        
        </div>
        </div>
                                   </div>
                                   <div class="modal-footer">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
                                   </div>
                        </div>

            </div>
     </div>
      </div>
      </div>
      <script>
          var node="",topics={
             data:"raja",
             adata:"raja",
             aadata:"raja",
             data:"raja",
             adata:"raja",
             data:"raja",
             adata:"raja",
             data:"raja",
             adata:"raja",
             aaadata:"raja"
          }
          
          for (var iterator in topics) {
             node+='<div class="bg-primary"  style=" font-size: 25px; margin-left: 2%;margin-right: 2%;">&nbsp'+topics[iterator]+'&nbsp</div>'; node+='<div class="bg-primary"  style=" font-size: 25px; margin-left: 2%;margin-right: 2%;">&nbsp'+topics[iterator]+'&nbsp</div>'; 
              }
         
          $('#topic').append(node);
          
          
          node="";
          var face={"Jayalalithaa":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/7281c9e6-7c94-438a-8c78-58c7261e4662","Unknown #44":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/6a83dd78-f856-4772-9281-30e62f08db7a","Unknown #41":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/011b137b-c5df-48ef-b99c-46ea9c78ee3b","Unknown #4":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/84708501-fcbe-49c3-ab04-7025427e4b48","Unknown #28":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/35b3c32c-18ba-4791-9249-4e7f6235b89f","Unknown #43":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/159937fc-bd86-4a64-a589-eeb161105c98","Unknown #2":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/1c0d4b79-688f-4b80-b99e-43d2e991e92e","Unknown #29":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/107105f4-95a3-4196-bf4b-6711bfd29df2","Unknown #45":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/8b840acc-133a-472a-a346-6769e18ecf4a","Unknown #34":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/3b70c604-2ffc-4bf9-8096-fdbb1bcf4a5a","Unknown #17":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/bf41907d-c72b-4fcd-a6fb-d8f112c6459b","Unknown #24":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/3c07fb28-8dd2-4444-94af-9ec5218aec5b","Unknown #27":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/eef635d8-601f-4184-9b49-8c0f8c83b170","Unknown #35":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/7aae3ce5-67e9-40a4-b92c-e35061dcbafe","Unknown #26":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/f5d5d843-e7cb-48a9-ae07-5c4dd2797601","Unknown #38":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/f2e1e9c1-802d-4ad0-8ecd-680071a3fc25","Unknown #47":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/caae8ed2-2039-4459-aab3-f6d3ec2419c8","Unknown #39":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/32c3cb06-1457-4530-8d60-834927ac340c","Unknown #5":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/a4a2ee7c-40dd-4dff-8c7f-cb830250cb92","Unknown #37":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/22250d7d-0ac5-43e4-9f14-ea593ec964d7","Unknown #25":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/3baf7405-f976-480f-b75d-ee3e659dbb8e","Unknown #14":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/3cb58225-aac3-4168-8f42-8f7fc2aa7854","Unknown #42":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/2776eb6b-52d6-4d6e-99a4-03925fcb78cb","Unknown #40":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/b3732958-e287-4d8d-8147-3478f33aa5f4","Unknown #53":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/d40806e9-92c5-4764-a2f9-27c6762f6f33","Unknown #36":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/3f696b87-775a-4c43-93f5-b2f922eb64f0","Unknown #8":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/9c66b205-2691-41ac-b987-fe64d0fceea9","Unknown #46":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/dd8db656-3c92-4536-9e7d-d974c7d89851","Unknown #3":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/ce10ab05-260d-475c-8f44-ae5e299f5e68","Unknown #10":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/853b59a5-ff26-4e29-8074-979f42a9bc29","Unknown #33":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/6f2854c1-dbc2-47b4-bd16-5ac9c7f6a681","Unknown #12":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/ce1c96fd-595f-4346-85a3-bea10af31435","Unknown #13":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/579f032c-faf1-4a09-93c4-c37fd8928af8","Unknown #15":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/fd29ce4f-0733-40a1-a81c-664b3939e50a","Unknown #51":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/b9efc854-ef3b-45c0-b3d3-40a1478016ea","Unknown #21":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/9365a9d3-440a-43e7-b4d5-427cf94b99c7","Unknown #11":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/a540dff4-3de4-49c5-bd7e-4a09899f4869","Unknown #49":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/bac0cf66-dded-48bb-8563-154e1592a138","Unknown #48":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/01831910-a74e-4feb-9c83-45a601063fb8","Mamata Banerjee":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/c4c71204-cf63-45a4-9aa1-4f52e1a5467a","Unknown #18":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/a671a626-9043-40fd-ae8c-c5ebe8a1522b","Unknown #20":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/662e5490-99ab-4ea3-9300-2755f41e9e28","Unknown #22":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/7c020844-a4c3-49ec-8e10-8caee5134f98","Unknown #30":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/30ac80a2-c980-40b4-b5ad-3cb49771f2b3","Unknown #32":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/205b99f7-9eb6-4872-a57f-e516423d2f6e","Unknown #52":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/2a2cf3bd-b6d7-45ca-a0cd-28a6c9641e6f","Unknown #16":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/32cd4be6-ef89-4f1a-b68a-c317576e8dcd","Unknown #7":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/3617a8c1-4a38-44e6-897e-3b029790166c","Unknown #31":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/723fb77e-8024-4a6d-910e-d4f1272e789c","Unknown #19":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/4dd81afb-6b9a-406b-8f10-c6b733a73963","Unknown #9":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/aa889671-f640-4ab4-ba5a-d09aac16b13f","Unknown #54":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/6c651c22-5503-4766-9647-9152891bce74","Unknown #23":"https://www.videoindexer.ai/api/Thumbnail/86a059e4d2/f9a9e1c0-20a4-4656-933b-a96e122b2ad5"}; 
           for (var iterator in face) {
node+=`<div> <img src="`+face[iterator]+`"class="img-circle" alt="Cinque Terre" width="120" height="120"><input name="" style="font-size:24px;">`+iterator+`</p></img></div><a href="#">
          <span class="glyphicon glyphicon-ok-sign" id="img_name_glyphicon_"`+iterator+`"></span>
        </a>`;

           }
          
         $('#faces').append(node);
          $('input[name="select"]').click(function () {
   
    if (this.checked) {
        
        if(!$("#fancy-checkbox-primary").is(":checked"))
      $('input:checkbox[name=face]').attr('checked', true);
        if(!$("#fancy-checkbox-success").is(":checked"))
     $('input:checkbox[name=response]').attr('checked', true);
     
      if(!$("#fancy-checkbox-info").is(":checked"))
     $('input:checkbox[name=emotion]').attr('checked', true);
      if(!$("#fancy-checkbox-warning").is(":checked"))
     $('input:checkbox[name=object]').attr('checked', true);
       
    }

});
function change_name () {
       
    }
      </script>
   </body>
</html>