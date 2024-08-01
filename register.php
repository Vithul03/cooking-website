<?php include('header.html')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {
        display:center;
        margin:100px;
        row-gap:5px;
        height:400px  
    }
    main{
        height:500px
    }
</style>
<body>
    <main>
        <center>
            <div class="tables">
        <form>
            <table>
            <tr>
                <td>Name</td>
                <td><input type="text" placeholder="Enter Your Name "></td>
            </tr><br><br><br>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>Number</td>
                <td><input type="number" placeholder="Enter Your Phone Number"></td>
            </tr>

            <tr>
                <td>EMAIL</td>
                <td><input type="email" placeholder="Enter Your Email"></td>
            <tr>
                <td>Choose A Time:</td>
                <td><select id="time" name="time">
                    <option value="8-9 AM">8-9 AM</option>
                    <option value="8-9 AM">8-9 AM</option>
                    <option value="8-9 AM">8-9 AM</option>
                    <option value="8-9 AM">8-9 AM</option>
                    <option value="8-9 AM">8-9 AM</option>
                    <option value="8-9 AM">8-9 AM</option>
                    <option value="8-9 AM">8-9 AM</option>
                    <option value="8-9 AM">8-9 AM</option>
                </td>
            </tr>
                <td><button>Submit</button></td>
                <td>Resert</td>
            </tr>
            </div>
        </center>



            </table>
            
        </form>
    </main>
    
</body>
</html>

<?php include('footer.html')
?>
