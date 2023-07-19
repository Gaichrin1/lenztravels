<?php include 'header.php'; ?>
<div class="container" style="min-height:70vh;color:white">
   
     


            <h1 style="text-align:justify;font-family: Babylonica;">Agent Registration</h1>
            <br>
            <form  method="post" action="ares.php" style="text-align: left;padding:10px">
                <div class="row form-group">
                    
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="name" placeholder="Full Name" oninput="convertToUpperCase()" required=""></div>
                </div>
                <div class="row form-group">
                   
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="Aname" placeholder="Agency Name" oninput="convertToUpperCase()" required=""></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-6 input-column"><input class="form-control" type="email" name="email" placeholder="Email" required=""></div>
                </div>
                <div class="row form-group">
                   
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" name="mobile" placeholder="Contact Number" required=""></div>
                </div>


                


                <div class="row form-group">
                  
                    <div class="col-sm-6 input-column"> <textarea class="form-control" name="address" placeholder="Full Address of Agency" required="" ></textarea></div>
                </div> 
                <div class="row form-group">
                   
                   <div class="col-sm-6 input-column"><input class="form-control" type="password" name="pass" placeholder="Password" required=""></div>
               </div>

                <div class="col-sm-4 label-column">
           
                <input name="submit" type="submit"  class="btn btn-primary ">

                </div>

               

            </form>

       
</div>
<?php include 'footer.php'; ?>
