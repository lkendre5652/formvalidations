<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
      

  </head>
  <body>
    
    <div class="container">
      
<form class="needs-validation" novalidate method="post" action="" id="regForm" enctype="multipart/form-data">
  <div class="form-row">


    <div class="col-md-4 mb-3">
      <label for="fname">First name</label>
      <input type="text" class="form-control" id="fname"  name="fname"  placeholder="First name" required>
      <div class="invalid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="mname">Middle name</label>
      <input type="text" class="form-control" id="mname" name="mname"  placeholder="Middle name" required>
      <div class="invalid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="lname">Last name</label>
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required>
      <div class="invalid-feedback">
        Looks good!
      </div>
    </div>


    <div class="col-md-4 mb-3">
      <label for="lname">Email</label>
      <input type="text" class="form-control" id="ename" name="ename" placeholder="Email" required>
      <div class="invalid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="lname">Contact</label>
      <input type="text" class="form-control" id="cname" name="cname" placeholder="Contact" required>
      <div class="invalid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="lname">Address</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
      <div class="invalid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="skills">Skills</label>
      <select class="form-control" id="skills" name="skills" >
        <option value="">Select Skill</option>
        <option value="Java">Java</option>
        <option value="C">C</option>
        <option>PHP</option>    
      </select>
      <div class="invalid-feedback">Looks good!</div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="address1">Address 1</label>
      <select class="form-control" id="address1" name="address1" onchange="getChange(this.value)">
        <option value="">Select Address 1</option>
        <option value="1" >1</option>
        <option value="Other" >Other</option>    
      </select>
      <div class="invalid-feedback">Looks good!</div>
      <input type="text" class="form-control d-none mt-2" id="vname" name="vname" placeholder="Type Here.." required>
      
    </div>

     <div class="col-md-4 mb-3">
      <label for="resume">Resume</label>
       <input type="file" class="custom-file-input" id="resume" name="resume" required>
       <label class="custom-file-label" for="validatedCustomFile" style="top: 31px !important; ">Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
      
    </div>    
  </div> 
  <button class="btn btn-primary" type="submit">Register</button>
</form>

    </div>


  </body>

  <script>

    function getChange(values){
      if(values === "Other" ){
        alert("Other...");
        $("#vname").removeClass("d-none");
      }else{
        $("#vname").addClass("d-none");
      }
    }


   
        $(document).ready(function() {
            $("#regForm").submit(function(e) {
              
              e.preventDefault();  

              const frmId = document.getElementById("regForm");
              const formData = new FormData(frmId);                          
              const strRgx = /^[a-zA-Z ]{0,20}$/;
              const cRgx = /^[0-9]{8,15}$/;
              const eRgx =  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

               var frslt = 0;
                var mrslt = 0;
                var lrslt = 0;
                var ename = 0;
                var cname = 0;
                var ename = 0;
                var address = 0;
                var address1 = 0;
                var skills = 0;

              for( const pairs of formData.entries() ){                              

                if(pairs[0] === "fname"  ){
                  if( pairs[1] === ""  || !strRgx.test(pairs[1]) ){
                    $("#fname").next().show();
                      frslt = 1                  
                  }else{
                    $("#fname").next().hide(); 
                    frslt = 2
                                         
                  }
                }

                if(pairs[0] === "mname" ){
                  if( pairs[1] === ""  || !strRgx.test(pairs[1])  ){
                    $("#mname").next().show();
                       mrslt = 1    
                  }else{
                    $("#mname").next().hide();         
                    mrslt = 2                                
                  }
                }

                if(pairs[0] === "lname" ){
                  if( pairs[1] === ""  || !strRgx.test(pairs[1]) ){
                    $("#lname").next().show();
                       lrslt = 1                  
                  }else{
                    $("#lname").next().hide();         
                     lrslt = 2                               
                  }
                } 

                 if(pairs[0] === "ename" ){
                  if( pairs[1] === ""  || !eRgx.test(pairs[1]) ){
                    $("#ename").next().show();
                       ename = 1                  
                  }else{
                    $("#ename").next().hide();         
                     ename = 2                               
                  }
                }

                if(pairs[0] === "cname" ){
                  if( pairs[1] === ""  || !cRgx.test(pairs[1]) ){
                    $("#cname").next().show();
                       cname = 1                  
                  }else{
                    $("#cname").next().hide();         
                     cname = 2                               
                  }
                }

                if(pairs[0] === "address" ){
                  if( pairs[1] === "" ){
                    $("#address").next().show();
                       address = 1                  
                  }else{
                    $("#address").next().hide();         
                     address = 2                               
                  }
                }


                if(pairs[0] === "skills"  ){
                  if( pairs[1] === "" ){
                    $("#skills").next().show();
                      skills = 1                  
                  }else{


                    $("#skills").next().hide(); 
                    skills = 2
                                         
                  }
                }


                if(pairs[0] === "address1"  ){
                  if( pairs[1] === "" ){
                    $("#address1").next().show();
                      address1 = 1                  
                  }else{
                    $("#address1").next().hide(); 
                    address1 = 2
                                         
                  }
                }


            }          
            if( frslt == 2 && mrslt == "2" && lrslt == "2" && ename === 2 && cname === 2 && address === 2 && address1 == 2 && skills == 2 ){
              $.ajax({
                url : "index1.php",
                method: "POST",
                data: formData,                
                processData: false,
                contentType: false,
                success: function(resp){
                  console.log(resp);
                }
              });
            }
          });
        });
    </script>


</html>