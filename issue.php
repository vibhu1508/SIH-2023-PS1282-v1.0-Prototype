<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

        html{    background:url(http://thekitemap.com/images/feedback-img.jpg) no-repeat;
        background-size: cover;
        height:100%;
        }

        #feedback-page{
            text-align:center;
        }

        #form-main{
            width:100%;
            float:left;
            padding-top:0px;
        }

        #form-div {
            background-color:rgba(72,72,72,0.4);
            padding-left:35px;
            padding-right:35px;
            padding-top:35px;
            padding-bottom:50px;
            width: 450px;
            float: left;
            left: 50%;
            position: absolute;
        margin-top:30px;
            margin-left: -260px;
        -moz-border-radius: 7px;
        -webkit-border-radius: 7px;
        }

        .feedback-input {
            color:#3c3c3c;
            font-family: Helvetica, Arial, sans-serif;
        font-weight:500;
            font-size: 18px;
            border-radius: 0;
            line-height: 22px;
            background-color: #fbfbfb;
            padding: 13px 13px 13px 54px;
            margin-bottom: 10px;
            width:100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
        border: 3px solid rgba(0,0,0,0);
        }

        .feedback-input:focus{
            background: #fff;
            box-shadow: 0;
            border: 3px solid #3498db;
            color: #3498db;
            outline: none;
        padding: 13px 13px 13px 54px;
        }

        .focused{
            color:#30aed6;
            border:#30aed6 solid 3px;
        }

        /* Icons ---------------------------------- */
        #occasion{
            background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #occasion:focus{
            background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
            background-size: 30px 30px;
            background-position: 8px 5px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #num{
            background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #num:focus{
            background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #comment{
            background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        textarea {
            width: 100%;
            height: 150px;
            line-height: 150%;
            resize:vertical;
        }

        input:hover, textarea:hover,
        input:focus, textarea:focus {
            background-color:white;
        }

        #button-blue{
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            float:left;
            width: 100%;
            border: #fbfbfb solid 4px;
            cursor:pointer;
            background-color: #3498db;
            color:white;
            font-size:24px;
            padding-top:22px;
            padding-bottom:22px;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
        margin-top:-4px;
        font-weight:700;
        }

        #button-blue:hover{
            background-color: rgba(0,0,0,0);
            color: #0493bd;
        }
            
        .submit:hover {
            color: #3498db;
        }

        @media only screen and (max-width: 580px) {
            #form-div{
                left: 3%;
                margin-right: 3%;
                width: 88%;
                margin-left: 0;
                padding-left: 3%;
                padding-right: 3%;
            }
        }
    </style>
</head>
<body>
<form method="post" action="">
    <div id="form-main">
    <div id="form-div">
        <form class="form" id="form1">
        <p class="occasion">
            <input name="occasion" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Type of case:" id="occasion" />
        </p>
        <p class="num">
        <input name="num" type="int" class="validate[required,custom[email],length[0,16] feedback-input" id="num" placeholder="Enter case no." />
        </p>
        
        <p class="narate">
            <textarea name="narate" class="validate[required,length[6,300]] feedback-input" id="narate" placeholder="Describe"></textarea>
        </p>
        
        
        <div class="submit">
            <button class="submit" type="submit">Submit</button>
        </div>
        </form>
    </div>
</form>
</body>
</html>
<?php
    if (isset($_POST['submit'])){

        $occasion = $_POST['occasion'];
        $num = $_POST['num'];
        $narate = $_POST['narate'];

        $sub = myspli_query($conn,"insert into pending_list (occasion,num,narate,status)value('$occasion','$num','$narate','pending')");
        


    if ($sub>0){
    echo "Your request is under process";
    }
    else
    {
    echo "Something went wrong";
    }
    }
?> 