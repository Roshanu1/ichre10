<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $addr=$_POST['address'];
    $email=$_POST['email'];
    require 'mail.php';
    $body = "<p> 
    Name: $name <br>
    Phone: $phone <br>
    Email: $email <br>
    Address: $addr <br> 
    </p>";
    $mail = sendMail($body);
    if($mail){
        $success='Your Queries Sent Sucessfully';
    }else{
        $err='Some internal error occured';
    }
}

?>

<?php include 'header.php'; ?>

<style>
.customInput {
  display: inline-block;
  padding: 0.4em 0.8em 0.4em 0.8em;
  box-sizing: border-box;
  margin: 0;
  margin-top: 4px;
  width: 100%;
  border: 1px solid #ddd;
  border-radius: 6px;
  transition: all 0.3s;
}

.customInput:focus {
    border: 1px solid #56a2d9;
}
p{
    margin: 0;
    margin-top: 10px;
}
</style>
<div class="wrap">
    <div class="pt-5"></div>
    <div class="row">
        <div class="col-md-6">
             <h1 style="font-weight:900; font-size: 2.5rem"> Any Queries? </h1>
            <div class="py-2">
                <?php if(isset($err)) echo '<p class="text-danger">' . $err . "</p>"; ?>
                <?php if(isset($success)) echo '<p class="text-success">' . $success . "</p>"; ?>
            </div>

            <div class="contents">
                <form action="" method="post">
                <div class="pt-3"></div>
                <p>Name</p>
                <input type="text" placeholder="Name" name="name" class="customInput">
                <p>Phone</p>
                <input type="text" placeholder="Phone" name="phone" class="customInput">
                <p>Email</p>
                <input type="text" placeholder="Email Address" name="email" class="customInput">
                <p>Address</p>
                <input type="text" placeholder="Address" name="address" class="customInput">
                <p></p>
                <button style="padding: 5px 15px; background: #56a2d9; color:#fff;border:0; border-radius: 4px;">Submit</button>
                <div class="pb-5"></div>
                </form>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <h1 style="font-weight:900; font-size: 2.5rem"> Venue </h1>
            <div class="pt-3"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.1471067664406!2d85.32267285088741!3d27.712743931776643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1913c8c65f81%3A0x366f3d40369b6a16!2sKathmandu+Marriott+Hotel!5e0!3m2!1sen!2snp!4v1564983737397!5m2!1sen!2snp" width="100%" height="80%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    </div>
    <div class="py-3"></div>
</div>

<?php include 'footer.php'; ?>