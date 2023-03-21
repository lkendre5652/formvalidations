<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>registration form</title>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
      

  </head>
  <body>
    
<div class="container ">
  <h2 class="text-success text-center ">Registration Form</h2>
      
<form class="needs-validation " novalidate method="post" action="" id="regForm" enctype="multipart/form-data">
  <div class="form-row">


    <div class="col-md-4 mb-1">
      <label for="fname">First name*</label>
      <input maxlength="50" type="text" class="form-control" id="fname"  name="fname"  placeholder="First name*" required>
      <div class="invalid-feedback">
        Please insert valid input.
      </div>
    </div>

    <div class="col-md-4 mb-1">
      <label for="mname">Middle name</label>
      <input maxlength="50" type="text" class="form-control" id="mname" name="mname"  placeholder="Middle name" >
      <div class="invalid-feedback">
        Please insert valid input.
      </div>
    </div>

    <div class="col-md-4 mb-1">
      <label for="lname">Last name*</label>
      <input maxlength="50" type="text" class="form-control" id="lname" name="lname" placeholder="Last name*" required>
      <div class="invalid-feedback">
        Please insert valid input.
      </div>
    </div>


    <div class="col-md-4 mb-1">
      <label for="lname">Email*</label>
      <input maxlength="50" type="text" class="form-control" id="ename" name="ename" placeholder="Email*" required>
      <div class="invalid-feedback">
        Please insert valid input.
      </div>
    </div>

    <div class="col-md-4 mb-1">
      <label for="lname">Contact*</label>
      <input maxlength="15" minlength="8" type="text" class="form-control" id="cname" name="cname" placeholder="Contact*" required>
      <div class="invalid-feedback">
        Please insert valid input.
      </div>
    </div>   


    <div class="col-md-4 mb-1">
      <label for="skills">Skills*</label>
      <select class="form-control" id="skills" name="skills" onchange="getChange(this)" >
        <option value="">Select Skill*</option>
        <option value="Python">Python</option>
        <option value="C#">C#</option>
        <option value="C++">C++</option>
        <option value="JavaScript">JavaScript</option>
        <option value="PHP">PHP</option>
        <option value="Dot Net">Dot Net</option>
        <option value="Java">Java</option>
        <option value="Other" >Other</option>

      </select>
      <div class="invalid-feedback">Please insert valid input.</div>
      <input maxlength="50" type="text" class="form-control d-none mt-2" id="sname" name="sname" placeholder="Type Here.." required>
    </div>

    <div class="col-md-4 mb-1">
      <label for="address1">Address 1*</label>
      <select class="form-control" id="address1" name="address1" onchange="getChange(this)">
        <option value="">Select Address 1*</option>
        <option value="E1">E1</option>
        <option value="E2 ">E2 </option>
        <option value="F-1">F-1</option>
        <option value="H-1B">H-1B</option>
        <option value="H-1C">H-1C</option>
        <option value="H-2A">H-2A</option>
        <option value="H-2B">H-2B</option>
        <option value="H-3 ">H-3 </option>
        <option value="I ">I </option>
        <option value="J-1 ">J-1 </option>
        <option value="K-1 ">K-1 </option>
        <option value="L-1 ">L-1 </option>
        <option value="M-1 ">M-1 </option>
        <option value="O-1">O-1</option>
        <option value="O-2   ">O-2   </option>
        <option value="P-1">P-1</option>
        <option value="P-2">P-2</option>
        <option value="P-3  ">P-3  </option>
        <option value="Q-1">Q-1</option>
        <option value="Q-2    ">Q-2    </option>
        <option value="R-1 ">R-1 </option>
        <option value="TC  ">TC  </option>
        <option value="TN">TN</option>
        <option value="Other" >Other</option>    
      </select>
      <div class="invalid-feedback">Please insert valid input.</div>
      <input maxlength="50" type="text" class="form-control d-none mt-2" id="vname" name="vname" placeholder="Type Here.." required>
      
    </div>

     <div class="col-md-4 mb-1">
      <label for="resume">Resume*</label>
       <input type="file" class="custom-file-input" id="resume" name="resume" required>
       <label class="custom-file-label" for="validatedCustomFile" style="top: 31px !important; ">Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>      
    </div> 

    <!-- address -->

    <div class="col-md-4 mb-1">
      <label for="lname">Address*</label>
      <input maxlength="50" type="text" class="form-control" id="address" name="address" placeholder="Street*" required>      
      <div class="invalid-feedback"> <!-- https://api.zippopotam.us/us/90210 -->
        Please insert valid input.
      </div>      
    </div>

    
     <div class="col-md-4 mb-1">      
      <input maxlength="50" type="text" class="form-control" id="address_city" name="address_city" placeholder="City" >                
    </div> 

    <div class="col-md-4 mb-1">      
      <input maxlength="50" type="text" class="form-control" id="address_state" name="address_state" placeholder="State" >                 
    </div>    

    <div class="col-md-4 mb-1">      
      <input maxlength="5" type="text" class="form-control" id="address_zip" onchange="getAddress(this)" name="address_zip" placeholder="Zip Code*" required>  
      <div class="invalid-feedback"> <!-- https://api.zippopotam.us/us/90210 -->
        Please insert valid input.
      </div> 
    </div>

    <!-- address -->

  </div> 
  <button class="btn btn-primary" id="rgSubmit" type="submit">Register</button>
</form>

  <span id="csmg"></span>
  
    </div>


  </body>

  <script>

    function getAddress(values){      

    $.ajax({
      url: `https://api.zippopotam.us/us/${values.value}`,
      method: 'GET',
      dataType: 'json',
      success: function(response) {
        const rsp = response.places
        console.log(rsp[0].state );
        console.log(rsp['state']);
        document.getElementById("address_city").value = rsp[0]['place name'];
        document.getElementById("address_state").value = rsp[0]['state'];      
      },
      error: function(xhr, status, error) {
        
      }
    });

    }

    function getChange(values){                    
      var getId = $(values).next().next().attr('id');        
      if(values.value === "Other" ){               
        $("#"+getId).removeClass("d-none");

      }else{
        $("#"+getId).addClass("d-none");
        $("#"+getId).val("");
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
                var zipslt = 0;

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
                  if( !strRgx.test(pairs[1])  ){
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

                // zip required
                const zipRgx = /^[0-9]{5}/;
                if(pairs[0] === "address_zip"  ){
                  if( pairs[1] === ""  || !zipRgx.test(pairs[1]) ){
                    $("#address_zip").next().show();
                      zipslt = 1                  
                  }else{
                    $("#address_zip").next().hide(); 
                    zipslt = 2                                         
                  }
                }



            }          
            if( frslt == 2 && mrslt == "2" && lrslt == "2" && ename === 2 && cname === 2 && address === 2 && address1 == 2 && skills == 2 && zipslt === 2 ){
              $.ajax({
                url : "index1.php",
                method: "POST",
                data: formData,                
                processData: false,
                contentType: false,
                beforeSend: function(){                  
                  
                  $('#rgSubmit').attr('disabled', 'disabled');
                },
                complete: function(){
                  $('#rgSubmit').removeAttr('disabled'); 
                },
                error: function(resp){
                  $("#csmg").text("failed");
                  $("#csmg").addClass("text-warning");
                  $('#rgSubmit').removeAttr('disabled'); 
                },
                success: function(resp){
                  alert(2)
                  const rs = JSON.parse(resp);
                  console.log(rs.status);
                  if(rs.status === "success" ){
                    alert(0)
                    document.getElementById("csmg").innerText= rs.msg;
                    $("#csmg").addClass(rs.cls);
                  }

                  if(rs.status === "failed" ){
                    alert(1)
                    document.getElementById("csmg").innerText= rs.msg;
                    $("#csmg").addClass(rs.cls);
                  }


                }
              });
            }
          });
        });
    </script>


</html>