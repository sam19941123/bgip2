<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <title>BGIP</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 900;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-weight: 100;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <script>
            $(document).ready(function(){
                $("body").fadeIn("slow");
            });
        </script>
    </head>
    <body style="display:none">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Boardgame Info Platform
                </div>
                <form method="GET" action="{{url('games')}}" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <h5 class="text-left">英文名</h5>
                            <input name="bg_en_name" class="form-control" placeholder="英文名"></input>
                        </div>
                        <div class="col-md-6 col-md-offset-3">
                            <h5 class="text-left">中文名</h5>
                            <input name="bg_ch_name" class="form-control" placeholder="中文名"></input>
                        </div>
                        <div class="col-md-6 col-md-offset-3">
                            <h5 class="text-left">人數</h5>
                            <select name="player_num" class="form-control">    
                                <option></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10+</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-md-offset-3">
                            <h5 class="text-left">出版年份</h5>
                            <div class="col-md-4 col-md-offset-0">
                                <select name="publish_year1" class="form-control">
                                <option></option> 
                                <option value="1960-">1960-</option><option value="1961">1961</option>
                                <option value="1962">1962</option><option value="1963">1963</option>
                                <option value="1964">1964</option><option value="1965">1965</option>
                                <option value="1966">1966</option><option value="1967">1967</option>
                                <option value="1968">1968</option><option value="1969">1969</option>
                                <option value="1970">1970</option><option value="1971">1971</option>
                                <option value="1972">1972</option><option value="1973">1973</option>
                                <option value="1974">1974</option><option value="1975">1975</option>
                                <option value="1976">1976</option><option value="1977">1977</option>
                                <option value="1978">1978</option><option value="1979">1979</option>
                                <option value="1980">1980</option><option value="1981">1981</option>
                                <option value="1982">1982</option><option value="1983">1983</option>
                                <option value="1984">1984</option><option value="1985">1985</option>
                                <option value="1986">1986</option><option value="1987">1987</option>
                                <option value="1988">1988</option><option value="1989">1989</option>
                                <option value="1990">1990</option><option value="1991">1991</option>
                                <option value="1992">1992</option><option value="1993">1993</option>
                                <option value="1994">1994</option><option value="1995">1995</option>
                                <option value="1996">1996</option><option value="1997">1997</option>
                                <option value="1998">1998</option><option value="1999">1999</option>
                                <option value="2000">2000</option><option value="2001">2001</option>
                                <option value="2002">2002</option><option value="2003">2003</option>
                                <option value="2004">2004</option><option value="2005">2005</option>
                                <option value="2006">2006</option><option value="2007">2007</option>
                                <option value="2008">2008</option><option value="2009">2009</option>
                                <option value="2010">2010</option><option value="2011">2011</option>
                                <option value="2012">2012</option><option value="2013">2013</option>
                                <option value="2014">2014</option><option value="2015">2015</option>
                                <option value="2016">2016</option><option value="2017">2017</option>
                                </select>
                            </div>
                            <div class="col-md-1 col-md-offset-0">
                                <h5 class="text-center">to</h5>
                            </div>
                            <div class="col-md-4 col-md-offset-0">
                                <select name="publish_year2" class="form-control">
                                <option></option> 
                                <option value="2017">2017</option><option value="2016">2016</option>
                                <option value="2015">2015</option><option value="2014">2014</option>
                                <option value="2013">2013</option><option value="2012">2012</option>
                                <option value="2011">2011</option><option value="2010">2010</option>
                                <option value="2009">2009</option><option value="2008">2008</option>
                                <option value="2007">2007</option><option value="2006">2006</option>
                                <option value="2005">2005</option><option value="2004">2004</option>
                                <option value="2003">2003</option><option value="2002">2002</option>
                                <option value="2001">2001</option><option value="2000">2000</option>
                                <option value="1999">1999</option><option value="1998">1998</option>
                                <option value="1997">1997</option><option value="1996">1996</option>
                                <option value="1995">1995</option><option value="1994">1994</option>
                                <option value="1993">1993</option><option value="1992">1992</option>
                               <option value="1991">1991</option> <option value="1990">1990</option>
                               <option value="1989">1989</option> <option value="1988">1988</option>
                                <option value="1987">1987</option><option value="1986">1986</option>
                               <option value="1985">1985</option> <option value="1984">1984</option>
                               <option value="1983">1983</option> <option value="1982">1982</option>
                                <option value="1981">1981</option><option value="1980">1980</option>
                               <option value="1979">1979</option> <option value="1978">1978</option>
                                <option value="1977">1977</option><option value="1976">1976</option>
                              <option value="1975">1975</option>  <option value="1974">1974</option>
                                <option value="1973">1973</option><option value="1972">1972</option>
                                <option value="1971">1971</option> <option value="1970">1970</option>
                               <option value="1969">1969</option> <option value="1968">1968</option>
                                <option value="1967">1967</option> <option value="1966">1966</option>
                                <option value="1965">1965</option><option value="1964">1964</option>
                                <option value="1963">1963</option><option value="1962">1962</option>
                               <option value="1961">1961</option> <option value="1960-">1960-</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-3">
                            <h5 class="text-left">平均遊戲時間</h5>
                            <div class="col-md-4 col-md-offset-0">
                                <select name="game_time1" class="form-control">
                                <option></option> 
                                <option value="15">15 min</option>
                                <option value="30">30 min</option>
                                <option value="45">45 min</option>
                                <option value="60">1 hr</option>
                                <option value="90">1.5 hr</option>
                                <option value="120">2 hr</option>
                                <option value="150">2.5 hr</option>
                                <option value="180">3 hr</option>
                                <option value="210">3.5 hr</option>
                                <option value="240">4 hr</option>
                                <option value="270">4.5 hr</option>
                                <option value="300">5 hr</option>    
                                <option value="330">5.5 hr</option>
                                <option value="360">6+ hr</option>                                 
                                </select>
                            </div>
                            <div class="col-md-1 col-md-offset-0">
                                <h5 class="text-center">to</h5>
                            </div>
                            <div class="col-md-4 col-md-offset-0">
                                <select name="game_time2" class="form-control">    
                                <option></option>
                                <option value="15">15 min</option>
                                <option value="30">30 min</option>
                                <option value="45">45 min</option>
                                <option value="60">1 hr</option>
                                <option value="90">1.5 hr</option>
                                <option value="120">2 hr</option>
                                <option value="150">2.5 hr</option>
                                <option value="180">3 hr</option>
                                <option value="210">3.5 hr</option>
                                <option value="240">4 hr</option>
                                <option value="270">4.5 hr</option>
                                <option value="300">5 hr</option>    
                                <option value="330">5.5 hr</option>
                                <option value="360">6+ hr</option>                                 
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-3">
                            <h5 class="text-left">遊戲類別</h5>
                            <select name="game_cat" class="form-control"> 
                                <option></option>  
                                <option value="Abstract Game Rank">Abstract Game</option>
                                <option value="Children's Game Rank">Children's Game</option>
                                <option value="Customizable Rank">Customizable</option>
                                <option value="Family Game Rank">Family Game</option>
                                <option value="Party Game Rank">Party Game</option>
                                <option value="Strategy Game Rank">Strategy Game</option>
                                <option value="Thematic Rank">Thematic</option>
                                <option value="War Game Rank">War Game</option>                                
                            </select>
                        </div>
                        
                        <div class="col-md-6 col-md-offset-1">
                            <input name="cht_version" type="checkbox" class = "text-left"> 需含中文資源<br>
                        </div>

                        
                        <div class="col-md-2 col-md-offset-5">
                            <input type="submit" class="btn btn-danger btn-block"></input>
                        
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </body>
</html>
