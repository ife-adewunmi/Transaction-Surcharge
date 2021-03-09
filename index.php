<html>
    <head>

        <title>Parkway Assesment Two</title>

        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Main Font -->
        <script src="js/libs/webfontloader.min.js"></script>
        <script>
            WebFont.load({
                google: {
                    families: ['Roboto:300,400,500,700:latin']
                }
            });
        </script>


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-grid.css">

        <!-- Main Styles CSS -->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/fonts.min.css">
    </head>

    <body>
        <!-- Preloader -->
            <div id="hellopreloader">
                <div class="preloader">
                    <svg width="45" height="45" stroke="#fff">
                        <g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
                            <circle cx="22" cy="22" r="6" stroke="none">
                                <animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
                                <animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
                                <animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
                            </circle>
                            <circle cx="22" cy="22" r="6" stroke="none">
                                <animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
                                <animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
                                <animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
                            </circle>
                            <circle cx="22" cy="22" r="8">
                                <animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6"/>
                            </circle>
                        </g>
                    </svg>

                    <div class="text">Loading ...</div>
                </div>
            </div>
        <!-- ... end Preloader -->

        <div class="main-header main-landing">
        <!-- <div class="content-bg-wrap bg-landing"></div> -->
        <div class="content-bg-wrap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8" style="margin: auto;">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-center">TRANSACTION SURCHARGE</h3>
                            </div>
                            <div class="card-body">
                                <form name="calculator" method="get">
                                    <div class="row">
                                        <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Transfer Amount</label>
                                                <input type="number" class="form-control" name="amount" id="tAmount" style="width:100%" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 text-center">
                                        <input type="button" id="submit" class="btn btn-sm btn-primary" value="Transfer">
                                    </div>
                                </form>

                                <hr />

                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped mt-3">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col">Transfer Amount</th>
                                                                    <th scope="col">Charge</th>
                                                                    <th scope="col">Debit Amount (Transfer Amount + Charge)</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><span id="amount"></span></td>
                                                                    <td><span id="transfer"></span></td>
                                                                    <td><span id="charges"></span></td>
                                                                    <td><span id="debit"></span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p>
                                    Status: <span id="status"></span> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS Scripts -->
        <script src="js/jQuery/jquery-3.4.1.js"></script>
        <script src="js/libs/perfect-scrollbar.js"></script>
        <script src="js/libs/material.min.js"></script>
        <script src="js/libs/bootstrap-select.js"></script>
        <script src="js/libs/ion.rangeSlider.js"></script>
        <script src="js/libs/leaflet.js"></script>
        <script src="js/libs/lazyload.js"></script> 

        <script type="text/javascript">
            var pageLazyLoad = new LazyLoad({
                elements_selector: "[loading=lazy]",
                use_native: true // ← enables hybrid lazy loading
            });

            window.lazyLoadOptions = {
                elements_selector: "[loading=lazy]",
                use_native: true // ← enables hybrid lazy loading
            };
        </script>

        <script src="js/main.js"></script>
        <script src="./ajax.js"></script>
        <script src="js/libs-init/libs-init.js"></script>

        <script src="Bootstrap/dist/js/bootstrap.bundle.js"></script>
    </body>
</html>
