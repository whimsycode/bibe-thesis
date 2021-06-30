<!DOCTYPE html>

<html lang="en">

    <head>
        
        <title>
            
        
        </title>

        <meta charset="utf-8">


        <!--Scripts-->
        <script type = "text/javascript"
            src="{{ url_for('static', filename = 'script.js') }}">
        </script>
        
        <!--Boostrap-->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


        <!--Icon-->

        <!--<link rel = "icon" href = "filename.png">-->

        <!--Styles-->

       <!-- <link href="main_styles.css" rel="stylesheet" type="text/css"> -->
        <link rel= "stylesheet" type= "text/css" href= "{{ url_for('static',filename='styles/main_styles.css') }}">


    </head>

    <body onload = "renderClock();">

        <!--Heading-->
        <div class = "container-fluid">

            <div class = "row">

                <div class = "heading">

                    <img src = "static/Assets/LOGO.png" height = "40" width = "200" />
    
                </div>

            </div>

        </div>
        <!--End Heading-->

        <br/>

        <!--Contents-->

        <div class = "container-fluid">
             
            <!--Video Streams-->

            <div class = "row">

                <div class="col-sm-6 col-md-6 col-lg-6">
                    

                    <!-- Camera 1-->
                   <img src="{{ url_for('video_feed', id='0') }}" width = 750 height = 400>

                   <br/>

                   <!--Camera 2-->
                   <img src="{{ url_for('video_feed', id='1') }}" width = 750 height = 400>


                </div>

                <!--Data View-->

                <div class="col-sm-6 col-md-6 col-lg-6" style = "color:white";>
                    
                    
                    <br/>

                    <!--Information Table-->
                    <table>

                        <!--Heading-->
                        <tr>
                            <td>
                                <h1>C/rowd Monitoring System</h1>

                            </td>
                        </tr>
                        <!--End Heading-->

                        <!--Time and Date-->
                        

                        <tr>
                            <td>
                                
                                <div id = "dateDisplay"></div>
                               
                            </td>
                        </tr>
                        <!--End Time and Date-->

                    </table>
                    <!--End Information Table-->
                    

                    <br/>

                    <!--Data-->
                    
                    <table>

                        <form>

                            <!--Area-->
                            <tr>
                                <td>
                                    <label for="areaNum">AREA</label>
                                </td>

                                <td colspan = 2>
                                    <button class = "button">SEND ALERT</button>

                                </td>

                                <td colspan = 2>
                                    <label src="{{ url_for('index') }}">
                                    <label src="1">

                                </td>

                                <td colspan = 2>
                                    <label src="{{finalcount}}">
                                    <label src="{{pcount}}">
                                    <label src="{{couting}}">

                                </td>

                            </tr>
                            <!--End Area-->

                            <!--Density Number Display-->
                            <!--<meta http-equiv="refresh" content="10">-->
                            <tr>
                                <td>
                                    <label for="numDensity">DENSITY</label>
                                </td>
                                <!--This is new.....-->
                                <td>
									{{ numPeople1 }}
                                </td>
                                <td>
        
                                </td>
                                
                            </tr>
                            <!--End Density Number Display-->

                            <!--Density Level-->
                            <tr>
                                <td>
                                    <label for="cDensity">LEVEL</label>
                                </td>

                                <td>
                                    <input type = "text" id = "cDensity" name = "cDensity" disabled >

                                </td>
                                
                            </tr>
                            <!--End Density Level-->

                            <!--Status-->
                            <tr>
                                <td>
                                    <label for="cStatus">STATUS</label>
                                </td>

                                <td>
                                    <input type = "text" id = "cStatus" name = "cStatus" disabled >

                                </td>
                                
                            </tr>
                            <!--End Status-->
    
                        </form>
                        <!--End Form-->

                        

                    </table>


                    <!--Data View-->

                <div class="col-sm-6 col-md-6 col-lg-6" style = "color:white";>
                    
                    
                    <br/>

                    <!--Information Table-->
                    <table>

                        <!--Heading-->
                        <tr>
                            <td>
                                <h1>C/rowd Monitoring System</h1>

                            </td>
                        </tr>
                        <!--End Heading-->

                        <!--Time and Date-->
                        

                        <tr>
                            <td>
                                
                                <div id = "dateDisplay"></div>
                               
                            </td>
                        </tr>
                        <!--End Time and Date-->

                    </table>
                    <!--End Information Table-->
                    

                    <br/>

                    <!--Data-->
                    
                    <table>

                        <form>

                            <!--Area-->
                            <tr>
                                <td>
                                    <label for="areaNum">AREA</label>
                                </td>

                                <td colspan = 2>
                                    <button class = "button">SEND ALERT</button>

                                </td>

                                <td colspan = 2>
                                    <label src="{{ url_for('index') }}">
                                    <label src="1">

                                </td>

                                <td colspan = 2>
                                    <label src="{{finalcount}}">
                                    <label src="{{pcount}}">
                                    <label src="{{couting}}">

                                </td>

                            </tr>
                            <!--End Area-->

                            <!--Density Number Display-->
                            <!--<meta http-equiv="refresh" content="10">-->
                            <tr>
                                <td>
                                    <label for="numDensity">DENSITY</label>
                                </td>
                                <!--This is new.....-->
                                <td>
									{{ numPeople2 }}
                                </td>
                                <td>
        
                                </td>
                                
                            </tr>
                            <!--End Density Number Display-->

                            <!--Density Level-->
                            <tr>
                                <td>
                                    <label for="cDensity">LEVEL</label>
                                </td>

                                <td>
                                    <input type = "text" id = "cDensity" name = "cDensity" disabled >

                                </td>
                                
                            </tr>
                            <!--End Density Level-->

                            <!--Status-->
                            <tr>
                                <td>
                                    <label for="cStatus">STATUS</label>
                                </td>

                                <td>
                                    <input type = "text" id = "cStatus" name = "cStatus" disabled >

                                </td>
                                
                            </tr>
                            <!--End Status-->
    
                        </form>
                        <!--End Form-->

                        

                    </table>

                    <form method="POST" >
                            <input name = "update" type="submit" value="update"> Rawr </button>
                        </form>

                    <!--End Table-->
                    
                </div>
                <!--End Data Column-->

            </div>
            <!--End Row-->

        </div>
        <!--End Contents-->



    </body>
    
</html>