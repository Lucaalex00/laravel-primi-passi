<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../css/app.css">
        <!-- PERCHE' IL PATH NON DOVREBBE ESSERE CORRETTO ??? -->
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            #site_header{
                background-color: #cecece;
                >#navbar{
                    display:flex;
                    justify-content:center;
                    gap:2rem;
                    list-style-type:none;
                    font-size:2rem;
                    .nav_item{
                        cursor:pointer;
                        >a{
                            color:black;
                            text-decoration:none;
                            transition:1s;
                            &.active{
                                color:blue;
                                background-color:lightblue;
                                font-size:1.8rem;
                                &:hover{
                                    color:blue;
                                }
                            }
                            &:hover{
                                color:red;
                                text-shadow:1px 1px black;
                                
                            }
                        }
                    }
                }
            }
            h1,p{
                width:80%;
                margin:auto;
                text-align:center;
                font-size:3rem;
                margin-top:5rem;
                padding:2rem;
                border:1px solid black;
                transition:2s;
                &:hover{
                    color:red;
                    background-color:black;
                    border : 4px solid red;
                }
            }
            
        </style>
    </head>
    <body>
        <div id="site_header">
            <ul id="navbar">
                <li class="nav_item">
                    <a href="home">Home</a></li>
                <li class="nav_item">
                    <a href="contacts">Contacts</a></li>
                <li class="nav_item ">
                    <a class="active" href="{{ $url }}">About me</a>

            </ul>
        </div>
                <h1>{{$title}}</h1>
                <p>{{$message}}</p>
    </body>
</html>