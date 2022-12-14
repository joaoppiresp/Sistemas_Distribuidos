<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="File page">
        
        <!-- TITLE -->
        <title>Sistema de Auto-Reposição de ficheiros / Anti-Ransomware</title>
    
        <!-- STYLE CSS -->

        <link rel="stylesheet" href="upload.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

        <link href="style.css" rel="stylesheet" />
        <link href="dark-style.css" rel="stylesheet" />
        <link href="transparent-style.css" rel="stylesheet">
        <link href="skin-modes.css" rel="stylesheet" />
    
        <!--- FONT-ICONS CSS -->
        <link href="icons.css" rel="stylesheet" />
    
        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="color1.css" />
    
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
    
    </head>

    <body class="app sidebar-mini ltr light-mode">
        <div class="page">
            <div class="page-main">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Sistema de Auto-Reposição de ficheiros / Anti-Ransomware</h1>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Os seus ficheiros</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered border text-nowrap mb-0" id="mytable">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>DATA</th>
                                            <th>256HASH</th>
                                            <th>Link</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tablebody">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
            
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card-header">
                        
                    </div>
                    <div class="wrapper">
                        <form action="#" enctype="multipart/form-data">
                            <input class="file-input" type="file" name="file" hidden >
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>Browse File to Upload</p>
                        </form>
                        <section class="progress-area"></section>
                        <section class="uploaded-area"></section>
                    </div>
                </div>
                <!-- ROW-11 OPEN -->
                <div class="row ">
                    <div class="col-md-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Escolha dos Backups</h3>
                            </div>
                            <div class="card-body">
                                <div class="text-wrap">
                                    <p>Temos disponiveis tres tipos de backups:</p>
                                    <div class="example">
                                        <div class="btn-list checkboxbtns">
                                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                <input type="checkbox" class="btn-check" id="btncheck1">
                                                <label class="btn btn-outline-primary" for="btncheck1">30 SECS</label>
            
                                                <input type="checkbox" class="btn-check" id="btncheck2">
                                                <label class="btn btn-outline-primary br-0" for="btncheck2">1 MIN</label>
            
                                                <input type="checkbox" class="btn-check" id="btncheck3">
                                                <label class="btn btn-outline-primary" for="btncheck3">AUTO</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>  
        </div>    

    <!-- BACKUP'S CHOICE JS -->
    <script src="backups.js"></script>   

    <!-- CONTENT'S TABLE UPDATE JS -->
    <script src="contentsScript.js"></script>   

    <!-- FILE UPLOAD JS-->    
    <script src="script.js"></script>                
                        
    <!-- JQUERY JS -->
    <script src="jquery.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="jquery.sparkline.min.js"></script>

    <!-- Sticky js -->
    <script src="sticky.js"></script>

    <!-- Color Theme js -->
    <script src="themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="custom.js"></script>
    </body>
</html>