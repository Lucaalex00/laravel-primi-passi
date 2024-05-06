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
                            text-shadow:2px 2px black;   
                            }
                        }
                    }
                }
            }
            h1{
                margin:auto;
                width:50%;
                text-align:center;
                margin-top:5rem
            }
            .contact_list{
                display:flex;
                justify-content:space-between;
                margin:auto;
                width:30%;
                list-style-type:none;
                .contact{
                    font-size:1.8rem;
                    &:hover{
                        color:red;
                    }
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
                    <a class="active" href="contacts">Contacts</a></li>
                <li class="nav_item">
                    <a href="aboutme">About me</a></li>
            </ul>
        </div>
            <h1>{{$message}}</h1>
            <ul class="contact_list"> 
            @foreach($contacts_name as $contact)
                       <li class="contact"> {{ $contact }} </li>       
            @endforeach            
            </ul>
    </body>
</html>