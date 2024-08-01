<?php include('header.html')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<style>
main{
    height:600px;
    width:100%;
    }
    .map{
        padding-top:10px;
    }
    .contact{
        height:150px;
        width:50%;
        float:left;
        background-color:grey;   
    }
 .contact a{
    color:black;
 }
 .mail a{
    color:black;
 }
 .mail{
    height:150px;
    width:50%;
    float:right;
    background-color:grey;
    
 }
 .contact h1{
    padding-left:90px;
 }
 .mail h1{
    padding-left:90px;
 }

</style>

<body>
    <main>
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4520.914560897948!2d80.19574372940104!3d12.621810204714022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a53acad8446d2a9%3A0x8c806af770eadf70!2sFlip%20Flops%20Beach%20Shack%20%26%20Cafe!5e0!3m2!1sen!2sin!4v1721109644111!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
        </div>
        <div class=contact>
            <h1>Contact</h1>
            <a href="tel:9444145296">9444145296</a>
        </div>
        <div class="mail">        
            <h1>Email ID </h1>
            <a href="mailto:vithulsabari@gmail.com">vithulsabati@gmail.com</a>
        </div>
    </main>
    
</body>
</html>

<?php include('footer.html')
?>