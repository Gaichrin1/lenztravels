<?php include 'header.php';?>

<div style="background: rgb(14,8,54);min-height:80vh;">
<h3 style="Color:yellow;text-align:center;padding-top:20px;"><u>TAXI'S</u></h3>
<form method="post" action="t.php">
    <section style="margin-top: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-1 col-md-6 col-xl-4" style="text-align: right;"><label class="col-form-label" style="color: var(--white);">From</label></div>
                <div class="col-md-6" style="text-align: left;">
                <input type="text" name="from">
            </div>
                <div class="col-1 col-md-6 col-xl-4" style="margin-top: 10px;text-align: right;"><label class="col-form-label" style="color: var(--white);">To</label></div>
                <div class="col-md-6 col-xl-2" style="margin-top: 10px;text-align: left;">
                <input type="text" style="text-align: left;" name="to">
            </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-6 col-xl-4" style="text-align: right;"><label class="col-form-label" style="color: var(--white);">Journey Date</label></div>
                <div class="col-md-6" style="text-align: left;">
                <input type="date" name="date"></div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
            <input class="btn btn-primary" type="submit" name="submit" style="background: var(--success);margin-top: 10px;" value="Search">
        </div>
        </div>
</form>
    </div>
</div>


<?php include 'footer.php';?>