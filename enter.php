<?php
include 'inc/formClass.php';

/*** parse the ini file ***/
$config = parse_ini_file("config.ini", 1);

$usr = new formClass; //create new instance of the class Users

$tandc = $usr->getTandC();
$endDate = $usr->getEndDate();
$shareText = $usr->getShareText();
$creativeQuestion = $usr->getCreativeQuestion();

if (!isset($_POST['submit'])) {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Enter.</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-select.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
    <div id='fb-root'></div>
    <script src='//connect.facebook.com/en_US/sdk.js'></script>
    <script>
        FB.init({
            appId: '<?php echo $config['facebook']['facebook_id'] ?>',
            version: 'v2.0'
        });

        FB.Canvas.scrollTo(0, 0); // scrolls to the top of the page. this property can also be used for navigation for one page competition

        FB.Canvas.setAutoGrow(); // this property is used to adapt to document height automatically
    </script>
    <div class="container">

    <div class="row">
        <img src="images/formHeader.jpg" alt=""  width="1170" class="img-responsive"/>
    </div>

    <div class="row midForm">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form id="theform" method="post" enctype="multipart/form-data">

                <div class="form-group first">
                    <input type="text" class="form-control first_name" name="first_name" placeholder="First Name*">
                    <input type="text" class="form-control last_name" name="last_name" placeholder="Last Name*">
                </div>

                <div class="form-group second">
                    <input type="text" class="form-control email" name="email" placeholder="Email*">
                    <input type="text" class="form-control address" name="address" placeholder="Street Address*">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control suburb" name="suburb" placeholder="Suburb*">

                    <select class="selectpicker state" name="state">
                        <option value="">State*</option>
                        <option value="WA">WA</option>
                        <option value="NT">NT</option>
                        <option value="SA">SA</option>
                        <option value="QLD">QLD</option>
                        <option value="NSW">NSW</option>
                        <option value="VIC">VIC</option>
                        <option value="TAS">TAS</option>
                        <option value="ACT">ACT</option>
                    </select>

                    <input type="text" class="form-control postcode" name="postcode" placeholder="Postcode*"
                           maxlength="4">
                </div>

                <label for="day" class="dob">Date of birth*</label>

                <div class="form-group">
                    <select class="selectpicker day" name="day" id="day">
                        <option value="">Day*</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>


                    <select class="selectpicker month" name="month" id="month">
                        <option value="">Month*</option>
                        <option value="01">Jan</option>
                        <option value="02">Feb</option>
                        <option value="03">Mar</option>
                        <option value="04">Apr</option>
                        <option value="05">May</option>
                        <option value="06">Jun</option>
                        <option value="07">Jul</option>
                        <option value="08">Aug</option>
                        <option value="09">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>

                    <select class="selectpicker year" name="year" id="year">
                        <option value="">Year*</option>
                        <option value="1931">1931</option>
                        <option value="1932">1932</option>
                        <option value="1933">1933</option>
                        <option value="1934">1934</option>
                        <option value="1935">1935</option>
                        <option value="1936">1936</option>
                        <option value="1937">1937</option>
                        <option value="1938">1938</option>
                        <option value="1939">1939</option>
                        <option value="1940">1940</option>
                        <option value="1941">1941</option>
                        <option value="1942">1942</option>
                        <option value="1943">1943</option>
                        <option value="1944">1944</option>
                        <option value="1945">1945</option>
                        <option value="1946">1946</option>
                        <option value="1947">1947</option>
                        <option value="1948">1948</option>
                        <option value="1949">1949</option>
                        <option value="1950">1950</option>
                        <option value="1951">1951</option>
                        <option value="1952">1952</option>
                        <option value="1953">1953</option>
                        <option value="1954">1954</option>
                        <option value="1955">1955</option>
                        <option value="1956">1956</option>
                        <option value="1957">1957</option>
                        <option value="1958">1958</option>
                        <option value="1959">1959</option>
                        <option value="1960">1960</option>
                        <option value="1961">1961</option>
                        <option value="1962">1962</option>
                        <option value="1963">1963</option>
                        <option value="1964">1964</option>
                        <option value="1965">1965</option>
                        <option value="1966">1966</option>
                        <option value="1967">1967</option>
                        <option value="1968">1968</option>
                        <option value="1969">1969</option>
                        <option value="1970">1970</option>
                        <option value="1971">1971</option>
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                    </select>
                </div>

                <div class="form-group" style="padding-top: 9px;width: 99.7%;">
                    <textarea class="form-control question" name="question"
                              placeholder="<?php echo $creativeQuestion[0];?>" rows="5"></textarea>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="tandc" class="terms"> I agree to the <a data-toggle="modal"
                                                                                             data-target="#myModal">Terms
                            & Conditions</a>.*<br/>
                        <span id="tandcSmall"> Open to Aus res. 13+. Entries close at 11.59pm AEDT <?php echo $endDate[0];?>.</span>
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="signup" checked> Sign up to our STYLE HQ
                    </label>
                </div>

                <input type="hidden" name="device" id="device" value="">

                <button type="submit" class="btn btn-default submit" name="submit" value="submit">SUBMIT</button>

            </form>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Terms and Conditions</h4>
                </div>
                <div class="modal-body">
                    <?php
                    echo $tandc[0];
                    ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    </div>


    <script src="js/jquery.placeholder.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/jquery-validate.bootstrap-tooltip.js"></script>
    <script src="js/Analytics.js"></script>
    <script src="js/jquery.rwdImageMaps.min.js"></script>

    <script>
        $(document).ready(function (e) {
            $('img[usemap]').rwdImageMaps();
        });

        $('.terms').change(function () {
            if ($('select.state').val() == '') {
                alert('Please select your state');
                $(".terms").prop('checked', false);
            }
            else {
                if ($('select#day').val() == '' || $('select#month').val() == '' || $('select#year').val() == '') {
                    alert('Please select your date of birth');
                    $(".terms").prop('checked', false);
                }
            }
        });

        $('input, textarea').placeholder();
        $('.selectpicker').selectpicker();

        $('#theform').validate({
            rules: {
                first_name: { required: true },
                last_name: { required: true },
                email: { email: true, required: true },
                address: {required: true},
                suburb: {required: true},
                postcode: {digits: true, required: true, minlength: 4},
                question: {required: true},
                tandc: {required: true}
            },
            tooltip_options: {
                first_name: {placement: 'bottom', trigger: 'focus'},
                last_name: {placement: 'bottom', trigger: 'focus'},
                email: {placement: 'bottom', trigger: 'focus'},
                address: {placement: 'bottom', trigger: 'focus'},
                postcode: {placement: 'bottom', trigger: 'focus'},
                question: {placement: 'bottom', trigger: 'focus'},
                tandc: {placement: 'right'}
            }
        });

        var isMobile = {
            Android: function () {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function () {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function () {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function () {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function () {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function () {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
            }
        };

        if (isMobile.any()) {
            $('#device').val('Mobile');
        }
        else {
            $('#device').val('Desktop');
        }

        AppVisitAnalytic();
    </script>
    </body>
    </html>
<?php
} else {
    $usr->storeFormValues($_POST); //store form values
    $usr->submitForm(); //submit form to database
    $usr->redirect('wall.php'); //submit form to database
}

?>