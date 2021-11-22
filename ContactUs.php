<hmtl>

    <head>
        <title>Animal Life Matters</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body bgcolor="grey">


        <div style='width:100%;height:180px;margin-top:3px;margin-bottom:3px;opacity:0.8;border-radius:35px;background-color:black;'>
            <table width="100%" align="left" border="0" style='margin-top:25px;'>
                <tr align="left">
                    <td width="30%"><img src="tenor.gif" width="200px "></td>
                    <td>
                        <table width="30%" align="right" border="0" style='margin-top:25px;margin-bottom:3px;'>
                            <tr align="center">
                                <td colspan="0" class="titletheme"><img src="new1.png" align="right"></td>
                            </tr>

                        </table>
                    </td>


                </tr>
            </table>
        </div>

        <table width="50%" align="right" border="0" style='margin-bottom:3px;margin-top:3px; border-radius:15px;background-color:lightgrey;'>
            <tr align="center">

                <td width="110px" class="tdtheme"><a href="index.php">Home</a></td>
                <td width="120px" class="tdtheme"><a href="AboutUs.php">About Us</a></td>
                <td width="130px" class="tdtheme"><a href="ContactUs.php">Contact Us</a></td>

            </tr>
        </table>

        <!-- <div style="width:100%;height:800%;opacity:0.9;background-color:white;margin-left:50px;"> -->
        <?php
        $msg = "";
        if (isset($_GET['success'])) {
            $msg = "Response Recorded";
        }
        ?>

        <form action="request.php" method="post">
            <table width="100%" border="0">
                <tr align="center" bgcolor="magenta">
                    <td colspan="0" style="font-size:20px;font-family:'calibri';font-weight: bolder;color:white">USER
                        Request</td>
                </tr>
            </table>
            <table align="center" width="100%" border="0" cellspacing="15px">
                <tr>
                    <td style="font-size:20px;font-family:'calibri';font-weight: bolder;text-align:right;">User Name
                    </td>
                    <td><input type="text" name="UName" placeholder="User Name" style="border:0;width:200px;border-radius:5px;height:35px;background-color:lightskyblue">
                    </td>
                </tr>

                <tr>
                    <td style="font-size:20px;font-family:'calibri';font-weight: bolder;text-align:right;">Email
                    </td>
                    <td><input type="email" name="Email" placeholder="Email" style="border:0;width:200px;border-radius:5px;height:35px;background-color:lightskyblue">
                    </td>
                </tr>


                <tr>

                    <td style="font-size:20px;font-family:'calibri';font-weight: bolder;text-align:right;">Write a Message</td>
                    <td><textarea name="msg" placeholder="Write a Message" style="border:0;width:200px;border-radius:5px;height:80px;background-color:lightskyblue"></textarea>
                    </td>
                </tr>
                <tr>
                    <td style="height:40%;border:0;width:45%;font-size:20px;font-family:'calibri';font-weight: bolder;text-align:right;">
                        City</td>
                    <td><select name="city" style="border:0;width:200px;border-radius:5px;height:35px;background-color:lightskyblue">
                            <option>select city</option>
                            <option>Indore</option>
                            <option>Bhopal</option>
                            <option>Pune</option>
                            <option>Delhi</option>
                            <option>Mumbai</option>
                            <option>Kolkata</option>
                            <option>Rajasthan</option>
                        </select></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><button class="tdtheme" name="btn-send">Send</button>
                        <input type="reset" value="clear" style="border:0;width:80px;border-radius:15px;height:40px;background-color:lawngreen;font-size:14px;font-family:arieal">
                    </td>
                </tr>
            </table>

        </form>

    </body>

    </html>